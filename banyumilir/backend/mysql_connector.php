<?php
  date_default_timezone_set('Asia/Jakarta');

/*
    $servertype="mysql";
    $serverhost="localhost";
    $dbname="ticketing";
    $dbuser="root174";
    $dbpassword="root";

*/


  $servertype="mysql";
  $serverhost="sql12.freemysqlhosting.net";
  $dbname="sql12713165";
  $dbuser="sql12713165";
  $dbpassword="Z3U6425Yvr";

 
  $con = mysqli_connect($serverhost,$dbuser,$dbpassword,$dbname);
  if(mysqli_connect_errno()){
    echo "Failed to connect to Mysql:".mysqli_connect_errno();
    exit();
  }else{
    echo "connected to Mysql:";
  }
?>