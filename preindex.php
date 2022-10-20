<?php
require("models/index.php");

$model = new Model();


if($_POST['register']){
    $data = $_POST;

    $model->register("Users", $data);
    

}

?>