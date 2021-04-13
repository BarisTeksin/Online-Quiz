            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="<?php echo $this->session->userdata('profil');?>" alt="user-img" class="rounded-circle img-thumbnail avatar-md">
                        <div class="dropdown">
                            <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false"><?php echo $this->session->userdata('name');?></a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>Profilim</span>
                                </a>
    
                                <!-- item-->
                                <a href="<?php echo base_url("User/get_api");?>" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Kullanıcı Bilgileri</span>
                                </a>

                                <!-- item-->
                                <a href="<?php echo base_url("Login/Logout");?>" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Çıkış Yap</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted"><?php echo $this->session->userdata('phone');?></p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="<?php echo base_url("User/get_api");?>" class="text-muted">
                                    <i class="mdi mdi-cog"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="<?php echo base_url("Login/Logout");?>">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Menü</li>

                            <li>
                                <a href="<?php echo base_url("Dashboard");?>">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Anasayfa </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url("Testler");?>">
                                    <i class="mdi mdi-view-list"></i>
                                    <span> Testlerim </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>