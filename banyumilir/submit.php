<?php

$signature=$_REQUEST['signature'] ?? "";
$sign = bin2hex($signature);

print $signature."<br>";

?>


<img src="<?php echo(hex2bin($sign)); ?>"></img>

<script>

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
} else {
    console.log("Geolocation is not supported by this browser.");
}

function showPosition(position) {
    console.log("Latitude: " + position.coords.latitude + 
    " Longitude: " + position.coords.longitude);
    // Di sini Anda bisa melakukan sesuatu dengan data lokasi yang diperoleh, seperti menampilkan peta atau mengirimkan data ke server.
}



</script>