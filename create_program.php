<?php
    require 'database.php';
    require 'db_connect.php';
 
    if ( !empty($_POST)) {

        
		$school = $_POST['school'];
		$country = $_POST['country'];
		$program = $_POST['program'];
        $tuition = $_POST['tuition'];

         
        
        $valid = true;

        
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO addingprograms (school, country, program, tuition) values(?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($school,$country,$program,$tuition));
            Database::disconnect();
            header("Location: program_view.php");
        }
    }
?>