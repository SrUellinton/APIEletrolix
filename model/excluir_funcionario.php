<?php

session_start();
require_once '../database/conexao.php';



$fun_id = mysqli_real_escape_string($connect, $_POST['fun_id']);
$fun_Nome = mysqli_real_escape_string($connect, $_POST['fun_email']);


	$cadastro_clientepf = "DELETE FROM funcionarios where idfuncionarios='$fun_id' ";

	$update_pf = mysqli_query($connect, $cadastro_clientepf);

/**
 * Area de senha do usuario
 */






 
 $cadastro_acesso = "DELETE FROM usuarios  where usu_email = '$usu_email'";
 $cadastrando_acesso =  mysqli_query($connect, $cadastro_acesso);

	if ($update_pf) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['cadastradoInfo'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  Excluida com sucesso!<div>";



		header('Location: ../../lista_de_usuarios.php?sucesso');
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

