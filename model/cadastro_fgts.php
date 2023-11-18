<?php

session_start();
require_once '../database/conexao.php';
require ("../../vendor/autoload.php");
require("../../vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("../../vendor/phpmailer/phpmailer/src/SMTP.php");




/**
 * Area de senha do usuario
 */



 $fgts_title = mysqli_real_escape_string($connect, $_POST['fgts_title']);
 $fgts_percentage = mysqli_real_escape_string($connect, $_POST['fgts_percentage']);
 
 $cadastro_fgts = "INSERT INTO fgts(fgts_title,
 fgts_percentage,
 fgts_createdat)
     values('$fgts_title',
     '$fgts_type',
     '$fgts_description',
     '$fgts_percentage',
     now())";
 $cad_fgts =  mysqli_query($connect, $cadastro_fgts);

 /**
  * Envio de email
  */



	if ($cad_fgts) {
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

