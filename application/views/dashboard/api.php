<?php $this->load->view("dashboard/header");
                        if(isset($bilgiler)){ ?>
                                <div class="row">
                                    <div class="col-md-12">
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
                                        <div class="card-box">
                                            <h4 class="m-t-0 header-title">Api Bilgileri</h4>
                                            <form action="<?php echo base_url("User/insert_api");?>" method="post">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputEmail4" class="col-form-label">Mağaza Numarası</label>
                                                        <input type="text" class="form-control" name="shop_number" placeholder="Mağaza Numarası" required="" value="<?php echo $bilgiler->shop_number;?>">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4" class="col-form-label">Kullanıcı Adı</label>
                                                        <input type="text" class="form-control" name="shop_username" placeholder="Kullanıcı Adı" required="" value="<?php echo $bilgiler->shop_username;?>">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4" class="col-form-label">Şifre</label>
                                                        <input type="password" class="form-control" name="shop_password" placeholder="<?php echo str_repeat("*", strlen($bilgiler->shop_password));?>" required="" value="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="col-form-label">Mağaza Linki</label>
                                                        <input type="text" class="form-control" name="shop_url" placeholder="Mağaza Linki" required="" value="<?php echo $bilgiler->shop_url;?>">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <a href="<?php echo base_url("Dashboard");?>" class="btn btn-danger">İptal</a>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <button type="submit" class="btn btn-primary float-right">Kaydet</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        <?php }else{ ?>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-box">
                                            <h4 class="m-t-0 header-title">Api Bilgileri</h4>
                                            <form action="<?php echo base_url("User/insert_api");?>" method="post">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputEmail4" class="col-form-label">Mağaza Numarası</label>
                                                        <input type="text" class="form-control" name="shop_number" placeholder="Mağaza Numarası" required="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4" class="col-form-label">Kullanıcı Adı</label>
                                                        <input type="text" class="form-control" name="shop_username" placeholder="Kullanıcı Adı" required="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4" class="col-form-label">Şifre</label>
                                                        <input type="password" class="form-control" name="shop_password" placeholder="Şifre" required="">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <a href="<?php echo base_url("Dashboard");?>" class="btn btn-danger">İptal</a>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <button type="submit" class="btn btn-primary float-right">Kaydet</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        $this->load->view("dashboard/footer");   ?>