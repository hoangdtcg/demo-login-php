<?php


namespace AppDemo\Model;


class CustomerModel
{
    private $dbConnect;

    public function __construct()
    {
        $conn = new DBConnect();
        $this->dbConnect = $conn->connect();
    }

    public function getAll(){
        $sql = "SELECT * FROM customers";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM customers WHERE customerNumber =".$id;
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }

    public function store($data){
        var_dump($data);
    }

    public function login($phone, $password)
    {
        $sql = "SELECT * FROM customers WHERE phone=".$phone . " and customerNumber =".$password;
        $stmt = $this->dbConnect->query($sql);
        return $stmt->rowCount() > 0;
    }
}