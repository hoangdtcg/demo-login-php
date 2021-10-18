<?php

namespace AppDemo\Controller;

use AppDemo\Model\CustomerModel;

class CustomerController
{
    private $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    public function index()
    {
        if(isset($_SESSION['user'])) {
            $customers = $this->customerModel->getAll();//Lấy dữ liệu từ model
            include_once "app/View/Customer/list.php";//đẩy ra view
        }else{
            header("Location:index.php?page=login");
        }
    }

    public function showDetail($id)
    {
        if(!isset($_SESSION['user'])){
            header("Location:index.php?page=login");
        }
        $customer = $this->customerModel->getById($id);
        include_once "app/View/Customer/detail.php";//đẩy ra view
    }

//    public function create(){
//        if($_SERVER["REQUEST_METHOD"] == "GET"){
//            include_once "app/View/Customer/create.php";
//        }else{
//            $data = [
//                "firstname" => $_REQUEST["firstname"],
//                "lastname" => $_REQUEST["lastname"],
//                "country" => $_REQUEST["country"],
//                "subject" => $_REQUEST["subject"],
//            ];
//            $this->customerModel->store($data);
//            header("Location:index.php");
//        }
//    }
    public function store()
    {
        if(!isset($_SESSION['user'])){
            header("Location:index.php?page=login");
        }
        $data = [
            "firstname" => $_REQUEST["firstname"],
            "lastname" => $_REQUEST["lastname"],
            "country" => $_REQUEST["country"],
            "subject" => $_REQUEST["subject"],
        ];
        $this->customerModel->store($data);
        header("Location:index.php");
    }

    public function showFormCreate()
    {
        if(!isset($_SESSION['user'])){
            header("Location:index.php?page=login");
        }
        include_once "app/View/Customer/create.php";

    }
}