<?
$name  = $_REQUEST["name"];
$lastname  = $_REQUEST["lastname"];
$email = $_REQUEST["email"];
$phone   = $_REQUEST["phone"];
$jobtitle  = $_REQUEST["jobtitle"];
$msg   = $_REQUEST["msg"];
$to    = "info@izmasoft.com"; // ENTER YOUR EMAIL ADDRESS
if (isset($email) && isset($name) && isset($lastname)  && isset($msg)) {
    $email_subject = "$name Applied for a Job"; // ENTER YOUR EMAIL SUBJECT
        $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Email: $email <br/> Phone: $phone <br/> Jobtitle: $jobtitle <br/> Message: $msg";
    
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