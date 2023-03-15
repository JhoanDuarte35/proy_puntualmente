<?php
session_start();
include_once "config.php";
date_default_timezone_set('America/Bogota');


include_once "get-ip.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if (!empty($username) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $user_pass = md5($password);
        $enc_pass = $row['password'];
        if ($user_pass === $enc_pass) {
            $status = "Disponible";
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
            if ($sql2) {

                $dia = date('Y-m-d');
                $hora = date('H:i:s');
                $ip=getRealIP();
                $log_session= mysqli_query($conn, "INSERT INTO log_sesiones (id_usuario, fecha, hora, ip) VALUES ('{$row['unique_id']}', '{$dia}', '{$hora}', '{$ip}')");
                
                $_SESSION['unique_id'] = $row['unique_id'];
                $_SESSION['rol'] = $row['rol'];
                echo "Proceso Exitoso";
            } else {
                echo "Algo salió mal. ¡Inténtalo de nuevo!";
            }
        } else {
            echo "¡Correo electrónico o la contraseña son incorrectos!";
        }
    } else {
        echo "$username - ¡Este correo electrónico no existe!";
    }
} else {
    echo "¡Todos los campos de entrada son obligatorios!";
}
