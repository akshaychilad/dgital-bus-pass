
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<link rel="stylesheet" href="images/Underground.css" type="text/css" />			

<title>E-Pass</title>	

</head>

<body>
<!-- wrap starts here -->
<div id="wrap">

		<!-- header -->
		<div id="header">			
						
			<span id="slogan">  Complete Bus Pass Solutions...</span>
			
			<!-- tabs -->
		    <ul>
				<li id="current"><a href="index.php"><span>Home</span></a></li>
                <?php
                if(isset($_SESSION[ApplicationID]))
				{	
                echo " <li><a href='home.php'><span>A</span></a></li>";
				}
				else
				{
           		echo "<li><a href='login.html'><span>Login</span></a></li>
				<li><a href='registration.php'><span>Registration</span></a></li>";
				}
				?>
				<li><a href="1"><span>Help</span></a></li>
				<li><a href="2><span>FAQ</span></a></li>
				<li><a href="3"><span>Fare</span></a></li>		
			</ul>					
		</div>
		
		<div id="header-logo">			
			
			<div id="logo">E-<span class="red">Pass</span></div>		
			
			<form method="post" class="search" action="#">
				<p>&nbsp;</p>
			</form>
						
		</div>
		
