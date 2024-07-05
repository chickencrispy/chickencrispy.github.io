<?php


//***********GENERATE TOKEN ACCESS*******
function getPayPalAccessToken($clientId, $clientSecret) {
    $curl = curl_init();
    $auth = base64_encode($clientId . ':' . $clientSecret);

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v1/oauth2/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Basic ' . $auth
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo 'cURL Error #:' . $err;
        return null;
    } else {
        $response = json_decode($response, true);
        return $response['access_token'] ?? null;
    }
}

//************GENERATE TOKEN CLIENT**********************
function getPayPalClientToken($accessToken, $customerId) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v1/identity/generate-token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array("customer_id" => $customerId)),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $accessToken
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo 'cURL Error #:' . $err;
        return null;
    } else {
        return json_decode($response, true);
    }
}

// Replace these with your PayPal client ID and secret
$clientId = 'AT_SskiP5WzgpfCDRMWdJmG0zTvxfASmnBfVlAZpiZ4X1ER5gYIxVwLjvTjny9MkuM6K_ZdwslgD0Uac';
$clientSecret = 'EJSt1K8hRuVa3h-m7NbU86gTLbGGWnpigz4UanocS7o7vkaIU1s8kK3ciSFkopcqBe0nOUfkuUwMFV3g';

// Replace this with your customer ID
$customerId = '111231231412';

// Step 1: Get Access Token
$accessToken = getPayPalAccessToken($clientId, $clientSecret);

if ($accessToken) {
    // Step 2: Generate Client Token
    $clientTokenResponse = getPayPalClientToken($accessToken, $customerId);
    echo "clientToken =" . json_encode($clientTokenResponse);
} else {
    echo 'Failed to obtain access token.';
}

if ($clientTokenResponse) {
    print "<p>";
    //***********CREATE ORDER *************************************
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v2/checkout/orders',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
            "intent": "CAPTURE",
            "purchase_units": [
                {
                    "items": [
                        {
                            "name": "T-Shirt",
                            "description": "Green XL",
                            "quantity": "1",
                            "unit_amount": {
                                "currency_code": "USD",
                                "value": "100.00"
                            }
                        }
                    ],
                    "amount": {
                        "currency_code": "USD",
                        "value": "100.00",
                        "breakdown": {
                            "item_total": {
                                "currency_code": "USD",
                                "value": "100.00"
                            }
                        }
                    }
                }
            ],
            "application_context": {
                "return_url": "https://example.com/return",
                "cancel_url": "https://example.com/cancel"
            }
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Prefer: return=representation',
            'Authorization: Bearer ' . $accessToken
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo 'cURL Error #:' . $err;
    } else {
        $orderDetails = json_decode($response, true);
        $orderId = $orderDetails['id'];

        //***********GET BUYER INFORMATION************
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v2/checkout/orders/' . $orderId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $accessToken
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo"informasi pembeli =".  $response;
    }
}







/*
  //*************DIRECT LINK FROM RESPONS************************
  $response = json_decode($response, true);

  if ($response && isset($response['id'])) {
      // Pesanan berhasil dibuat, simpan $response['id'] ke dalam database atau lakukan langkah-langkah checkout selanjutnya.
      
      // Redirect pengguna ke PayPal untuk pembayaran.
      header('Location: ' . $response['links'][1]['href']); // Ini contoh, sesuaikan dengan URL redirect yang sesuai dari respons PayPal.
      exit();
  } else {
      // Penanganan kesalahan jika pesanan tidak berhasil dibuat.
      echo 'Terjadi kesalahan dalam membuat pesanan: ' . $response['message'];
  }
*/

?>