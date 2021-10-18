<?php


namespace AppDemo\Controller;
use AppDemo\Model\CustomerModel;

class AuthController
{
    private $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    public function login($phone,$password)
    {
        if($this->customerModel->login($phone,$password)){
//            echo "Login Thành cồng";
            $customer = $this->customerModel->getById($password);
            $_SESSION["user"] = $customer["customerName"];
            header('Location:index.php');
        }else{
            echo "Login thất bại";
//            $_SESSION['loginFail'] = "Tài khoản không đúng";
        }
    }

    public function showLogin(){
        include_once "app/View/Auth/login.php";
    }

    public function logout()
    {
        session_destroy();
//        session_unset("user");
        header("Location:index.php?page=login");
    }
}