<?php

include "db.php";

class DataOperation extends Database
{
    //insertion function
    public function  insert_record($table,$fields){
        //Insert into table_name() values('name', 'worth')";
        $sql = "";
        $sql .= "INSERT INTO ".$table;
        //contantion
        $sql .= " (".implode("," , array_keys($fields)).") VALUES "; //billionaries
        $sql .= "('".implode("','", array_values($fields))."')"; //query
        //echo $sql; //this prints
        $query = mysqli_query($this->con,$sql);
        if($query){
            return true;
        }
    }

    //fetch
    public function fetch_record($table){
        $sql = "SELECT * FROM " .$table;
        //surround with if(isset)
        if (isset($array)) {
            $array = $array();
        }
        $query = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }

    //update
    public function  select_record($table,$where){
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value){
            //id = 'S' AND name = ""
            $condition .= $key ."='" . $value . "' AND ";  //concatenation php
        }
        $condition = substr($condition, 0, -5); //remove strings
        $sql .= "SELECT * FROM " .$table." WHERE " .$condition;
        $query = mysqli_query($this->con,$sql);
        $row = mysqli_fetch_array($query);
        return $row;
    }

    public function  update_record($table,$where,$fields){
        $sql="";
        $condition = "";
        foreach ($where as $key => $value){
            //id = 'S' AND name = ""
            $condition .= $key ."='" . $value . "' AND ";  //concatenation php
        }
        $condition = substr($condition, 0, -5); //remove strings
        foreach ($fields as $key => $value){
            //UPDATE table SET name = '' , worth = '' WHERE id = '';
            $sql .= $key . "='".$value."', ";
        }
        $sql = substr($sql, 0, -2);
        $sql = "UPDATE " .$table." SET ".$sql." WHERE ".$condition;
        if(mysqli_query($this->con,$sql)){
            return true;
        }
    }

    public function delete_record($table, $where){
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value){
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5); //remove strings
        $sql = "DELETE FROM " .$table." WHERE " .$condition;
        if(mysqli_query($this->con,$sql)){
            return true;
        }
    }
}

$obj = new  DataOperation;

if(isset($_POST["submit"])){
    $myArray = array(
      "name"=> $_POST["name"],
        "worth" => $_POST["worth"],
        //adding more columns
       // "key"=>"values",
    );

    if($obj->insert_record("billionaries", $myArray)){
        header("location:index.php?msg=Record Inserted");
    }
}

if(isset($_POST["edit"])){
    $id = $_POST["id"];
    $where = array("id"=>$id);
    $myArray = array(
        "name"=> $_POST["name"],
        "worth" => $_POST["worth"]
    );

    if($obj->update_record("billionaries", $where,$myArray)){
        header("location:index.php?msg=Record Updated Successfully");
    }
}

//delete
if(isset($_GET["delete"])){
    $id = $_GET["id"] ?? null;
    $where = array("id"=> $id);
    if( $obj-> delete_record("billionaries", $where)){
        header("location:index.php?msg=Record Deleted ");
    }

}

?>