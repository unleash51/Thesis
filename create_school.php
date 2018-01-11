<?php
require 'database.php';
require 'db_connect.php';

if ( !empty($_POST)) {

    // keep track post values
    $school = $_POST['school'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $contact = $_POST['contact'];


    $duplicatesql = "SELECT * FROM `addingschool` WHERE `School` LIKE '".$school."'";
    $duplicatesql1 = mysqli_query($con,$duplicatesql);
    $duplicatesqlrow_count = mysqli_num_rows($duplicatesql1);
    if($duplicatesqlrow_count == 0){
        $sql = "INSERT INTO `addingschool` (`school`, `address`, `country`, `contact`) values ('".$school."', '".$address."', '".$country."', '".$contact."')";
        mysqli_query($con,$sql);
        header('Location:school_view.php?error=regsuccess');
    }
    else{
        header('Location:create_school.php?error=regduplicate');
    }

}
?>