<?php
	function protegerAdmin(){
		if ($_SESSION["nivel"] != 1) {
			echo "<script>location.href='http://143.106.163.126/sistema_teste/index.php' </script>";	
		}
	}
	function protegerUser(){
		if ($_SESSION["nivel"] != 0) {
			echo "<script>location.href='http://143.106.163.126/sistema_teste/index.php' </script>";	
		}
	}
?>