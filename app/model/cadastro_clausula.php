<?php

session_start();
require_once '../database/conexao.php';


/**
 * Area de senha do usuario
 */



 $idcontrato = mysqli_real_escape_string($connect, $_POST['idcontrato']);
 $clausula_contrato = mysqli_real_escape_string($connect, $_POST['clausula_contrato']);
 
 $cadastro_dados = "INSERT INTO clausulas_contrato(id_contrato,
 conteudo, 
 data_cadastro)
     values('$idcontrato',
     '$clausula_contrato',
     now())";
 $cad_contrato =  mysqli_query($connect, $cadastro_dados);

 /**
  * Envio de email
  */



	if ($cad_contrato) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['cadastradoInfo'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>";


		header('Location: ../../contratos.php?sucesso');
	} else {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso não foi cadastrado com Sucesso.\");
				</script>
			";	*/

		$_SESSION['cadastradoInfo'] = "<div class='alert alert-danger' role='alert'>Falha ao registrar no banco de dados! erro:</div>" . mysqli_error($connect);

		//header('Location: ../lista_clientes.php?erro');

		echo mysqli_error($connect);
	}

