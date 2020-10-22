<?php
include '../models/cadastroDao.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

$id = $_GET['id'];
$dados = [];
$cadastroDao = new cadastroDao();
$dados = $cadastroDao->funcionarioUnico($id);

echo json_encode($dados);

//var_dump($dados);


