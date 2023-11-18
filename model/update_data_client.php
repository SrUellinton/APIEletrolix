<?php

session_start();
require_once '../database/conexao.php';



$idcliente = mysqli_real_escape_string($connect, $_POST['cli_id']);
$nome = mysqli_real_escape_string($connect, $_POST['nome']);
$cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$whatsapp = mysqli_real_escape_string($connect, $_POST['whatsapp']);
$contato_responsavel = mysqli_real_escape_string($connect, $_POST['cli_telefone']);
$cep = mysqli_real_escape_string($connect, $_POST['cep']);
$endereco = mysqli_real_escape_string($connect, $_POST['rua']);
$bairro = mysqli_real_escape_string($connect, $_POST['bairro']);
$cidade = mysqli_real_escape_string($connect, $_POST['cidade']);
$estado = mysqli_real_escape_string($connect, $_POST['estado']);
$numero_casa = mysqli_real_escape_string($connect, $_POST['numero']);

	$cadastro_clientepj = "UPDATE clients SET
	name = '',
identification_document = '',
email = '',
zip_code = '' ,
address = '',
district = '',
city = '',
number_home = '',
whatsapp_contact = '',
updated_at = ''  WHERE id='$idcliente'";

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

