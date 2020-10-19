<?php
include '../models/cadastroDao.php';
include '../models/cadastro.php';

$id = $_GET['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$cpf = $_POST['cpf'];
$cart = $_POST['cart'];
$endereco = $_POST['endereco'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$sexo = $_POST['sexo'];
$estadocivil = $_POST['estadocivil'];

$update = new cadastroDao();
$alterar = new cadastroFuncionario();

$alterar->setNome($nome);
$alterar->setSobrenome($sobrenome);
$alterar->setEmail($email);
$alterar->setCpf($cpf);
$alterar->setCarteiraTrabalho($cart);
$alterar->setEndereco($endereco);
$alterar->setEstado($estado);
$alterar->setCidade($cidade);
$alterar->setSexo($sexo);
$alterar->setEstadoCivil($estadocivil);
$alterar->setId($id);

$update->update($alterar);




