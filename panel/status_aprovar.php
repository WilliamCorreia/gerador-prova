<?php

include("../config.php");
include ("../panel/globais.php");

?>

<?php


	$id = $_GET['id'];
	$select = $mysqli -> query("UPDATE usuarios SET status='1' WHERE ID='$id'");

	echo "<script> location.href='../panel/admin.php?pagina=1'; </script>";
	
		

?>