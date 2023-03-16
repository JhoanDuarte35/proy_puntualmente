<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="home" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Hk_P-plate.svg/600px-Hk_P-plate.svg.png" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Hk_P-plate.svg/600px-Hk_P-plate.svg.png" alt="" height="24"> <span class="logo-txt">Puntualmente</span>
                        
                    </span>
                </a>

                <a href="home" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Hk_P-plate.svg/600px-Hk_P-plate.svg.png" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Hk_P-plate.svg/600px-Hk_P-plate.svg.png" alt="" height="24"> <span class="logo-txt">Puntualmente</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div>

        <div class="d-flex">


            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                </button>
            </div>

            
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="bell" class="icon-lg"></i>
                    <span class="badge bg-danger rounded-pill">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notificaciones </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small text-reset text-decoration-underline"> <?php echo $language["Unread"]; ?> (3)</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1"><?php echo $language["James_Lemire"]; ?></h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1"><?php echo $language["It_will_seem_like_simplified_English"]; ?>.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span><?php echo $language["1_hours_ago"]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1"><?php echo $language["Your_order_is_placed"]; ?></h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1"><?php echo $language["If_several_languages_coalesce_the_grammar"]; ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span><?php echo $language["3_min_ago"]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1"><?php echo $language["Your_item_is_shipped"]; ?></h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1"><?php echo $language["If_several_languages_coalesce_the_grammar"]; ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span><?php echo $language["3_min_ago"]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1"><?php echo $language["Salena_Layfield"]; ?></h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1"><?php echo $language["As_a_skeptical_Cambridge_friend_of_mine_occidental"]; ?>.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span><?php echo $language["1_hours_ago"]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span><?php echo $language["View_More"]; ?></span> 
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item right-bar-toggle me-2">
                    <i data-feather="settings" class="icon-lg"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item topbar-light bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?php echo controlador::$rutaAPP?>app/assets/images/users/<?php echo $_SESSION['img']?>"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo $_SESSION["username"]; ?>.</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="apps-contacts-profile.php"><i class="mdi mdi-face-man font-size-16 align-middle me-1"></i> <?php echo $language["Profile"]; ?></a>
                    <a class="dropdown-item" href="auth-lock-screen.php"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> <?php echo $language["Lock_screen"]; ?> </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo controlador::$rutaAPP?>/cerrar"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> <?php echo $language["Logout"]; ?></a>
                </div>
            </div>

        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?php echo $language["Menu"]; ?></li>

                <li>
                    <a href="home">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"><?php echo $language["Dashboard"]; ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Usuarios</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="registrar">
                                <span data-key="t-calendar">Registrar usuario</span>
                            </a>
                        </li>
        
                        <li>
                            <a href="usuarios">
                                <span data-key="t-chat">Usuarios</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="chat">
                        <i class="fas fa-comments"></i>
                        <span data-key="t-horizontal">Chat</span>
                    </a>
                </li>

                <li class="menu-title mt-2" data-key="t-components"><?php echo $language["Elements"]; ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components"><?php echo $language["Components"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.php" data-key="t-alerts"><?php echo $language["Alerts"]; ?></a></li>
                        <li><a href="ui-buttons.php" data-key="t-buttons"><?php echo $language["Buttons"]; ?></a></li>
                        <li><a href="ui-cards.php" data-key="t-cards"><?php echo $language["Cards"]; ?></a></li>
                        <li><a href="ui-carousel.php" data-key="t-carousel"><?php echo $language["Carousel"]; ?></a></li>
                        <li><a href="ui-dropdowns.php" data-key="t-dropdowns"><?php echo $language["Dropdowns"]; ?></a></li>
                        <li><a href="ui-grid.php" data-key="t-grid"><?php echo $language["Grid"]; ?></a></li>
                        <li><a href="ui-images.php" data-key="t-images"><?php echo $language["Images"]; ?></a></li>
                        <li><a href="ui-modals.php" data-key="t-modals"><?php echo $language["Modals"]; ?></a></li>
                        <li><a href="ui-offcanvas.php" data-key="t-offcanvas"><?php echo $language["Offcanvas"]; ?></a></li>
                        <li><a href="ui-progressbars.php" data-key="t-progress-bars"><?php echo $language["Progress_Bars"]; ?></a></li>
                        <li><a href="ui-tabs-accordions.php" data-key="t-tabs-accordions"><?php echo $language["Tabs_n_Accordions"]; ?></a></li>
                        <li><a href="ui-typography.php" data-key="t-typography"><?php echo $language["Typography"]; ?></a></li>
                        <li><a href="ui-video.php" data-key="t-video"><?php echo $language["Video"]; ?></a></li>
                        <li><a href="ui-general.php" data-key="t-general"><?php echo $language["General"]; ?></a></li>
                        <li><a href="ui-colors.php" data-key="t-colors"><?php echo $language["Colors"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="gift"></i>
                        <span data-key="t-ui-elements"><?php echo $language["Extended"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="extended-lightbox.php" data-key="t-lightbox"><?php echo $language["Lightbox"]; ?></a></li>
                        <li><a href="extended-rangeslider.php" data-key="t-range-slider"><?php echo $language["Range_Slider"]; ?></a></li>
                        <li><a href="extended-sweet-alert.php" data-key="t-sweet-alert"><?php echo $language["SweetAlert_2"]; ?></a></li>
                        <li><a href="extended-session-timeout.php" data-key="t-session-timeout"><?php echo $language["Session_Timeout"]; ?></a></li>
                        <li><a href="extended-rating.php" data-key="t-rating"><?php echo $language["Rating"]; ?></a></li>
                        <li><a href="extended-notifications.php" data-key="t-notifications"><?php echo $language["Notifications"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="box"></i>
                        <span class="badge rounded-pill badge-soft-danger  text-danger float-end">7</span>
                        <span data-key="t-forms"><?php echo $language["Forms"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.php" data-key="t-form-elements"><?php echo $language["Basic_Elements"]; ?></a></li>
                        <li><a href="form-validation.php" data-key="t-form-validation"><?php echo $language["Validation"]; ?></a></li>
                        <li><a href="form-advanced.php" data-key="t-form-advanced"><?php echo $language["Advanced_Plugins"]; ?></a></li>
                        <li><a href="form-editors.php" data-key="t-form-editors"><?php echo $language["Editors"]; ?></a></li>
                        <li><a href="form-uploads.php" data-key="t-form-upload"><?php echo $language["File_Upload"]; ?></a></li>
                        <li><a href="form-wizard.php" data-key="t-form-wizard"><?php echo $language["Wizard"]; ?></a></li>
                        <li><a href="form-mask.php" data-key="t-form-mask"><?php echo $language["Mask"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="sliders"></i>
                        <span data-key="t-tables"><?php echo $language["Tables"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.php" data-key="t-basic-tables"><?php echo $language["Bootstrap_Basic"]; ?></a></li>
                        <li><a href="tables-datatable.php" data-key="t-data-tables"><?php echo $language["DataTables"]; ?></a></li>
                        <li><a href="tables-responsive.php" data-key="t-responsive-table"><?php echo $language["Responsive"]; ?></a></li>
                        <li><a href="tables-editable.php" data-key="t-editable-table"><?php echo $language["Editable"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="pie-chart"></i>
                        <span data-key="t-charts"><?php echo $language["Charts"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex.php" data-key="t-apex-charts"><?php echo $language["Apexcharts"]; ?></a></li>
                        <li><a href="charts-echart.php" data-key="t-e-charts"><?php echo $language["Echarts"]; ?></a></li>
                        <li><a href="charts-chartjs.php" data-key="t-chartjs-charts"><?php echo $language["Chartjs"]; ?></a></li>
                        <li><a href="charts-knob.php" data-key="t-knob-charts"><?php echo $language["Jquery_Knob"]; ?></a></li>
                        <li><a href="charts-sparkline.php" data-key="t-sparkline-charts"><?php echo $language["Sparkline"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="cpu"></i>
                        <span data-key="t-icons"><?php echo $language["Icons"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons.php" data-key="t-boxicons"><?php echo $language["Boxicons"]; ?></a></li>
                        <li><a href="icons-materialdesign.php" data-key="t-material-design"><?php echo $language["Material_Design"]; ?></a></li>
                        <li><a href="icons-dripicons.php" data-key="t-dripicons"><?php echo $language["Dripicons"]; ?></a></li>
                        <li><a href="icons-fontawesome.php" data-key="t-font-awesome"><?php echo $language["Font_Awesome_5"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="map"></i>
                        <span data-key="t-maps"><?php echo $language["Maps"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.php" data-key="t-g-maps"><?php echo $language["Google"]; ?></a></li>
                        <li><a href="maps-vector.php" data-key="t-v-maps"><?php echo $language["Vector"]; ?></a></li>
                        <li><a href="maps-leaflet.php" data-key="t-l-maps"><?php echo $language["Leaflet"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="share-2"></i>
                        <span data-key="t-multi-level"><?php echo $language["Multi_Level"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" data-key="t-level-1-1"><?php echo $language["Level_1_1"]; ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2"><?php echo $language["Level_1_2"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-2-1"><?php echo $language["Level_2_1"]; ?></a></li>
                                <li><a href="javascript: void(0);" data-key="t-level-2-2"><?php echo $language["Level_2_2"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->