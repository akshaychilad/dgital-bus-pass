<?php
session_start();
include("dbconnection.php");
$username  = $_POST['username'];
$password  = $_POST['password'];

$selectLoginQuery = "select * from mstr_login where username = '".$username."' and password = '".$password."' ";



$msg = base64_encode("login Successfully");  
$rs = mysqli_query($conn,$selectLoginQuery) or die(mysqli_error());
$c=mysqli_num_rows($rs);
$row = mysqli_fetch_array($rs);

if($c==1)
{
	$_SESSION['username'] = $username;
	$_SESSION['type'] = $row['type'];	
	header("location:home.php?msg=$msg");
         if($_SESSION["type"]=="admin")
         
	{
	header("Location: admin1.php");
	}
	
	
	
	if($_SESSION["type"]=="ksrtc")
         
	{
	header("Location:ksrtc.php");
	}
}
else
{
	header("location:index.php?msg=Sorry!...Invalid User");
}
?>
