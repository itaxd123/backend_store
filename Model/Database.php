<?php
class Database
{
    private static $host = 'mdb-test.c6vunyturrl6.us-west-1.rds.amazonaws.com';
    private static $dbname = 'bsale_test';
    private static $user = 'bsale_test';
    private static $pass = 'bsale_test';
    private static $port = '3306';
    // private static $host = 'localhost';
    // private static $dbname = 'mvc_php';
    // private static $user = 'root';
    // private static $pass = '';
    // private static $port = '3307';


    public static function Conectar()
    {
        $pdo = new PDO('mysql:host='.self::$host.
                        ';dbname='.self::$dbname.
                        ';port='.self::$port.
                        ';charset=utf8', 
                        self::$user, 
                        self::$pass);
                        
        //Filtrando posibles errores de conexión.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
