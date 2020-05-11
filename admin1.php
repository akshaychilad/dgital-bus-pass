<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<style>
.example_a {
color: #fff !important;
text-transform: uppercase;
background: #ed3330;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
}

.example_a:hover {
background: #434343;
letter-spacing: 1px;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}/
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
</head>
<link href="style2.css" rel="stylesheet">
<body onload="checkCookie();">
<center>
<div align="right" ><div id="menu1">  |<a href="logout.php" title="Click to Log Out"> LogOut</a>| |<a href="admin1.php">REFRESH RECORDS</a> |</h4> </div></div>
<div align="center" id="menu1"><h1> E-pass </h1><span class="usrname"> <br>Ease of getting pass through online service....</span> </div>
<td>
<marquee behaviour="alternate" id="menu2" direction=""right""  width=200 height=20 scrolldelay="1" SCROLLAMOUNT="10" onmouseover="this.stop();"  onmouseout="this.start();"><a href=#" >Latest Updates on Policies</a></marquee>
</br>
 </br>
</td>
<table align="left" width="800" id="menu1"  >
<td>
    <table align="right" width="800">
	<tr>
	  <td>
		<?php
			include('dbconnection.php');
			$sql="select * from pass where display IS true";
			$res=mysqli_query($conn,$sql);
		?>
		</td>
<tr>

 <table width="567" border="1" class="img" align="center" id="menu2" >
<thead>


   <tr id="menu2">
     <th scope="row">Application ID</th>
     <th width="79"><P>NAME</th>
     <th width="75"><p>LNAME</th>
     <th width="55"><p>GENDE</th>
     <th width="55"><p>BDATE</th>
     <th width="55"><p>COLLEGE NAME</th>
     <th width="139"><p>CITY </th>
     <th width="139"><p>MOBILE NO </th>
       <th width="139"><p>Address</th>
     <th width="139"><p>STUDENT PHOTO</th> 
     <th width="139"><p>Address Prof</th>
 <th width="139"><p>PAYMENT</th>
      <th width="139"><p>FORWARD PASS</th> 
        <th width="139"><p>REJECT PASS</th>  	 
   </tr>
   <?php
   
   while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
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
          
     <td><a href="<?php echo $row["studentphotos"];?>"> <img class="img" src="<?php echo $row["studentphotos"];?>" width="100" height="100"> </a>&nbsp;</td>
    <td><a href="<?php echo $row["AddressProf"];?>"> <img class="img" src="<?php echo $row["AddressProf"];?>" width="100" height="100">&nbsp;</td>
     <td><?php echo $row["payment"];?> &nbsp;</td>
     
     <td align="center">
	<a align="center" class="example_e" href="update.php?ApplicaationID=<?php echo $row["Applicaation ID"];?>" onClick="return confirm('Are U Sure Want to Update')">
<IMG src="up.png" width="60" height="50"></a></td>
 
 
 <td align="center">
 <a align="center" class="example_a" href="DELETE.php?ApplicaationID=<?php echo $row["Applicaation ID"];?>" onClick="return confirm('Are U Sure Want to DELETE')">
<IMG src="D.png" width="30" height="20"></a></td>
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
</br>

 </br>
</center>
</br>

 </br>
</body>

</html>
