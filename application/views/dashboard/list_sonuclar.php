<?php $this->load->view("dashboard/header")   ?>
                        <div class="row">
                            <div class="col-xl-12">
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
                                <div class="card-box">
                                <?php if($test_no !=0){ ?>
                                    <div class="dropdown float-right">
                                        <a href="<?php echo base_url("Testler/sinav/".$test_no);?>" class="btn btn-success width-sm waves-effect waves-light">Çöz</a>
                                    </div>
                                    <?php } ?>
                                    <h4 class="header-title mt-0 mb-3">Test Sonuçları</h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>Test Numarası</th>
                                                <th>Toplam Soru Sayısı</th>
                                                <th>Puan</th>
                                                <th>Tarih</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            foreach($results as $urun){ ?>
                                                <tr>
                                                    <td><?php echo $urun->test_id;?></td>
                                                    <td><?php echo $urun->soru_sayisi;?></td>
                                                    <td><?php echo $urun->puan;?></td>
                                                    <td><?php echo $urun->tarih;?></td>
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table><?php echo $links;?>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->       
                        <?php $this->load->view("dashboard/footer")   ?>