
<?php
include('dbconnection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
require 'vendor/autoload.php';

$conn=mysqli_connect('localhost','root','') or die("Got some Problem!");

$db=mysqli_select_db($conn,'e-pass') or die("Cannot Connect To DB");

$ApplicaationID = '5cbc3816ea02b';

//Hide values from database
$q=mysqli_query($conn,"update `pass` set display=false where `Applicaation ID`= '$ApplicaationID'") or die (mysqli_error($conn));

$sql=mysqli_query($conn,"SELECT * FROM `pass` WHERE `Applicaation ID` = '$ApplicaationID'");
$res=mysqli_fetch_array($sql);


if ($sql)
{
    $db=mysqli_select_db($conn,'e-pass');
	
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
					$tmp_name    = 'D.png'; // get the temporary file name of the file on the server 
    $name        = $tmp_name ['name'];  // get the name of the file 
    $size        = $tmp_name['size'];  // get size of the file for size validation 
    $type        = $tmp_name['type'];  // get type of the file 
    $error       = $tmp_name['error']; // get the error (if any) 
  
    //validate form field for attaching the file 
    if($file_error > 0) 
    { 
        die('Upload error or No files uploaded'); 
    } 
  
    //read from the uploaded file & base64_encode content 
    $handle = fopen($tmp_name, "r");  // set the file handle only for reading the file 
    $content = fread($handle, $size); // reading the file 
    fclose($handle);                  // close upon completion 
  
    $encoded_content = chunk_split(base64_encode($content)); 
  
    $boundary = md5("random"); // define boundary with a md5 hashed value 
  
    //header 
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version 
    $headers .= "From:".$from_email."\r\n"; // Sender Email 
    $headers .= "Reply-To: ".$reply_to_email."\r\n"; // Email addrress to reach back 
    $headers .= "Content-Type: multipart/mixed;\r\n"; // Defining Content-Type 
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary 
          
    //plain text  
    $body = "--$boundary\r\n"; 
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n"; 
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";  
    $body .= chunk_split(base64_encode($message));  
          
    //attachment 
    $body .= "--$boundary\r\n"; 
    $body .="Content-Type: $file_type; name=".$file_name."\r\n"; 
    $body .="Content-Disposition: attachment; filename=".$file_name."\r\n"; 
    $body .="Content-Transfer-Encoding: base64\r\n"; 
    $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";  
    $body .= $encoded_content; // Attaching the encoded file with email 
      
    $sentMailResult = mail($recipient_email, $subject, $body, $headers); 
  
    if($sentMailResult )  
    { 
       echo "File Sent Successfully."; 
       unlink($name); // delete the file after attachment sent. 
    } 
    else
    { 
       die("Sorry but the email could not be sent. 
                    Please go back and try again!"); 
    } 


					$mail->send();
					echo 'Message has been sent';
					header('Location:admin1.php');
					
				}
				catch (Exception $e) {
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