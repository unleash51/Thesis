<?php 
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "ipsmcis_db");

	$id = $_REQUEST['id'];
	if(!empty($id)){
		mysqli_query($link, "DELETE from addingprograms where ID = '$id'"); 
		header("Location: ./delete_program.php");
	}else{
		header("Location: ./program_view.php");
	}

?>