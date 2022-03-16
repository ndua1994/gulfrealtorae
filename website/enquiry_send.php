<?php

date_default_timezone_set("Asia/Dubai");
$ddate = date(' d-m-Y H:i:s');

function get_client_ipsp() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
	$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
	$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
	$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
	$ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
	$ipaddress = $_SERVER['REMOTE_ADDR'];
    else
	$ipaddress = 'UNKNOWN';
    return $ipaddress;
}

extract($_POST);
$site_name = str_replace("http://", "", $site_name);
$site_name = str_replace(".php", "", $site_name);

$msg = "Name:- " . $name3 . "\r\n" . "Email:- " . $email3 . "\r\n" . "Phone:- (" . $c_code3 . ")" . $mobile3 . "\r\n" . "message:- " . $mess3 . "\r\n" . "IP Addr:- " . get_client_ipsp();
$headers = "From: $name3 <enquiry@gulf-realtor.ae>" . "\r\n" . "CC: enquiry@gulf-realtor.ae" . "\r\n" . "BCC: ritik@websearchconsole.com";

mail("ritik@websearchconsole.com",$ddate.' Enquiry from '. $site_name.'(Footer Form)',$msg,$headers); 
echo'your message has been sent';
?>