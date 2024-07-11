<?php
  date_default_timezone_set('Asia/Jakarta');
  
  $servertype="mysql";
  $serverhost="localhost";
  $dbname="ticketing";
  $dbuser="root";
  $dbpassword="";
  $port="3307";

  $con = mysqli_connect($serverhost,$dbuser,$dbpassword,$dbname,$port);
  if(mysqli_connect_errno()){
    echo "Failed to connect to Mysql:".mysqli_connect_errno();
    exit();
  }
?>
