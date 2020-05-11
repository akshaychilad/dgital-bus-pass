<html>

<head>

<title></title>

</head>

<body>
 <?php
 include('db.php');
$cname=$_POST['cn'];
$port=$_POST['pt'];
$accno=$_POST['accno'];
$email=$_POST['email'];
$acno=$accno;
$feedback=$_POST['feedback'];
if(isset($_POST['email']))
{
    $email_to = "tahiritguru@gmail.com";

    $email_subject = $cname."Mail with respect to request for porting";



    function died($error)
     {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }





    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email))
  {

    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$cname))
  {

    $error_message .= 'The First Name you entered does not appear to be valid.<br />';

  }

  if(!preg_match($string_exp,$port))
   {

    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';

  }

  if(strlen($feedback) < 2)
  {

    $error_message .= 'The Comments you entered do not appear to be valid.<br />';

  }

  if(strlen($error_message) > 0)
  {

    died($error_message);

  }

    $email_message = "Form details below.\n\n";



    function clean_string($string)
    {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "C Name ".clean_string($cname)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Email: ".clean_string($port)."\n";

    $email_message .= "Telephone: ".clean_string("9854785484")."\n";

    $email_message .= "Comments: ".clean_string($feedback)."\n";





// create email headers

$headers = 'From: '.$email."\r\n".

'Reply-To: '.$email."\r\n" .

'X-Mailer: PHP/' . phpversion();
 ini_set($email,$email);
@mail($email_to, $email_subject, $email_message, $headers);
}
else
{
echo "Great..";
}
echo "Note Down The Reg Id For Futher Reference:<br><h1>";
echo substr($regid,0,10)."</h1><br>";
 ?>
 <hr>
</body>

</html>
