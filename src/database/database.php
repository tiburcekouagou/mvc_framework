<?php


class Database {
  /***************************************
    PROPRIETES DE LA CLASSE
  ***************************************/
  
  private String $db_host = "db.3wa.io";
  private String $db_name = "tiburcekouagou_Mon_mvc";
  private String $db_username = "tiburcekouagou";
  private String $db_password = "2d3e9f99250773440ed5dabe521727fb";
  public $dbh; // se connect a la BDD
  
  /***************************************
    METHODES DE LA CLASSE
  ***************************************/
  public function __construct() {
    $this->db_host = 
    
    $this->dsn = "mysql:host=$this->db_host;dbname=$this->db_name";
    $this->options = [
      PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
      ];
    try {
      $this->dbh = new PDO($this->dsn, $this->db_username, $this->db_password, $this->options);
    } catch (PDOException $e) {
      die("Database connection error: $e->message");
    }
  }
  
}
