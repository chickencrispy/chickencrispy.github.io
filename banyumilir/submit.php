<?php

$signature=$_REQUEST['signature'] ?? "";
$sign = bin2hex($signature);

print $signature."<br>";



// String base64 yang akan didekode (gantikan ini dengan string base64 Anda)
$base64_string = $signature ; // Contoh base64 string

// Menghilangkan prefix "data:image/png;base64," jika ada
if (strpos($base64_string, "data:image/png;base64,") === 0) {
    $base64_string = str_replace("data:image/png;base64,", "", $base64_string);
}

// Dekode string base64
$image_data = base64_decode($base64_string);

// Nama file output
$output_file = "signature.png";

// Simpan hasil dekode sebagai file PNG
file_put_contents($output_file, $image_data);

echo "File PNG berhasil disimpan sebagai 'signature.png'.";

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