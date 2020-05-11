

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title> e-pass </title>
</head>
<body onload="checkCookie();">

<?php
include('dbconnection.php');
include"qrlib.php";    
$PNG_WEB_DIR = 'temp/';
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
 if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
	
$ApplicaationID  = '5cbc3816ea02b';
$sql="select * from ksrtcadmin  WHERE `Applicaation ID` = '$ApplicaationID'";
$res=mysqli_query($conn,$sql);
?>
 <table id="menu10" width="" border="5"  >
<thead>
<?php
require('pdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);	
   while($row=mysqli_fetch_array($res))
   {
   ?>
   <tr >
   <th><img class="img" src="images/images.jpg" width="100" height="100"> </th>
    <th> Karnataka State Road Transport Corporation </th>  
  <th r
  owspan="1">
	<img class="img" src="<?php echo $row["studentphotos"];?>" width="80" height="100">
	</th>
   
	
	</tr>
   <tr>
     <td scope="row"><B>First Name:</B><?php $pdf->Cell(40,10,$row["fname"]);?></td>
   <td scope="row"><B>Application ID:</B><?php echo $row["Applicaation ID"];?></td>
   <th rowspan="3">
   
   <?php
     
			$filename = $PNG_TEMP_DIR.'test'.md5('L'.'|'.'A').'.png';
			$display="Student with the name ".$row["fname"]." with the application number ".$row["Applicaation ID"]."is Eligible to travel FROM: ".$row["From"]." TO: ".$row["To"];
           QRcode::png($display, $filename, 'L',4, 2);
		   echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" height=100 width=100 />';
 ?>
 </th>
    </tr>
   <tr id="menu10">
     <td><B>Gender:</B><?php echo $row["collegename"];?></td>
     <td><B>College Name:</B><?php echo $row["collegename"];?></td>
     </tr>
     <tr>
      <td><B>From:</B><?php echo $row["From"];?></td>
      <td><B>To:</B><?php echo $row["To"];?> </td>
      </tr>

</table>
   <?php
   }
   
   ?>
<?php

$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>
</body>

</html>
