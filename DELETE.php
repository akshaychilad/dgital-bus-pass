
<?php
include('dbconnection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
require 'vendor/autoload.php';


$ApplicaationID = $_GET['ApplicaationID'];

//Hide values from database
$q=mysqli_query($conn,"update `pass` set display=false where `Applicaation ID`= '$ApplicaationID'") or die (mysqli_error($conn));

$sql=mysqli_query($conn,"SELECT * FROM `pass` WHERE `Applicaation ID` = '$ApplicaationID'");
$res=mysqli_fetch_array($sql);


if ($sql)
{
    $db=mysqli_select_db('e-pass');
	
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
				try {
					//Server settings
					$mail->SMTPDebug = 2;                                 // Enable verbose debug output
					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
					$mail->SMTPAuth = true;                               // Enable SMTP authentication
					$mail->Username = 'digi.pass.git@gmail.com';                 // SMTP username
					$mail->Password = '9019121012';                           // SMTP password
					$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
					$mail->Port = 587;                                    // TCP port to connect to
					//echo !extension_loaded('openssl')?"Not Available":"Available";
					//Recipients
					$mail->setFrom('theexileserver@gmail.com','Digital bus pass');// 'Mailer'
					//$mail->addAddress('akkic2229@gmail.com', 'akshay');     // Add a recipient
					$mail->addAddress('akshaychilad@gmail.com');               // Name is optional
					//$mail->addReplyTo('info@example.com', 'Information');
					//$mail->addCC('cc@example.com');
					//$mail->addBCC('bcc@example.com');
					$mail->SMTPOptions = array(
						'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true
						)
					);
	
					//Content
					$mail->isHTML(true);                                  // Set email format to HTML
					$mail->Subject = 'Regarding Your bus pass application';
					//$code=rand(1111,9999);
					$mail->Body    = 'Dear '.$res['fname'].' Your Application for bus pass is rejected.Please contact your college for further details ';
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					$mail->send();
					echo 'Message has been sent';
					header('Location:admin1.php');
					
				} catch (Exception $e) {
				    echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				}
    
  
  	
                       
mysqli_close($conn);
}
?>
<script>
alert("Application  has been Deleted");
document.location="admin1.php";

</script>