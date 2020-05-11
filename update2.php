<?php

$conn=mysqli_connect('localhost','root','') or die("Got some Problem!");

$db=mysqli_select_db('e-pass') or die("Cannot Connect To DB");

$ApplicaationID = $_GET[ApplicaationID];
$sql=mysqli_query("SELECT *
FROM `pass`
WHERE `Applicaation ID` = '$ApplicaationID'");
$res=mysqli_fetch_array($sql);
if ($sql)
{
    $db=mysqli_select_db('e-pass');
    
  
         
         $sql=mysqli_query("insert into ksrtcadmin values('$res[0]','$res[1]','$res[2]','$res[3]','$res[4]','$res[5]','$res[6]','$res[7]','$res[8]','$res[9]','$res[10]','$res[11]','$res[12]','$res[13]','$res[14]')");
        
             if($sql)
            {
                 echo " Application  has been Sent to Server Successfully........";
                 
            }
            else
            {
                echo "Not Sent Data To  ksrtc  Server...";
            }
         
    
                             
    }

$result = mysqli_query($sql);

mysqli_close($conn);
  
?>

<script>
alert("Application  has been Sent to Server Successfully.");
document.location="admin1.php";

</script>




