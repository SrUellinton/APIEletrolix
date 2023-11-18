<?php

session_start();
require_once '../database/conexao.php';


/**
 * Area de senha do usuario
 */



 $titulo_do_contrato = mysqli_real_escape_string($connect, $_POST['titulo_do_contrato']);
 $tipo_de_contrato = mysqli_real_escape_string($connect, $_POST['tipo_de_contrato']);
 $nome_do_contratante = mysqli_real_escape_string($connect, $_POST['nome_do_contratante']);
 $nome_do_contratado = mysqli_real_escape_string($connect, $_POST['nome_do_contratado']);
 $cnpj_contratante = mysqli_real_escape_string($connect, $_POST['cnpj_contratante']);
 $cnpj_contratado = mysqli_real_escape_string($connect, $_POST['cnpj_contratado']);
 $info_contratante = mysqli_real_escape_string($connect, $_POST['info_contratante']);
 $info_contratado = mysqli_real_escape_string($connect, $_POST['info_contratado']);
 $conteudo_contrato = mysqli_real_escape_string($connect, $_POST['conteudo_contrato']);
 
 $cadastro_dados = "INSERT INTO contratos(titulo_contrato,
 tipo_de_contrato,
 nome_contratante,
 nome_contratado,
 cpf_cnpj_contratado,
 cnpj_contratante, 
 contratante, 
 contratado,
 conteudo, 
 data_cadastro)
     values('$titulo_do_contrato',
     '$tipo_de_contrato',
	 '$nome_do_contratante',
	 '$nome_do_contratado',
	 '$cnpj_contratado',
	 '$cnpj_contratante',
	 '$info_contratante',
	 '$info_contratado',
	 '$conteudo_contrato',
     now())";
 $cad_contrato =  mysqli_query($connect, $cadastro_dados);

 /**
  * Envio de email
  */



	if ($cad_contrato) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['cadastradoInfo'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>";


		header('Location: ../../contratos/index.php?sucesso');
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

