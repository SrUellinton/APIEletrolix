<?php

session_start();
require_once '../database/conexao.php';



$idcliente = mysqli_real_escape_string($connect, $_POST['cli_id']);
if (isset($_FILES['logo_do_cliente'])) {
	$arquivo = $_FILES['logo_do_cliente']['name'];
	$extensao = strtolower(substr($_FILES['logo_do_cliente']['name'], -4));

	$novo_nome = uniqid();
	$novo_arquivo = $novo_nome.$extensao;

	$diretorio = "../uploads/";
    $logo_do_cliente = $diretorio.$novo_arquivo;
	move_uploaded_file($_FILES['logo_do_cliente']['tmp_name'], "../../uploads/" . $novo_arquivo);

	$cadastro_clientepj = "UPDATE clientes SET
	logo_da_empresa = '$logo_do_cliente',
	nome_logo = '$novo_arquivo' WHERE id='$idcliente'";

	$cad_pj = mysqli_query($connect, $cadastro_clientepj);


   //var_dump($cad_pj);



	if ($cad_pj) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['cadastradoInfo'] = "
        <div class='row'>
		<div class='col-lg-12 col-md-12'>
        <div class='alert alert-succes bg-success text-center' role='alert' 
        style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>
        </div>
		</div>";



		header('Location: ../../painel.php?sucesso');
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

}