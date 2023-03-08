<?Php
if(!file_exists('fpdf.php')){

echo " Place fpdf.php file in this directory before using this page. ";
exit;
}

if(!file_exists('font')){
	echo " Place font directory in this directory before using this page. ";
exit;
}

require "config.php"; // connection to database
require('fpdf.php');
	$class = $_GET['class'];

class PDF extends FPDF
{

// Page header
function Header()
{
	$class = $_GET['class'];
    // Logo
    $this->Image('logo.png',10,10,20);
    // Arial bold 15
    $this->SetFont('Helvetica','B',18);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Jawahar Navodaya Vidyalaya Siwan',0,0,'C');
		$this->Ln(9);
		  $this->Cell(60);
			    $this->SetFont('Arial','',10);
		$this->Cell(30,10,'Karamalihata, Siwan',0,0,'C');
		$this->Cell(10);
	$this->Cell(30,10,'PIN- 841226',0,0,'R');
	$this->Ln(9);
		$this->Cell(80);
				$this->SetFont('Arial','',14);
	$this->Cell(30,10,"Class-$class",0,0,'C');
    // Line break
    $this->Ln(30);
	}}

/// end of records ///
$pdf = new PDF();
$count="select * from users WHERE class='$class'"; // SQL to get 10 records
$pdf->AddPage();

$width_cell=array(18,50,20,20,30,20,33);
$height=7;
$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(193,229,252); // Background color of header
// Header starts ///
$pdf->Cell($width_cell[0],7,'Adm No.',1,0,'C',true); // First header column
$pdf->Cell($width_cell[1],7,'Name',1,0,'C',true); // Second header column
$pdf->Cell($width_cell[2],7,'English',1,0,'C',true); // Third header column
$pdf->Cell($width_cell[3],7,'Hindi',1,0,'C',true); // Fourth header column
$pdf->Cell($width_cell[4],7,'Mathematics',1,0,'C',true); // Third header column
$pdf->Cell($width_cell[5],7,'Science',1,0,'C',true);
$pdf->Cell($width_cell[6],7,'Social Science',1,1,'C',true);

//// header ends ///////

$pdf->SetFont('Arial','',12);
$pdf->SetFillColor(235,236,236); // Background color of header
$fill=false; // to give alternate background fill color to rows

/// each record is one row  ///
foreach ($link->query($count) as $row) {
$pdf->Cell($width_cell[0],$height,$row['username'],1,0,'C',$fill);
$pdf->Cell($width_cell[1],$height,$row['password'],1,0,'L',$fill);
$pdf->Cell($width_cell[2],$height,$row['eng2'],1,0,'C',$fill);
$pdf->Cell($width_cell[3],$height,$row['hin2'],1,0,'C',$fill);
$pdf->Cell($width_cell[4],$height,$row['math2'],1,0,'C',$fill);
$pdf->Cell($width_cell[5],$height,$row['sci2'],1,0,'C',$fill);
$pdf->Cell($width_cell[6],$height,$row['sst2'],1,1,'C',$fill);
$fill = !$fill; // to give alternate background fill  color to rows
}

$pdf->Output();

?>
