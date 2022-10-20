<?php
    $connection = mysqli_connect("alanpruebasphp.com", "root", "password", "pruebas_php");

    if(!$connection) {
        ?>
        <h1 class="status-off">Connection OFF</h1>
        <?php

    }else {
        ?>
        <h1 class="status-ok">Connection OK</h1>
        <?php
    }
?>