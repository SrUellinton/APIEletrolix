<?php

session_start();
require_once '../database/conexao.php';



$idfgts = mysqli_real_escape_string($connect, $_POST['idfgts']);
	$excluir_fgts = "DELETE FROM fgts where idfgts='$idfgts' ";

	$deletar_fgts = mysqli_query($connect, $excluir_fgts);


	if ($deletar_fgts) {
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



		header('Location: ../../fgts.php?sucesso');
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

