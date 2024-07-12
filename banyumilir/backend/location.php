
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocomplete Address with OSM</title>
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
    </style>
</head>
<body>
    <input type="text" id="address-input" placeholder="Type an address" oninput="fetchAddresses()" autocomplete="off">
    <div id="suggestions" class="autocomplete-suggestions"></div>

    <script>
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
        }
    </script>
</body>
</html>


    
<?php
$apiKey = 'ro5HunpLJ4Y1t7NiRzJgm939bim9y3NHG41sfnWIt3c'; // Ganti dengan API Key Anda
$address = 'planetholiday hotel & residence'; // Ganti dengan alamat yang ingin Anda geocode

$url = "https://geocode.search.hereapi.com/v1/geocode?q=" . urlencode($address) . "&apiKey=" . $apiKey;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

if (isset($data['items'][0])) {
    $latitude = $data['items'][0]['position']['lat'];
    $longitude = $data['items'][0]['position']['lng'];
    echo "Latitude: " . $latitude . "<br>";
    echo "Longitude: " . $longitude . "<br>";
    echo "<script>
            var latitude = $latitude;
            var longitude = $longitude;
          </script>";
} else {
    echo "Alamat tidak ditemukan.";
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Geocode to HERE Map</title>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script>
        function initMap() {
            var platform = new H.service.Platform({
                'apikey': 'YOUR_HERE_MAPS_API_KEY'
            });

            var defaultLayers = platform.createDefaultLayers();

            var map = new H.Map(
                document.getElementById('map'),
                defaultLayers.vector.normal.map,
                {
                    zoom: 15,
                    center: { lat: latitude, lng: longitude }
                });

            var marker = new H.map.Marker({ lat: latitude, lng: longitude });
            map.addObject(marker);

            var ui = H.ui.UI.createDefault(map, defaultLayers);
            var mapEvents = new H.mapevents.MapEvents(map);
            var behavior = new H.mapevents.Behavior(mapEvents);
        }
    </script>
</head>
<body onload="initMap()">
    <div id="latitude" style="display:none;"><?php echo $latitude; ?></div>
    <div id="longitude" style="display:none;"><?php echo $longitude; ?></div>
    <div id="map" style="height: 500px; width: 100%;"></div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Geocode to HERE Map</title>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script>
        function initMap() {
            var platform = new H.service.Platform({
                'apikey': 'YOUR_HERE_MAPS_API_KEY'
            });

            var defaultLayers = platform.createDefaultLayers();

            var map = new H.Map(
                document.getElementById('map'),
                defaultLayers.vector.normal.map,
                {
                    zoom: 15,
                    center: { lat: latitude, lng: longitude }
                });

            var marker = new H.map.Marker({ lat: latitude, lng: longitude });
            map.addObject(marker);

            var ui = H.ui.UI.createDefault(map, defaultLayers);
            var mapEvents = new H.mapevents.MapEvents(map);
            var behavior = new H.mapevents.Behavior(mapEvents);
        }
    </script>
</head>
<body onload="initMap()">
    <div id="latitude" style="display:none;"><?php echo $latitude; ?></div>
    <div id="longitude" style="display:none;"><?php echo $longitude; ?></div>
    <div id="map" style="height: 500px; width: 100%;"></div>
</body>
</html>


