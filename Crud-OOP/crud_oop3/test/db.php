<?php

class Database{

  public $con;
  public function __construct(){
    $this->con = mysqli_connect("localhost", "root", "", "crud_oop3" );
 /*   if(!$this->con){
      echo "Connected";
    }else{
      echo "Not Connected";
    } */
  }
}

//$obj = new Database;

?>