<?php
	$data = array("nomPrenom" => $_POST['nompre'], "email" => $_POST['email'], "username"=>$_POST['username'], "motdepasse"=>$_POST['password']);                                                                    
	$data_string = json_encode($data); 

	$url = "http://localhost:8080/FleuristeApp/webresources/client";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
	);                                                                                                                                                                                                                                        
	$result = curl_exec($ch);
	header("Location: login.php");

?>