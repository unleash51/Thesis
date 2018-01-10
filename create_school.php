<?php
    require 'database.php';
    require 'db_connect.php';
 
    if ( !empty($_POST)) {

        
		$school = $_POST['school'];
		$address = $_POST['address'];
		$country = $_POST['country'];
        $contact = $_POST['contact'];

         
        
        $valid = true;

        
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO addingschool (school, address, country, contact) values(?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($school,$address,$country,$contact));
            Database::disconnect();
            header("Location: school_view.php");
        }
    }
?>