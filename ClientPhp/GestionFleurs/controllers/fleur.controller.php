<?php 
include "models/fonction.class.php";
include "models/fleur.class.php";
$fn=new fonction();

$code="";
$lib="";
$categorie="";
$couleur="";
$qte="";

if(isset($_REQUEST['code']))
$code=$_REQUEST['code'];

if(isset($_REQUEST['lib']))
$lib=$_REQUEST['lib'];

if(isset($_REQUEST['categorie']))
$categorie=$_REQUEST['categorie'];

if(isset($_REQUEST['couleur']))
$couleur=$_REQUEST['couleur'];

if(isset($_REQUEST['qte']))
$qte=$_REQUEST['qte'];

$flr=new fleur($code, $lib, $categorie, $couleur, $qte);

switch($action){

	case "add1":include "views/fleur/ajouter_fleur.php";
	break;
	
	case "add":$flr->add();
	break;
	
	case "supp":$flr->supp();
	break;
	
	case "liste":$fleurs=$flr->liste();
	include "views/fleur/liste_fleur.php";
	break;
	
	case "edit1":$fleur=$flr->detail();
	include "views/fleur/modifier_fleur.php";
	break;
	
	case "edit":$flr->edit();
	break;
	
	case "deconnexion":$flr->deconnecter();
	break;
}
?>