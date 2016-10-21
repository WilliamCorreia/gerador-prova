<?php

include("../config.php");
include("../panel/globais.php");
include("../panel/check.php");
include("../panel/admin.php");


	
	$id = $_GET['id'];
	$select = $mysqli -> query("UPDATE usuarios SET status='0' WHERE ID='$id'");

	echo "<script> location.href='../panel/admin.php?pagina=1'; </script>";



?>