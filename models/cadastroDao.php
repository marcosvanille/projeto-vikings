<?php

class cadastroDao
{

    public function create(cadastroFuncionario $p)
    {
        $sql = 'INSERT INTO  formulario(nome,sobrenome,email,cpf,carteiraTrabalho,endereco,estado,cidade,sexo,estadoCivil)
values (?,?,?,?,?,?,?,?,?,?)';
        $stmt = conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->setNome());
        $stmt->bindValue(2, $p->setSobrenome());
        $stmt->bindValue(3, $p->setEmail());
        $stmt->bindValue(4, $p->setCpf());
        $stmt->bindValue(5, $p->setCarteiraTrabalho());
        $stmt->bindValue(6, $p->setEndereco());
        $stmt->bindValue(7, $p->setEstado());
        $stmt->bindValue(8, $p->setCidade());
        $stmt->bindValue(9, $p->setSexo());
        $stmt->bindValue(10, $p->setEstadoCivil());
        $stmt->execute();

    }

    public function read()
    {
//        $stmt = $conn->prepare("SELECT * FROM formulario");
//        $stmt->execute();
//        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//        var_dump($results);
    }

    public function update(cadastroFuncionario $p)
    {

    }

    public function delete($id)
    {

    }


}