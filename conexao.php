<?php 

$hostname = "localhost";
$bancodedados = "dilema_das_cidades";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno){
    echo "Falha ao conectar: (". $mysqli->connect_errno . ")". $mysqli->connect_errno;
}


?>