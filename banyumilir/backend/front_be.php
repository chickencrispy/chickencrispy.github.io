<?php

//************TIME ZONE**********
date_default_timezone_set('Asia/Jakarta');

require('mysql_connector.php');


//*****************************GET DATA CFG_PACKET ALL GROUP***************************************************
$result_front_be_cfg_packet = mysqli_query($con, "SELECT * FROM ticketing.01_cfg_packet where company_id like '1' order by index_category asc;");
while ($row_front_be_cfg_packet = mysqli_fetch_row($result_front_be_cfg_packet)){

  //*****************************PER GROUP***************************************************
  $result_group_be_cfg_packet = mysqli_query($con, "SELECT * FROM ticketing.01_cfg_packet where company_id like '1' and index_category like '".$row_front_be_cfg_packet[10]."';");
  //$row_group_be_cfg_packet = mysqli_fetch_row($result_group_be_cfg_packet);

    if ($result_group_be_cfg_packet->num_rows > 0) {
      while($row_group_be_cfg_packet = $result_group_be_cfg_packet->fetch_assoc()) {
          $data_cfg_packet[] = $row_group_be_cfg_packet;
      }
    } else {
      echo "0 results";
    }

}

/*
if ($result_front_be_cfg_packet->num_rows > 0) {
    while($row_front_be_cfg_packet = $result_front_be_cfg_packet->fetch_assoc()) {
        $data_cfg_packet[] = $row_front_be_cfg_packet;
    }
  } else {
    echo "0 results";
  }
*/

//print"<pre>";print_r($data_cfg_packet);print"</pre>";

$json_cfg_packet = json_encode($data_cfg_packet, JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $json_cfg_packet;



?>