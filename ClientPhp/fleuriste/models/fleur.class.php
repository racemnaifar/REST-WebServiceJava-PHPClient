<?php
class fleur extends fonction
{
private $code;
private $lib;
private $categorie;
private $couleur;
private $qte;


public function __construct($code, $lib, $categorie, $couleur, $qte)
{
$this->code = $code;
$this->lib = $lib;
$this->categorie = $categorie;
$this->couleur = $couleur;
$this->qte = $qte;
}

public function add(){
	$data = array("code" => "4", "lib" => "$this->lib", "categorie" => "$this->categorie", "couleur"=>"$this->couleur", "qte"=>"$this->qte");                                                                    
	$data_string = json_encode($data); 

	$url = "http://localhost:8080/FleuristeApp/webresources/fleur";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
	);                                                                                                                                                                                                                                        
	$result = curl_exec($ch);
	$this->redirect("index_Admin.php?controller=fleur&action=liste");
}

public function edit(){
	$this->redirect("index_Admin.php?controller=fleur&action=liste");

}

public function supp(){
	$url = "http://localhost:8080/FleuristeApp/webresources/fleur?code=".$this->code;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"DELETE");
	$response = curl_exec($ch);
	$this->redirect("index_Admin.php?controller=fleur&action=liste");
}

public function liste(){
	$url = "http://localhost:8080/FleuristeApp/webresources/fleur";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
	$response = curl_exec($ch);
	$new = simplexml_load_string($response);
	$con = json_encode($new);
	$fleurs = json_decode($con,true);
	return $fleurs;
}

public function detail(){
	return $fleur;
}

public function deconnecter($cnx){
		session_destroy();
		$this->redirect("code_fleur.php");
}

}
?>