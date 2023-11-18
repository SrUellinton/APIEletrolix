<?php

session_start();
require_once '../database/conexao.php';

date_default_timezone_set('America/Sao_Paulo');
 $idcargos = mysqli_real_escape_string($connect, $_POST['idcargos']);
 $job_title = mysqli_real_escape_string($connect, $_POST['job_title']);
 $job_function = mysqli_real_escape_string($connect, $_POST['job_function']);
 $job_description = mysqli_real_escape_string($connect, $_POST['job_description']);
 $base_salary = mysqli_real_escape_string($connect, $_POST['base_salary']);
 $job_requirements = mysqli_real_escape_string($connect, $_POST['job_requirements']);
 $job_createdat =  mysqli_real_escape_string($connect, $_POST['job_createdat']);
 $job_updatedat =  date('d-m-y H:m:s');
 
 $atualizar_cbo = " UPDATE cargos SET job_title='$job_title',
 job_function='$job_function',
 job_description='$job_description',
 base_salary='$base_salary',
 job_requirements='$job_requirements',
 job_createdat = '$job_createdat',
 job_updatedat='$job_updatedat'
 where idcargos = '$idcargos'";
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



		header('Location: ../../cargos.php?sucesso');
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

