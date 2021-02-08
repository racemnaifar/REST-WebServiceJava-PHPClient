<?php
	$code=$_POST['code'];
	$newqte= $_POST['qte'];	
	$url = "http://localhost:8080/FleuristeApp/webresources/fleur/addQte?code=".$code."&qte=".$newqte;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	$response = curl_exec($ch);
	header("Location: index_Admin.php?controller=fleur&action=liste");
?>