<?php

require_once __dir__.'/app/controller/controlador.php';

$userPuntualmente = new controlador();
date_default_timezone_set("America/Bogota");

if($userPuntualmente->iniciar_sesion()){

    //ADMIN

    if(isset($_GET["action"]) && ($_SESSION['rol']==1)){
        
        switch($_GET["action"]){

            case 'home':
                $userPuntualmente->home();
                break;
            case 'registrar':
                $userPuntualmente->registrar();
                break;
            case 'signup':
                $userPuntualmente->signup();
                break;
            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
                break;
            case 'chat':
                $userPuntualmente->chat();
                break;
            case 'chat/getchat':
                $userPuntualmente->getchat();
                break;
            case 'chat/users':
                $userPuntualmente->users();
                break;
            default:
                $userPuntualmente->home();
                break;
        }
    }
    // usuario con privilegios

    else if (isset($_GET["action"])){

        switch ($_GET["action"]){

            case 'registrar':
                $userPuntualmente->registrar();
                break;
            case 'signup':
                $userPuntualmente->singup();
                break;
            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
               break;
            case 'chat':
                $userPuntualmente->chat();
                break;
            case 'chat/getchat':
                $userPuntualmente->getchat();
                break;

           

            default:
                $userPuntualmente->home();
                break;
        }
    }else{
        $userPuntualmente->home();
    }

    // Usuario regular

}else{

    if(isset($_GET["action"])){
        switch ($_GET["action"]){
            case 'login':
                $userPuntualmente->login();
                break;
            case 'auth':
                $userPuntualmente->auth();
                break;
            default:
                header("location: login");
                break;
        }
    }else{
        $userPuntualmente->home();
    }
}


?>