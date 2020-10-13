<?php

class cadastroDao
{

    public function create(cadastroFuncionario $p)
    {
        $sql = 'INSERT INTO  formulario(nome,sobrenome,email,cpf,carteiraTrabalho,endereco,estado,cidade,sexo,estadoCivil)
VALUES (?,?,?,?,?,?,?,?,?,?)';

        $stmt = conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getSobrenome());
        $stmt->bindValue(3, $p->getEmail());
        $stmt->bindValue(4, $p->getCpf());
        $stmt->bindValue(5, $p->getCarteiraTrabalho());
        $stmt->bindValue(6, $p->getEndereco());
        $stmt->bindValue(7, $p->getEstado());
        $stmt->bindValue(8, $p->getCidade());
        $stmt->bindValue(9, $p->getSexo());
        $stmt->bindValue(10, $p->getEstadoCivil());
        $stmt->execute();

    }

    public function read()
    {
        $sql = 'SELECT * FROM formulario';

        $stmt = conexao::getConn()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
            else:
            return [];
        endif;
    }

    public function update(cadastroFuncionario $p)
    {

    }

    public function delete($id)
    {

    }


}