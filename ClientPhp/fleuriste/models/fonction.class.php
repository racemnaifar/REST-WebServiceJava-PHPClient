<?php
class fonction
{

public function redirect($url){
	//header("location:$url");
	echo "<script>window.location.href='".$url."';</script>";
}
}
?>