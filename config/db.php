<?php
require("confing.php");
class Database
{
    private  $connection;
    private static $instance;
    public function __construct()
    {
        $this->connection = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME, USER, PASSWORD);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    public function connect()
    {
        return $this->connection;
    }
}


// var_dump(Database::getInstance()->connect());
