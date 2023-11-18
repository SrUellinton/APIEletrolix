<?php

session_start();
require_once '../database/conexao.php';


 $idfgts = mysqli_real_escape_string($connect, $_POST['idfgts']);
 $fgts_title = mysqli_real_escape_string($connect, $_POST['fgts_title']);
 $fgts_percentage = mysqli_real_escape_string($connect, $_POST['fgts_percentage']);
 
 $atualizar_fgts = " UPDATE fgts SET fgts_title='$fgts_title',
 fgts_percentage='$fgts_percentage',
 fgts_updatedat=now()
 where idfgts = '$idfgts'";
 $update_fgts =  mysqli_query($connect, $atualizar_fgts);




	//$cadastro_clientepf = "UPDATE funcionarios SET 
  //  fun_senha = md5('$fun_senha') where idfuncionarios='$fun_id' ";

	//$update_pf = mysqli_query($connect, $cadastro_clientepf);

/**
 * Area de senha do usuario
 */



	if ($update_fgts) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['cadastradoInfo'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>";



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

