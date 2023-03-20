<?php

$usuario = 'root';
$senha = '';
$database = 'visitantes';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
    die("Falha ao conectar com o Banco de Dados: " . $mysqli->error);
}



