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
        <?php echo $this->recaptcha->getScriptTag();?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
                            <p class="text-white mt-2 mb-4">Öndeyim Rekabet Sistemi</p>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                            <?php if($this->session->flashdata('error')){ ?>
                                <script>Swal.fire({
                                    icon: 'error',
                                    title: 'Hata!',
                                    text: '<?php echo $this->session->flashdata('error'); ?>',
                                    showConfirmButton: false,
                                    timer: 2000
                                    })
                                </script>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $this->session->flashdata('error'); ?>
                                    </div>
                                <?php } ?>
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Kayıt Ol</h4>
                                </div>

                                <form action="<?php echo base_url("User/insert_user");?>" method="post">

                                    <div class="form-group">
                                        <label for="fullname">Kullanıcı Adı</label>
                                        <input class="form-control" type="text" name="username" id="username" placeholder="Kullanıcı adınızı yazın" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emailaddress">Eposta</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress" required placeholder="Eposta adresinizi yazın">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Şifre</label>
                                        <input class="form-control" type="password" name="password" required id="password" placeholder="Şifre yazın">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailaddress">Mağaza Linkiniz</label>
                                        <input class="form-control" type="text" name="shop_url" id="shop_url" required placeholder="Mağaza Linkiniz">
                                    </div>
                                    <div class="form-group">
                                    <?php echo $this->recaptcha->getWidget();?>
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Kayıt Ol </button>
                                    </div>

                                </form>
                                <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Hesabınız var mı?  <a href="<?php echo base_url("User");?>" class="text-dark ml-1"><b>Giriş Yapın</b></a></p>
                            </div> <!-- end col -->
                        </div>
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