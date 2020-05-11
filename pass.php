<?php
session_start();
$id=uniqid();
$_session['id']=$id;
?>
<link href="style2.css" rel="stylesheet">

		
<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	<link type="text/css" href="demos.css" rel="stylesheet" />
	<script type="text/javascript">
	$(function() {		
		$('#bdate').datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:2010'
		});
		$('#txtjoin').datepicker({
			changeMonth: true,
			changeYear: true,
		});		
	});
	</script>


<script type="text/javascript">
function isNumberKey(evt)
      {

         var charCode = (evt.which) ? evt.which : event.keyCode
		//alert(charCode);
         if (charCode > 63 && charCode < 92 )
      	 {              
		 return true;
	 }
	 else if (charCode > 96 && charCode < 123 )
      	 {
		 return true;
	 }
	 else
	 {
                             alert("should be alphabet");
	  	return false;
	 }
     }
function validate() 
{
if(document.form1.fname.value=="")
{
	alert("Enter First Name");
	document.form1.fname.focus();
	return false;
}
if(document.form1.lname.value=="")
{
	alert("Enter Last Name");
	document.form1.lname.focus();
	return false;
}
if(document.form1.emailid.value=="")
{
	alert("Enter Email ID");
	document.form1.emailid.focus();
	return false;
}
	ml = document.form1.emailid.value;
		pos1 = ml.indexOf("@")
		pos = ml.indexOf(" ")
		pos2 = (pos1+1)
		server = ml.substring(pos2);
		server_pos = server.lastIndexOf(".")
		reqtype = server.substring(server_pos+1)
		type_end = reqtype.substring(reqtype.length-1)

if(ml.length<8)
	{
			document.form1.emailid.focus();
			document.form1.emailid.select();
			alert("emailid length cannot be less than 8 characters");
			return false;  
	}
		 if(ml.indexOf("@")==-1)
		{
			document.form1.emailid.focus();
			document.form1.emailid.select();
			alert("The emailid Address must contain '@' sign");
			return false;  
		}
		 if(pos1<1)
		{
			document.form1.emailid.focus();
			document.form1.emailid.select();
			alert("emailid address cannot start with '@' sign");
			return false;  
		}  
		if(ml.indexOf(".")==-1)
		{
			document.form1.emailid.focus();
			document.form1.emailid.select();
			alert("The emailid Address must contain '.' sign");
			return false;  
		}
		if(pos!=-1)
		{
			document.form1.emailid.focus();
			document.form1.emailid.select();
			alert("The emailid Address cannot contain spaces");
			return false;  
		}
		if(server.indexOf("@")!=-1)
		{
			document.form1.emailid.focus();
			document.form1.emailid.select();
			alert("A valid emailid must contain only one '@' sign");
			return false;  
		} 
		if(server.indexOf(".")==0)
		{
			document.form1.emailid.focus();
			document.form1.emailid.select();
			alert("There should some text between '@' and '.' sign");
			return false;  
		} 
		if(reqtype=="")
		{  
			document.form1.emailid.focus();
			document.form1.emailid.select();
			alert("emailid Id should end with character(like .com,.net,.org)");
			return false;  
		}
		if(type_end.toUpperCase()<"A" || type_end.toUpperCase()>"Z")
		{
			document.form1.emailid.focus();
			document.form1.emailid.select();
			alert("emailid Id should not end with number or symbol");
			return false;  
		}



if(document.form1.password.value=="")
{
	alert("Enter Password");
	document.form1.password.focus();
	return false;
}
if(document.form1.confpass.value=="")
{
	alert("Please confirm the Password");
	document.form1.confpass.focus();
	return false;
}
if(document.form1.address.value=="")
{
	alert("Enter the Address");
	document.form1.address.focus();
	return false;
}
if(document.form1.city.value=="")
{
	alert("Enter the City");
	document.form1.city.focus();
	return false;
}
if(document.form1.zip.value=="")
{
	alert("Enter the Zip");
	document.form1.zip.focus();
	return false;
}
if(document.form1.phone.value=="")
{
	alert("Enter Phone No");
	document.form1.phone.focus();
	return false;
}
if(document.form1.mobile.value=="")
{
	alert("Enter Mobile Number");
	document.form1.mobile.focus();
	return false;
}
}
</script>
<body>
   
		<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="passcheck.php" onsubmit="return validate()">		
			<a href="Home.php" title="Click go to Home"> Home</a><br>

