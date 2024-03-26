<?php 
$name = trim($_REQUEST['name']);
$email = trim($_REQUEST['email']);
$mobile = trim($_REQUEST['mobile']);
$company = trim($_REQUEST['company']);
$package = trim($_REQUEST['package']);
$pagename = trim($_REQUEST['pagename']);

if($name!="" && $email !="" && $mobile !=""){  
	$to = "ideas@digitallatte.in";
	//$to = "darshan@digitallatte.in"; 
	
	$sub = $package?$package:$pagename;
	$subject = "Package Enquiry : ".$sub;

	$message = "
	<html>
	<head>
	<title>Lets Talk Form</title>
	</head>
	<body>
	<p>Lets Talk Form</p>
	<table>
	<tr>
	<th>Page Name</th>
	<th>Name</th>
	<th>Email</th>
	<th>Mobile No</th>
	<th>Company Name</th>";
	if($package){ $message .= "<th>Package Requested</th>"; }
	$message .="</tr>
	<tr>
	<td>$pagename</td>
	<td>$name</td>
	<td>$email</td>
	<td>$mobile</td>
	<td>$company</td>";
	if($package){ $message .= "<td>$package</td>"; }
	$message .="
	</tr>
	</table>
	</body>
	</html>
	";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: DigitalLatte <webmaster@digitallatte.in>' . "\r\n";

	if(mail($to,$subject,$message,$headers)){
		$res = array("response"=>1,"message"=>"Thanks, we will consider your feedback.");
		echo json_encode($res);
		exit;
	}else{
		$res = array("response"=>0,"message"=>"Something went wrong!!");
		echo json_encode($res);
		exit;
	}
}

