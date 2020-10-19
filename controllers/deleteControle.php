<?php
include '../models/cadastroDao.php';
include '../models/cadastro.php';

$id = $_GET["id"];
$delete = new cadastroDao();
$delete->delete($id);



if ($delete) {
    header("location: ../views/lista.php?removido=true");
}