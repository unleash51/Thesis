<?php
     
    require 'database.php';
    require 'db_connect.php';
	
	$ID = $_POST['id'];
	$school = $_POST['school'];
	$country = $_POST['country'];
	$program = $_POST['program'];
	$tuition = $_POST['tuition'];

    if ( !empty($ID)) {

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE addingprograms SET School = ?, Country = ?, Program = ?, Tuition = ? WHERE ID = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($school, $country, $program, $tuition, $ID));
		Database::disconnect();
		header("Location: program_view.php");
        
    }else{
		header("Location: program_view.php");
	}
?>