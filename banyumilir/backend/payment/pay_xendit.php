<?php
include "./function/config_api_xendit.php";
    $apiKey = $row_api_info[3];
    //print $row_api_info[3]." == xnd_development_ROfZvBNBM0tQuemachXTNYrL3k4IKRka3tQXfINFYlo2TN4gBQN0NWDNLedEFh"."<br>";
    //$apiKey = 'xnd_development_ROfZvBNBM0tQuemachXTNYrL3k4IKRka3tQXfINFYlo2TN4gBQN0NWDNLedEFh';




    $invoice = createInvoice($apiKey, $voucher, $currency, $amount, $givenNames, $json_data_fee);

    if (isset($invoice['invoice_url'])) {
      echo 'Invoice berhasil dibuat. URL Invoice: ' . $invoice['invoice_url'];
      
      $url_link = $invoice['invoice_url'];

      print "<script>window.location.assign('".$url_link."');</script>";
      //print"<div style='postition:relative; top:10;'><iframe src='".$url_link."' height='100%' width='100%' title='pembayaran'></iframe></div>";

    } else {
      echo 'Gagal membuat invoice: ' . $invoice['error'];
    }
?>