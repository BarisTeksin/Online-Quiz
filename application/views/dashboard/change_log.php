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
                                    <div class="dropdown float-right">
                                        <a href="<?php echo base_url("Urunler/DeleteLog");?>" class="btn btn-danger width-sm waves-effect waves-light" onclick="return confirm('Tüm kayıtları silmeyi onaylıyor musunuz?')">Kayıtları Sil</a>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Ürünler</h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Ürün Kodu</th>
                                                <th>İşlem</th>
                                                <th>Değişiklik Tarihi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $sayi = 1;
                                            foreach($results as $log){ ?>
                                                <tr>
                                                    <td><?php echo $sayi;?></td>
                                                    <td><?php echo $log->code;?></td>
                                                    <td><?php echo $log->log;?></td>
                                                    <td><?php echo $log->date;?></td>
                                                </tr>
                                            <?php $sayi++;
                                            } ?> 
                                            </tbody>
                                            </table>
                                            <?php echo $links;?>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->       
                        <?php $this->load->view("dashboard/footer")   ?>