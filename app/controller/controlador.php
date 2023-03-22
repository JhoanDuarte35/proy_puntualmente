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

    public function admint(){
        include_once(__dir__."/../views/home/admint.php");
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

    public function admintablas(){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            include_once(__dir__."/../model/admintablas/admin_tablas.php");
        }else{
            header("location: home");
        }
    }

//________________________________________________Chats---------------------------------------------//

    public function chat(){
        include_once(__dir__."/../views/home/chat.php");
    }

    public function getchat(){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            include_once(__dir__."/../model/chat/get-chat.php");
        }else{
            header("Location: home");
        }
    }
    public function users(){

        include_once(__dir__."/../model/chat/users.php");
       
    }

    public function getheader(){

        include_once(__dir__."/../model/chat/getheaderchat.php");

    }

    public function insertchat(){
        include_once(__dir__."/../model/chat/insert-chat.php");
    }
    
// ------------------------------------ GRUPOS-------------------------------

    public function addusersgroup(){
        include_once(__dir__."/../model/grupo/busquedauser.php");
    }

    public function guardargrupos(){
        include_once(__dir__."/../model/grupo/grupos-guardar.php");
    }

    public function mostrargrupos(){
        include_once(__dir__."/../model/grupo/mostrargrupos.php");

    }
    public function admingrupos(){
        include_once(__dir__."/../model/grupo/admingrupos.php");
    }






    function cerrar_sesion(){
        if(!isset($_SESSION)){
            session_start();
        }
        session_destroy();
        include(__dir__."/../model/config.php");
        $status="Desconectado";
        $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE id = {$_SESSION['unique_id']}");
        header('Location: '.controlador::$rutaAPP);
        


    }

    public function index(){
        session_destroy();
        include_once(__dir__."/../views/auth/login.php");
    }

}
?>