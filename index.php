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
            case 'notify':
                $userPuntualmente->notify();
                break;
            case 'registrar':
                $userPuntualmente->registrar();
                break;
            case 'signup':
                $userPuntualmente->signup();
                break;
            case 'admint':
                $userPuntualmente->admint();
                break;
            case 'admintablas':
                $userPuntualmente->admintablas();
                break;
                // CHAT
            case 'chat':
                $userPuntualmente->chat();
                break;
            case 'chat/getchat':
                $userPuntualmente->getchat();
                break;
            case 'chat/users':
                $userPuntualmente->users();
                break;
            case 'chat/getheader':
                $userPuntualmente->getheader();
                break;
            case 'chat/insertchat':
                $userPuntualmente->insertchat();
                break;

                //GRUPOS
            
            case 'chat/addusersgroup':
                $userPuntualmente->addusersgroup();
                break;
            
            case 'chat/guardargrupos':
                $userPuntualmente->guardargrupos();
                break;
            case 'chat/mostrargrupos':
                $userPuntualmente->mostrargrupos();
                break;
            case 'chat/admingrupos':
                $userPuntualmente->admingrupos();
                break;


            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
                break;
            default:
                $userPuntualmente->home();
                break;
        }
    }
    // usuario con privilegios

    else if (isset($_GET["action"])&&($_SESSION['rol']==2)){

        switch ($_GET["action"]){

            case 'notify':
                $userPuntualmente->notify();
                break;
            case 'registrar':
                $userPuntualmente->registrar();
                break;
            case 'signup':
                $userPuntualmente->signup();
                break;
    
                // CHAT
            case 'chat':
                $userPuntualmente->chat();
                break;
            case 'chat/getchat':
                $userPuntualmente->getchat();
                break;
            case 'chat/users':
                $userPuntualmente->users();
                break;
            case 'chat/getheader':
                $userPuntualmente->getheader();
                break;
            case 'chat/insertchat':
                $userPuntualmente->insertchat();
                break;

                //GRUPOS
            
            case 'chat/addusersgroup':
                $userPuntualmente->addusersgroup();
                break;
            
            case 'chat/guardargrupos':
                $userPuntualmente->guardargrupos();
                break;
            case 'chat/mostrargrupos':
                $userPuntualmente->mostrargrupos();
                break;
            case 'chat/admingrupos':
                $userPuntualmente->admingrupos();
                break;


            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
                break;
            default:
                $userPuntualmente->chat();
                break;
        }
        
    }else if (isset($_GET["action"])&&($_SESSION['rol']==3)){

        switch ($_GET["action"]){

            case 'notify':
                $userPuntualmente->notify();
                break;
    
                // CHAT
            case 'chat':
                $userPuntualmente->chat();
                break;
            case 'chat/getchat':
                $userPuntualmente->getchat();
                break;
            case 'chat/users':
                $userPuntualmente->users();
                break;
            case 'chat/getheader':
                $userPuntualmente->getheader();
                break;
            case 'chat/insertchat':
                $userPuntualmente->insertchat();
                break;

                //GRUPOS
            
            case 'chat/addusersgroup':
                $userPuntualmente->addusersgroup();
                break;
            
            case 'chat/guardargrupos':
                $userPuntualmente->guardargrupos();
                break;
            case 'chat/mostrargrupos':
                $userPuntualmente->mostrargrupos();
                break;
            case 'chat/admingrupos':
                $userPuntualmente->admingrupos();
                break;


            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
                break;
            default:
                $userPuntualmente->chat();
                break;
        }
    }else{
        $userPuntualmente->home()||$userPuntualmente->chat();
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