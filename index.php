<?php

require_once __dir__.'/app/controller/controlador.php';

$userPuntualmente = new controlador();
date_default_timezone_set("America/Bogota");

if($userPuntualmente->iniciar_sesion()){

    //ADMIN

    if(isset($_GET["action"]) ){
        
        switch($_GET["action"]){

            case 'home':
                $userPuntualmente->home();
                break;
            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
                break;
            default:
                $userPuntualmente->paginaAdmin();
                break;
        }
    }
    // usuario con privilegios

    else if (isset($_GET["action"])){

        switch ($_GET["action"]){

            case 'operarios':
                $userPuntualmente->pagOperarios();
                break;
            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
               break;
            default:
                $userPuntualmente->pagOperarios();
                break;
        }
    }

    // Usuario regular

    else if(0==0){
        //
    }else{
        $userPuntualmente->home();
    }

}else{

    if(isset($_GET["action"])){
        switch ($_GET["action"]){
            case 'login':
                $userPuntualmente->login();
                break;
            default:
                $userPuntualmente->index();
                break;
        }
    }else{
        $userPuntualmente->index();
    }
}


?>