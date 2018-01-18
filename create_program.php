<?php
    require 'database.php';
    require 'db_connect.php';
 
    if ( !empty($_POST)) {

        
		$course = $_POST['program'];
		$category = $_POST['category'];
		$school = $_POST['school'];
        $tuition = $_POST['tuition'];

         
        $duplicatesql = "SELECT * FROM `courses` WHERE `course` LIKE 
        '".$course."' && `school_id` LIKE '".$school."'";
        $duplicatesql1 = mysqli_query($con,$duplicatesql);
        $duplicatesqlrow_count = mysqli_num_rows($duplicatesql1);
        if($duplicatesqlrow_count == 0){
        $sql = "INSERT INTO `courses` (`course`, `school_id`, `tuition`, `category`) values ('".$course."', '".$school."', '".$tuition."', '".$category."')";
            mysqli_query($con,$sql);
            header('Location:program_view.php?error=addsuccess');
            }
            else{
            header('Location:new_program.php?error=addduplicate');
            }
    }
?>