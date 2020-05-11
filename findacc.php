<?php
$conn=mysqli_connect('localhost','root','') or die("Got some Problem!");
$db=mysqli_select_db($conn,'e-pass') or die("Cannot Connect To DB");
$appid = $_GET['appid'];

$sql =mysqli_query($conn,"SELECT *
FROM `pass`
WHERE `Applicaation ID` = '$appid'");
$res=mysqli_fetch_array($sql);
if($res['Applicaation ID']==$appid)
{
  echo "<img src='upload/OK.png' hight='100' width='100'> Application found you may proceed....<img src='upload/lb.gif' hight='100' width='100'>";
}
 else
{
  echo "<img src='upload/err.jpg' hight='30' width='30'>Invalid Application id...";
}

mysqli_close($conn);

?>
