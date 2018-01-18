<?php
    require 'db_connect.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: client_view.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $emailError = null;
        $mobileError = null;
         
        // keep track post values
		$fname = $_POST['firstname'];
		$mname = $_POST['middlename'];
		$lname = $_POST['lastname'];
		$status = $_POST['status'];
         
        // validate input
        $valid = true;
         
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE visa_application set status=? WHERE applicantsid = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($status, $id));
            Database::disconnect();
            header("Location: client_view.php?error=updatesuccess");
        }
    }
?>