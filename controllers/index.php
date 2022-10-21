<?php
    require_once("models/index.php");
    require_once("utils.php");
    
    class Controller{
        private $db;
        public function __construct(){
            $this->db = MyDatabase::connection();
        }

        public function global(){
            $status = $this->db;
            require_once("views/layout/header.php");
        }

        public function index(){
            $users = Model::getUsers("Users", $this->db); 
            if(empty($users)) echo "ERROR";
            require_once("views/layout/table.php"); 
        }

        public function new(){
            //intendo que al recargar la pagina, no se reenvie el formulario con datos "fantasma";
            if(isset($_POST['register'])):
                $response = Controller::addUser();
                if(!$response) echo "Bad credentials";
            endif;
            unset($_POST['register']);
            require_once("views/layout/form.php");
        }

        public function addUser(){
            if(!isValidData($_POST['mail'], $_POST['password']))
                return false;
            
            $values = [];
            foreach($_POST as $value){
                $values[] = "'" . $value . "'";
            }
            // elimina el input del boton "register";
            array_pop($values);

            $queryString = implode(", ", $values);
            $response = Model::register("Users", $queryString, $this->db);

            return $response;
        }

    }
?>