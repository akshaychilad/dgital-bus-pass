// JavaScript Document

var http = getHTTPObject(); // We create the XMLHTTPRequest Object

// to call from form 

function doAction(url,result) {
           
    http.open("GET", url , true);
    http.onreadystatechange = function()
	{
    	if (http.readyState == 4) 
		{
        	if (http.status == 200) 
			{
				
				var message = http.responseText;
					if (message==0)
					{	
           		 		//document.getElementById(result).innerHTML="<div id=\"div_team_login\" align=\"center\" ><font color=\"red\"> !! Invalid Team name Or Password</font></div>";
						document.getElementById(result).innerHTML="Invalid UserId / Password !";
						document.getElementById(result).style.color="red";
						
						document.getElementById("user_name").value="";
						document.getElementById("password").value="";
						//alert("hi");
						document.getElementById("user_name").focus();
						return "0";
        			}
					else
					{
						//return "1";
						//document.getElementById(result).innerHTML="<div >valid</div>";
						document.login.submit();
					}
			}
			else 
			{
            	alert ( "Not able to retrieve name" );
        	}
    	}    
	}
	http.send(null);
}

function getHTTPObject()
 {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } 
    return xmlhttp;
 }