<?php include_once(__dir__."/../layouts/session.php");  ?>

<?php include(__dir__."/../layouts/head-main.php");  ?>

<?php
      include_once(__dir__."/../../model/admintablas/sqls_admin.php");
      ?>

<head>
    <!-- choices css -->
    <link href="<?php echo controlador::$rutaAPP?>app/assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />

    <!-- color picker css -->
    <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/assets/libs/@simonwep/pickr/themes/classic.min.css" /> <!-- 'classic' theme -->
    <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/assets/libs/@simonwep/pickr/themes/monolith.min.css" /> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/assets/libs/@simonwep/pickr/themes/nano.min.css" /> <!-- 'nano' theme -->

    <!-- datepicker css -->
    <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/assets/libs/flatpickr/flatpickr.min.css">
    
    <title>Chat | Puntualmente</title>
    
    <?php include(__dir__."/../layouts/head.php");  ?>
    <?php include(__dir__."/../layouts/head-style.php");  ?>

</head>

<?php  include(__dir__."/../layouts/body.php");  ?>

<!-- Begin page -->
<div id="layout-wrapper">

<?php include(__dir__."/../layouts/menu.php");  ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Chat</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active">Chat</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="d-lg-flex">
                    <div class="chat-leftsidebar card">
                        <div class="p-3 px-4 border-bottom">
                            <div class="d-flex align-items-start ">
                                <div class="flex-shrink-0 me-3 align-self-center">
                                    <img src="<?php echo controlador::$rutaAPP?>app/assets/images/users/<?php echo $_SESSION['img']?>" class="avatar-sm rounded-circle" alt="">
                                </div>
                                
                                <div class="flex-grow-1">
                                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark"><?php echo $_SESSION['username']?> <i class="mdi mdi-circle text-success align-middle font-size-10 ms-1"></i></a></h5>
                                    <p class="text-muted mb-0"><?php echo $_SESSION['status']?></p>
                                </div>

                                <div class="flex-shrink-0">
                                    <div class="dropdown chat-noti-dropdown">
                                        <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Add Contact</a>
                                            <a class="dropdown-item" href="#">Setting</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3">
                            <div class="search-box position-relative">
                                <input type="text" class="form-control rounded border" placeholder="Buscar">
                                <i class="bx bx-search search-icon"></i>
                            </div>
                        </div>

                        <div class="chat-leftsidebar-nav">
                            <ul class="nav nav-pills nav-justified bg-light-subtle p-1">
                                <li class="nav-item">
                                    <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                        <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                        <span class="d-none d-sm-block">Chat</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#groups" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="bx bx-group font-size-20 d-sm-none"></i>
                                        <span class="d-none d-sm-block">Grupos</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contacts" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="bx bx-book-content font-size-20 d-sm-none"></i>
                                        <span class="d-none d-sm-block">Contacts</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="chat">
                                    <div class="chat-message-list" data-simplebar>
                                        <div class="pt-3">
                                            <div class="px-3">
                                                <h5 class="font-size-14 mb-3">Reciente</h5>
                                            </div>
                                            <ul class="list-unstyled chat-list" id="user-list">
                                                
                                            <!-- se llena solo   -->

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="groups">
                                    <div class="chat-message-list" data-simplebar>
                                       

                                     
                                        <div class="pt-3">

                                            <div class="px-3">
                                            <div class="d-flex justify-content-between">

                                                <h5 class="font-size-14 mb-3">Grupos</h5>
                                                <div class="flex-shrink-0">
                                            <div class="dropdown chat-noti-dropdown">
                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a type="button" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalScrollable">Crear Grupo</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Add Contact</a>
                                                    <a class="dropdown-item" href="#">Setting</a>
                                            </div>
                                    </div>
                                </div>
                                            </div>
                                            <ul class="list-unstyled chat-list">
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                                <span class="avatar-title rounded-circle  bg-primary-subtle text-primary">
                                                                    G
                                                                </span>
                                                            </div>
                                                            
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-14 mb-0">General</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                                <span class="avatar-title rounded-circle  bg-primary-subtle text-primary">
                                                                    R
                                                                </span>
                                                            </div>
                                                            
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-14 mb-0">Reporting</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                                <span class="avatar-title rounded-circle  bg-primary-subtle text-primary">
                                                                    M
                                                                </span>
                                                            </div>
                                                            
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-14 mb-0">Meeting</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                                <span class="avatar-title rounded-circle  bg-primary-subtle text-primary">
                                                                    A
                                                                </span>
                                                            </div>
                                                            
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-14 mb-0">Project A</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                                <span class="avatar-title rounded-circle  bg-primary-subtle text-primary">
                                                                    B
                                                                </span>
                                                            </div>
                                                            
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-14 mb-0">Project B</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="contacts">
                                    <div class="chat-message-list" data-simplebar>
                                        <div class="pt-3">
                                            <div class="px-3">
                                                <h5 class="font-size-14 mb-3">Contacts</h5>
                                            </div>

                                            <div>
                                                <div>
                                                    <div class="px-3 contact-list">A</div>

                                                    <ul class="list-unstyled chat-list">
                                                        <li>
                                                            <a href="#">
                                                                <h5 class="font-size-14 mb-0">Adam Miller</h5>
                                                            </a>
                                                        </li>
    
                                                        <li>
                                                            <a href="#">
                                                                <h5 class="font-size-14 mb-0">Alfonso Fisher</h5>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="mt-4">
                                                    <div class="px-3 contact-list">B</div>

                                                    <ul class="list-unstyled chat-list">
                                                        <li>
                                                            <a href="#">
                                                                <h5 class="font-size-14 mb-0">Bonnie Harney</h5>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="mt-4">
                                                    <div class="px-3 contact-list">C</div>

                                                    <ul class="list-unstyled chat-list">
                                                        <li>
                                                            <a href="#">
                                                                <h5 class="font-size-14 mb-0">Charles Brown</h5>
                                                            </a>
                                                            <a href="#">
                                                                <h5 class="font-size-14 mb-0">Carmella Jones</h5>
                                                            </a>
                                                            <a href="#">
                                                                <h5 class="font-size-14 mb-0">Carrie Williams</h5>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="mt-4">
                                                    <div class="px-3 contact-list">D</div>

                                                    <ul class="list-unstyled chat-list">
                                                        <li>
                                                            <a href="#">
                                                                <h5 class="font-size-14 mb-0">Dolores Minter</h5>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end chat-leftsidebar -->

                    <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-1">
                        <form id="typing-area" method="POST">
                        <div class="card">
                            <div class="p-3 px-lg-4 border-bottom" id="headerchat">
                                
                                
                            </div>
                            <div class="chat-conversation p-3 px-2" data-simplebar >
                                <ul class="list-unstyled mb-0" id="contenidochat">
                                </ul>
                            </div>
                            
                            <div><span id="final"></span></div>

                        
