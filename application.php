<!DOCTYPE html>
<html lang="en">
<?php
require 'db_connect.php';
include 'header_ipsmc.php'; 
if(isset($_POST['add'])){
	$errors = "";
	$year = date("Y");
	$category = $_POST['category'];
	$title = $_POST['title'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$dateofbirth = $_POST['date'];
	$nationality = $_POST['nationality'];
	$address = $_POST['address'];
	$country = $_POST['country'];
	$homenum = $_POST['home'];
	$mobilenum = $_POST['mobile'];
	$email = $_POST['email'];
	$status = $_POST['status'];
	$counter = "1";
	if($category == "student" || $category =="Student"){
		$resultsql = "SELECT * FROM `visa_application` WHERE `applicantsid` LIKE 'S".$year."%' ORDER BY `counter` DESC LIMIT 1";
	}
	else if($category == "tourist" || $category =="Tourist"){
		$resultsql = "SELECT * FROM `visa_application` WHERE `applicantsid` LIKE 'T".$year."%' ORDER BY `counter` DESC LIMIT 1";
	}
	else{
		$resultsql = "SELECT * FROM `visa_application` WHERE `applicantsid` LIKE 'U".$year."%' ORDER BY `counter` DESC LIMIT 1";
	}
	
	$result1 = mysqli_query($con,$resultsql);
	$row_count = mysqli_num_rows($result1);
	if($row_count > 0){
		$extract = mysqli_fetch_array($result1);
		$counter = $extract['counter'];
		$counter++;
	}
	else{
		$counter = "1";
	}
	$strlencounter = strlen($counter);
	$counter0 = $counter;
	if($strlencounter == "1"){
		$counter = "00".$counter;
	}
	else if($strlencounter == "2"){
		$counter = "0".$counter;
	}
	if($category == "student" || $category =="Student"){
		$category_id = "S".$year."".$counter;
	}
	else if($category == "tourist" || $category =="Tourist"){
		$category_id = "T".$year."".$counter;
	}
	else{
		$category_id = "U".$year."".$counter;
	}
	
	$duplicatesql = "SELECT * FROM `visa_application` WHERE `firstname` LIKE '".$fname."' AND `middlename` LIKE '".$mname."' AND `lastname` LIKE '".$lname."' AND `category` LIKE '".$category."'";
	$duplicatesql1 = mysqli_query($con,$duplicatesql);
	$duplicatesqlrow_count = mysqli_num_rows($duplicatesql1);
	if($duplicatesqlrow_count == "0"){
	
	mkdir('uploads/'.$category_id, 0777, true);
	$target_dir = "uploads/".$category_id."/";
	$temp1 = explode(".", $_FILES["nso"]["name"]);
	$file1 = "nso".'.'.end($temp1);
	$temp2 = explode(".", $_FILES["ielts"]["name"]);
	$file2 = "ielts".'.'.end($temp2);
	$temp3 = explode(".", $_FILES["nbi"]["name"]);
	$file3 = "nbi".'.'.end($temp3);
	$temp4 = explode(".", $_FILES["picture"]["name"]);
	$file4 = "picture".'.'.end($temp4);
	$temp_file1 = $target_dir . basename($file1);
	$temp_file2 = $target_dir . basename($file2);
	$temp_file3 = $target_dir . basename($file3);
	$temp_file4 = $target_dir . basename($file4);
	$uploadOk1 = 1;
	$uploadOk2 = 1;
	$uploadOk3 = 1;
	$uploadOk4 = 1;
	
	$file1type = pathinfo($temp_file1,PATHINFO_EXTENSION);

	if ($uploadOk1 == 1) {
		if (move_uploaded_file($_FILES["nso"]["tmp_name"], $temp_file1)) {
			$errors .= "<p>The file ". basename( $_FILES["nso"]["name"]). " has been uploaded.</p>";
		} else {
			$errors .= "<p>Sorry, there was an error uploading your file.</p>";
		}
	}
	
	$file2type = pathinfo($temp_file2,PATHINFO_EXTENSION);
	
	if ($uploadOk2 == 1) {
		if (move_uploaded_file($_FILES["ielts"]["tmp_name"], $temp_file2)) {
			$errors .= "<p>The file ". basename( $_FILES["ielts"]["name"]). " has been uploaded.</p>";
		} else {
			$errors .= "<p>Sorry, there was an error uploading your file.</p>";
		}
	}
	
	$file3type = pathinfo($temp_file3,PATHINFO_EXTENSION);

	if ($uploadOk3 == 1){
		if (move_uploaded_file($_FILES["nbi"]["tmp_name"], $temp_file3)) {
			$errors .= "<p>The file ". basename( $_FILES["nbi"]["name"]). " has been uploaded.</p>";
		} else {
			$errors .= "<p>Sorry, there was an error uploading your file.</p>";
		}
	}
	
	$file4type = pathinfo($temp_file4,PATHINFO_EXTENSION);
	
	if ($uploadOk4 == 1) {
		if (move_uploaded_file($_FILES["picture"]["tmp_name"], $temp_file4)) {
			$errors .= "<p>The file ". basename( $_FILES["picture"]["name"]). " has been uploaded.</p>";
		} else {
			$errors .= "<p>Sorry, there was an error uploading your file.</p>";
		}
	}
	
	$tempfile01 = mysqli_real_escape_string($con, $temp_file1);
	$tempfile02 = mysqli_real_escape_string($con, $temp_file2);
	$tempfile03 = mysqli_real_escape_string($con, $temp_file3);
	$tempfile04 = mysqli_real_escape_string($con, $temp_file4);
	$insertsql = "INSERT INTO `visa_application` (`id`, `applicantsid`, `counter`, `category`, `title`, `firstname`, `middlename`, `lastname`, `gender`, `dateofbirth`, `nationality`, `countryofbirth`, `address`, `home`, `mobile`, `emailaddress`, `status`, `datecreated`, `nso`, `ielts`, `nbi`, `picture`) VALUES (NULL, '".$category_id."', '".$counter0."', '".$category."', '".$title."', '".$fname."', '".$mname."', '".$lname."', '".$gender."', '".$dateofbirth."', '".$nationality."', '".$country."', '".$address."', '".$homenum."', '".$mobilenum."', '".$email."', '".$status."', '".$currentdate."', '".$tempfile01."', '".$tempfile02."', '".$tempfile03."', '".$tempfile04."')";
	mysqli_query($con,$insertsql);
	
	?>
	<div style="margin-top:30px;"><h2 class="bg-success" style="text-align:center; padding:20px; width:70%; margin: 0 auto; border-radius:25px;">Successfully Registered with <?php echo ucwords($category); ?> ID of <?php echo $category_id; ?></h2></div>
	
	<div style="margin-top:30px;"><h3 class="bg-success" style="text-align:left; padding:20px; width:70%; margin: 0 auto; border-radius:25px;">
	<?php echo $errors;
	}
	else{
	?></h3></div>
	
	<div style="margin-top:30px;"><h2 class="bg-success" style="text-align:center; padding:20px; width:70%; margin: 0 auto; border-radius:25px;">User with same name and category is already registered on the system</h2></div>
	<?php
	echo $errors;
	}
}
else{
	header('Location:visa_application.php');
}
?>