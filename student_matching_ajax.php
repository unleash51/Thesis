<?php 
include 'db_connect.php';
$getcountry = $_POST['country'];
$getcourse = $_POST['course'];
$gettuitionfrom = $_POST['tuitionfrom'];
$gettuitionfrom = $gettuitionfrom + 0;
$gettuitionto = $_POST['tuitionto'];
$gettuitionto = $gettuitionto + 0;
$tuitionsql = "";
if($gettuitionfrom > 0){
	$tuitionsql .= " AND `tuition`>='".$gettuitionfrom."'";
}
if($gettuitionto > 0){
	$tuitionsql .= " AND `tuition`<='".$gettuitionto."'";
}
$resultsql = "SELECT * FROM `school_details` INNER JOIN `courses` ON `school_details`.`school_id`=`courses`.`school_id` WHERE `school_country`='".$getcountry."' AND `category` = '".$getcourse."' ".$tuitionsql."";
$result1 = mysqli_query($con,$resultsql);
$row_count = mysqli_num_rows($result1);
if($row_count > 0){
echo "<div class='panel-body' style=''><div class='table-responsive'><table class='table table-hover'>";
echo "<thead><tr class='alert-info'><th>Country</th><th>School</th><th>Course</th><th>Category</th><th>Tuition</th></tr></thead>";
while($extract = mysqli_fetch_array($result1)){
    $school = $extract['school_name'];
    $course = $extract['course'];
    $tuition = $extract['tuition'];
    $country = $extract['school_country'];
    $category = $extract['category'];
    echo "<tr><td>$country</td><td>$school</td><td>".ucwords($course)."</td><td>".ucwords($category)."</td><td>$tuition</td></tr>";
}
echo "</table></div></div>";
}
else{
echo "<div class='alert alert-info'>No Results Found</div>";
}
?>