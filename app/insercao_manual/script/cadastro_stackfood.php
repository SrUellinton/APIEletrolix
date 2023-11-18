<?php

session_start();
require_once 'database/conexao.php';




$nome_empreendimento = mysqli_real_escape_string($connect, $_POST['nome']);
$telefone = mysqli_real_escape_string($connect, $_POST['telefone']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$cep = mysqli_real_escape_string($connect, $_POST['cep']);
$endereco = mysqli_real_escape_string($connect, $_POST['rua']);
$bairro = mysqli_real_escape_string($connect, $_POST['bairro']);
$cidade = mysqli_real_escape_string($connect, $_POST['cidade']);
$estado = mysqli_real_escape_string($connect, $_POST['estado']);
$numero_casa = mysqli_real_escape_string($connect, $_POST['numero_casa']);
$complemento = mysqli_real_escape_string($connect, $_POST['complemento']);





/**
 * Area de senha do usuario
 */



$usu_nome = mysqli_real_escape_string($connect, $nome_responsavel);
$usu_email = mysqli_real_escape_string($connect, $email);
$usu_senha = md5(mysqli_real_escape_string($connect, "123456789"));
$usu_senha_antiga = md5(mysqli_real_escape_string($connect, "123456789"));
$usu_status = "1";
$usu_tipo_usuario = "Cliente";

$cadastro_acesso = "INSERT INTO users(
	f_name,
	phone,
	email,
	password,
	status,
	order_count,
	wallet_balance,
	loyalty_point,
	created_at) 
	values('$usu_nome',
	'$telefone',
	'$usu_email',
	'$usu_senha',
	1,
	0,
	0.000,
	0.000,
	now())";
$cadastrando_acesso =  mysqli_query($connect, $cadastro_acesso);



$address = $endereco . "," . $bairro . "," . $cidade . "," . $estado . "," . $numero_casa . "," . $cep . "," . $complemento;

	$cadastro_clientepf = "INSERT INTO landingpage(name,
	email,
	phone,
	address,
	status,
	created_at,
	active) 
	values ('$nome_empreendimento',
	'$email',
    '$telefone',
	'$address',
	1,
	now(),
	1)";

	$cad_pf = mysqli_query($connect, $cadastro_clientepf);



	if ($cad_pf) {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

		$_SESSION['insercaoManual'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>";



		header('Location: http://comercial.pezinhodelivery.com/painel.php?sucesso');
	} else {
		/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso não foi cadastrado com Sucesso.\");
				</script>
			";	*/

		$_SESSION['insercaoManual'] = "<div class='alert alert-danger' role='alert'>Falha ao registrar no banco de dados! erro:</div>" . mysqli_error($connect);

		//header('Location: ../lista_clientes.php?erro');

		echo mysqli_error($connect);
	}

