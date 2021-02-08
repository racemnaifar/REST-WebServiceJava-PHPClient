<?php 
include "models/fonction.class.php";
include "models/commande.class.php";
$fn=new fonction();

$code="";
$date="";
$id_client="";


if(isset($_REQUEST['code']))
$code=$_REQUEST['code'];

if(isset($_REQUEST['date']))
$date=$_REQUEST['date'];

if(isset($_REQUEST['id_client']))
$id_client=$_REQUEST['id_client'];


$cmd=new commande($code, $date, $id_client);

switch($action){
	
	case "add1":include "views/commande/ajouter_client.php";
	break;
	
	case "add":$cmd->add();
	break;
	
	case "supp":$cmd->supp();
	break;
	
	case "liste":$commandes=$cmd->liste();
	include "views/commande/liste_commande.php";
	break;
	
	case "details":$commande=$cmd->detail();
	include "views/commande/liste_details_commande.php";
	break;
	
	case "edit1":$commande=$cmd->detail();
	include "views/commande/modifier_commande.php";
	break;
	
	case "edit":$cmd->edit();
	break;
	
	case "deconnexion":$cmd->deconnecter();
	break;
}
?>