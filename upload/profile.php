 <?PHP
session_start();
     ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BANP SYSTEM</title>
</head>
<style>
body {
    background-image: url("upload/header.gif");
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.contained 
{ width:200px; 
margin:2 auto; 
margin-top:10px; 
min-height:10px; 
padding:5px; 
-moz-box-shadow: 10px 10px 12px #F07B7B;
-webkit-box-shadow: 10px 10px 12px #F07B7B;
box-shadow:10px 10px 12px #F07B7B;
}

.contain 
{ width:500px; 
margin:0 auto; 
border:10px green dashed; 
margin-top:20px; 
min-height:300px; 
padding:5px; 
-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;
}
.right 
{
    position: absolute;
    right: 0px;
    width: 500px;
    background-color: #b0e0e6;
}

a{
background:#D3FCCD;
width: 400px;
height: 300px;
-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;
}
.img{
background:#D3FCCD;
width: 100px;
height: 100px;
-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;
}
.img1{
background:#D3FCCD;
align:center;
width: 800px;
height: 200px;
-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;
}
input { font-size:18px; color:white; background:green; padding:10px; width:200px; margin-top:25px;}

.labelname { font-size:20px; font-weight:bold; font-family:Copperplate Gothic Bold,Cambria (Headings),Bradley Hand ITC; color:#33C; padding:10px; -moz-box-shadow: 6px 10px 12px #888;  -webkit-box-shadow: 6px 6px 12px #888; box-shadow:6px 10px 12px #888; }

.labelname1 { font-size:25px; font-weight:bold; font-family:Cambria (Headings),Bradley Hand ITC; color:GREEN; padding:10px; -moz-box-shadow: 6px 10px 12px #888;  -webkit-box-shadow: 6px 6px 12px #888; box-shadow:6px 10px 12px #888; alighn="right" }

#submit { width:220px; height:40px;font-weight:bold; padding:2px; background-color:brown; align:right; font-size:22px;}

h1 { color:white; font-size:22px; background-color:#CCC; padding:10px; }

h2 { color:white; font-size:22px; background-color:pink; padding:10px; }
h3 { color:#654; font-size:15px;}
h4 { color:#333; font-size:18px;background-color:pink;}

</style>

<script>$(function(){$( document ).tooltip();}); </script>
<script>
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) 
{
document.getElementById("user")=cname;
alert(cname.Name);
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) 
	{
        
	var c = ca[i];
        while (c.charAt(0)==' ') 
	c = c.substring(1);
        if (c.indexOf(name) != -1) 
     	return c.substring(name.length, c.length);
        }
    return "";
}
document.write(cvalue);
function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        return "";
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 365);
        }
    }
}
</script>

<style>label{ display: inline-block;width: 8em;}
</style>
<body onload="checkCookie();">
<table align="left" width="1400">
<th background-image="upload/header.gif" width="900">
BANK ACCOUNT NUMBER PORTABILITY INTEGRATED SYSTEM
</th>
<tr> <td><img src="upload/sl.png" align="left"/></td><td height="40">
<marquee behaviour="alternate" scroll="alternate" class="contained" ><a href="#">Latest Updates on Policies</a></marquee></td><td><img src="upload/sr.png" align="left"/></td></tr>
<tr>
<td>
<li>
<a href="#"><ul class="contained" onmouseover="style='width:280px;  margin:2 auto;  margin-top:10px;  min-height:10px;  padding:5px;  -moz-box-shadow: 10px 10px 12px #8569F3; -webkit-box-shadow: 10px 10px 12px #8569F3; box-shadow:10px 10px 12px #8569F3;'" onmouseout="style='width:200px; margin:2 auto; margin-top:10px; min-height:10px; padding:5px; -moz-box-shadow: 10px 10px 12px #8569F3;-webkit-box-shadow: 10px 10px 12px #8569F3;box-shadow:10px 10px 12px #8569F3;'">View Feedback on Service from Govt. </ul></a>

</li> 
</td>
<td></td>
<td>
    <table align="right" width="800">
	<tr>
	<td>

<?php
include('db.php');
$sql="select * from complaints";
$res=mysql_query($sql);
?>
</td>
</tr>
</table>
</body>

</html>