<?php

//*********handle error*****************
error_reporting(E_ALL);
ini_set('display_errors',0);


//************TIME ZONE**********
date_default_timezone_set('Asia/Jakarta');

require('mysql_connector.php');

//*****************************GET DATA CFG_CATEGORY***************************************************
$result_front_be_cfg_category = mysqli_query($con, "SELECT * FROM ticketing.01_cfg_category where company_id like '1' order by index_category asc;");
//$row_front_be_cfg_category = mysqli_fetch_row($result_front_be_cfg_category);

if ($result_front_be_cfg_category->num_rows > 0) {
    while($row_front_be_cfg_category = $result_front_be_cfg_category->fetch_assoc()) {      
      $category[]=$row_front_be_cfg_category['category_name'];
    }
}else {
  echo "zero request \n";
}

$json_category = json_encode($category, JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $json_category;

?>

