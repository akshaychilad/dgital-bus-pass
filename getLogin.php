<?php
include('dbconnection.php');

$username=$_REQUEST["username"];
$password=$_REQUEST["password"];

$query="SELECT * FROM hostel_users where   	user_name='".$username."' and password='".$password."'";
$result = mysqli_query($query);

     if($row = mysqli_fetch_array($result))
	 {  
		echo "1";
 	 }
	 else
	 {
		echo "0";
	 }  
?>