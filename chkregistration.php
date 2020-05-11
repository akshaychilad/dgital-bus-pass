<?php
session_start();
include("dbconnection.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$bdate = $_POST['bdate'];
$m = substr($bdate,0,2);
$d = substr($bdate,3,2);
$y = substr($bdate,6,4);
$bdate =  $y."-".$m."-".$d;

$username=$_POST['username'];

$password =$_POST['password'];
$confpass = $_POST['password'];
$address = $_POST['address'];
$city= $_POST['city'];
$zipcode= $_POST['zipcode'];
$phone= $_POST['phone'];
$mobile= $_POST['mobile'];



if($password == $confpass)
{
 
   
   
   										  
	/*$insertloginQuery = "insert into mstr_login(username,password,last_logindatetime) 
	                                   values ('".$username."','".$password."',now())";
   
	$insertQuery = "insert into student_details(fname,lname,email,gender,bdate,address,city,zipcode,phone,mobile)
				          values('".$fname."','".$lname."','".$email."','".$gender."','".$bdate."','".$address."','".$city."','".$zipcode."','".$phone."','".$mobile."' )";
									               
		
*/	
$insertloginQuery = "insert into mstr_login(username,password,last_logindatetime) 
	                                   values ('$_POST[username]','$_POST[password]',now())";
   
	$insertQuery = "insert into student_details values('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[gender]','$_POST[bdate]','$_POST[address]','$_POST[city]','$_POST[zipcode]','$_POST[phone]','$_POST[mobile]' )";
								
	
	$sql1 = "select username from mstr_login where username = '$username'";
   $result1 = mysqli_query($conn,$sql1) or die ("Couldn't execute query.");										  
    
	$num1=mysqli_num_rows($result1);
	
	if($num1 == 1)
	{
		header("location:registration.php?msg=Sorry, UserName already Exist !");
		
	}

	else
	{
		$msg = base64_encode("Registered Successfully");
		

		if((mysqli_query($conn,$insertloginQuery)) && (mysqli_query($conn,$insertQuery)))
		  {
			//$_SESSION['username']=$username;
			//header("location:login.html?msg=$msg");
			header("location:registration.php?msg=Not Registered");
			
		   }
		else
		 {
			//header("location:registration.php?msg=Not Registered");
			$_SESSION['username']=$username;
			header("location:login_digi.html?msg=$msg");	 
		  }
       
	}
 }  
else
 {
   echo "Error:Password missmatch";
  }
?>

		