<?php 
$name = trim($_REQUEST['name']);
$email = trim($_REQUEST['email']);
$mobile = trim($_REQUEST['contact']);
$msg = trim($_REQUEST['message']);

if($name!="" && $email !="" && $mobile !="" && $msg !=""){
//$to = "ideas@digitallatte.in";
	$to = "ideas@digitallatte.in";
	$subject = "Lets Talk : Enquiry";

	$message = "
	<html>
	<head>
	<title>Lets Talk Form</title>
	</head>
	<body>
	<p>Lets Talk Form</p>
	<table>
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Mobile No</th>
	<th>Message</th>
	</tr>
	<tr>
	<td>$name</td>
	<td>$email</td>
	<td>$mobile</td>
	<td>$msg</td>
	</tr>
	</table>
	</body>
	</html>
	";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: DigitalLatte <webmaster@digitallatte.in>' . "\r\n";
    $res=array();
	if(mail($to,$subject,$message,$headers)){
		$res = array("response"=>1,"message"=>"Thanks, we will consider your feedback.");
		echo json_encode($res);		
	}else{
		$res = array("response"=>0,"message"=>"Something went wrong!!");
		echo json_encode($res);
	}
}

