<?php
namespace AppDemo\Model;
use PDO;
use PDOException;
class DBConnect
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost:8889;dbname=classicmodels;charset=utf8";
        $this->username = "root";
        $this->password = "root";
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
}