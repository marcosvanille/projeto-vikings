<?php
include '../models/cadastroDao.php';
include '../models/cadastro.php';
//var_dump($_POST);
//die();
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

$cadastroDao = new cadastroDao();
$cadastroFuncionario = new cadastroFuncionario();


$cadastroFuncionario->setNome($nome);
$cadastroFuncionario->setSobrenome($sobrenome);
$cadastroFuncionario->setEmail($email);
$cadastroFuncionario->setCpf($cpf);
$cadastroFuncionario->setCarteiraTrabalho($cart);
$cadastroFuncionario->setEndereco($endereco);
$cadastroFuncionario->setEstado($estado);
$cadastroFuncionario->setCidade($cidade);
$cadastroFuncionario->setSexo($sexo);
$cadastroFuncionario->setEstadoCivil($estadocivil);

$cadastroDao->create($cadastroFuncionario);




