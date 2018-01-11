<?php
    require 'database.php';
    require 'db_connect.php';
 
    if ( !empty($_POST)) {

        
		$program = $_POST['program'];
		$country = $_POST['country'];
		$school = $_POST['school'];
        $tuition = $_POST['tuition'];

         
        $duplicatesql = "SELECT * FROM `addingprograms` WHERE `Program` LIKE '".$program."'";
        $duplicatesql1 = mysqli_query($con,$duplicatesql);
        $duplicatesqlrow_count = mysqli_num_rows($duplicatesql1);
        if($duplicatesqlrow_count == 0){
        $sql = "INSERT INTO `addingprograms` (`program`, `country`, `school`, `tuition`) values ('".$program."', '".$country."', '".$school."', '".$tuition."')";
            mysqli_query($con,$sql);
            header('Location:program_view.php?error=regsuccess');
            }
            else{
            header('Location:new_program.php?error=regduplicate');
            }
    }
?>