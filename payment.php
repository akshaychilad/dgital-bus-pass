<html xmlns=<"http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-PASS</title>
</head>
<link href="style2.css" rel="stylesheet">
<script>
function showUser(str)
{

   if (str == "")
   {
      document.getElementById("txtHint").innerHTML = "Invalid Application id";
      return;
   }


   if (window.XMLHttpRequest)
   {
      // code for IE7 + , Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
   }
   else
   {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   }



   xmlhttp.onreadystatechange = function()
   {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
      {
         document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
      }
   }
   xmlhttp.open("GET", "findacc.php?appid=" + str, true);
   xmlhttp.send();
}

function validated(str)
{

   if (str == "")
   {
      document.getElementById("err").innerHTML = "...";
      return;
   }


   if (window.XMLHttpRequest)
   {
      // code for IE7 + , Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
   }
   else
   {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   }



   xmlhttp.onreadystatechange = function()
   {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
      {
         document.getElementById("err").innerHTML = xmlhttp.responseText;
      }
   }
   xmlhttp.open("GET", "validate.php?appid=" + str, true);
   xmlhttp.send();
}

</script>
<style type="text/css">

 body {
  background-image: url(images/147.jpeg);
   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 }

</style>
<body>

<center><h1 align="left" id="menus">PAYMENT OF PASS</h1>
<hr color="blue">
 <a href="home.php" id="menus"> HOME</a><br>
 
 <br>
 <div id="menu2">
 
   <form id="payment_form" class="" action="PaytmKit/pgRedirect.php" method="POST" enctype="multipart/form-data" style="bgcolor:#B3E7E;">
<table border="0" class="labelname1" align="center" id="menus">
   <tr>
	
      
    <td><label>Application id:</label></td><td><input name="appid" id="appid" type="text" onBlur="showUser(this.value) maxlength="40" >
      </td><td color="red"><div id="txtHint" bgcolor="red"> </div></td>
   
      <td>Note: as Assinged by the time of Pass Registration </td>
   </tr>
   <tr>
	
      <td><label>Name</label></td>
        <td><input name="name" id="name" type="text" maxlength="40"></td>

   </tr>
   <tr>
      
    
<tr>
      <td><label>Pass Amount:</label></td>
      <td><input name="amount" id="amount" type="text" value="1455" maxlength="40"></td>
      
   </tr>
   
   
   <tr><td>&nbsp;
</td><td><input id="submit" type="submit" value="Make Payment" /></td>
 <td>&nbsp;  
</td>
   </tr>
</table>

</form>						

</div>
<hr>
<br>
</center>
</body>
</html>
