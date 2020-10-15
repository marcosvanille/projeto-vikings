<?php
include '../models/cadastroDao.php';
include '../models/cadastro.php';

$a = new cadastroDao();
$id = $_GET["id"];

$deletar = conexao::getConn()->prepare("DELETE FROM formulario WHERE id = '{$id}'");
$deletar->execute();

if ($deletar){
    header("location: ../views/lista.php?removido=true");
}