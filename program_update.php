<?php
     
    require 'database.php';
    require 'db_connect.php';
	
	$id = $_POST['id'];
	$course = $_POST['Course'];
	$school = $_POST['School'];
	$category = $_POST['Category'];
	$tuition = $_POST['Tuition'];

    if ( !empty($ID)) {

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE courses SET course = ?, school_id = ?, tuition = ?, category = ? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($course, $school, $tuition, $category, $id));
		Database::disconnect();
		header("Location: program_view.php?error=updatesuccess");
        
    }else{
		header("Location: program_view.php");
	}
?>