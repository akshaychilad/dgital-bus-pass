<?php
include("dbconnection.php");

$ApplicaationID = $_POST["ApplicaationID"];
//echo"$ApplicaationID";
$fname = mysqli_real_escape_string($conn,$_POST["fname"]);
$lname = mysqli_real_escape_string($conn,$_POST["lname"]);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$gender = mysqli_real_escape_string($conn,$_POST["gender"]);
$bdate = mysqli_real_escape_string($conn,$_POST["bdate"]);
$m = substr($bdate,0,2);
$d = substr($bdate,3,2);
$y = substr($bdate,6,4);
$bdate =  $y."-".$m."-".$d;
$collegename=mysqli_real_escape_string($conn,$_POST["collegename"]);
$address = mysqli_real_escape_string($conn,$_POST["address"]);
$city= mysqli_real_escape_string($conn,$_POST["city"]);
$zipcode= mysqli_real_escape_string($conn,$_POST["zipcode"]);
$phone= mysqli_real_escape_string($conn,$_POST["phone"]);
$mobile= mysqli_real_escape_string($conn,$_POST["mobile"]);
$From=mysqli_real_escape_string($conn,$_POST["From"]);
$To= mysqli_real_escape_string($conn,$_POST["To"]);
$studentphotos =  "upload/".$_FILES['studentphotos']['name'];
$AddressProf =  "upload/".$_FILES['AddressProf']['name'];


if((move_uploaded_file($_FILES['studentphotos']['tmp_name'],$studentphotos)) && (move_uploaded_file($_FILES['AddressProf']['tmp_name'],$AddressProf)))
 {
	 echo "$_POST[fname] ";
	 $sql1="INSERT INTO pass 
values('$ApplicaationID','$fname','$lname','$email','$gender','$bdate','$collegename','$address','$city','$zipcode','$phone','$mobile','$From','$To','$studentphotos','$AddressProf',1450,true)";

//$res=mysqli_query($conn,$sql) 
   $result1 = mysqli_query($conn,$sql1) or die (mysqli_error($conn));										  



?>
<script>
alert("Pass is Submited Successful");
document.location="payment.php";

</script>
<?php
}
else
{

echo"File size exceeded";
}
?>

   