<?php
require 'database.php';
require 'db_connect.php';

if ( !empty($_POST)) {

    // keep track post values
    $school = $_POST['school'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $contact = $_POST['contact'];


    $duplicatesql = "SELECT * FROM `school_details` WHERE `school_name` LIKE '".$school."'";
    $duplicatesql1 = mysqli_query($con,$duplicatesql);
    $duplicatesqlrow_count = mysqli_num_rows($duplicatesql1);
    if($duplicatesqlrow_count == 0){
        $sql = "INSERT INTO `school_details` (`school_name`, `school_address`, `school_country`, `school_contact`) values ('".$school."', '".$address."', '".$country."', '".$contact."')";
        mysqli_query($con,$sql);
        header('Location:school_view.php?error=addsuccess');
    }
    else{
        header('Location:new_school.php?error=addduplicate');
    }

}
?>