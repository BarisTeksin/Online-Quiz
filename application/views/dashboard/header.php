<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Öndeyim | Fiyat Rekabet Sistemi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Her zaman 1 adım öndesiniz." name="description" />
        <meta content="Barış Teksin" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url("assets/dashboard/")?>images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url("assets/dashboard/")?>css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url("assets/dashboard/")?>css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url("assets/dashboard/")?>css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo $this->session->userdata('profil');?>" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                <?php echo $this->session->userdata('name');?> <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Hoşgeldin !</h6>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Profilim</span>
                            </a>

                            <!-- item-->

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="<?php echo base_url("Login/Logout");?>" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Çıkış Yap</span>
                            </a>

                        </div>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="<?php echo base_url("Dashboard");?>" class="logo logo-dark text-center">
                        <span class="logo-lg">
                            <img src="<?php echo base_url("assets/dashboard/")?>images/logo-dark.png" alt="" height="16">
                        </span>
                        <span class="logo-sm">
                            <img src="<?php echo base_url("assets/dashboard/")?>images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                    <a href="<?php echo base_url("Dashboard");?>" class="logo logo-light text-center">
                        <span class="logo-lg">
                            <img src="<?php echo base_url("assets/dashboard/")?>images/logo-light.png" alt="" height="16">
                        </span>
                        <span class="logo-sm">
                            <img src="<?php echo base_url("assets/dashboard/")?>images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
        
                </ul>

            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->view("dashboard/components/left_sidebar")   ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">