<?php 
    include("db.php");
    include("utils.php");
    include("models/index.php");

    $name = trim($_POST['name']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['mail']);
    $password = trim($_POST['password']);
    $insterQuery = "INSERT INTO `Users`(`name`, `lastname`, `email`, `password`) VALUES ('$name', '$lastname', '$email', '$password')";
    $getQuery;

  
    if($_POST['register']){
        echo "Apretaste el boton <br><br>";
        $newUser = new User($name, $lastname, $email, $password, $connection);
        echo "Name: " . $newUser->name . "<br> Lastname: " . $newUser->lastname . " <br> Email: " . $newUser->email . "<br> Password: " . $newUser->password;

        $newUser->insert();
    }
    
?>