<?php $this->load->view("dashboard/header")   ?>

    <div class="row mt-2 justify-content-center">
        <div class="col-lg-10">
        <?php if($this->session->userdata("status")){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $this->session->userdata("status"); ?>
                                </div>
                            <?php } ?>
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
                                <?php if($this->session->flashdata('success')){ ?>
                                    <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'İşlem Başarılı!',
                                        text: '<?php echo $this->session->flashdata('success'); ?>',
                                        showConfirmButton: false,
                                        timer: 1000
                                    })
                                </script>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php } ?>
                                <div class="alert alert-info" role="alert">
                                    <a>Paket değişikliklerinde kalan günleriniz iptal olmaktadır.</a>
                                </div>
            <div class="row">

                <!--Pricing Column-->
                <article class="pricing-column col-xl-3 col-md-6">
                    <div class="inner-box card-box">
                        <div class="plan-header p-3 text-center">
                            <h3 class="plan-title">SİLVER</h3>
                            <h2 class="plan-price font-weight-normal">100₺</h2>
                            <div class="plan-duration">Aylık</div>
                        </div>
                        <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                            <li>10 Üründe Fiyat Rekabeti</li>
                            <li>Günde 1 kez Rakip Analizi</li>
                        </ul>

                        <div class="text-center">
                            <a href="<?php echo base_url("Urunler/buy/silver");?>" class="btn btn-bordered-success btn-rounded waves-effect waves-light">Satın Al</a>
                        </div>
                    </div>
                </article>
                <article class="pricing-column col-xl-3 col-md-6">
                <div class="ribbon"><span>POPÜLER</span></div>
                    <div class="inner-box card-box">
                        <div class="plan-header p-3 text-center">
                            <h3 class="plan-title">GOLD</h3>
                            <h2 class="plan-price font-weight-normal">200₺</h2>
                            <div class="plan-duration">Aylık</div>
                        </div>
                        <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                            <li>25 Üründe Fiyat Rekabeti</li>
                            <li>Günde 1 kez Rakip Analizi</li>
                        </ul>

                        <div class="text-center">
                            <a href="<?php echo base_url("Urunler/buy/gold");?>" class="btn btn-bordered-success btn-rounded waves-effect waves-light">Satın Al</a>
                        </div>
                    </div>
                </article>
                <article class="pricing-column col-xl-3 col-md-6">
                    <div class="inner-box card-box">
                        <div class="plan-header p-3 text-center">
                            <h3 class="plan-title">PLATİN</h3>
                            <h2 class="plan-price font-weight-normal">350₺</h2>
                            <div class="plan-duration">Aylık</div>
                        </div>
                        <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                            <li>50 Üründe Fiyat Rekabeti</li>
                            <li>Günde 1 kez Rakip Analizi</li>
                        </ul>

                        <div class="text-center">
                            <a href="<?php echo base_url("Urunler/buy/platin");?>" class="btn btn-bordered-success btn-rounded waves-effect waves-light">Satın Al</a>
                        </div>
                    </div>
                </article>
                <article class="pricing-column col-xl-3 col-md-6">
                    <div class="inner-box card-box">
                        <div class="plan-header p-3 text-center">
                            <h3 class="plan-title">KURUMSAL</h3>
                            <h2 class="plan-price font-weight-normal">1000₺</h2>
                            <div class="plan-duration">Aylık</div>
                        </div>
                        <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                            <li>Sınırsız ürün takibi</li>
                            <li>Sadece size özel çalışan bot</li>
                        </ul>

                        <div class="text-center">
                            <a href="<?php echo base_url("Urunler/buy/kurumsal");?>" class="btn btn-bordered-success btn-rounded waves-effect waves-light">Satın Al</a>
                        </div>
                    </div>
                </article>

            </div><!-- end row -->
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="row">
            <article class="pricing-column col-md-4">
                    <div class="inner-box card-box">
                        <div class="plan-header p-3 text-center">
                            <h3 class="plan-title">RAKİP ANALİZİ</h3>
                            <h2 class="plan-price font-weight-normal">100₺</h2>
                        </div>
                        <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                            <li>+20 Rakip Analizi</li>
                        </ul>

                        <div class="text-center">
                            <a href="<?php echo base_url("Urunler/buy/rakip_analizi");?>" class="btn btn-bordered-success btn-rounded waves-effect waves-light">Satın Al</a>
                        </div>
                    </div>
                </article>
                <article class="pricing-column col-md-8">
                    <div class="inner-box card-box">
                        <div class="plan-header p-3 text-center">
                            <h3 class="plan-title">KADINLARA DESTEK</h3>
                            <h2 class="plan-price font-weight-normal">ÜCRETSİZ</h2>
                        </div>
                        <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                            <li>+2 Üründe Fiyat Rekabeti</li>
                            <li>Çalışan kadınları tebrik ediyor ve bu zorlu koşullarda onlara destek olmayı hedefliyoruz.</li>
                        </ul>

                        <div class="text-center">
                            <a href="https://api.whatsapp.com/send/?phone=905534477669&text=Merhaba%20Öndeyim%20sitesinde%20Kadınlara%20Destek%20başvurusu%20yapmak%20istiyorum.&app_absent=0" class="btn btn-bordered-success btn-rounded waves-effect waves-light">İletişime Geç</a>
                        </div>
                    </div>
                </article>
            </div>
        </div><!-- end col -->
    </div>
                        <?php $this->load->view("dashboard/footer")   ?>
