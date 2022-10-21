<?php

    class MyDatabase{
        public static function connection(){
            $connection = new mysqli("mispruebasphp.com", "usuario", "contraseña", "pruebas_php");
            return $connection;
        }
    }

?>