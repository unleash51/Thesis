<?php 
    $link=mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "ipsmcis_db");

   $id = $_POST['id'];
	if(!empty($id)){
		mysqli_query($link, "DELETE from users where userid = '$id' "); 
		header("Location: ./delete_users.php");
	}else{
		header("Location: ./users_view.php");
	}

?>
