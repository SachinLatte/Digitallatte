<?php 
//$from = "webmaster@digitallatte.in";
$to = "ideas@digitallatte.in";
//$to = "bhavna11patidar@gmail.com";
$subject = "DigitalLatte : Anniversary Celebration Form ";
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$take_your_pick=$_POST['take_your_pick'];
$email=$_POST['email'];
$user_message=$_POST['message'];
$message = '
	<html>
		<head>
			<title> DigitalLatte : Anniversary Celebration Form </title>
		</head>
		<body>
			<p>Dear Admin, one request is submitted with following details.</p><br/>
			<table>
				<thead>
					<th>Name</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Take your Pick</th>
					<th>User Message</th>
				</thead>
				<tbody>
					<td>'.$name.'</td>
					<td>'.$mobile.'</td>
					<td>'.$email.'</td>
					<td>'.$take_your_pick.'</td>
					<td>'.$user_message.'</td>
				</tbody>
			</table>
		</body>
	</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: DigitalLatte <webmaster@digitallatte.in>' . "\r\n";
 
$retval = mail($to,$subject,$message, $headers);

	if( $retval == true ) {
        echo 1;
     }else {
        echo 0;
     }
?>