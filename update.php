
<h1>
<?php
include('dbconnection.php');
$ApplicationID= $_GET["ApplicaationID"];
$sql=mysqli_query($conn,"SELECT * FROM `pass` WHERE `Applicaation ID` ='$ApplicationID' ");
$res=mysqli_fetch_array($sql);
?>

		<script>
				alert('Application  ID Received.<?php echo $ApplicaationID; ?>');
		</script>
				<?php
				if ($sql)
{
				$db=mysqli_select_db($conn,'e-pass');
				$sql=mysqli_query($conn,"insert into ksrtcadmin values('$res[0]','$res[1]','$res[2]','$res[3]','$res[4]','$res[5]','$res[6]','$res[7]','$res[8]','$res[9]','$res[10]','$res[11]','$res[12]','$res[13]','$res[14]','$res[15]','$res[16]')");

				if($sql>0)
            {
							echo " Application  has been Sent to Server Successfully........";
				?>
				<script>
							alert("Application  has been Sent to Server Successfully.");
							document.location="admin1.php";

				</script>
				<?php
            }
            else
            {
							echo " Application might have been sent before, Now Your application Submission has Not been Sent to Server..";
			?>
				<script>
							alert("Want To Update");
							document.location="admin1.php";

				</script>
			<?php
			
            }
       
    
                             
    }

$result = mysqli_query($conn,$sql);

mysqli_close($conn);
  
?>
</h1>





