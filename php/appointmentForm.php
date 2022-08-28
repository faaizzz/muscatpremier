<?
$doctor = $_REQUEST["doctor"];
$date = $_REQUEST["date"];
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone  = $_REQUEST["phone"];
$to    = "info@izmasoft.com"; // ENTER YOUR EMAIL ADDRESS
if (isset($email) && isset($name) && isset($msg)) {
    $email_subject = "$name booked an appointment via Muscat Premier Contact Form"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "Doctor: $doctor <br/> Appointment Date: $date <br/> Patient Name: $name <br/> Patient Email: $email <br/> Patient Phone Number: $phone";
	
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