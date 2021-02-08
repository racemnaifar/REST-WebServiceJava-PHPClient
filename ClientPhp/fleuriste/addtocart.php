<?php
include "HashMap.php";
session_start();
$code = $_REQUEST['code'];
$qte = $_REQUEST['qte'];
$liste = $_SESSION['list'];
$url = "http://localhost:8080/FleuristeApp/webresources/fleur/verifyQte?code=".$_REQUEST['code']."&qte=".$qte;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
$response = curl_exec($ch);
$con = json_encode($response);
$test = json_decode($con,true);
if($test[2] ==  "0")
{
echo "<script>alert('Quantity not available');window.location.replace('shoplist.php');</script>";
}
$nb = $_SESSION['nb']+1;
$_SESSION['nb'] = $nb;
$liste->addKey(intval($code),intval($qte));
$_SESSION['list'] = $liste;
header("Location: shoplist.php");

?>