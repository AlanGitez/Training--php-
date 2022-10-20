<?php
    require_once("models/index.php");
    class Controller{

        public function index(){
            $this->model = new Model();
            
        }

    }
?>