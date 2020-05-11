 <?PHP

include('dbconnection.php');
$appid=$_POST['appid'];
$name=$_POST['name'];
$card=$_POST['card'];     
$pin=$_POST['pin'];
$amount=$_POST['amount'];
if(isset($appid))
{
echo"Setting";
}
$res=mysqli_query($conn,"SELECT *
FROM `pass`
WHERE `Applicaation ID` = '$appid'");
if($res)
{
mysqli_query($conn,"insert into payment (appid,name,card,pin,amount) values('".$appid."','".$name."','".$card."','".$pin."','".$amount."')");

$sql="update pass set payment ='$amount' WHERE `Applicaation ID` = '$appid'";
if(mysqli_query($con,$sql))
{
echo "PAYMENTIS IS  DONE ";
}
}
else
{
       

echo "PAYMENTIS IS NOT DONE ";
	
}

 ?>
<hr>
<script>
// alert("PAYMENTIS IS  DONE");
document.location="home.php";

</script>

 <a href="Home.php">Back</a>
