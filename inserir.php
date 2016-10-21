<?php 

require ("config.php");
include ("inc_head.php");
include ("link_topo.php");

?>

<title>Nova Questão</title>
</head>


<body>


<div class="col-xs-12">   
        
        <form name="form_registro" method="post" enctype="multipart/form-data" action="">

         
            <label for="iduser" name="iduser" id="iduser">Seu ID: <?php echo "$idrec"?></label><br /> <!-- pegando id do usuario na link_topo -->
           
              <label for="tipo" >Tipo de Atividade:</label><br />
              <select class="form-control" name="tipo" id="tipo">
                <?php 
                $result_materias = "SELECT * FROM questoes";
                 $resultado_materias = mysqli_query($mysqli, $result_materias);
        
                while ($dados = mysqli_fetch_assoc($resultado_materias)) {
                  $codigo = $dados['ID'];
                  $materia = $dados['materia'];
                  if ($dados['materia'] ==  ""){
                    for ($i=0; $i < 1; $i++) { 
                      echo "<option>$i</option>";
                    }
                    
                  }else {
                    echo "<option value='$codigo'>$materia</option>";
                  }
                  
                }
                ?>
          </select><br /><br />
          

            <label for="titulo">Título da questão:</label><br />
            <input class="form-control" placeholder="Por Exemplo: Em qual continente está o Brasil?" name="titulo" type="text" id="titulo" size="100" /><br /><br />
            <label for="resposta">Resposta para a questão:</label><br />
            <input class="form-control" placeholder="Por Exemplo: Em qual continente está o Brasil?" name="resposta" type="text" id="resposta" size="100" /><br /><br />
          
            <input type="submit" class="btn btn-success btn-lg col-xs-6" value="Salvar" name="salvar"/>
            <a href=principal.php><button type="button" class="btn btn-warning btn-lg col-xs-6">  Cancelar  </button></a> 
                   
            </form>
     
  </div>
</div>
  
</body>
</html>

<?php 
include ("footer.php");
?> 



<?php 
	if (isset($_POST["salvar"])) {

    $titulo = mysqli_real_escape_string($mysqli,$_POST["titulo"]);
		$resposta = mysqli_real_escape_string($mysqli,$_POST["resposta"]);
		
		
	$select = $mysqli->query("SELECT * FROM questoes");
		if ($select){
		$row = $select->num_rows;
		if($row == 0) {
			echo "<script> alert ('Algo deu errado!'); </script>";
		} else {
			$insert = $mysqli->query ("INSERT INTO questoes (titulo, resposta, iduser) VALUES ('$titulo', '$resposta', '$idrec')");
				echo "<script> alert ('Registrado com sucesso!'); location.href='principal.php' </script>";
			}
  }
}
?>

