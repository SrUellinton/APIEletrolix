<?php

session_start();
require_once 'database/conexao.php';



$client_name = mysqli_real_escape_string($connect, $_POST['nome']);
$title = mysqli_real_escape_string($connect, $_POST['tipo_ocorrencia']);
$type_occurrence = mysqli_real_escape_string($connect, $_POST['tipo_ocorrencia']);
$date_occurrence = mysqli_real_escape_string($connect, $_POST['desde_quando']);
$client_id = mysqli_real_escape_string($connect, $_POST['idclient']);


$cadastro_clientepf = "INSERT INTO sos_agent(client_name,
	title, 
client_id,
type_occurrence, 
date_occurrence, 
created_at) 
	values ('$client_name',
	'$title', 
	'$client_id',
	'$type_occurrence', 
	'$date_occurrence',
	now())";

$cad_pf = mysqli_query($connect, $cadastro_clientepf);



if ($cad_pf) {
	/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

	$_SESSION['cadastradoInfo'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>";



	header('Location: ../sucesso_sos.php?sucesso');
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
