<?php

session_start();
require_once 'router/route.php';
require_once 'templates/template.phtml';
require_once 'controller/RegisterController.php';


if( isset( $_GET['action'] ) && !empty( $_GET['action'] ) )
{
    $router = new Router();
    $router->handleRequest();
}

if( isset( $_POST['submit'] ) && !empty( $_POST['submit'] ) )
{
    $registerController = new RegisterController();
    $registerController->insert();
}