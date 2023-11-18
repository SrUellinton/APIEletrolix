<?php

session_start();
require_once 'database/conexao.php';




$imei_number1 = mysqli_real_escape_string($connect, $_POST['imei_1']);
$imei_number2 = mysqli_real_escape_string($connect, $_POST['imei_2']);
$cell_phone_model = mysqli_real_escape_string($connect, $_POST['modelo_cel']);
$phone_brand = mysqli_real_escape_string($connect, $_POST['marca_cel']);
$client_id = mysqli_real_escape_string($connect, $_POST['idclient']);


$cadastro_clientepf = "INSERT INTO phone_security(
	imei_number1, 
    imei_number2, 
    cell_phone_model, 
    phone_brand, 
    client_id,
	created_at) 
	values ('$imei_number1', 
	'$imei_number2', 
	'$cell_phone_model', 
	'$phone_brand',
	'$client_id',
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



	header('Location: ../cadastrar_imeisucesso.php?sucesso');
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
