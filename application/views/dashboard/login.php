<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Zeynep</title>
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
    </head>


    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="<?php echo base_url();?>" class="logo">
                                <img src="<?php echo base_url("assets/dashboard/")?>images/logo.png" alt="" height="56" class="logo-dark mx-auto">
                            </a>
                            <p class="text-black mt-2 mb-4">Zeynep</p>
                        </div>
                        <div class="card">

                            <div class="card-body p-4">
                            <?php if($this->session->flashdata('error')){ ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $this->session->flashdata('error'); ?>
                                    </div>
                                <?php } ?>
                                <?php if($this->session->flashdata('success')){ ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php } ?>
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Giriş Yap</h4>
                                </div>

                                <form action="<?php echo base_url("Login/login"); ?>" method="post">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Kullanıcı</label>
                                        <input class="form-control" type="text" name="username" required="" placeholder="Kullanıcı adınızı yazın">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Şifre</label>
                                        <input class="form-control" type="password" required="" name="password" placeholder="Şifrenizi yazın">
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Giriş Yap </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                            
                        </div>
                        <!-- end card -->

                        
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    

        <!-- Vendor js -->
        <script src="<?php echo base_url("assets/dashboard/")?>js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url("assets/dashboard/")?>js/app.min.js"></script>
        
    </body>
</html>