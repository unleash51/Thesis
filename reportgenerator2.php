<?php
ob_start();
include 'db_connect.php';
ob_end_clean();
require('fpdf/htmlwriter.php');
$categ1 = $_REQUEST['categ1'];

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$html='<table border="1" width="100%" style="border:1px solid red;">
<tr><td align="center">Applicants ID</td><td align="center">Name</td><td align="center">Gender</td><td align="center">Nationality</td></tr>
';
$getcategory = "student";
$resultsql = "SELECT * FROM `visa_application` WHERE `category`='".$getcategory."'";
$result1 = mysqli_query($con,$resultsql);
$row_count = mysqli_num_rows($result1);
if($row_count > 0){
	while($extract = mysqli_fetch_array($result1)){
		$applicantsid = $extract['applicantsid'];
		$fname = $extract['firstname'];
		$mname = $extract['middlename'];
		$lname = $extract['lastname'];
		$gender = $extract['gender'];
		$nationality = $extract['nationality'];
		$html .= '<tr><td align="center">'.$applicantsid.'</td><td align="center">'.ucwords($fname).' '.ucwords($mname).' '.ucwords($lname).'</td><td align="center">'.ucwords($gender).'</td><td align="center">'.ucwords($nationality).'</td></tr>';
	}
}
$html .= '</table>';

$pdf->WriteHTML($html);
$pdf->Output();
?>