</div>

               <table width="522" border="0" align="center">
			  <tr bgcolor="#CCFFFF">
			    <th height="33" scope="row" align="left">User information:</th>
			    <td>&nbsp;</td>
		      </tr>
                            <tr>
			    <th width="170" height="33" scope="row">Applicaation ID</th>
			    <td width="247">
			      <label for="ApplicaationID"></label>
			      <input name="ApplicaationID" type="" id="ApplicaationID" value="<?php echo $id?>"/>
              </td>
		      </tr>
			  <tr>
			    <th width="170" height="33" scope="row">First Name</th>
			    <td width="247">
			      <label for="lname"></label>
			      <input name="fname" type="text" id="fname" size="35"   onKeyPress="return isNumberKey(event)"/>
		        </td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Last Name
			      <label for="lname"></label></th>
			    <td><input name="lname" type="text" id="lname" size="35"  onKeyPress="return isNumberKey(event)" /></td>
		      </tr>
			  <tr>
			    <th height="36" scope="row">Email Id</th>
			    <td><label for="email"></label>
		        <input name="email" type="text" id="email" size="35" /></td>
		      </tr>
                          <tr>
			    <th height="36" scope="row">Gender</th>
			    <td>                  
                          <input type="radio" name="gender"value="Male">Male            
                            
                           <input type="radio" name="gender"value="Female">Female  
                          </td>
		      
                          </tr>
              <tr>
           <th height="37" scope="row">
			      <label>Date of birth</label></th>
			    <td><input type="text" name="bdate"id="bdate" readonly="yes"> </td>
               
             </tr>
                  <tr>
			    <th width="170" height="33" scope="row">college name</th>
			    <td width="247">
			      <label for="collegename"></label>
			      <input name="collegename" type="text" id="collegename" size="35"   onKeyPress="return isNumberKey(event)"/>
		        </td>
		      </tr>




			 
			  <tr align="left" bgcolor="#CCFFFF">
			    <th height="29" colspan="2" scope="row"><u>Contact information</u></th>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Address</th>
			    <td><textarea name="address" cols="35" id="address"></textarea></td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">City</th>
			    <td><input name="city" type="text" id="city" size="35" /></td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Zip code</th>
			    <td><input name="zipcode" type="text" id="zipcode" size="35"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/></td>
		                 </tr>
			  <tr>
			    <th height="37" scope="row">Phone No</th>
			    <td><label for="date"></label>
		        <input name="phone" type="text" id="phone" size="35"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/></td>
		      </tr>
			  <tr>
			    <th scope="row">Mobile No</th>
			    <td><label for="mobile"></label>
		        <input name="mobile" type="text" id="mobile" size="35"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/></td>
		      </tr>





                     <tr align="left" bgcolor="#CCFFFF">
			    <th height="29" colspan="2" scope="row"><u>Bus Route information</u></th>
		      </tr>
			  <tr>
			    <th height="37" scope="row">From</th>
			    <td><input  name="From" cols="35" id="From"></textarea></td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">To</th>
			    <td><input name="To" type="text" id="To" size="35" /></td>
		      </tr>
                           <tr>
			    <th width="170" height="33" scope="row">student photos</th>
			    <td width="247">
			      <label for="studentphotos"></label>
			     <input name="studentphotos" type="file" id="studentphotos" class=""/>
		        </td>
		      </tr>
 <tr>
			    <th width="170" height="33" scope="row">Address Prof</th>
			    <td width="247">
			      <label for="Address Prof"></label>
			       <input name="AddressProf" type="file" id="AddressProf" class=""/>
		        </td>
		      </tr>


                   <tr>
			    <th scope="row">&nbsp;</th>
			    <td><br />  <input type="submit" name="submit" id="submit" value="Register"  /></td>
		      </tr>
	      </table>
		</form>
     
			<p>&nbsp;</p>
<br />					
											
		</div>			
		
<!-- wrap ends here -->
</div>
