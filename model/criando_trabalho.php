<?php

session_start();
require_once 'database/conexao.php';


$idcliente = mysqli_real_escape_string($connect, $_POST['cli_id']);
$name_user = mysqli_real_escape_string($connect, $_POST['cli_nameuser']);
$university_name = mysqli_real_escape_string($connect, $_POST['university_name']);
$title = mysqli_real_escape_string($connect, $_POST['title']);
$advisor = mysqli_real_escape_string($connect, $_POST['advisor']);
$delivery_date = mysqli_real_escape_string($connect, $_POST['delivery_date']);
$description = mysqli_real_escape_string($connect, $_POST['description']);
$created_at = date("d-M-y - h:m:s");


$cadastro_trabalho = "INSERT INTO works(title, 
description,
advisor,
university_name, 
delivery_date, 
created_at,  
idcliente) 
	values ('$title', 
'$description',
'$advisor',
'$university_name', 
'$delivery_date',
'$created_at',  
'$idcliente')";

$cad_pf = mysqli_query($connect, $cadastro_trabalho);
$atualizar_atividade = "INSERT INTO recent_activities(activity_done,user_id,made_by,created_at) VALUES ('Realizada a criação de uma nova monografia - $title',$idcliente,'$name_user','$created_at')";

$cad_atividade = mysqli_query($connect, $atualizar_atividade);

$queri_idwork = mysqli_query($connect, "SELECT id from works where created_at='$created_at'");
$id_work = mysqli_fetch_array($queri_idwork);

$pegarid_work = $id_work['id'];

$cadastrando_capitulos = "INSERT INTO chapters(title,
description, 
created_at,
page_number,  
idcliente,
idwork) values ('CAPA','campo para dedicar o trabalho','$created_at',1,$idcliente,$pegarid_work),
('CONTRACAPA','campo para dedicar o trabalho','$created_at',2,$idcliente,$pegarid_work),
('FOLHA DE ROSTO','campo para dedicar o trabalho','$created_at',3,$idcliente,$pegarid_work),
('DEDICATÓRIA','campo para dedicar o trabalho','$created_at',4,$idcliente,$pegarid_work),
('AGRADECIMENTOS','Agradecimentos','$created_at',5,$idcliente,$pegarid_work),
('RESUMO','resumo do trabalho','$created_at',6,$idcliente,$pegarid_work),
('ABSTRACT','resumo do trabalho em ingles','$created_at',7,$idcliente,$pegarid_work),
('LISTA DE GRAFICOS E TABELAS','indice do trabalho','$created_at',8,$idcliente,$pegarid_work),
('LISTA DE SIGLAS/ABREVIATURAS','resumo do trabalho em ingles','$created_at',9,$idcliente,$pegarid_work),
('Índice','resumo do trabalho em ingles','$created_at',10,$idcliente,$pegarid_work),
('INTRODUÇÃO','resumo do trabalho em ingles','$created_at',11,$idcliente,$pegarid_work),
('PROBLEMÁTICA','resumo do trabalho em ingles','$created_at',12,$idcliente,$pegarid_work),
('1.1. Justificativa do tema','resumo do trabalho em ingles','$created_at',13,$idcliente,$pegarid_work),
('1.2. Hipóteses','resumo do trabalho em ingles','$created_at',14,$idcliente,$pegarid_work)";


$cad_capt = mysqli_query($connect, $cadastrando_capitulos);
$atualizar_atividade = "INSERT INTO recent_activities(activity_done,user_id,made_by,created_at) VALUES ('Realizada dos capitulos da monografia $title',$idcliente,'$name_user','$created_at')";

$cad_atividade = mysqli_query($connect, $atualizar_atividade);
if ($cad_pf) {


	header('Location: ../works.php?sucesso');
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
