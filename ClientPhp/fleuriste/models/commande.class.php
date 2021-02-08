<?php
class commande extends fonction
{
private $code;
private $datec;
private $id_client;

public function __construct($code, $datec, $id_client)
{
$this->code = $code;
$this->datec = $datec;
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
	return $commandes;
}

public function detail(){
	return $commande;
}

public function deconnecter(){
		session_destroy();
		$this->redirect("index.php");	
}
}
?>