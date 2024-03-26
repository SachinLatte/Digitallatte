<?php 
if ($_FILES['cv']['error'] !== UPLOAD_ERR_OK) {
    die("Upload failed with error " . $_FILES['file']['error']);
}


ob_start();

require_once('db.php');

$job_id = $_POST['job_id'];

$full_name = trim($_POST['name']);

$email = trim($_POST['email']);

$mobile = trim($_POST['contact']);

$cover_letter = trim($_POST['cover_letter']);

/* $file_name        = $_FILES['photo']['name']; */

$file_name        = $_FILES['cv']['name'];


if($full_name!="" && $email!="" && $mobile!=""){
	

$html_message = "

<html>

<head>

<title>Job opening</title>

</head>

<body>

<h2 style='color:gray'>Job Opening Form</h2>

<table>

<tr>

<td style='font-weight:bold;'><span style='text-align:left'>Name</span> <span style='text-align:right'>:</span> </td>

<td>$full_name</td>

</tr>

<tr>

<td style='font-weight:bold;'><span style='text-align:left'>Email</span> <span style='text-align:right'>:</span> </td>

<td>$email</td>

</tr>

<tr>

<td style='font-weight:bold;'><span style='text-align:left'>Mobile No</span> <span style='text-align:right'>:</span> </td>

<td>$mobile</td>

</tr>

<tr>

<td style='font-weight:bold;'><span style='text-align:left'>Cover Letter</span> <span style='text-align:right'>:</span> </td>

<td>$cover_letter</td>

</tr>





</table>

</body>

</html>

";





$to = "hr@digitallatte.in";

$subject = "Job Opening";

$from = "webmaster@digitallatte.in";

$headers = "From: DigitalLatte <$from> \r\n";

$headers .= "MIME-Version: 1.0\r\n"

  ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";

 

$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"

  ."--1a2a3a\r\n";

 

$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"

  ."Content-Transfer-Encoding: 7bit\r\n\r\n"

  .$html_message."\r\n"

  ."--1a2a3a\r\n";

/* $tmp_name    = $_FILES['photo']['tmp_name'];  */

$tmp_name    = $_FILES['cv']['tmp_name']; 

$file = file_get_contents($tmp_name);





$message .= "Content-Type: image/jpg; name=\"$file_name\"\r\n"

  ."Content-Transfer-Encoding: base64\r\n"

  ."Content-disposition: attachment; file=\"$file_name\"\r\n"

  ."\r\n"

  .chunk_split(base64_encode($file))

  ."--1a2a3a--";

 

// Send email

 

$success = mail($to,$subject,$message,$headers);

   if (!$success) {

  echo "Mail to " . $to . " failed .";

   }else {

  echo "Success : Mail was send to " . $to ;

   }

 

 

$ip_address = $_SERVER['REMOTE_ADDR'];

$randomText = mt_rand();



if(isset($_FILES["photo"]["type"])){

	$upload_path = "admin/includes/js/";

		$validextensions = array("jpeg", "jpg", "png");

		$temporary = explode(".", $_FILES["photo"]["name"]);

		$file_extension = end($temporary);

		if ((($_FILES["photo"]["type"] == "image/png") || ($_FILES["photo"]["type"] == "image/jpg") || ($_FILES["photo"]["type"] == "image/jpeg")) && ($_FILES["photo"]["size"] < 100000000)//Approx. 100kb files can be uploaded.

		&& in_array($file_extension, $validextensions)) {

			if ($_FILES["photo"]["error"] > 0){

				echo "Return Code: " . $_FILES["photo"]["error"] . "<br/><br/>";

			}else{

				/* if (file_exists("uploads/photos" . $_FILES["photo"]["name"])) {

					echo $_FILES["photo"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";

				}else{ */

					$sourcePath = $_FILES['photo']['tmp_name'];

					$ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);

					

					$photoName = $randomText.date('YmdHis').'.'.$ext;

					$targetPath = $upload_path."uploads/photos/".$photoName;



					move_uploaded_file($sourcePath,$targetPath) ; 

				/* } */

			}

		}else{

			echo "<span id='invalid'>***Invalid file Size or Type***<span>";

		}

	}

	

	if(isset($_FILES["cv"]["type"])){
		$validextensions = array("pdf", "doc", "docx");

		$temporary = explode(".", $_FILES["cv"]["name"]);

		$file_extension = end($temporary);

		if (($_FILES["cv"]["size"] < 100000000) && in_array(strtolower($file_extension), $validextensions)) {

			if ($_FILES["cv"]["error"] > 0){

				echo "Return Code: " . $_FILES["cv"]["error"] . "<br/><br/>";

			}else{

				/* if (file_exists("uploads/cv" . $_FILES["cv"]["name"])) {

					echo $_FILES["cv"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";

				}else{ */

					$sourcePath = $_FILES['cv']['tmp_name']; 

					$cvext = pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);

					$cvName = $randomText.date('YmdHis').'.'.$cvext;

					$targetPath = $upload_path."uploads/cv/".$cvName; 



					move_uploaded_file($sourcePath,$targetPath);
                   

				/* } */

			}

		}else{

			echo "<span id='invalid'>No<span>";

		}

	}


$cover_letter=addslashes($cover_letter);

 $query = "INSERT INTO job_applications(job_id,full_name,email,phone_number,photo,cv,cover_letter,status,created_at,updated_at,ip_address) 

		VALUES($job_id,'$full_name','$email','$mobile','$photoName','$cvName','$cover_letter',1,NOW(),NOW(),'$ip_address')";



	if (mysqli_query($con, $query)){

		echo 1;

	}else{

		echo 0;

		//echo "Error: " . $query . "<br>" . mysqli_error($con);

		echo "Error while performing this operation!!";

	}


	mysqli_close($con);

	header("Location:application_thank_you.php?job_id=$job_id");

	die();
	
	
}


?>