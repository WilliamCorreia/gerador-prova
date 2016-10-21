<?php
	$user = "root";
	$serv = "localhost";
	$pass = "";
	$data = "gerador_prova";
	
	$mysqli = new mysqli($serv, $user, $pass, $data);
	if ($mysqli->connect_error){
		echo "ERROR CONNECTION AT DATABASE";
		exit();
	} else {
		echo "";
	}
	

?>