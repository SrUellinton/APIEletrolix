<?php

session_start();
require_once '../database/conexao.php';


/**
 * Area de senha do usuario
 */



 $nome_instituicao = mysqli_real_escape_string($connect, $_POST['nome_instituicao']);
 $tipo_doacao = mysqli_real_escape_string($connect, $_POST['tipo_doacao']);
 $valor_doado = mysqli_real_escape_string($connect, $_POST['valor_doado']);


 $consulta_porcentagem = mysqli_query($connect, "SELECT porcentagem FROM convenios where nome_instituicao='$nome_instituicao' ");
 $resul = mysqli_fetch_array($consulta_porcentagem);
$porcentagem_convenio = $resul['porcentagem'];
// $valor_final = $valor_doado - $resul['porcentagem']."%";
//$porcentagem = $resul['por']
 $valor_final =  $valor_doado / 100 * $resul['porcentagem'];
 
 $cadastro_cbo = "INSERT INTO doacoes(nome_instituicao,
 tipo_doacao,
 valor_doado,
 porcentagem_convenio,
 data_doacao)
     values('$nome_instituicao',
	 '$tipo_doacao',
	 '$valor_final',
	 '$porcentagem_convenio',
     now())";
 $cad_cbo =  mysqli_query($connect, $cadastro_cbo);

 /**
  * Envio de email
  */



	if ($cad_cbo) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['cadastradoInfo'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>";


		header('Location: ../../convenios.php?sucesso');
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

