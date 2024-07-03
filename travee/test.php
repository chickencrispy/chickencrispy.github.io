<?php
function deteksiBahasa($teks) {
    $url = "https://api.mymemory.translated.net/get?q=" . urlencode($teks) . "&onlyprivate=0&de=a@b.c";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respons = curl_exec($ch);
    
    if(curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
        return false;
    }
    
    curl_close($ch);

    $hasil = json_decode($respons, true);
    return isset($hasil['responseData']['language']) ? $hasil['responseData']['language'] : false;
}

function terjemahkanTeks($teks, $bahasaTujuan) {
    $bahasaSumber = deteksiBahasa($teks);
    if (!$bahasaSumber) {
        return false; // Tidak dapat mendeteksi bahasa sumber
    }

    $url = "https://api.mymemory.translated.net/get?q=" . urlencode($teks) . "&langpair=" . $bahasaSumber . "|" . $bahasaTujuan;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respons = curl_exec($ch);
    
    if(curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
        return false;
    }
    
    curl_close($ch);

    $hasil = json_decode($respons, true);
    return isset($hasil['responseData']['translatedText']) ? $hasil['responseData']['translatedText'] : false;
}

$teks = "tolong untuk memberikan nomor tiket anda?";
$bahasaTujuan = 'zh'; // Bahasa Tionghoa
$teksTerjemahan = terjemahkanTeks($teks, $bahasaTujuan);

if ($teksTerjemahan) {
    echo "Teks terjemahan: " . $teksTerjemahan;
} else {
    echo "Gagal menerjemahkan teks.";
}


print "<br>";

?>










<?php
function translateText($text, $sourceLang, $targetLang) {
    $url = "https://api.mymemory.translated.net/get?q=" . urlencode($text) . "&langpair=" . $sourceLang . "|" . $targetLang;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);
    return isset($result['responseData']['translatedText']) ? $result['responseData']['translatedText'] : false;
}

$text = "tolong untuk memberikan nomor tiket anda?";
$translatedText = translateText($text, 'id', 'zh'); // Inggris ke Bahasa Indonesia
echo "Translated text: " . $translatedText;

?>













<?php

// Alamat yang ingin Anda cek koordinatnya
$address = '1600 Amphitheatre Parkway, Mountain View, CA';

// Format URL untuk OpenStreetMap Nominatim API
$url = 'https://nominatim.openstreetmap.org/search?format=json&q=' . urlencode($address);

// Inisialisasi cURL session
$ch = curl_init();

// Set URL untuk dikirimkan
curl_setopt($ch, CURLOPT_URL, $url);

// Atur agar cURL mengembalikan hasil sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL dan simpan respons
$response = curl_exec($ch);

// Periksa apakah ada kesalahan saat menjalankan cURL
if(curl_errno($ch)) {
    $error_message = curl_error($ch);
    echo "Error saat melakukan permintaan HTTP: $error_message";
    exit;
}

// Tutup cURL session
curl_close($ch);

// Konversi respons JSON ke array PHP
$data = json_decode($response, true);

// Periksa apakah respons JSON valid
if (!empty($data) && is_array($data)) {
    // Ambil data pertama (asumsi hasil paling relevan)
    $first_result = reset($data);

    // Cek apakah hasil valid dan memiliki koordinat
    if (isset($first_result['lat']) && isset($first_result['lon'])) {
        $latitude = $first_result['lat'];
        $longitude = $first_result['lon'];
        
        echo "Alamat: $address<br>";
        echo "Latitude: $latitude<br>";
        echo "Longitude: $longitude";
    } else {
        echo "Koordinat tidak ditemukan untuk alamat ini.";
    }
} else {
    echo "Gagal mengambil atau memproses data dari OpenStreetMap API.";
}

?>







<?php
/*

    $json_response = '[{"place_id":376947505,"licence":"Data © OpenStreetMap contributors, ODbL 1.0. http://osm.org/copyright","osm_type":"node","osm_id":2192620021,"lat":"37.4217636","lon":"-122.084614","class":"office","type":"it","place_rank":30,"importance":0.6949356759210291,"addresstype":"office","name":"Google Headquarters","display_name":"Google Headquarters, 1600, Amphitheatre Parkway, Mountain View, Santa Clara County, California, 94043, United States","boundingbox":["37.4217136","37.4218136","-122.0846640","-122.0845640"]}]';

    // Decode JSON response
    $data = json_decode($json_response, true);

    // Ambil nilai latitude dan longitude jika data tidak kosong
    if (!empty($data)) {
        $latitude = $data[0]['lat'];
        $longitude = $data[0]['lon'];
        
        echo "Latitude: $latitude<br>";
        echo "Longitude: $longitude";
    } else {
        echo "Gagal mengambil koordinat dari respons JSON.";
    }
*/


?>
