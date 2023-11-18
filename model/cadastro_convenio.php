<?php

session_start();
require_once '../database/conexao.php';


/**
 * Area de senha do usuario
 */



 $nome_instituicao = mysqli_real_escape_string($connect, $_POST['nome_instituicao']);
 $porcentagem = mysqli_real_escape_string($connect, $_POST['porcentagem']);
 
 $cadastro_cbo = "INSERT INTO convenios(nome_instituicao,
 nome_conveniado,
 porcentagem,
 data_criacao)
     values('$nome_instituicao',
     'Pezinho Delivery',
	 '$porcentagem',
     now())";
 $cad_cbo =  mysqli_query($connect, $cadastro_cbo);

 /**
  * Envio de email
  */



	if ($cad_cbo) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['cadastradoInfo'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>";


		header('Location: ../../convenios.php?sucesso');
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

