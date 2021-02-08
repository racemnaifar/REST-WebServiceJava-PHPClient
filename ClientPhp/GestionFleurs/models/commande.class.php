<?php
class commande extends fonction
{
private $code;
private $date;
private $id_client;

public function __construct($code, $date, $id_client)
{
$this->code = $code;
$this->date = $date;
$this->id_client = $id_client;
}

public function add(){
	$this->redirect("index_Admin.php?controller=commande&action=liste");
}

public function edit(){
	$this->redirect("index_Admin.php?controller=commande&action=liste");
}
	
public function supp(){
	$this->redirect("index_Admin.php?controller=commande&action=liste");
}

public function liste(){
	$url = "http://localhost:8080/FleuristeApp/webresources/commande";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
	$response = curl_exec($ch);
	$new = simplexml_load_string($response);
	$con = json_encode($new);
	$commandes = json_decode($con,true);
	return $commandes;
}

public function detail(){
	$url = "http://localhost:8080/FleuristeApp/webresources/commande/GetByCode?codeCom=".$this->code;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
	$response = curl_exec($ch);
	$new = simplexml_load_string($response);
	$con = json_encode($new);
	$commande = json_decode($con,true);
	return $commande;
}

public function deconnecter(){
		session_destroy();
		$this->redirect("index.php");	
}
}
?>