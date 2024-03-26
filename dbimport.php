<?php

// Name of the file
$filename = 'mjdemo.sql';
// MySQL host
$mysql_host = 'sg2plcpnl0073.prod.sin2.secureserver.net';
// MySQL username
$mysql_username = 'mjwaresusanew';
// MySQL password
$mysql_password = 'Frd!23@keGq3w#sd';
// Database name
$mysql_database = 'mjwaresusanew';

// Connect to MySQL server
$conn = mysqli_connect($mysql_host, $mysql_username, $mysql_password,$mysql_database);
//or die('Error connecting to MySQL server: ' . mysqli_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysqli_query($conn,$templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
 echo "Tables imported successfully";
?>