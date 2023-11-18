<?php

session_start();
require_once '../database/conexao.php';


 $idcbo = mysqli_real_escape_string($connect, $_POST['idcbo']);
 $cbo_title = mysqli_real_escape_string($connect, $_POST['cbo_title']);
 $cbo_percentage = mysqli_real_escape_string($connect, $_POST['cbo_percentage']);
 
 $atualizar_cbo = " UPDATE cbo SET cbo_title='$cbo_title',
 cbo_percentage='$cbo_percentage',
 cbo_updatedat=now()
 where idcbo = '$idcbo'";
 $update_cbo =  mysqli_query($connect, $atualizar_cbo);




	//$cadastro_clientepf = "UPDATE funcionarios SET 
  //  fun_senha = md5('$fun_senha') where idfuncionarios='$fun_id' ";

	//$update_pf = mysqli_query($connect, $cadastro_clientepf);

/**
 * Area de senha do usuario
 */



	if ($update_cbo) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['cadastradoInfo'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>";



		header('Location: ../../cbo.php?sucesso');
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

