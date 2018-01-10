<?php
session_start();
include 'connect.php';
$uname = $_POST['uname'];
$msg = $_POST['msg'];
$sendto = $_POST['sendto'];
if(isset($_SESSION['user_id'])){
	$user_id=$_SESSION['user_id'];
}
else{
	$user_id = "0";
}
mysqli_query($con,"INSERT into `messages` (`username`, `msg`,`datetime`,`sender_id`,`receiver_id`) VALUES ('".$uname."', '".$msg."','".$datetime."','".$user_id."','".$sendto."')");

?>