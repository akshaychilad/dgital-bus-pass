
<div id="sidebar" >							
			
			<h1>Sidebar Menu</h1>
			<div class="left-box">
				<ul class="sidemenu">
                    <?php
				if(isset($_SESSION[ApplicationID]))
				{
					?>
					<li><a href="Apply Pass.php">Apply Pass</a></li>
                    <li><a href="Renew Pass.php">Renew Pass</a></li>
                    <li><a href="view Profile.php">View Profile</a></li>
                    <li><a href="Status Of Pass.php">Status of pass</a></li>
                      <li><a href="Feedback.php">FeedBack</a></li>
                          <li><a href="logout.php">Logout</a></li>
					<?php
				}
				else if(isset($_SESSION[ApplicationID]))
				{
					?>
					
                    <li><a href="logout.php">Logout</a></li>
					<?php
				}
				
				else
				{
					?>
                    <li><a href="index.php">Home</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="registration.php">Registration</a></li>
					<?php
				}
				?>
                    
				</ul>
			</div>
</div>		
		
