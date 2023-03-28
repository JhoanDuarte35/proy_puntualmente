<?php include_once(__dir__."/../layouts/session.php");  ?>
<?php include_once(__dir__."/../../model/admintablas/sqls_admin.php"); ?>


<?php include(__dir__."/../layouts/head-main.php");  ?>

<head>

    <title>Admin tablas | Puntualmnte</title>
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
                            <h4 class="mb-sm-0 font-size-18">Administrador de Tablas</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Usuarios</a></li>
                                    <li class="breadcrumb-item active">Admin Tablas</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Areas</h4>
                                <p class="card-title-desc">Administra las Areas</p>
                            </div>
                            <div class="card-body">
                                <div>
                                    <span>Agregar area:   </span> 
                                    <a type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fas fa-plus-circle"></i></a>
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="areatabla">
                                            <!-- SE LLENAN LAS AREAS -->
                                            <?php foreach($areas as $area){?> 
                                            <tr data-id="1">
                                                <td id="id" style="width: 80px"><?php echo $area['id_area'] ?></td>
                                                <td id="name"><?php echo $area['n_area']?></td>
                                                <td style="width: 100px">
                                                    <a type="button" id="<?php echo $area['id_area']?>" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal1" data-bs-target="#staticBackdrop2" onclick=modificararea(this.id) >
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr> 
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sedes</h4>
                                <p class="card-title-desc">Administra las Sedes</p>
                            </div>
                            <div class="card-body">
                            
                                <div>
                                    <span>Agregar Sede:   </span> 
                                    <a type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#agregarsede">
                                    <i class="fas fa-plus-circle"></i></a>
                                </div>
                               
                            <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="sedetabla">
                                            <!-- SE LLENAN LAS AREAS -->
                                            <?php foreach($sedes as $sede){?> 
                                            <tr data-id="1">
                                                <td id="id" style="width: 80px"><?php echo $sede['id_sede'] ?></td>
                                                <td id="name"><?php echo $sede['n_sede']?></td>
                                                <td style="width: 100px">
                                                    <a type="button" id="<?php echo $sede['id_sede']?>" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal1" data-bs-target="#staticBackdrop2" onclick=modificarsede(this.id) >
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr> 
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div> <!-- end col -->

                </div> <!-- end row -->
<!-- -------------------------------------------------------------------- -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Grupos</h4>
                                <p class="card-title-desc">Administra las Grupos</p>
                            </div>
                            <div class="card-body">
                            <div>
                                    <span>Agregar Grupos:  </span> 
                                    <a type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#agregargrupo">
                                    <i class="fas fa-plus-circle"></i></a>
                                </div>
                            <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="grupotabla">
                                            <!-- SE LLENAN LAS AREAS -->
                                            <?php foreach($grupos as $grupo){?> 
                                            <tr data-id="1">
                                                <td id="id" style="width: 80px"><?php echo $grupo['id_grupo'] ?></td>
                                                <td id="name"><?php echo $grupo['n_grupo']?></td>
                                                <td style="width: 100px">
                                                    <a type="button" id="<?php echo $grupo['id_grupo']?>" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal1" data-bs-target="#staticBackdrop2" onclick=modificargrupo(this.id) >
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr> 
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Empresas</h4>
                                <p class="card-title-desc">Administra las Areas</p>
                            </div>
                            <div class="card-body">

                            <div>
                                    <span>Agregar Empresas:  </span> 
                                    <a type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#agregarempresa">
                                    <i class="fas fa-plus-circle"></i></a>
                                </div>
                            <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="empresatabla">
                                            <!-- SE LLENAN LAS AREAS -->
                                            <?php foreach($empresas as $empresa){?> 
                                            <tr data-id="1">
                                                <td id="id" style="width: 80px"><?php echo $empresa['id_empresa'] ?></td>
                                                <td id="name"><?php echo $empresa['n_empresa']?></td>
                                                <td style="width: 100px">
                                                    <a type="button" id="<?php echo $empresa['id_empresa']?>" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal1" data-bs-target="#staticBackdrop2" onclick=modificarempresa(this.id) >
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr> 
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                </div> <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Buttons example</h4>
                                <p class="card-title-desc">The Buttons extension for DataTables
                                    provides a common set of options, API methods and styling to display
                                    buttons on a page that will interact with a DataTable. The core library
                                    provides the based framework upon which plug-ins can built.
                                </p>
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>$103,600</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>$345,000</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>$675,000</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>$163,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sidney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>$86,500</td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
                
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include (__dir__."/../layouts/footer.php")?>
    </div>
    <!-- end main content-->
<!-- Static Backdrop Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document" id="modificarmodal">
                                            <div class="modal-content">
                                            <form method="POST">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Area</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <label for="n_grupo" >Nombre Area:</label>
                                                    <input class="form-control" type="text" id="nombrearea" name="nombrearea">
                                                    <input type="text" hidden disabled value="1">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-primary" onclick="agregararea()">Guardar</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
<!-- MODAL PLANTILLA -->
                                    <div class="modal fade" id="agregarsede" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <form method="POST">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Agregar Sede</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <label for="n_grupo" >Nombre Sede:</label>
                                                    <input class="form-control" type="text" id="nombresede" name="nombresede">
                                                    <input type="text" hidden disabled value="1">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-primary" onclick="agregarsede()">Guardar</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- --MODAL GRUPO--- -->
                                    <div class="modal fade" id="agregargrupo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <form method="POST">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Agregar Grupo</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <label for="n_grupo" >Nombre Grupo:</label>
                                                    <input class="form-control" type="text" id="nombregrupo" name="nombregrupo">
                                                    <input type="text" hidden disabled value="1">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-primary" onclick="agregargrupos()">Guardar</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- MODAL EMPRESAS -->
                                    <div class="modal fade" id="agregarempresa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <form method="POST">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Agregar Empresas</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <label for="n_grupo" >Nombre Empresa:</label>
                                                    <input class="form-control" type="text" id="nombrempresa" name="nombrempresa">
                                                    <input type="text" hidden disabled value="1">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-primary" onclick="agregarempresa()">Guardar</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include (__dir__."/../layouts/right-sidebar.php")?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include (__dir__."/../layouts/vendor-scripts.php")?>

<!-- Table Editable plugin -->
<script src="<?php echo controlador::$rutaAPP?>app/assets/libs/table-edits/build/table-edits.min.js"></script>

<script src="<?php echo controlador::$rutaAPP?>app/assets/js/pages/table-editable.int.js"></script>

<script src="<?php echo controlador::$rutaAPP?>app/assets/js/app.js"></script>

<script src="<?php echo controlador::$rutaAPP?>app/views/home/js/admintablas.js"></script>


</body>

</html>