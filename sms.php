<?php
//php sample code
error_reporting(0);
include('includes/config.php');
$sql = "select * from tbldonors where message ==$message";


$username='reuby';
$key='2ch1TJtStzaE4xm6hu44grQsPxjTOiOFtBZ2iDPxgBNFPzOCBX';
$phonenumber = mysql_query("SELECT * FROM tbldonors WHERE message=$message");
$message=urlencode('hello');
$live_url ='https://sms.movesms.co.ke/api/compose?username='.$username.'&api_key='.$key.'&sender='.$senderid.'&to='.$phonenumber.'&message='.$message.'&msgtype=5&dlr=0';
$parse_url=file($live_url);
$output1=  $parse_url[0];
echo $output1;


?>

Hello, 
Daniel Kamau, A patient at Kenyatta National Hospital requires blood type O Positive. If you have some time, please visit Kenyatta National Hospital and request to donate to them. 
From: Smart Donor 
http://smartdonor.co.ke