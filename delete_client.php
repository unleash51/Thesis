<?php 
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "ipsmcis_db");

	$id = $_REQUEST['id'];
	if(!empty($id)){
		mysqli_query($link, "DELETE from visa_application where applicantsid = '$id'"); 
		header("Location: ./delete_client.php");
	}else{
		header("Location: ./delete_client.php");
	}

?>