<?php

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "ipsmcis_db";



try {
    
    $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname, $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
}


$con = mysqli_connect ($servername,$dbusername,$dbpassword,$dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$datetime = date("Y-m-d H:i:s");
$currentdate = date("Y-m-d");
include_once 'database.php';
require_once('tcpdf/tcpdf.php');
?>



