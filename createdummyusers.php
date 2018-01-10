<?php
include 'connect.php';
$x = 0;
while($x <= 15){
	
	
	$checkloginsql = "INSERT INTO `messages` (`id`, `username`, `msg`, `datetime`, `sender_id`, `receiver_id`, `seen`) VALUES (NULL, 'Renter John Aride', 'msg".$x."', '2017-06-12 00:55:".$x."', '1', '2', '0');";
	
    $checklogin = mysqli_query($con, $checkloginsql);
$x++;
}
?>