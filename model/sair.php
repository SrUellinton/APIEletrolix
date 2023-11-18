<?php

	session_start();
$idcliente = $_GET['idusuario'];
  $atualizar_atividade = "INSERT INTO recent_activities(activity_done,user_id,made_by,created_at) VALUES ('Imagem do perfil atualizada',$idcliente,'$name_user','$data')";

   $cad_atividade = mysqli_query($connect, $atualizar_atividade);
	session_unset();
	session_destroy();

	//redirecionar o usuario para a página de login
	header('Location: https://admin.valan.com.br');
	
?>