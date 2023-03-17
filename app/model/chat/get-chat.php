<?php
date_default_timezone_set('America/Bogota');
if (isset($_SESSION['unique_id'])) {
    include_once (__dir__."/../config.php");
    $output = '';
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = mysqli_real_escape_string($conn, $_POST['id_out']);
    $sql2="SELECT * FROM grupos_chat WHERE id_grupo={$incoming_id}";
    $query2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($query2) > 0) {
        $sql3 = "SELECT * FROM messages LEFT JOIN users ON id = messages.outgoing_msg_id
                WHERE (incoming_msg_id = {$incoming_id}) ORDER BY msg_id";
        $query3 = mysqli_query($conn, $sql3);
        $unavez=false;
        $unavez2=false;
        if (mysqli_num_rows($query3) > 0) {

         
            $cuando="";
            $dia = date('Y-m-d');
            while ($row = mysqli_fetch_assoc($query3)) {

              

               
                if($row['fecha']==$dia){
                    $cuando="Hoy";
                    if($unavez==false){
                        $output .='<spam class="dia"> ' . $cuando . '</spam>';
                        $unavez = true;
                    }
                    
                }else{
                    $antes=$row['fecha'];
                        if($antes==$row['fecha']){
                            if($unavez2==false){
                                $output .='<spam class="dia"> ' . $antes . '</spam>';
                                $unavez2 = true;
                                $cuando="";
                            }else{
                                $unavez2=false;
                            }
                        }
                    
                }

                if ($row['outgoing_msg_id'] === $outgoing_id) {
                   
                    if($row['tipo']!=1){
                        $output .= '
                        <div class="chat outgoing" id="'. $row['msg_id'] .'">
                        <div class="details">
                            <p>' . $row['msg'] . ' <br> <spam class="horasali"> ' . formatohora($row['hora']) . '</spam></p>
                        </div>
                        </div>';
                    }else{
                        $output .= '<div class="chat outgoing" id="'. $row['msg_id'] .'">
                        <div class="details">
                            <img id="msimg" src="php/images/chat/' . $row['imagen'] . '" alt="">
                            <br> <spam class="horasali"> ' . formatohora($row['hora']) . '</spam>
                        </div>
                        </div>';
                    }
                    
                } else {
                    if($row['tipo']!=1){
                    $output .= '<div class="chat incoming" id="'. $row['msg_id'] .'">
                                    <img src="php/images/grupo/' . $row['img'] . '" alt="">
                                    <div class="details">
                                    <span> ' . $row['fname'] . " " . $row['lname'] . ' </span>
                                        <p>' . $row['msg'] . ' <br> <spam class="horaentra"> ' . formatohora($row['hora']) . '</spam></p>
                                    </div>
                                    </div>';
                }else{
                    $output .= '<div class="chat incoming" id="'. $row['msg_id'] .'">
                                    <img src="php/images/grupo/' . $row['img'] . '" alt="">
                                    <div class="details">
                                    <div class="img-nombre">
                                    <span> ' . $row['fname'] . " " . $row['lname'] . ' </span>
                                    <img id="msimg" src="php/images/chat/' . $row['imagen'] . '" alt="">
                                    <spam class="horaentra"> ' . formatohora($row['hora']) . '</spam>
                                    </div>
                                    </div>
                                    </div>';
                }
            }
            }
        }else{
            $output .= '<div class="text">No hay mensajes disponibles. Una vez que envíe el mensaje, aparecerán aquí.</div>';
        }


    }else{
        $sql = "SELECT * FROM messages LEFT JOIN users ON users.id = messages.outgoing_msg_id
        WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
        OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {
            $unavez=false;
            $unavez2=false;
            $cuando="";
            $dia = date('Y-m-d');
        while ($row = mysqli_fetch_assoc($query)) {

            
               
                if($row['fecha']==$dia){
                    $cuando="Hoy";
                    if($unavez==false){
                        $output .='
                            <li class="chat-day-title"> 
                                <span class="title">'.$cuando.'</span>
                            </li>';
                        $unavez = true;
                    }
                    
                }else{
                    $antes=$row['fecha'];
                        if($antes==$row['fecha']){
                            if($unavez2==false){
                                $output .='
                                    <li class="chat-day-title"> 
                                        <span class="title">'.$antes.'</span>
                                    </li>';
                                $unavez2 = true;
                                $cuando="";
                            }else{
                                $unavez2=false;
                            }
                        }
                    
                }

            




    if ($row['outgoing_msg_id'] === $outgoing_id) {
        if($row['tipo']!=1){

            $output .= salida($_SESSION['username'], $row['msg'], formatohora($row['hora']));


            }/*else{
            $output .= '<div class="chat outgoing" id="'. $row['msg_id'] .'">
                <div class="details">
                    <img id="msimg" src="php/images/chat/' . $row['imagen'] . '" alt="">
                    <spam class="horasali"> ' . formatohora($row['hora']) . '</spam>
                </div>
                </div>'; 
            }*/
    } else {
        if($row['tipo']!=1){

            $output .= entrada($row['n_user']." ".$row['l_user'], formatohora($row['hora']), $row['msg']);

          


        }/*else{
            $output .= '<div class="chat incoming" id="'. $row['msg_id'] .'">
                <img src="php/images/grupo/' . $row['img'] . '" alt="">
                <div class="details">
                <img id="msimg" src="php/images/chat/' . $row['imagen'] . '" alt="">
                <spam class="horaentra"> ' . formatohora($row['hora']) . '</spam>
                </div>
                </div>';
        }*/
    }

    }$output .= ' </ul>
    </div>';
    } else {
        $output .= entrada("", "", "NO HAY CHATS PARA MOSTRAR");
    }}

        echo $output;

    }else {
        header("location: ../login.php");
    }

    
    function formatohora($hora){
        $formato=strtotime('12:00');
        $hora = date("H:i", strtotime($hora)); 
        if($hora>$formato){
            $nhora= date("H:i", strtotime($hora." - 12 hour"));
            return $nhora . ' pm';
        }else{
            return $hora . ' am';
        }
        
    }
  
    function entrada($nombre, $hora, $mensaje){
        $output='
                                   
                                    <li>
                                        <div class="conversation-list">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <h5 class="conversation-name"><a href="#" class="user-name">'.$nombre.'</a> <span class="time">'.$hora.'</span></h5>
                                                    <p class="mb-0">'.$mensaje.'</p>
                                                </div>
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </li>

        ';
        return $output;
    }

    function salida($nombre, $mensaje, $hora){
        $output='

                <li class="right">
                <div class="conversation-list">
                    <div class="ctext-wrap">
                        <div class="ctext-wrap-content">
                            <h5 class="conversation-name"><a href="#" class="user-name">'.$nombre.'</a> <span class="time">'.$hora.'</span></h5>
                            <p class="mb-0">'.$mensaje.'</p>
                        </div>
                        <div class="dropdown align-self-start">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Copy</a>
                                <a class="dropdown-item" href="#">Save</a>
                                <a class="dropdown-item" href="#">Forward</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </li>    
        ';
        return $output;
    }
    
    