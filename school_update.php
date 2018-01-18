<?php
    require 'db_connect.php';
	
	$ID = $_POST['id'];
	$school = $_POST['school'];
	$address = $_POST['address'];
	$country = $_POST['country'];
	$contact = $_POST['contact'];

    if ( !empty($ID)) {

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE school_details SET school_name = ?, school_address = ?, school_country = ?, school_contact = ? WHERE school_id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($school, $address, $country, $contact, $ID));
		Database::disconnect();
		header("Location: school_view.php?error=updatesuccess");
        
    }else{
		header("Location: school_view.php");
	}
?>