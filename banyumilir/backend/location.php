


    
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


