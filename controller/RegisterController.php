<?php

require "./model/RegisterModel.php";

class RegisterController extends UserModel {
  
  public String $firstname;
  public String $lastname;
  public String $email;
  public String $telephone;
  
  public function displayRegister() {
    require "views/register.phtml";
  }
  
  public function insert() {
    if (isset($_POST["firstname"]) && !empty($_POST["firstname"])) {
      $this->firstname = $_POST["firstname"];
    }
    
    if (isset($_POST["lastname"]) && !empty($_POST["lastname"])) {
      $this->lastname = $_POST["lastname"];
    }
    
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
      $this->email = $_POST["email"];
    }
    
    if (isset($_POST["telephone"]) && !empty($_POST["telephone"])) {
      $this->telephone = $_POST["telephone"];
    }
    
    $model = new UserModel($this->firstname, $this->lastname, $this->email, $this->telephone);
    
    $model->create_table();
    $model->add();
    
  }
}