<?php 
    function addKeyAndValue(&$array, $key, $value){
        return $array[$key] = $value;
    }

    function isValidData($mail, $password){
    
        if(!$mail || !$password) /* throw new Error("Need 1 string to work") */ return false;

        if(!strpos($mail, ".com") 
            || !strpos($mail, "@")) /* hrow new Error("String must be a valid email") */ return false;
        
        if(strlen($password) < 8) /* throw new Error("String must have at least 8 characters") */ return false;
       
        if(ctype_digit($password)) /* throw new Error("string must contain at least one letter") */ return false;
        
        return true;
    }
?>