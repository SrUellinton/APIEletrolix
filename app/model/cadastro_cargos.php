<?php

session_start();
require_once '../database/conexao.php';




/**
 * Area de senha do usuario
 */


 date_default_timezone_set('America/Sao_Paulo');
 $job_title = mysqli_real_escape_string($connect, $_POST['job_title']);
 $job_function = mysqli_real_escape_string($connect, $_POST['job_function']);
 $job_description = mysqli_real_escape_string($connect, $_POST['job_description']);
 $base_salary = mysqli_real_escape_string($connect, $_POST['base_salary']);
 $job_requirements = mysqli_real_escape_string($connect, $_POST['job_requirements']);
 $job_createdat =  date('d-m-y H:m:s');
 $job_updatedat =  date('d-m-y H:m:s');

 
 
 $cadastro_cargos = "INSERT INTO cargos(job_title,
 job_function,
 job_description,
 base_salary,
 job_requirements,
 job_createdat,
 job_updatedat)
     values('$job_title',
     '$job_function',
     '$job_description',
     '$base_salary',
	 '$job_requirements',
	 '$job_createdat',
	 '$job_updatedat')";
 $add_job =  mysqli_query($connect, $cadastro_cargos);

 /**
  * Envio de email
  */



	if ($add_job) {
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

