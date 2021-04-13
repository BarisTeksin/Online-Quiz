<?php $this->load->view("dashboard/header")   ?>

                        <div class="row">
                        <div class="col-xl-12">
                        <?php if(isset($Uyari)){ ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $Uyari; ?>
                            </div>
                        <?php } ?>
                        </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card-box">

                                    <h4 class="header-title mt-0 mb-4">Yapılan Test Sonuçları</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                                    data-bgColor="#F9B9B9" value="<?php echo $Son_Ort;?>"
                                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                    data-thickness=".15"/>
                                        </div>
                                        

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php echo $Test_Sayisi;?> </h2>
                                            <p class="text-muted mb-1">Test Sayısı</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card-box">
                                    <h4 class="header-title mt-0 mb-3">Son Test Sonuçları</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Soru Sayısı</th>
                                                <th>Puan</th>
                                                <th>Tarih</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $sayi = 1;
                                            foreach($Son_Bes as $test){ ?>
                                                <tr>
                                                    <td><?php echo $sayi;?></td>
                                                    <td><?php echo $test->soru_sayisi;?></td>
                                                    <td><?php echo $test->puan;?></td>
                                                    <td><?php echo $test->tarih;?></td>
                                                </tr>
                                            <?php $sayi++;
                                            } ?> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->        
                        
<?php $this->load->view("dashboard/footer")   ?>