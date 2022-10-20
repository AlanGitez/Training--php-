<?php
  class Model {
    private $db;

    public function __construct(){
        $this->db = new mysqli("alanpruebasphp.com", "root", "password", "pruebas_php");
    }


    public function register($table, $data){
        $registerQuery = "INSERT INTO $table VALUES ($data)";

        return $this->db->query($registerQuery);
    }
    

    public function getAll($table){
        $getAllQuery = "SELECT * FROM $table";
        if(!$this->db) return false;

        $users = $this->db->query($getAllQuery);
        if(!$users)return false;
        return mysqli_fetch_array($users, MYSQLI_ASSOC);
        

    }

    function isValidData($mail, $password){
    
        if(!$mail || !$password) /* throw new Error("Need 1 string to work") */ return false;

        if(!strpos($mail, ".com") 
            || !strpos($mail, "@")) /* hrow new Error("String must be a valid email") */ return false;
        
        if(strlen($password) < 8) /* throw new Error("String must have at least 8 characters") */ return false;
       
        if(ctype_digit($password)) /* throw new Error("string must contain at least one letter") */ return false;
        
        return true;
    }

    public function __destruct(){

        if($this->success){
            ?>
            <h3 class="data-wrong"> has been registered SUCCESSFULLY</h3> 
           <?php

        }else {
            ?>
            <h3 class="data-wrong"> Ups, something went wrong</h3>
           <?php

        } 
    }
}
?>