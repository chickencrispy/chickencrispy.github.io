<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocomplete Address with OSM and Leaflet</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        /* Styling for the autocomplete dropdown */
        .autocomplete-suggestions {
            border: 1px solid #999;
            background: #fff;
            overflow: auto;
            position: absolute;
            z-index: 9999;
        }

        .autocomplete-suggestion {
            padding: 10px;
            cursor: pointer;
        }

        .autocomplete-suggestion:hover {
            background: #ddd;
        }

        #map {
            height: 200px;
            width: 400px;

            margin-top: 20px;
        }
    </style>
</head>
<body>
    <input type="text" id="address-input" placeholder="Type an address" oninput="fetchAddresses()" autocomplete="off">
    <div id="suggestions" class="autocomplete-suggestions"></div>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        let map = L.map('map').setView([0, 0], 2); // Inisialisasi peta dengan view default
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        let marker;

        async function fetchAddresses() {
            const query = document.getElementById('address-input').value;
            if (query.length < 3) return; // Minimal 3 karakter untuk mulai mencari

            const response = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}&addressdetails=1&limit=5`);
            const data = await response.json();

            const suggestions = document.getElementById('suggestions');
            suggestions.innerHTML = '';

            data.forEach(place => {
                const div = document.createElement('div');
                div.textContent = place.display_name;
                div.className = 'autocomplete-suggestion';
                div.onclick = () => selectAddress(place);
                suggestions.appendChild(div);
            });
        }

        function selectAddress(place) {
            document.getElementById('address-input').value = place.display_name;
            document.getElementById('suggestions').innerHTML = '';

            const lat = place.lat;
            const lon = place.lon;
            //alert('lat ='+lat +' - '+'long ='+ lon);
            map.setView([lat, lon], 13);

            if (marker) {
                marker.setLatLng([lat, lon]);
            } else {
                marker = L.marker([lat, lon]).addTo(map);
            }
        }

        
    </script>
</body>
</html>








