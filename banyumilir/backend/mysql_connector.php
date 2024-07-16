<?php
  date_default_timezone_set('Asia/Jakarta');

  $servertype="mysql";
  $serverhost="103.246.3.2";
  $dbname="ticketing";
  $dbuser="root174";
  $dbpassword="root";
  $port="3307";
/*
  $servertype="mysql";
  $serverhost="localhost";
  $dbname="ticketing";
  $dbuser="root";
  $dbpassword="";
  $port="3306";
*/
  $con = mysqli_connect($serverhost,$dbuser,$dbpassword,$dbname,$port);
  if(mysqli_connect_errno()){
    echo "Failed to connect to Mysql:".mysqli_connect_errno();
    exit();
  }
?>
