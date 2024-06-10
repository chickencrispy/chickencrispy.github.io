<?php

// Mendapatkan host dari request saat ini
$host = $_SERVER['HTTP_HOST'];

// Mendefinisikan BASE_URL menggunakan host yang dinamis
define('BASE_URL', 'http://' . $host);

  function createInvoice($apiKey, $externalId, $currency, $amount, $givenNames, $json_data_fee) {
    $url = 'https://api.xendit.co/v2/invoices';
    $url_success = BASE_URL .'/booking/?id='.$_REQUEST["id"].'&pg=8.9&num='.bin2hex($externalId);
    $url_failure = BASE_URL .'/booking/?id='.$_REQUEST["id"].'&pg=8.10';

    
    $data = [
        'invoice_duration' => 900,
        'success_redirect_url' => $url_success,
        'failure_redirect_url' => $url_failure,
        'external_id' => $externalId,
        'currency' => $currency,
        'amount' => $amount,
        'customer' => [
          'given_names' => $givenNames
        ],
    ];


      $data['fees'] = $json_data_fee;


    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Basic ' . base64_encode($apiKey . ':')
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        return ['error' => $error];
    } else {
        return json_decode($response, true);
    }
  }




?>