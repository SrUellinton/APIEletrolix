<?php

session_start();
require_once '../database/conexao.php';



$fun_id = mysqli_real_escape_string($connect, $_POST['fun_id']);
$fun_email = mysqli_real_escape_string($connect, $_POST['fun_email']);
$fun_senha = mysqli_real_escape_string($connect, $_POST['fun_senha']);




	//$cadastro_clientepf = "UPDATE funcionarios SET 
  //  fun_senha = md5('$fun_senha') where idfuncionarios='$fun_id' ";

	//$update_pf = mysqli_query($connect, $cadastro_clientepf);

/**
 * Area de senha do usuario
 */


 $usu_email = mysqli_real_escape_string($connect, $fun_email);
 $usu_senha = md5(mysqli_real_escape_string($connect, $fun_senha));
 $usu_status = "Ativo";
 $usu_nivel_usuario = "Equipe";
 
 $cadastro_acesso = "UPDATE usuarios SET usu_senha = '$usu_senha'
      where idusuarios = '$fun_id'";
 $update_pf =  mysqli_query($connect, $cadastro_acesso);

	if ($update_pf) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['cadastradoInfo'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>";



		header('Location: ../../meu_perfil.php?sucesso');
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

