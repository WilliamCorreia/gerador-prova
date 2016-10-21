<?php

	require ("config.php");
	include ("inc_head.php");
	
?>


<title>Login</title>
</head>

<body>
<div id="cadastrar"><a href="cadastro.php" title="Cadastre-se e gere suas provas!">Cadastre-se &raquo;</a></div>
<div id="login" class="form bradius">
  <div class="logo"><img src="css/imagens/logo.png" width="200" height="58" /></div>
  <div class="acomodar">
        <form id="form_login" name="form_login" method="post" action="">
            <label for="mat">Matrícula: </label><input id="mat" type="text" class="txt bradius" name="mat" value="" />
            <label for="senha">Senha: </label><input  id="senha" type="password" class="txt bradius" name="senha" value="" />
            <input type="submit" class="sb bradius" value="Entrar" name="button"/>
                  </form>
       <!--login-->
</div>
</div>
</body>
</html>

<?php
	if (isset($_POST["button"])) {
		$mat = mysqli_real_escape_string($mysqli, $_POST["mat"]);
		$senha = mysqli_real_escape_string($mysqli, $_POST["senha"]);
		
		if($mat == "" || $senha == "") {
			echo "<script> alert('Preencha todos os campos!'); </script>";
			return true;
		}
		
		$select = $mysqli->query("SELECT * FROM usuarios WHERE mat='$mat' AND senha='$senha'");
		$row = $select->num_rows;
		$get = $select->fetch_array();
		$nome = $get['nome'];
		$iduser = $get['ID'];
		
		if ($row > 0) {
				session_start();
				$_SESSION['idusuario']=$iduser; 
				header("Location://143.106.163.126/gerador-prova/principal.php");  //MUDAR LOCAL 
					}else {
							echo "<script> alert('Usuário ou senha incorreto!'); </script>";
					  }
					}		
?> 