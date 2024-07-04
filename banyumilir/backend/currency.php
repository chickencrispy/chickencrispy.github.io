<?php
// URL untuk mendapatkan data nilai tukar ECB
$url = 'https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';

// Inisialisasi cURL session
$curl = curl_init($url);

// Set opsi cURL untuk mengembalikan hasil sebagai string
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL session
$response = curl_exec($curl);

// Periksa apakah ada kesalahan dalam pengambilan data
if ($response === false) {
    echo "Error fetching data: " . curl_error($curl);
    exit;
}

// Tutup session cURL
curl_close($curl);

// Konversi XML ke array
$xml = simplexml_load_string($response);
$json = json_encode($xml);
$data = json_decode($json, true);

// Ambil nilai tukar EUR terhadap USD dari data ECB
$eur_to_usd = (float)$data['Cube']['Cube']['Cube'][0]['@attributes']['rate'];

// Contoh harga dalam EUR
$price_in_eur = 100;

// Konversi harga ke USD
$price_in_usd = $price_in_eur * $eur_to_usd;

// Tampilkan harga dalam USD
echo "Harga dalam USD: $" . number_format($price_in_usd, 2);
?>

<br>



