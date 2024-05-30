<?php
  //** Error Handler **/
  error_reporting(E_ALL);
  ini_set('display_errors',0);

  //** Connection **/
  require('mysql_connector.php');

  // Inisialisasi array untuk menyimpan semua kategori dan paketnya
  $categories = []; 

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

$json_category = json_encode($categories, JSON_PRETTY_PRINT);
//header('Content-Type: application/json');
//print_r($categories);
//echo $json_category;
?>