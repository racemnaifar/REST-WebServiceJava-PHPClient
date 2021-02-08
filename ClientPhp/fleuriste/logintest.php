<?php
	session_start();
$url = "http://localhost:8080/FleuristeApp/webresources/client/GetById?username=".$_POST['login'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
$response = curl_exec($ch);
$new = simplexml_load_string($response);
$con = json_encode($new);
$client = json_decode($con,true);
if($client == null){
	header("Location: login.php");
}
else{
	$_SESSION['client']=$_POST['login'];
	header("Location: shoplist.php");	
}
?>