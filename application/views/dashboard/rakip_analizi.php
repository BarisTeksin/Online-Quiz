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
                                        <a href="<?php echo base_url("Rakip_Analizi/urun_ekle");?>" class="btn btn-primary width-sm waves-effect waves-light">Ekle</a>
                                        <a href="<?php echo base_url("Rakip_Analizi/tarama_baslat");?>" class="btn btn-success width-sm waves-effect waves-light">Tarama Başlat</a>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Ürünler</h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Ürün Adi</th>
                                                <th>Durum</th>
                                                <th>İşlem</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $sayi =1;
                                            foreach($results as $urun){ ?>
                                                <tr>
                                                    <td><?php echo $sayi;?></td>
                                                    <td><?php echo $urun->Urun_Adi;?></td>
                                                    <td><?php 
                                                    if($urun->status==1){
                                                        echo "<a href=".base_url("Rakip_Analizi/DurumDegistir/".$urun->id)."><span class='badge badge-success'>Aktif</span></a>";
                                                    }
                                                    else{
                                                        echo "<a href=".base_url("Rakip_Analizi/DurumDegistir/".$urun->id)."><span class='badge badge-danger'>Pasif</span></a>";
                                                    } ?></td>
                                                    <td>
                                                    <a href="<?php echo base_url("Rakip_Analizi/delete/".$urun->id);?>" class="btn btn-danger width-sm waves-effect waves-light">Sil</a>
                                                    </td>
                                                </tr>
                                                <?php $sayi++;}?>
                                            </tbody>
                                        </table><?php echo $links;?>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->       
                        <?php $this->load->view("dashboard/footer")   ?>