<?php

$servertype="mysql";
$serverhost="103.246.3.2";
$dbname="ticketing";
$dbuser="root174";
$dbpassword="root";

$con = mysqli_connect($serverhost,$dbuser,$dbpassword,$dbname);
if(mysqli_connect_errno()){
    echo "Failed to connect to Mysql:".mysqli_connect_errno();
    exit();
}


?>