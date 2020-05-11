
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style2.css" rel="stylesheet">
<title> e-pass </title>
<script>$(function(){$( document ).tooltip();}); </script>

<style>label{ display: inline-block;width: 8em;}</style>
</head>
<body onload="checkCookie();">
<style>
.example_e {
border: none;
background: #404040;
color: #ffffff !important;
font-weight: 100;
padding: 20px;
text-transform: uppercase;
border-radius: 6px;
display: inline-block;
}

.example_e:hover {
color: #404040 !important;
font-weight: 700 !important;
letter-spacing: 3px;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
}
</style>

<?php
include('dbconnection.php');
include "qrlib.php";    
session_start();
$PNG_WEB_DIR = 'temp/';
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
 if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
	
$ApplicaationID = $_GET["app_id"];
$_SESSION['id']=$ApplicaationID;
$sql="select * from ksrtcadmin  WHERE `Applicaation ID` = '$ApplicaationID'";
$res=mysqli_query($conn,$sql);
?>
 <table id="menu10" width="" border="5"  >
<thead>
    <?php
   while($row=mysqli_fetch_array($res))
   {
   ?>
   <tr >
   <th><img class="img" src="images/images.jpg" width="100" height="100"> </th>
    <th> Karnataka State Road Transport Corporation </th>  
  <th rowspan="1">
	<img class="img" src="<?php echo $row["studentphotos"];?>" width="80" height="100">
	</th>
   
	
	</tr>
   <tr>
     <td scope="row"><B>First Name:</B><?php echo $row["fname"];?></td>
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
     <td><B>Gender:</B><?php echo $row["gender"];?></td>
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
<br>
<br />
<button onclick="myFunction()">Print pass</button>
<script> 
function myFunction(){
  window.print();
  }
  </script>
  <br/>
  <br/>
  <br/>
  <br/>
<a class="example_e" href="pdf_student.php" title="Click to Log Out"> Download</a>
</body>

</html>
