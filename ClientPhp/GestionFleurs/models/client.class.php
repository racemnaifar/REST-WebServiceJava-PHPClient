<?php
class client extends fonction
{
private $nomPrenom;
private $email;
private $username;
private $motdepasse;


public function __construct($nomPrenom, $email, $username, $motdepasse)
{
$this->nomPrenom = $nomPrenom;
$this->email = $email;
$this->username = $username;
$this->motdepasse = $motdepasse;
}

public function supp(){
	$url = "http://localhost:8080/FleuristeApp/webresources/client?username=".$this->username;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"DELETE");
	$response = curl_exec($ch);
	$this->redirect("index_Admin.php?controller=client&action=liste");
}

public function liste(){
	$url = "http://localhost:8080/FleuristeApp/webresources/client";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
	$response = curl_exec($ch);
	$new = simplexml_load_string($response);
	$con = json_encode($new);
	$clients = json_decode($con,true);
	return $clients;
}

}
?>