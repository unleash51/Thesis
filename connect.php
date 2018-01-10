<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipsmcis_db";
$con = mysqli_connect($servername,$username,$password,$dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$datetime = date("Y-m-d H:i:s");
?>