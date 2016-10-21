<?php 
	require ("config.php");
	include ("inc_head.php");

session_start();
$_SESSION['idusuario'];

$idrec = $_SESSION['idusuario']; // variavel para salvamento automatico de quem criou o evento

if (isset($_GET["action"]) AND $_GET["action"] == "sair") {
  session_destroy();
  header ("Location: http://143.106.163.126/gerador-prova/index.php");
}



?>


		<div class="container">
		<a href="?action=sair"> <button class="btn btn-danger pull-right col-xs-2">  Sair  </button> </a>
			<img src="css/imagens/logo.png" class="img-responsive" />

  					<div class="btn-group btn-group-justified" role="group" aria-label="...">

	  					<div class="btn-group btn-lg" role="group">
	    				<a href="inserir.php" target="_self"><button type="button" class="btn btn-default">
	    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nova Questão  </button></a>
	  					</div>

	  					<div class="btn-group btn-lg" role="group">
					    <a href="configuracao.php" target="_self"><button type="button" class="btn btn-default">
					    <span class="glyphicon glyphicon glyphicon-list-alt" aria-hidden="true"></span> Cadastro de Matérias</button></a>
					  	</div>

					  	<div class="btn-group btn-lg" role="group">
					    <a href="gerar.php" target="_self"><button type="button" class="btn btn-default"> 
					    <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> Gerar Prova</button></a>
					  	</div>

					  	<div class="btn-group btn-lg" role="group">
					    <a href="ajuda.php" target="_self"><button type="button" class="btn btn-default"> 
					    <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ajuda</button></a>
					  	</div>

					</div>


		

