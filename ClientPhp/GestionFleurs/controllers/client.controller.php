<?php 
include "models/fonction.class.php";
include "models/client.class.php";
$fn=new fonction();

$nomPrenom="";
$email="";
$username="";
$motdepasse="";


if(isset($_REQUEST['nomPrenom']))
$nomPrenom=$_REQUEST['nomPrenom'];

if(isset($_POST['email']))
$email=$_POST['email'];

if(isset($_POST['username']))
$username=$_POST['username'];

if(isset($_POST['motdepasse']))
$motdepasse=$_POST['motdepasse'];



$clt=new client($nomPrenom, $email, $username, $motdepasse);

switch($action){

	case "supp":$clt->supp();
	break;
	
	case "liste":$clients=$clt->liste();
	include "views/client/liste_client.php";
	break;

}
?>