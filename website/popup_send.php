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

$msg = "Name:- " . $name2 . "\r\n" . "Email:- " . $email2 . "\r\n" . "Phone:- (" . $c_code2 . ")" . $mobile2 . "\r\n" . "message:- " . $mess2 . "\r\n" . "IP Addr:- " . get_client_ipsp();
$headers = "From: $name2 <enquiry@gulf-realtor.ae>" . "\r\n" . "CC: enquiry@gulf-realtor.ae, internal-leads@drehomes.ae" . "\r\n" . "BCC: leads@drehomes.ae";

mail("ritik@websearchconsole.com", $ddate . ' Enquiry from Gulf-Realtor.ae' . $site_name, $msg, $headers);

echo'your message has been sent';
?>