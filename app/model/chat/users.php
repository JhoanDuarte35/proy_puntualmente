<?php
    include_once (__dir__."/../config.php");
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM users WHERE NOT id = {$outgoing_id} ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    $class="";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){

        while ($row = mysqli_fetch_assoc($query)) {
            $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['id']}
                        OR outgoing_msg_id = {$row['id']}) AND (outgoing_msg_id = {$outgoing_id} 
                        OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
            $query2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($query2);
            (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result = "No hay mensajes disponibles";
            (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
            if (isset($row2['outgoing_msg_id'])) {
                ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "Tu: " : $you = "";
            } else {
                $you = "";
            }
            ($row['status'] == "Desconectado") ? $class = "" : $class = "online";
            ($outgoing_id == $row['id']) ? $hid_me = "hide" : $hid_me = "";
            
            if($row['status']=="Desconectado"){

            }
            //class="active"
            $output .= '
                            <li>

                                <a href="chat?user_id=' . $row['id'] . '">
                                    <div class="d-flex align-items-start">
                                        
                                        <div class="flex-shrink-0 user-img '. $class .' align-self-center me-3">
                                            <img src="'.controlador::$rutaAPP.'app/assets/images/users/' . $row['img'] . '" class="rounded-circle avatar-sm" alt="">
                                            <span class="user-status"></span>
                                        </div>
                                        
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="text-truncate font-size-14 mb-1">' . $row['n_user'] . " " . $row['l_user'] .'</h5>
                                            <p class="text-truncate mb-0">'. $msg .'</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="font-size-11">02 min</div>
                                        </div>
                                    </div>
                                </a>

                            </li>
                        ';
        }
    }
    echo $output;


?>