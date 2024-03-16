<?php
session_start();
require_once('./AdLog.php');
require_once('./Enroll.php');
require_once('./Evaluate.php');
class connections{
    public $connection;
public function __construct(){
         $this->dbconnect(); 
}

public function dbconnect(){
  $this->connection = mysqli_connect('localhost', 'root', '', 'adlog');
  if(mysqli_connect_error()){
   die('Connection Failed');
  }   
}

public function check ($a){
  $return = mysqli_real_escape_string($this->connection,$a);
   return $return;
   }
}
?>