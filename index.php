<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pruebas PHP</title>
</head>
<body>
    <div class="form-container">
        <h3>Register</h3>
        <form method="post">
            <input 
                type="text" 
                name="name" 
                placeholder="Name">
            <input 
                type="text" 
                name="lastname"
                placeholder="Lastname">
            <input 
                type="email" 
                name="mail"
                placeholder="Email">
            <input 
                type="password" 
                name="password"
                placeholder="Password">
            <input 
                type="submit" 
                name="register">
        </form>
    </div>


    <?php
        include("register.php");
        
    ?>
</body>
</html>
