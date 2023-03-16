<?php
    include_once (__dir__."/../config.php");

    $id = mysqli_real_escape_string($conn, $_POST['id_out']);


    $datos= mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");

    $data= mysqli_fetch_assoc($datos);

$header = headerchat($data['img'], $data['n_user']." ".$data['l_user'], $data['status']);
echo $header;


function headerchat($imagen, $nombre, $status){
    $output='
    <div class="row">
            
            <div class="col-xl-4 col-7">

                <div class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar-sm me-3 d-sm-block d-none">
                    <img src="'.controlador::$rutaAPP.'app/assets/images/users/'.$imagen.'" alt="" class="img-fluid d-block rounded-circle">
                </div>
                <div class="flex-grow-1">
                    <h5 class="font-size-14 mb-1 text-truncate"><a href="#" class="text-dark">'.$nombre.'</a></h5>
                    <p class="text-muted text-truncate mb-0">'.$status.'</p>
                </div>
            </div>

        </div>

        <div class="col-xl-8 col-5">
            <ul class="list-inline user-chat-nav text-end mb-0">
                <li class="list-inline-item">
                    <div class="dropdown">
                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-search"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                            <form class="px-2">
                                <div>
                                    <input type="text" class="form-control border bg-light-subtle" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                </li>

                <li class="list-inline-item">
                    <div class="dropdown">
                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-horizontal-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Archive</a>
                            <a class="dropdown-item" href="#">Muted</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </li>
            </ul>                                                                                                                                                                                                                                                                                        
        </div>
    </div>

    ';
    return $output;
}


?>