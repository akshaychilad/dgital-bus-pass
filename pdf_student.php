<?php

session_start();
$name="akshay";
$address="c";

$invno="12ds";
//to calcuate total amount
$sum=0;
include('dbconnection.php');
require ('pdf/fpdf.php');
include "qrlib.php"; 

$PNG_WEB_DIR = 'temp/';
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
 if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';

$ApplicaationID=$_SESSION['id'];
$sql="select * from ksrtcadmin  WHERE `Applicaation ID` = '$ApplicaationID'";
$res=mysqli_query($conn,$sql);


		   



//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');


//add new page
$pdf->AddPage();
//output the result
//Get todays date
$today = date('d/m/Y');


$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )



while($row=mysqli_fetch_array($res))
{
	$filename = $PNG_TEMP_DIR.'test'.md5('L'.'|'.'A').'.png';
			$display="Student with the name ".$row["fname"]." with the application number ".$row["Applicaation ID"]."is Eligible to travel FROM: ".$row["From"]." TO: ".$row["To"];
           QRcode::png($display, $filename, 'L',4, 2);
		   

		   



//Cell(width , height , text , border , end line , [align] )

$pdf->Image("images/images.jpg",0,0);


$pdf->Image($row['studentphotos'],100,50,25,25);
//invoice contents
$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,100," ",2);
$pdf->Ln();

$pdf->Cell(25,5,"name",1,0,'B');
$pdf->Cell(25 ,5,$row['fname'],1,0);
$pdf->Ln();
$pdf->Cell(25,5,"App. ID",1,0,'B');
$pdf->Cell(50,5,$row['Applicaation ID'],1,0);
$pdf->Ln();
$pdf->Cell(25 ,5,'Gender',1,0);
$pdf->Cell(29 ,5,$row['gender'],1,1);//end of line
$pdf->Cell(25,5,"Institution",1,0,'B');
$pdf->Cell(25 ,5,$row['collegename'],1,0);
$pdf->Ln();
$pdf->Cell(25,5,"From",1,0,'B');
$pdf->Cell(25 ,5,$row['From'],1,0);
$pdf->Ln();
$pdf->Cell(25,5,"To",1,0,'B');
$pdf->Cell(25 ,5,$row['To'],1,0);
$pdf->Image($filename,120,120,20,20);

}
$today=date("Y-m-d H:i:s");
//$query="INSERT INTO invoice values($invno,'$name','$amount','$today')";
//mysqli_query($conn,$query);


$path='invoice/'.$invno.'.pdf';
$pdf->Output($path,'F');
$pdf->Output();


?>


