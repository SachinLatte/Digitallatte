<?php 
$from = "webmaster@digitallatte.in";
$to = "ideas@digitallatte.in.test-google-a.com";
$subject = "Digitallatte : Test email";
$message = '
	<html>
		<head>
			<title>Digitallatte : Enquiry form</title>
		</head>
		<body>
			<p>Dear Admin, one request is submitted with following details.</p><br/>
		</body>
	</html>';

//$headers = "From:" . $from;

//$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
//$headers .= "From: DigitalLatte <webmaster@digitallatte.in>\r\n"; 

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: DigitalLatte <webmaster@digitallatte.in>' . "\r\n";
 
echo mail($to,$subject,$message, $headers);

echo json_encode(array('status' => 'success'));
?>