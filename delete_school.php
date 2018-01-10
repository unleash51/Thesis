<?php 
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "ipsmcis_db");

	$id = $_POST['id'];
	if(!empty($id)){
		mysqli_query($link, "DELETE from addingschool where ID = '$id' "); 
		header("Location: ./delete_school.php");
	}else{
		header("Location: ./school_view.php");
	}

?>