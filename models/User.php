<?php
     class User {
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $db;
        public $success;

        public function __construct($name, $lastname, $email, $password, $db){

            $this->name = $name;    
            $this->lastname = $lastname;
            $this->email = $email;
            $this->password = $password;
            $this->db=$db;
        }


        public function insert(){
            $insterQuery = "INSERT INTO `Users`(`name`, `lastname`, `email`, `password`) VALUES ('$this->name', '$this->lastname', '$this->email', '$this->password')";
            
            if(!($this->name && $this->lastname && $this->email && $this->password)){
                echo "almost 1 field is not completed";
            }else {
                if($this->isValidData($this->email, $this->password)) $this->success = mysqli_query($this->db, $insterQuery);
                else echo "<strong><p>invalid Credentials</p></strong>";
            }
        }
        

        public function get(){
            $getAllQuery = "SELECT * FROM Users";
            if(!$this->db) return false;
    
            $users = mysqli_query($this->db, $getAllQuery);
            if(!$users)return false;
            return $users;
            
    
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
                <h3>soy yo</h3>
                <h3 class="data-wrong"> Ups, something went wrong</h3>
               <?php

            } 
        }
    }
?>