<pre>
<?php

$cat = $_REQUEST['cat'];

  //** Error Handler **/
  //error_reporting(E_ALL);
  //ini_set('display_errors',0);

  //** Connection **/
  require('mysql_connector.php');


    // Inisialisasi array untuk menyimpan semua kategori dan paketnya
    $categories = []; 
    

    $result_front_be_category_packet = mysqli_query($con, "SELECT pl.*, c.category_name FROM 02_package_list pl JOIN 02_category c ON pl.category_id = c.category_id WHERE c.administrasi_id LIKE '1' AND c.category_name LIKE '".$cat."' ORDER BY pl.package_index asc ;");
    if ($result_front_be_category_packet->num_rows > 0) {
      while ($row_front_be_category_packet = $result_front_be_category_packet->fetch_assoc()) {  
        $category_name = $row_front_be_category_packet['package_title'];
        //print $category_name."<br>";

          // Inisialisasi array untuk paket dalam kategori ini
          $category = [
            "category" => $category_name,
            "packages" => []
          ];

           // Query untuk mendapatkan data paket dalam kategori ini
          $result_front_be_cfg_packet = mysqli_query($con, "SELECT * FROM 02_package_list WHERE package_title LIKE '".$category_name."';");
          if ($result_front_be_cfg_packet->num_rows > 0) {
            while ($row_front_be_cfg_packet = $result_front_be_cfg_packet->fetch_assoc()) {
              //Tambahkan paket ke array packages
              $category["packages"][] = [
                "nama_paket" => $row_front_be_cfg_packet['package_title'],
                "subtitle_paket" => $row_front_be_cfg_packet['package_title'],
                "harga_paket" => $row_front_be_cfg_packet['package_price'],
                "additional_paket" => $row_front_be_cfg_packet['package_additional']
              ];
            }

          }
        // Tambahkan kategori ke array categories
        $categories[] = $category;
      }
    }

    print_r($categories);

    $json_category = json_encode($categories, JSON_PRETTY_PRINT);
    //header('Content-Type: application/json');
    //print_r($categories);
    //echo $json_category;

?>
</pre>