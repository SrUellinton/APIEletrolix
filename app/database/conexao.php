<?php 




//Conexão com banco de dados

$servername = "localhost";
$username = "root";
//$username = "root";
$password = "Projeto@228638";
//$db_name = "pezin022_sic";
$db_name = "valan";


$connect = mysqli_connect($servername, $username, $password, $db_name);
if(mysqli_connect_error()):
    echo "Falha na conexão" .mysqli_connect_error();
endif;