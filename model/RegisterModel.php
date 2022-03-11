<?php

require_once "./src/database/database.php";

class UserModel extends DataBase {
  public String $firstname;
  public String $lastname;
  public String $email;
  public String $telephone;
  
  public function __construct($firstname="", $lastname="", $email="", $telephone="") {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->telephone = $telephone;
  }
  
  public function create_table() {
    $db = new DataBase();
    $sql = "CREATE TABLE IF NOT EXISTS users ( 
      usersId int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
      usersFirstname varchar(64) NOT NULL,
      usersLastname varchar(64) NOT NULL,
      usersEmail varchar(64) NOT NULL,
      usersTelephone varchar(64) NOT NULL
      );";
    $db->dbh->query($sql);
  }
  
  public function add() {
    $db = new DataBase; // instancier la classe DataBase
    
    $sql = "INSERT INTO users (usersFirstname, usersLastname, usersEmail, usersTelephone)
    VALUES (?, ?, ?, ?);";
    
    $stmt = $db->dbh->prepare($sql); // function prepare/query
    
    $query = $stmt->execute([$this->firstname,$this->lastname, $this->email,$this->telephone
]);
  }
}