<!-- ------------------- -->
                            <div class="p-3 border-top">
                                <div class="row">
                                    <div class="col">
                                        <div class="position-relative">
                                            <input type="text" name="msg" id="msg" class="form-control border bg-light-subtle" placeholder="Escribe tu mensaje...">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light" id="enviar"><span class="d-none d-sm-inline-block me-2">Enviar</span> <i class="mdi mdi-send float-end"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- end user chat -->
                </div>
                <!-- End d-lg-flex  -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include (__dir__."/../layouts/footer.php")?>
    </div>
    <!-- end main content-->

 
                            
                                        <!-- Scrollable modal -->
                                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Crear Grupos</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <input type="text" placeholder="Nombre Grupo" class="form-control">
                                                    <div class="mb-3">
                                            
                                                <label for="area" class="form-label font-size-13 text-muted">Personas:</label>
                                                <div class="d-flex">
                                                    <div class="w-100">
                                                <select class="form-control" data-trigger name="area" id="area">
                                                    <option value="0" selected disabled>Elige un area</option>
                                                    <?php foreach($areas as $value){?>
                                                        <option value="<?php echo $value['id_area']?>"><?php echo $value['n_area']?></option>
                                                    <?php }?>
                                                </select>
                                                    </div>
                                                    <div>
                                                    <button type="button" class="btn btn-light"><i class=" fas fa-user-plus"></i></button>

                                                    </div>
                                            </div>
                                        </div>
                                <div>
                                    <div class="chat-message-list" data-simplebar>
                                        <div class="pt-3">
                                            <div class="px-3">
                                                <h5 class="font-size-14 mb-3">Integrantes del grupo</h5>
                                            </div>
                                            <ul class="list-unstyled chat-list" id="user-list">
                                                
                                            <!-- se llena solo   -->

                                            </ul>
                                        </div>
                                    </div>
                                    
                                        
                                </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->


</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include (__dir__."/../layouts/right-sidebar.php")?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include (__dir__."/../layouts/vendor-scripts.php")?>

<!-- choices js -->
<script src="<?php echo controlador::$rutaAPP?>app/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

<!-- color picker js -->
<script src="<?php echo controlador::$rutaAPP?>app/assets/libs/@simonwep/pickr/pickr.min.js"></script>
<script src="<?php echo controlador::$rutaAPP?>app/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

<!-- datepicker js -->
<script src="<?php echo controlador::$rutaAPP?>app/assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- init js -->
<script src="<?php echo controlador::$rutaAPP?>app/assets/js/pages/form-advanced.init.js"></script>
<script src="<?php echo controlador::$rutaAPP?>app/assets/js/app.js"></script>
<script src="<?php echo controlador::$rutaAPP?>app/views/home/js/users.js"></script>
<script src="<?php echo controlador::$rutaAPP?>app/views/home/js/chat.js"></script>


</body>

</html>