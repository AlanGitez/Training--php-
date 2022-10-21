<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Pruebas PHP</title>
</head>
<body>
<?php 
    if(!$status) {
        ?>
        <a href="index.php" class="status-off"><h1 >Connection OFF</h1></a>
        <?php
        
        }else {
        ?>
        <a href="index.php" class="status-ok"><h1 >Connection OK</h1></a>
        <?php
    }
?>

    