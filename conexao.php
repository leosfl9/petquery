<?php

$usuario = 'uvgvpnyvpp';
$senha = 'A5DX35D083H2E08T$';
$database = 'appbcd-leonardo-database';
$host = 'appbcd-leonardo-server.mysql.database.azure.com';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
