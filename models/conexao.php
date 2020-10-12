<?php

class conexao
{
    public static $instance;

    public static function getConn()
    {
        if (!isset(self::$instance)):
            self::$instance = new \PDO('mysql:dbname=bancoVikings;host=localhost', 'root', '19960709');
        endif;

        return self::$instance;


    }


}



