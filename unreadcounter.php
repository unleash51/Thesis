<?php
session_start();
include 'connect.php';
if(isset($_SESSION['user_id'])){
	$user_id=$_SESSION['user_id'];
}
else{
	$user_id = "0";
}
$from = $_REQUEST['from'];
$result0 = mysqli_query($con, "SELECT * FROM `messages` WHERE `sender_id`='$from' AND `receiver_id`='$user_id' AND `seen` = '0'");
$unread_count = mysqli_num_rows($result0);
echo $unread_count;
?>