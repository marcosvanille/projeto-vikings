<?php

class conexao
{
    public function insert()
    {
        $conn = new PDO("mysql:dbname=bancoVikings;host=localhost", "root", "19960709");

        $stmt = $conn->prepare("SELECT * FROM formulario");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        var_dump($results);
    }



}



