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
		$sql = "UPDATE addingschool SET School = ?, Address = ?, Country = ?, Contact = ? WHERE ID = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($school, $address, $country, $contact, $ID));
		Database::disconnect();
		header("Location: school_view.php");
        
    }else{
		header("Location: school_view.php");
	}
?>