<?php

session_start();
require_once '../database/conexao.php';




/**
 * Area de senha do usuario
 */


 date_default_timezone_set('America/Sao_Paulo');
 $pro_nome_socio = mysqli_real_escape_string($connect, $_POST['pro_nome_socio']);
 $pro_porcentagem_participacao = mysqli_real_escape_string($connect, $_POST['pro_porcentagem_participacao']);
 $pro_mes = mysqli_real_escape_string($connect, $_POST['pro_mes']);
 $pro_valor_a_receber = mysqli_real_escape_string($connect, $_POST['pro_valor_a_receber']);
 $pro_nome_empresa = mysqli_real_escape_string($connect, $_POST['pro_nome_empresa']);
 $pro_cnpj = mysqli_real_escape_string($connect, $_POST['pro_cnpj']);
 $pro_lucro_bruto = mysqli_real_escape_string($connect, $_POST['pro_lucro_bruto']);
 $pro_lucro_liquido = mysqli_real_escape_string($connect, $_POST['pro_lucro_liquido']);
 $createdat =  date('d-m-y H:m:s');
 $job_updatedat =  date('d-m-y H:m:s');

 
 
 $cadastro_cargos = "INSERT INTO prolabore(nome_socio,
 porcentagem_socio,
 mes_recebimento,
 valor_a_receber,
 nome_empresa,
 cnpj_empresa,
 ganho_bruto_empresa,
 ganho_liquido_empresa,
 data_cadastro)
     values('$pro_nome_socio',
     '$pro_porcentagem_participacao',
     '$pro_mes',
     '$pro_valor_a_receber',
	 '$pro_nome_empresa',
	 '$pro_cnpj',
	 '$pro_lucro_bruto',
	 '$pro_lucro_liquido',
	 '$createdat')";
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


		header('Location: ../../prolabore.php?sucesso');
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

