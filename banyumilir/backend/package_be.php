<?php

//*********handle error*****************
error_reporting(E_ALL);
ini_set('display_errors',0);


//************TIME ZONE**********
date_default_timezone_set('Asia/Jakarta');

require('mysql_connector.php');


$cat = $_REQUEST['cat'] ?? "";
$cat_packet =$_REQUEST['cat_packet'] ?? "";


/*

  $categories = []; // Inisialisasi array untuk menyimpan semua kategori dan paketnya

  $result_front_be_category_packet = mysqli_query($con, "SELECT * FROM ticketing.01_cfg_packet WHERE company_id LIKE '1' AND category_packet LIKE '".$cat."%' GROUP BY category_packet;");
  if ($result_front_be_category_packet->num_rows > 0) {
      while ($row_front_be_category_packet = $result_front_be_category_packet->fetch_assoc()) {  
          $category_name = $row_front_be_category_packet['category_packet'];
          
          // Inisialisasi array untuk paket dalam kategori ini
          $category = [
              "category" => $category_name,
              "packages" => []
          ];
          
          // Query untuk mendapatkan data paket dalam kategori ini
          $result_front_be_cfg_packet = mysqli_query($con, "SELECT * FROM ticketing.01_cfg_packet WHERE company_id LIKE '1' AND category_packet LIKE '".$category_name."';");
          if ($result_front_be_cfg_packet->num_rows > 0) {
              while ($row_front_be_cfg_packet = $result_front_be_cfg_packet->fetch_assoc()) {
                  // Tambahkan paket ke array packages
                  $category["packages"][] = [
                      "nama_paket" => $row_front_be_cfg_packet['title_packet'],
                      "subtitle_paket" => $row_front_be_cfg_packet['subtitle_packet'],
                      "harga_paket" => $row_front_be_cfg_packet['price_packet'],
                      "additional_paket" => $row_front_be_cfg_packet['additional_packet']
                  ];
              }
          }
          
          // Tambahkan kategori ke array categories
          $categories[] = $category;
      }
  }

  // Menampilkan isi dari $categories
  //print_r($categories);

*/



  //*****************************GET DATA CFG_PACKET***************************************************
$result_front_be_cfg_category = mysqli_query($con, "SELECT * FROM ticketing.01_cfg_packet where company_id like '1' and category_packet like '%' group by category_packet ; ");
if ($result_front_be_cfg_category->num_rows > 0) {
    $category="";
    while($row_front_be_cfg_category = $result_front_be_cfg_category->fetch_assoc()) {   
      $category=$row_front_be_cfg_category['category_packet'];

      $result_front_be_cfg_packet = mysqli_query($con, "SELECT * FROM ticketing.01_cfg_packet where company_id like '1' and category_packet like '".$category."'; ");
      if ($result_front_be_cfg_packet->num_rows > 0) {
        while($row_front_be_cfg_packet = $result_front_be_cfg_packet->fetch_assoc()) {   
          $package[] = [
            "nama_paket" => $row_front_be_cfg_packet['title_packet'],
            "subtitle_paket" => $row_front_be_cfg_packet['subtitle_packet'],
            "harga_paket" => $row_front_be_cfg_packet['price_packet'],
            "additional_paket" => $row_front_be_cfg_packet['additional_packet']
          ];
        }
      }


    }
}else {
  echo "zero request \n";
}


$json_package = json_encode($package, JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $json_package;


?>