<?php 
include 'db_connect.php';
$getcountry = $_POST['country'];
//$getcategory = $_POST['category'];
$getfare = $_POST['fare'];
$getfare = $getfare+ 0;
$faresql = "";
//print_r($_POST);
if($getfare > 0){
	$faresql = " AND `fare`<='".$getfare."'";
}
$resultsql = "SELECT * FROM `tourist_matching` WHERE `Spots_Country`='".$getcountry."' ".$faresql."";
//echo $resultsql;
$result1 = mysqli_query($con,$resultsql);
$row_count = mysqli_num_rows($result1);
if($row_count > 0){
echo "<div class='panel-body' style='margin:0 5%;'><div class='table-responsive'><table class='table table-hover'>";
echo "<thead><tr class='alert-info'><th>Name</th><th>Address</th><th>Category</th><th>Plane Fare</th></tr></thead>";
while($extract = mysqli_fetch_array($result1)){
    $name= $extract['Spots_Name'];
    $address= $extract['Spots_Address'];
    $fare= $extract['fare'];
    $category= $extract['Spots_Category'];
    
    echo "<tr><td>$name</td><td>$address</td><td>".ucwords($category)."</td><td>$fare</td></tr>";
}
echo "</table></div></div>";
}
else{
echo "No Results Found";
}
?>