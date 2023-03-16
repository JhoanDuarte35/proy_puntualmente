
<?php 
      include(__dir__."/../layouts/session.php");  
      ?>
      <?php 
      include(__dir__."/../layouts/head-main.php");  
      ?>

<head>

    <title>Registro | Admin-Puntualmente</title>
    <?php include(__dir__."/../layouts/head.php");  ?>
    <?php include(__dir__."/../layouts/head-style.php");?>

</head>

<?php include(__dir__."/../layouts/body.php");   ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php  include(__dir__."/../layouts/menu.php"); ?>

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
                            <h4 class="mb-sm-0 font-size-18">Registro de Usuarios</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Usuarios</a></li>
                                    <li class="breadcrumb-item active">Registro de Usuarios</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                        <form action="#" id="signupform" method="POST" enctype="multipart/form-data" autocomplete="off">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre</label>
                                                <input class="form-control" name="nombre" type="text" id="nombre" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="apellido" class="form-label">Apellido</label>
                                                <input class="form-control" name="apellido" type="text" id="apellido">
                                            </div>
                                            <div class="mb-3">
                                                <label for="cedula" class="form-label">Cedula</label>
                                                <input class="form-control" name="cedula" type="number" id="cedula" autocomplete="off">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="telefono" class="form-label">Telefono</label>
                                                <input class="form-control" name="telefono" type="number" id="telefono" autocomplete="off">
                                            </div>
                                   
                                            <div>
                                                <label for="areas" class="form-label">Area</label>
                                                <input class="form-control" list="areas" name="area" id="area" placeholder="Areas">
                                                <datalist id="areas">
                                                    <option value="1">llenar con db</option>
                                                </datalist>
                                            </div>
                                            <br>
                                            <div>
                                                <label for="foto" class="form-label">Foto</label>
                                                <input type="file" class="form-control" name="foto" id="foto" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                                            </div>
                                            <br>
                                            <div>
                                                <label for="areas" class="form-label">Sede</label>
                                                <input class="form-control" list="sedes" name="sede" id="sede" placeholder="Sedes">
                                                <datalist id="sedes">
                                                    <option value="1">llenar con bd</option>
                                                </datalist>
                                            </div>
                                           
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <div>
                                                <label for="empresa" class="form-label">Empresa</label>
                                                <input class="form-control" list="empresas" name="empresa" id="empresa" placeholder="Empresas">
                                                <datalist id="empresas">
                                                    <option value="1">llenar con db</option>
                                                </datalist>
                                            </div>
                                            <br>
                                            <div class="mb-3">
                                                <label for="nacimiento" class="form-label">Fecha de Nacimiento</label>
                                                <input class="form-control" name="nacimiento" type="date" id="nacimiento">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-password-input" class="form-label">Contraseña</label>
                                                <input class="form-control" name="password" type="password" id="contraseña">
                                            </div>
                                            <div class="mb-3">
                                                <label for="f_ingreso" class="form-label">Fecha Ingreso a Puntualmente</label>
                                                <input class="form-control" name="f_ingreso" type="date" id="f_ingreso">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Rol</label>
                                                <select name="rol" class="form-select">
                                                    <option value="1" >Llenar con db</option>
                                                </select>
                                            </div>
                                            
                                            <div>
                                                <label for="grupo" class="form-label">Grupo</label>
                                                <input class="form-control" list="grupos" name="grupo" id="grupo" placeholder="Grupos">
                                                <datalist id="grupos">
                                                    <option value="1">llenar con bd</option>
                                                </datalist>
                                            </div>
                                            <div id="error-text"></div>
                                           
                                        </div>
                                        
                                    </div>
                                    <div class="mt-2">
                                                    <button type="submit" name="submit" id="buttoninput"class="btn btn-primary w-md">Guardar</button>
                                            </div>
                                           
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include (__dir__."/../layouts/footer.php") ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<script src="<?php echo controlador::$rutaAPP?>app/views/opc_admin/js/signup.js"></script>

<!-- Right Sidebar -->
<?php include (__dir__."/../layouts/right-sidebar.php")?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include (__dir__."/../layouts/vendor-scripts.php") ?>

<script src="<?php echo controlador::$rutaAPP?>app/assets/js/app.js"></script>
</body>

</html>