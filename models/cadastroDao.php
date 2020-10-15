<?php
include 'conexao.php';

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
        $sql = 'UPDATE formulario SET id = ?, nome = ?,sobrenome = ?,email = ?,cpf = ?,carteiraTrabalho = ?,endereco = ?,estado = ?,cidade = ?,sexo = ?,estadoCivil = ? ';

        $stmt = conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getId());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getSobrenome());
        $stmt->bindValue(4, $p->getEmail());
        $stmt->bindValue(5, $p->getCpf());
        $stmt->bindValue(6, $p->getCarteiraTrabalho());
        $stmt->bindValue(7, $p->getEndereco());
        $stmt->bindValue(8, $p->getEstado());
        $stmt->bindValue(9, $p->getCidade());
        $stmt->bindValue(10, $p->getSexo());
        $stmt->bindValue(11, $p->getEstadoCivil());


        $stmt->execute();

    }

    public function delete($id)
    {
        $sql = 'DELETE FROM formulario WHERE id = ?';

        $stmt = conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

//        if ($stmt){
//            header("location: lista.php?removido=true");
//        }




    }


}