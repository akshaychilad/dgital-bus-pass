<?php
session_start();
$name=$_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css1/bootstrap.min.css" rel="stylesheet">
<title>E-PASS</title>
</head>
<body background="images/123.jpg"bgcolor="black">
<div id="user" align="right"></div>
<center>
<div align="right" id="menu1"><a href="logout.php" title="Click to Log Out"> LogOut</a> </h4> </div>



<h1 align="center" id="menu1"> E-PASS <span class="usrname"> </span> </h1>

 <h4 align="left"  id="menu2">WELCOME <?php echo $name; ?> </h4>
<table align="left">
<tr>
<td>
<marquee  scroll="alternate" id="menus"><a href="#" >Latest Updates on Policies</a></marquee>

<li>

<h1>
<a href="pass.php" ><ul class="contained" onmouseover="style='width:280px;  margin:2 auto;  margin-top:10px;  min-height:10px;  padding:5px;  -moz-box-shadow: 10px 10px 12px #8569F3; -webkit-box-shadow: 10px 10px 12px #8569F3; box-shadow:10px 10px 12px #8569F3;'" onmouseout="style='width:200px; margin:2 auto; margin-top:10px; min-height:10px; padding:5px; -moz-box-shadow: 10px 10px 12px #8569F3;-webkit-box-shadow: 10px 10px 12px #8569F3;box-shadow:10px 10px 12px #8569F3;'" id="menus">Click here to Apply Pass</ul></a>


</li> 
</h1>
<h1>

<li>


<a href="payment.php" ><ul class="contained" onmouseover="style='width:280px;  margin:2 auto;  margin-top:10px;  min-height:10px;  padding:10px;  -moz-box-shadow: 10px 10px 12px #8569F3; -webkit-box-shadow: 10px 10px 12px #8569F3; box-shadow:10px 10px 12px #8569F3;'" onmouseout="style='width:200px; margin:2 auto; margin-top:10px; min-height:10px; padding:5px; -moz-box-shadow: 10px 10px 12px #8569F3;-webkit-box-shadow: 10px 10px 12px #8569F3;box-shadow:10px 10px 12px #8569F3;'" id="menus">Click here to Make Payment</ul></a>
</h1>
<h1>
<a href="search_number.html"><ul class="contained" onmouseover="style='width:280px;  margin:2 auto;  margin-top:10px;  min-height:10px;  padding:10px;  -moz-box-shadow: 10px 10px 12px #8569F3; -webkit-box-shadow: 10px 10px 12px #8569F3; box-shadow:10px 10px 12px #8569F3;'" onmouseout="style='width:200px; margin:2 auto; margin-top:10px; min-height:10px; padding:5px; -moz-box-shadow: 10px 10px 12px #8569F3;-webkit-box-shadow: 10px 10px 12px #8569F3;box-shadow:10px 10px 12px #8569F3;'" id="menus">View pass</ul>  </a>
</h1>
</li> 
</td>
</tr>
</table>
</center>
<script src="js1/jquery.js"></script>
<script src="js1/bootstrap.min.js"></script>
</body>

</html>
