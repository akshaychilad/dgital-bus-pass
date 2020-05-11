 <?PHP
//session_start();
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<style src="css/search.css">
<script>

var randomColor = Math.floor(Math.random()*16777215).toString(16);
</script>

</style>

<script>$(function(){$( document ).tooltip();}); </script>

<link href="css/search.css" rel="stylesheet" type="text/css">
<body background="images/111.jpg" onload="checkCookie();">
<center>
<div align="right"><div id="submit">  |<a href="logout.php" title="Click to Log Out"> LogOut</a>| </h4> </div></div>

<marquee behaviour="alternate" scroll="alternate" class="contained" >
<h1 align="left"> e-pass <span class="usrname"> </span> </h1>
</marquee>

<center> <h4 align="left" >E-PASS SERVICE</h4> </center>



<table align="left" width="800">

<td></td>
<td>
    <table align="right" width="800">
	<tr>
	<td>

<?php
include('dbconnection.php');
$sql="select * from ksrtcadmin";
$res=mysqli_query($conn,$sql);

?>

<body>

<p><a href="ksrtc.php">REFRESH RECORDS</a> </p>
<tr>
<td>

 
</td>
 <table width="567" border="4" class="img" align="center">
<thead>


   <tr>
     <th scope="row">Application ID</th>
     <th width="79"><P>NAME</th>
     <th width="75"><p>LNAME</th>
     <th width="55"><p>GENDE</th>
     <th width="55"><p>BDATE</th>
     <th width="55"><p>COLLEGE NAME</th>
     <th width="139"><p>CITY </th>
     <th width="139"><p>MOBILE NO </th>
       <th width="139"><p>Address</th>
        <th width="139"><p>From</th>
         <th width="139"><p>To</th>
     <th width="139"><p>STUDENT PHOTO</th> 
     <th width="139"><p>Address Prof</th>
 <th width="139"><p>PAYMENT</th>
      <th width="139"><p>GENRATE PASS</th> 
        	 
   </tr>
   <?php
   while($row=mysqli_fetch_array($res))
   {
   ?>
   <tr>
     <td scope="row"><?php echo $row["Applicaation ID"];?>&nbsp;</td>
     <td scope="row"><?php echo $row["fname"];?>&nbsp;</td>
     <td scope="row"><?php echo $row["lname"];?>&nbsp;</td>
     <td><?php echo $row["gender"];?>&nbsp;</td>
     <td><?php echo $row["bdate"];?> &nbsp;</td>
      <td><?php echo $row["collegename"];?> &nbsp;</td>
       <td><?php echo $row["city"];?> &nbsp;</td>
      <td><?php echo $row["mobile"];?> &nbsp;</td>
      <td><?php echo $row["address"];?> &nbsp;</td>
      <td><?php echo $row["From"];?> &nbsp;</td>
      <td><?php echo $row["To"];?> &nbsp;</td>
          
     <td><img class="img" src="<?php echo $row["studentphotos"];?>" width="100" height="100">&nbsp;</td>
    <td><img class="img" src="<?php echo $row["AddressProf"];?>" width="100" height="100">&nbsp;</td>
     <td><?php echo $row["payment"];?> &nbsp;</td>
     
     <td align="center">
	 <div class="td" id="s-cover">
	<a align="center"  href="genrate.php?ApplicaationID=<?php echo $row["Applicaation ID"];?>" 
onClick="return confirm('Are U Sure Want to Update')'.$row["Applicaation ID"])">
<div id="s-circle"></div>

<IMG src="images/arrow.png" width="100" height="50"></a></td>
 </div>
   </tr>
   </tr>
   <?php
   }    ?>

</td>
</tr>
</table>
</td>
</tr>
</table>

</center>
</body>

</html>
