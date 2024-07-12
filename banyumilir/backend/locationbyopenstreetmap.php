<!DOCTYPE html>
<html>
<head>
    <title>Peta Interaktif dengan Leaflet.js</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map { height: 400px; }
    </style>
</head>
<body>
    <h2>Masukkan Nama Lokasi</h2>
    <input type="text" id="location-input" placeholder="Masukkan nama lokasi atau alamat">
    <button onclick="locateAddress()">Temukan Lokasi</button>

    <div id="map"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-6.2088, 106.8456], 12); // Pusatkan peta di Jakarta

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        function locateAddress() {
            var address = document.getElementById('location-input').value;
            
            // Contoh pencarian alamat dengan OpenStreetMap Nominatim API
            fetch('https://nominatim.openstreetmap.org/search?format=json&q=' + address)
                .then(response => response.json())
                .then(data => {
                    var lat = data[0].lat;
                    var lon = data[0].lon;

                    // Tambahkan marker pada peta
                    var marker = L.marker([lat, lon]).addTo(map);
                    marker.bindPopup(address).openPopup();

                    // Pindahkan peta ke lokasi marker
                    map.setView([lat, lon], 12);
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>



