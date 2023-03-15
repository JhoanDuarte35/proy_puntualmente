<?php

class controlador{
    public static $rutaAPP="/proy_puntualmente/";

    public function iniciar_sesion(){

        if(!isset($_SESSION)){
            session_start();
        }

        if(isset($_SESSION["id"])){
            return true;
        }
        return false;
    }

    
    public function login(){
        include_once(__dir__."/../views/auth/login.php");
    }

    public function registrar(){
        include_once(__dir__."/../views/opc_admin/registrar_users.php");
    }

    public function home(){
        include_once(__dir__."/../views/home/index.php");
    }

    public function signup(){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            include_once(__dir__."/../model/usuarios/signup.php");
        }else{
            include_once(__dir__."/../views/opc_admin/registrar_users.php");
        }
    }

    public function auth(){
        include_once(__dir__."/../model/usuarios/login.php");
    }

    function cerrar_sesion(){
        if(!isset($_SESSION)){
            session_start();
        }
        session_destroy();
        header('Location: '.controlador::$rutaAPP.'login');
    }

    public function index(){
        session_destroy();
        include_once(__dir__."/../views/auth/login.php");
    }

}
?>