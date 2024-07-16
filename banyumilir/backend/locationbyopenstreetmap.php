<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routing with Leaflet and OpenStreetMap</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #maps {
            height: 400px;
        }
    </style>
</head>
<body>
    <div id="maps"></div>
    <input type="text" id="address-input" placeholder="Type an address" oninput="fetchAddresses()" autocomplete="off">
    <input type="text" id="latlon" value="">
    <div id="suggestions" class="autocomplete-suggestions"></div>
    <input type="text" id="jarak" value="">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
    <script>
        let map = L.map('maps').setView([-8.1596944, 115.0257778], 10);

        // Batas koordinat Pulau Bali
        let bounds = [
            [-9.0, 114.0], // Koordinat sudut barat daya
            [-8.0, 116.0]  // Koordinat sudut timur laut
        ];

        // Terapkan batas tersebut pada peta
        map.setMaxBounds(bounds);

        // Mencegah pengguna menggulir ke luar area batas
        map.on('drag', function() {
            map.panInsideBounds(bounds, { animate: false });
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Ikon khusus untuk marker statis
        let staticIcon = L.icon({
            iconUrl: './backend/vacation.png', // Ganti dengan path ke ikon statis
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
        });

        // Tambahkan marker statis dengan ikon khusus dan popup
        let staticMarkers = [
            L.marker([-8.1596944, 115.0257778], { icon: staticIcon }).addTo(map).bindPopup("West Gate/ Pintu Barat"),
            L.marker([-8.15325, 115.0313889], { icon: staticIcon }).addTo(map).bindPopup("Middle Gate/ Pintu Tengah"),
            L.marker([-8.151024, 115.035753], { icon: staticIcon }).addTo(map).bindPopup("East Gate/ Pintu Timur")
        ];

        // Tambahkan marker untuk menandai lokasi Pulau Bali
        let marker = null;

        // Routing control
        let routeControl = null;

        async function fetchAddresses() {
            const query = document.getElementById('address-input').value;
            if (query.length < 3) {
                // Minimal 3 karakter untuk mulai mencari
                document.getElementById('suggestions').innerHTML = '';
                return;
            }

            try {
                // Koordinat batas Bali
                const bbox = "114,-9,116,-8";

                const response = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}&addressdetails=1&limit=5&bounded=1&viewbox=${bbox}`);
                if (!response.ok) {
                    throw new Error('Failed to fetch data');
                }
                const data = await response.json();

                const suggestions = document.getElementById('suggestions');
                suggestions.innerHTML = '';

                if (data.length === 0) {
                    const div = document.createElement('div');
                    div.textContent = 'Place is not defined';
                    div.className = 'autocomplete-suggestion no-results';
                    suggestions.appendChild(div);
                    return;
                }

                data.forEach(place => {
                    const div = document.createElement('div');
                    div.textContent = place.display_name;
                    div.className = 'autocomplete-suggestion';
                    div.onclick = () => selectAddress(place);
                    suggestions.appendChild(div);
                });
            } catch (error) {
                console.error('Error fetching addresses:', error);
            }
        }

        let lat = "";
        let lon = "";

        function selectAddress(place) {
            document.getElementById('address-input').value = place.display_name;
            document.getElementById('suggestions').innerHTML = '';

            lat = parseFloat(place.lat);
            lon = parseFloat(place.lon);
            if (lat >= bounds[0][0] && lat <= bounds[1][0] && lon >= bounds[0][1] && lon <= bounds[1][1]) {
                map.setView([lat, lon], 13);

                if (marker) {
                    map.removeLayer(marker); // Hapus marker yang ada jika sudah ada
                }

                marker = L.marker([lat, lon]).addTo(map);

                document.getElementById("latlon").value = lat + ',' + lon;

                // Koordinat tujuan Lovina, Bali
                const latTujuan = -8.157536322741333;
                const lonTujuan = 115.03335701099296;

                // Hitung jarak menggunakan rumus Haversine
                const jarak = haversineDistance(lat, lon, latTujuan, lonTujuan);
                console.log(`Jarak radius titik penjemputan ke titik tujuan adalah ${jarak.toFixed(2)} kilometer.`);

                document.getElementById("jarak").value = jarak;

                // Gambar rute
                drawRoute(lat, lon, latTujuan, lonTujuan);
            } else {
                alert('Alamat yang dipilih berada di luar batas koordinat Pulau Bali.');
                // Tindakan tambahan jika alamat tidak valid, misalnya reset marker atau tampilkan pesan kesalahan
            }
        }

        function drawRoute(startLat, startLon, endLat, endLon) {
            if (routeControl) {
                map.removeControl(routeControl);
            }

            routeControl = L.Routing.control({
                waypoints: [
                    L.latLng(startLat, startLon),
                    L.latLng(endLat, endLon)
                ],
                createMarker: function() { return null; }, // Tidak ada marker untuk waypoint
                routeWhileDragging: true,
                show: true// Mengatur opsi show menjadi false untuk menyembunyikan petunjuk arah
            }).addTo(map);

            routeControl.on('routesfound', function(e) {
                const routes = e.routes;
                routes.forEach(function(route, index) {
                    // Di sini Anda dapat menambahkan logika untuk menangani rute yang ditemukan
                    console.log(`Route ${index + 1}: Distance ${route.summary.totalDistance / 1000} km, Time ${route.summary.totalTime / 60} mins`);
                });
            });
        }

        // Event listener untuk menangkap klik pada peta
        map.on('click', function(e) {
            lat = e.latlng.lat;
            lon = e.latlng.lng;

            // Periksa apakah klik berada di dalam batas koordinat
            if (lat >= bounds[0][0] && lat <= bounds[1][0] && lon >= bounds[0][1] && lon <= bounds[1][1]) {
                if (marker) {
                    map.removeLayer(marker); // Hapus marker yang ada jika sudah ada
                }

                marker = L.marker([lat, lon]).addTo(map);
                document.getElementById("latlon").value = lat + ',' + lon;

                // Koordinat tujuan Lovina, Bali
                const latTujuan = -8.157536322741333;
                const lonTujuan = 115.03335701099296;

                // Hitung jarak
                const jarak = haversineDistance(lat, lon, latTujuan, lonTujuan);
                console.log(`Jarak radius titik penjemputan ke titik tujuan adalah ${jarak.toFixed(2)} kilometer.`);

                document.getElementById("jarak").value = jarak;

                // Gambar rute
                drawRoute(lat, lon, latTujuan, lonTujuan);
            } else {
                alert('Marker hanya bisa ditambahkan di dalam batas koordinat Pulau Bali.');
            }
        });

        function haversineDistance(lat1, lon1, lat2, lon2) {
            const R = 6371; // Radius bumi dalam kilometer
            const toRad = (degree) => degree * (Math.PI / 180);

            const dLat = toRad(lat2 - lat1);
            const dLon = toRad(lon2 - lon1);
            const a =
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

            return R * c; // Hasil dalam kilometer
        }
    </script>
</body>
</html>
