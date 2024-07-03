<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Barcode with JavaScript</title>
    <!-- Include JsBarcode library -->
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
</head>
<body>
    <h1>Generate Barcode Example</h1>
    <!-- Canvas element to display barcode -->
    <canvas id="barcode"></canvas>

    <script>
        // Function to generate barcode
        function generateBarcode() {
            // Example barcode data
            var barcodeData = "http://banyumilir/1234567890"; // Ganti dengan data barcode yang diinginkan

            // Generate barcode using JsBarcode
            JsBarcode("#barcode", barcodeData, {
                format: "CODE128", // Format barcode yang digunakan (misalnya: CODE128, EAN13, dll.)
                displayValue: true, // Menampilkan nilai kode di bawah barcode
                fontSize: 16, // Ukuran font nilai kode
                textMargin: 0, // Jarak antara nilai kode dan barcode
            });
        }

        // Panggil fungsi untuk meng-generate barcode saat halaman dimuat
        generateBarcode();
    </script>
</body>
</html>



<?php
/*
    // Sertakan file library PHP QR Code
    include './js/phpqrcode/qrlib.php';

    // Data yang ingin dienkripsi menjadi QR Code
    $data = "www.banyumilir.com";

    // Direktori untuk menyimpan file QR Code
    $tempdir = "temp/";
    if (!file_exists($tempdir))
        mkdir($tempdir);

    // Nama file QR Code
    $filename = $tempdir . 'qrcode.png';

    // Generate QR Code dan simpan sebagai file PNG
    QRcode::png($data, $filename, QR_ECLEVEL_L, 10);

    // Tampilkan QR Code yang telah dibuat
    echo '<img src="'.$filename.'" alt="QR Code">';
*/
?>


<?php
// Sertakan file library PHP QR Code
include './js/phpqrcode/qrlib.php';

// Data yang ingin dienkripsi menjadi QR Code
$data = "https://banyumilir.com/234512";

// Direktori untuk menyimpan file QR Code
$tempdir = "temp/";
if (!file_exists($tempdir)) {
    mkdir($tempdir);
}

// Nama file QR Code
$filename = $tempdir . 'qrcode.png';

// Generate QR Code dan simpan sebagai file PNG
QRcode::png($data, $filename, QR_ECLEVEL_H, 10);

// Path ke gambar logo
$logopath = 'logo.png';

// Load QR code image
$QR = imagecreatefrompng($filename);

// Load logo image
$logo = imagecreatefrompng($logopath);

// Get dimensions of QR code and logo
$QR_width = imagesx($QR);
$QR_height = imagesy($QR);
$logo_width = imagesx($logo);
$logo_height = imagesy($logo);

// Set dimensions of the logo to fit in the center of the QR code
$logo_qr_width = (int)($QR_width / 4);
$logo_qr_height = (int)($QR_height / 4);
$logo_qr_x = (int)(($QR_width - $logo_qr_width) / 2);
$logo_qr_y = (int)(($QR_height - $logo_qr_height) / 2);

// Resize and merge logo with QR code
imagecopyresampled($QR, $logo, $logo_qr_x, $logo_qr_y, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

// Save the final QR code image with logo
imagepng($QR, $filename);

// Free memory
imagedestroy($QR);
imagedestroy($logo);

// Tampilkan QR Code yang telah dibuat
echo '<img src="'.$filename.'" alt="QR Code">';
?>

