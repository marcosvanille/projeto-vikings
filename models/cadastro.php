<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

class cadastroFuncionario
{
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $cpf;
    private $carteiraTrabalho;
    private $endereco;
    private $estado;
    private $cidade;
    private $sexo;
    private $estadoCivil;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getSobrenome()
    {
        return $this->sobrenome;
    }


    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getCpf()
    {
        return $this->cpf;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }


    public function getCarteiraTrabalho()
    {
        return $this->carteiraTrabalho;
    }


    public function setCarteiraTrabalho($carteiraTrabalho)
    {
        $this->carteiraTrabalho = $carteiraTrabalho;
    }


    public function getEndereco()
    {
        return $this->endereco;
    }


    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }


    public function getEstado()
    {
        return $this->estado;
    }


    public function setEstado($estado)
    {
        $this->estado = $estado;
    }


    public function getCidade()
    {
        return $this->cidade;
    }


    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }


    public function getSexo()
    {
        return $this->sexo;
    }


    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }


    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }


}

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
//var_dump($cadastro);
$cadastroDao = new cadastroDao();
$cadastroDao->create($cadastro);



