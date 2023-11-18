<?php

session_start();
require_once '../database/conexao.php';


 $idfinancas = mysqli_real_escape_string($connect, $_POST['idfinancas']);
 $fin_mes = mysqli_real_escape_string($connect, $_POST['fin_mes']);
 $fin_lucro_bruto = mysqli_real_escape_string($connect, $_POST['fin_lucro_bruto']);
 $fin_lucro_liquido = mysqli_real_escape_string($connect, $_POST['fin_lucro_liquido']);
 $fin_total_despesas = mysqli_real_escape_string($connect, $_POST['fin_total_despesas']);
 
 $atualizar_cbo = " UPDATE financas SET fin_mes='$fin_mes',
 fin_lucro_bruto='$fin_lucro_bruto',
 fin_lucro_liquido='$fin_lucro_liquido',
 fin_total_despesas='$fin_total_despesas'
 where idfinancas = '$idfinancas'";
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



		header('Location: ../../financas.php?sucesso');
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

