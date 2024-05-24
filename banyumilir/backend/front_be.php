<?php

//*********handle error*****************
error_reporting(E_ALL);
ini_set('display_errors',0);


//************TIME ZONE**********
date_default_timezone_set('Asia/Jakarta');

require('mysql_connector.php');


$cat = $_REQUEST['cat'] ?? "";

//*****************************GET DATA CFG_PACKET***************************************************
$result_front_be_cfg_packet = mysqli_query($con, "SELECT * FROM ticketing.01_cfg_packet where company_id like '1' and category_packet like '".$cat."%';");
//$row_front_be_cfg_packet = mysqli_fetch_row($result_front_be_cfg_packet);

if ($result_front_be_cfg_packet->num_rows > 0) {
    while($row_front_be_cfg_packet = $result_front_be_cfg_packet->fetch_assoc()) {
        $data_cfg_packet[] = $row_front_be_cfg_packet;
    }
  } else {
    echo "zero request \n";
  }


//print"<pre>";print_r($data_cfg_packet);print"</pre>";

$json_cfg_packet = json_encode($data_cfg_packet, JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $json_cfg_packet;



?>