<?
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone   = $_REQUEST["phone"];
$visitedUsBefore  = $_REQUEST["visitedUsBefore"];
$subject   = $_REQUEST["subject"];
$msg   = $_REQUEST["msg"];
$to    = "info@izmasoft.com"; // ENTER YOUR EMAIL ADDRESS
if (isset($email) && isset($name) && isset($msg)) {
    $email_subject = "$name sent you a message via Muscat Premier Contact Form"; // ENTER YOUR EMAIL SUBJECT
        $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Email: $email <br/> Phone: $phone <br/> Visited Us Before: $visitedUsBefore <br/> Subject: $subject <br/> Message: $msg";
    
   $mail =  mail($to, $email_subject, $msg, $headers);
  if($mail)
    {
        echo 'success';
    }

else
    {
        echo 'failed';
    }
}

?>