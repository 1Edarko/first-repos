<?php
class Db {
    private $host = 'localhost';
    private $dbname = 'stage';
   private $user = 'root';
   private $pass = '';
   private $con;

  public function connect() {


   $this->con = new PDO ("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
   if (!$this->con) {
    echo 'Cannot connect to database server';
    exit;}
  
   return $this->con;



}
}

















?>