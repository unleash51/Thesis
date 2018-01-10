<?php
require 'db_connect.php';
if(isset($_POST['submit'])) {
    $fullname = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
	
	$duplicatesql = "SELECT * FROM `users` WHERE `username` LIKE '".$username."'";
	$duplicatesql1 = mysqli_query($con,$duplicatesql);
	$duplicatesqlrow_count = mysqli_num_rows($duplicatesql1);
	if($duplicatesqlrow_count == 0){
		$sql = "INSERT INTO `users` (`fullname`, `username`, `email`, `password`, `usertype`) values ('".$fullname."', '".$username."', '".$email."', '".$password."', '".$usertype."')";
		mysqli_query($con,$sql);
		header('Location:index.php?error=regsuccess');
	}
	else{
		header('Location:index.php?error=regduplicate');
	}
}
?>

