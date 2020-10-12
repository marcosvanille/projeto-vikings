<?php



$cadastro = new cadastroFuncionario();
$cadastro->setNome('teste');
$cadastro->setSobrenome('teste');
$cadastro->setEmail('teste');
$cadastro->setCpf('teste');
$cadastro->setCarteiraTrabalho('teste');
$cadastro->setEndereco('teste');
$cadastro->setEstado('teste');
$cadastro->setCidade('teste');
$cadastro->setSexo('teste');
$cadastro->setEstadoCivil('teste');
var_dump($cadastro);
$cadastroDao = new cadastroDao();
$cadastroDao->create($cadastro);

