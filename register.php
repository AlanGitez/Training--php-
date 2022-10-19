<?php 
    include("db.php");
    include("utils.php");

    $name = trim($_POST['name']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['mail']);
    $password = trim($_POST['password']);

    $insterQuery = "INSERT INTO `Users`(`name`, `lastname`, `email`, `password`) VALUES ('$name', '$lastname', '$email', '$password')";
    $getQuery;

  

        if($_POST['register']){
            echo "Esto es email en todo momento: $email <br>";

            if($name && $lastname && $email && $password){
                
                if(isValidData($email, $password)) $data = mysqli_query($connection, $insterQuery);
                else echo "<strong><p>invalid Credentials</p></strong>";

                if($data){
                   echo 'dataAlert("has been registered SUCCESSFULLY")';

                }else {
                    ?>
                    <h3 class="data-wrong"> Ups, something went wrong</h3>
                    <?php

                }

            }else {
                echo "almost 1 field is not completed";
            }
        }
?>