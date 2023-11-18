<?php 




//Conexão com banco de dados

$servername = "localhost";
$username = "pezin022_programadoresemacao";
$password = "Projeto@228638";
$db_name = "pezin022_v5_homolog";


$connect = mysqli_connect($servername, $username, $password, $db_name);
if(mysqli_connect_error()):
    echo "Falha na conexão" .mysqli_connect_error();
endif;