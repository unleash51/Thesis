<?php
ob_start();
include 'db_connect.php';
ob_end_clean();

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = 'img/logo2.jpg';

		$this->Image($image_file, 'C', 6, '150', '50', 'jpg', false, 'C', false, 300, 'C', false, false, 0, false, false, false);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

$category = "";
if(isset($_REQUEST['categ']) && $_REQUEST['categ']!=""){
	$category = $_REQUEST['categ'];
}
else{
	$title = "Error";
}
$getcategory = "";
if($category == "student_summary"){
	$title = "Student Summary Report";
	$getcategory = "student";
	$type = "summary";
}
else if($category == "tourist_summary"){
	$title = "Tourist Summary Report";
	$getcategory = "tourist";
	$type = "summary";
}
else if($category == "student_detailed"){
	$title = "Student Detailed Report";
	$getcategory = "student";
	$type = "detailed";
}
else if($category == "tourist_detailed"){
	$title = "Tourist Detailed Report";
	$getcategory = "tourist";
	$type = "detailed";
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 003');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
if($type=="summary"){
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP+25, PDF_MARGIN_RIGHT);
}
else{
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP+15, PDF_MARGIN_RIGHT);
}
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page

// set some text to print
//$title = $category;
$html = "";
if($type=="summary"){
	$pdf->AddPage();
	$html .= '<div><h2>'.$title.'</h2></div>';
	$html .= '<table border="1" style="border:1px solid red;">';
	$html .= '<tr><th align="center">Applicants ID</th><th align="center">Name</th><th align="center">Gender</th><th align="center">Nationality</th></tr>';
}
else if($type=="detailed"){
}
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
		$dateofbirth = $extract['dateofbirth'];
		$countryofbirth = $extract['countryofbirth'];
		$address = $extract['address'];
		$home = $extract['home'];
		$mobile = $extract['mobile'];
		$email = $extract['emailaddress'];
		$status = $extract['status'];
		$picture = $extract['picture'];
		$profile_pic = '<img src="'.$picture.'" height="42" width="42"></img>';
		if($type=="summary"){
			$html .= '<tr><td align="center">'.$applicantsid.'</td><td align="center">'.ucwords($fname).' '.ucwords($mname).' '.ucwords($lname).'</td><td align="center">'.ucwords($gender).'</td><td align="center">'.ucwords($nationality).'</td></tr>';
		}
		else{
			$pdf->AddPage();
			$html = '<style>.borderbot{ border-bottom:1px solid black; padding:5px;}</style>';
			$html .= '<div style="text-align:center;"><h2>'.$title.'</h2></div>';
			$html .= '<table border="0" cellpadding="6">';
			$html .= '<tr><td align="center" class="borderbot">Applicant ID:</td><td align="center" class="borderbot">'.ucwords($applicantsid).'</td><td rowspan="11"><img src="'.$picture.'"  width="150" height="150"></td></tr>';
			$html .= '<tr><td align="center" class="borderbot">Name:</td><td align="center" class="borderbot">'.ucwords($fname).' '.ucwords($mname).' '.ucwords($lname).'</td></tr>';
			$html .= '<tr><td align="center" class="borderbot">Gender:</td><td align="center" class="borderbot">'.ucwords($gender).'</td></tr>';
			$html .= '<tr><td align="center" class="borderbot">Nationality:</td><td align="center" class="borderbot">'.ucwords($nationality).'</td></tr>';
			$html .= '<tr><td align="center" class="borderbot">Date of Birth:</td><td align="center" class="borderbot">'.ucwords($dateofbirth).'</td></tr>';
			$html .= '<tr><td align="center" class="borderbot">Country of Birth:</td><td align="center" class="borderbot">'.ucwords($countryofbirth).'</td></tr>';
			$html .= '<tr><td align="center" class="borderbot">Current Address:</td><td align="center" class="borderbot">'.ucwords($address).'</td></tr>';
			$html .= '<tr><td align="center" class="borderbot">Home Address:</td><td align="center" class="borderbot">'.ucwords($home).'</td></tr>';
			$html .= '<tr><td align="center" class="borderbot">Mobile Number:</td><td align="center" class="borderbot">'.ucwords($mobile).'</td></tr>';
			$html .= '<tr><td align="center" class="borderbot">Email Address:</td><td align="center" class="borderbot">'.ucwords($email).'</td></tr>';
			$html .= '<tr><td align="center" class="borderbot">Status:</td><td align="center" class="borderbot">'.ucwords($status).'</td></tr>';
			$html .= '</table>';
			$pdf->writeHTML($html, true, false, true, false, '');
		}
	}
}
if($type=="summary"){
	$html .= '</table>';
	$pdf->writeHTML($html, true, false, true, false, '');
}
$html .= "asdasd";
// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_003.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

?>