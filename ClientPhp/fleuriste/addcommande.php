<?php
   include "HashMap.php";	
	session_start();
	$dataf= new HashMap("integer","integer");
	$arr = $_SESSION['list'];
	$client = $_SESSION['client'];
	$d = date("Y-m-d");
	$data = array("date" => "$d", "id_client" => "$client", "listCommande" => $arr->getAll() );                                                                    
	$data_string = json_encode($data); 
	//print_r($arr->getAll());
	$url = "http://localhost:8080/FleuristeApp/webresources/commande/add";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
	);                                    
	$result = curl_exec($ch);
	//$_SESSION['list'] = null;
	$_SESSION['nb'] = 0;
	
	foreach ( $arr->getAll() as $key => $value ){


		$url = "http://localhost:8080/FleuristeApp/webresources/fleur/removeQte?code=".$key."&qte=".$value;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
		$response = curl_exec($ch);
	}
	
	header("Location: orders.php");

?>