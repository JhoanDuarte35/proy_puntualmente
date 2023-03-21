<?php
session_start();
include_once (__dir__."/../config.php");
$outgoing_id = $_SESSION['unique_id'];
$output = "";
$sql2 = mysqli_query($conn, "SELECT * FROM grupo_integrante WHERE id_usuario = '{$outgoing_id}'");
$row = mysqli_fetch_assoc($sql2);
if(mysqli_num_rows($sql2) == 0){
    $output .= "No estas en ningún grupo";
}elseif(mysqli_num_rows($sql2) > 0){
    foreach($sql2 as $value){
    $id_grupo=$value['id_grupo'];
    $sql3 = mysqli_query($conn, "SELECT * FROM grupos WHERE id_grupo = '{$id_grupo}'");
    $row2 = mysqli_fetch_assoc($sql3);
    $output .= 
    '
    <li>
    <a href="#" id=' . $row2['id_grupo'] . '>
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0 avatar-sm me-3">
                <span class="avatar-title rounded-circle  bg-primary-subtle text-primary">
                    N
                </span>
            </div>
            
            <div class="flex-grow-1">
                <h5 class="font-size-14 mb-0">'.$row2['n_grupo'].'</h5>
            </div>
        </div>
    </a>
    </li>
';
}
}
echo $output;


    ?>