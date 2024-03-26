<?php 
// error_reporting(1);
session_start();
//$con = mysqli_connect("localhost","root","","digitalLatte");
$con = mysqli_connect("sg2plcpnl0073.prod.sin2.secureserver.net","latteblogdb","Digital@#123","latteblogdb");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>