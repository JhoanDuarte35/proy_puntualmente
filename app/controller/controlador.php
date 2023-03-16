<?php

class controlador{
    public static $rutaAPP="/proy_puntualmente/";

    public function iniciar_sesion(){

        if(!isset($_SESSION)){
            session_start();
        }

        if(isset($_SESSION["unique_id"])){
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



    // --------------------------------------------POST----------------------------------------- //

    public function signup(){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            include_once(__dir__."/../model/usuarios/signup.php");
        }else{
            header("location: registrar");
        }
    }

    public function auth(){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            include_once(__dir__."/../model/auth/login.php");
        }else{
            header("location: login");
        }
    }

    function cerrar_sesion(){
        if(!isset($_SESSION)){
            session_start();
        }
        session_destroy();
        header('Location: '.controlador::$rutaAPP);
    }

    public function index(){
        session_destroy();
        include_once(__dir__."/../views/auth/login.php");
    }

}
?>