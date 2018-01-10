<?php
session_start();
include 'connect.php';
if(isset($_SESSION['user_id'])){
	$user_id=$_SESSION['user_id'];
}
else{
	$user_id = "0";
}
//print_r($_REQUEST);
//print_r($_POST);
$sendto = $_REQUEST['sendto'];
$result0 = mysqli_query($con, "SELECT * FROM `users` WHERE `userid`='$sendto' LIMIT 1");
$userrow_count = mysqli_num_rows($result0);
if($userrow_count == 1){
	$my_action = $_POST['my_action'];
	if($my_action == "loadme"){
		$result1 = mysqli_query($con, "SELECT * FROM `messages` WHERE `sender_id`='$user_id' AND `receiver_id`='$sendto' OR `sender_id`='$sendto' AND `receiver_id`='$user_id' ORDER BY id ASC");
		echo "<div class='chatlist chatlist".$sendto."' style=''>";
		$msgrow_count = mysqli_num_rows($result1);
		if($msgrow_count >= 1){
			while($extract = mysqli_fetch_array($result1)){
				$datetime = $extract['datetime'];
				$explode = explode(" ", $datetime);
				$date = $explode[0];
				$time = $explode[1];
				$msg_id = $extract['id'];
				$username = $extract['username'];
				$msg = $extract['msg'];
				$sender_id = $extract['sender_id'];
				$receiver_id = $extract['receiver_id'];
				$seen = $extract['seen'];
				if($seen == 0 && $receiver_id == $user_id){
					//
					mysqli_query($con, "UPDATE `messages` SET `seen` = '1' WHERE `messages`.`id` ='".$msg_id."'");
				}
				if($sender_id == $user_id){
					$sender = "me";
				}
				else if($receiver_id == $user_id){
					$sender = "you";
				}
				echo "<div class='divmsgajax bubble ".$sender."' last_id='".$msg_id."' style='margin:10px 5px; max-width:200px; width:200px; word-break: break-all; padding-right:20px;'>".$msg."<div class='chatdatetime' style='font-size:10px; color:grey; text-align:right;'><b style='position:relative; bottom:-8px; right: -17px; color: #ffffff;'>".$date." | ".$time."</b></div></div>";
			}
		}
		else{
			echo "<div></div>";
		}
		echo "</div>";	
	}
	else if($my_action == "reloadme"){
		if(isset($_POST['last_id'])){
		$last_id = $_POST['last_id'];
		}
		else{
		$last_id = 0;
		}
		$result1 = mysqli_query($con, "SELECT * FROM `messages` WHERE `sender_id`='$user_id' AND `receiver_id`='$sendto' AND `id` > '".$last_id."' OR `sender_id`='$sendto' AND `receiver_id`='$user_id' AND `id` > '".$last_id."' ORDER BY id ASC");
		$msgrow_count = mysqli_num_rows($result1);
		if($msgrow_count >= 1){
			while($extract = mysqli_fetch_array($result1)){
				$datetime = $extract['datetime'];
				$explode = explode(" ", $datetime);
				$date = $explode[0];
				$time = $explode[1];
				$msg_id = $extract['id'];
				$username = $extract['username'];
				$msg = $extract['msg'];
				$sender_id = $extract['sender_id'];
				$receiver_id = $extract['receiver_id'];
				$seen = $extract['seen'];
				if($seen == 0 && $receiver_id == $user_id){
					//
					mysqli_query($con, "UPDATE `messages` SET `seen` = '1' WHERE `messages`.`id` ='".$msg_id."'");
				}
				if($sender_id == $user_id){
					$sender = "me";
				}
				else if($receiver_id == $user_id){
					$sender = "you";
				}
				echo "<div class='divmsgajax bubble ".$sender."' last_id='".$msg_id."' style='margin:10px 5px; max-width:200px; width:200px; word-break: break-all; padding-right:20px;'>".$msg."<div class='chatdatetime' style='font-size:10px; color:grey; text-align:right;'><b style='position:relative; bottom:-8px; right: -17px; color: #ffffff;'>".$date." | ".$time."</b></div></div>";
			}
		}
	}
}
else{
	echo "<div style='background-color:white; padding:5px; border: 1px solid grey; border-bottom:0px solid white; border-radius: 15px; text-align:center;'>No Users Found...</div>";
}
?>