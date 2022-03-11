<?php

require "controller/AboutController.php";
require "controller/HomeController.php";
require "controller/LoginController.php";
require "controller/RegisterController.php";

class Router
{
    
    public function handleRequest(): void
    {
        $route = $_GET['action'] ?? 'home';
        
        switch ($route) {
            case 'home':
                $controller = new HomeController();
                $controller->displayHome();
                break;
            case 'about':
                $controller = new AboutController();
                $controller->displayAbout();
                break;
            case 'login':
                $controller = new LoginController();
                $controller->displayLogin();
                break;
            case 'register':
                $controller = new RegisterController();
                $controller->displayRegister();
                break;
            default:
                $controller = new HomepageController();
                $controller->displayHome();
                break;
        }
    }
}