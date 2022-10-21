<?php
require_once("db.php");
require("utils.php");
  class Model {
    private $count;

    public function __construct(){
    }

    static function register($table, $data, $db){ 
        var_dump($data);  
        $registerQuery = "INSERT INTO " . $table . "(name, lastname, email, password) VALUES ($data)";
        $response = mysqli_query($db, $registerQuery);
        return $response;
    
    }

    static function getUsers($table, $db){
        $getAllQuery = "SELECT id, name, lastname, email FROM $table";
        $response = mysqli_query($db, $getAllQuery);
        if(!$response)return false;
        $users = mysqli_fetch_all($response, MYSQLI_ASSOC);
        addKeyAndValue($users, "count", $response->num_rows);

        return $users;
    }



    



}
?>