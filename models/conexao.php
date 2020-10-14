<?php

class Conexao
{
    public static $instance;



    public static function getConn()
    {
        if (!isset(self::$instance)) {
            self::$instance = new \PDO('mysql:dbname=bancoVikings;host=localhost', 'root', '19960709');
            self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$instance->exec('set names utf8');

        }
        return self::$instance;


    }
}






