<?php

$_GET['id'];

//$query = "select * from formulario  where id = '{$_GET['id']}'" ;

$dados = [];

$q= $dados->prepare("SELECT name FROM `formulario` WHERE id = '{$_GET['id']}'");
$q->execute([$userid]);
$username = $q->fetchColumn();