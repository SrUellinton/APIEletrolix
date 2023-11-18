<?php

session_start();
require_once '../database/conexao.php';



$cli_id = mysqli_real_escape_string($connect, $_POST['cli_id']);
	$cadastro_clientepf = "DELETE FROM clientes where id='$cli_id' ";

	$deletar_pf = mysqli_query($connect, $cadastro_clientepf);


	if ($deletar_pf) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['cadastradoInfo'] = "
		<div class='row'>
		<div class='col-lg-12 col-md-12'>
		<div class='alert alert-succes bg-success text-center' role='alert' 
		style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Cliente  excluido com sucesso!<div>
		</div>
		</div>
		";



		header('Location: ../../painel.php?sucesso');
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

