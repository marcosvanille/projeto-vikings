<?php
include '../models/cadastroDao.php';
include '../models/cadastro.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lista</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid" style="width: 1500px; margin-top: 50px">
    <h1 id="titulo">Lista de Funcionários</h1>

    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">CPF</th>
            <th scope="col">Carteira de Trabalho</th>
            <th scope="col">Endereço</th>
            <th scope="col">Estado</th>
            <th scope="col">Cidade</th>
            <th scope="col">Sexo</th>
            <th scope="col">Estado Civil</th>
            <th scope="col">Foto</th>
            <th scope="col">Remover</th>
            <th scope="col">Alterar Dados</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $cadastroDao = new cadastroDao();
        $cadastroDao->read();
        foreach ($cadastroDao->read() as $cadastroFuncionario):
            ?>
            <tr>
                <td><?= $cadastroFuncionario['nome'] ?></td>
                <td><?= $cadastroFuncionario['sobrenome'] ?></td>
                <td><?= $cadastroFuncionario['email'] ?></td>
                <td><?= '#####' ?></td>
                <td><?= $cadastroFuncionario['cpf'] ?></td>
                <td><?= $cadastroFuncionario['carteiraTrabalho'] ?></td>
                <td><?= $cadastroFuncionario['endereco'] ?></td>
                <td><?= $cadastroFuncionario['estado'] ?></td>
                <td><?= $cadastroFuncionario['cidade'] ?></td>
                <td><?= $cadastroFuncionario['sexo'] ?></td>
                <td><?= $cadastroFuncionario['estadoCivil'] ?></td>
                <td><?= '######' ?></td>

                <td>

                        <a class="btn btn-danger" href="../controllers/deleteControle.php?id=<?= $cadastroFuncionario['id'] ?>">Deletar</a>

                </td>
                <td><a class="btn btn-primary" href="editar-formulario.php?id=<?= $cadastroFuncionario['id'] ?>">Alterar</a></td>
            </tr>
        <?php
        endforeach
        ?>
        </tbody>
    </table>
    <a href="index.html" class="btn btn-info">voltar</a>
</div>
</body>
</html>