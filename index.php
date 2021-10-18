<?php
require __DIR__ . '/vendor/autoload.php';
session_start();
use AppDemo\Controller\CustomerController;
use AppDemo\Controller\AuthController;
$page = $_GET['page'];
$customerController = new CustomerController();
$authController = new AuthController();

switch ($page) {
    case "detail":
        $id = $_GET['id'];
        $customerController->showDetail($id);
        break;
    case "customer-create":
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $customerController->showFormCreate();
        }else{
            $customerController->store();
        }
        break;
    case "login":
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showLogin();
        }else{
            $authController->login($_REQUEST['phone'],$_REQUEST["psw"]);
        }
        break;
    case "logout":
        $authController->logout();
        break;
    default:
        $customerController->index();

}
