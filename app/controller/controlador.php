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

    public function validar(){
        include_once(__dir__."/../views/login/php/validarlogin.php");
    }

    public function home(){
        include_once(__dir__."/../views/home/index.php");

    }


    function cerrar_sesion(){
        if(!isset($_SESSION)){
            session_start();
        }
        session_destroy();
        header('Location: '.controlador::$rutaAPP.'index.php/login');
    }

    public function index(){
        session_destroy();
        include_once(__dir__."/../views/auth/login.php");
    }

}
?>