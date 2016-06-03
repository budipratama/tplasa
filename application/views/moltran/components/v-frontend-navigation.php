			<!-- Top Bar Start -->
			<div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo @ site_url('frontend/dashboard'); ?>" class="logo"><img height="50" src="<?php echo $params['base_image'] . 'favicon.png'; ?>" />&nbsp;<span><?php echo strtoupper($this->session->tempdata('partner_name')); ?></span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo $params['base_image']; ?>ravi-vendra.png" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo @ site_url('frontend/user/my-profile'); ?>"><i class="md md-face-unlock"></i> Profil Saya</a></li>
                                        <li><a href="<?php echo @ site_url('frontend/user/my-profile') . '#profile-setting'; ?>"><i class="md md-settings"></i> Pengaturan</a></li>
                                        <li><a href="<?php echo @ site_url('frontend/lock-screen'); ?>"><i class="md md-lock"></i> Kunci Layar</a></li>
                                        <li><a href="<?php echo @ site_url('authentication/user/sign-out'); ?>"><i class="md md-settings-power"></i> Keluar (Logout)</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="<?php echo $params['base_image']; ?>ravi-vendra.png" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo ucwords(strtolower($this->session->tempdata('full_name'))); ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo @ site_url('frontend/user/my-profile'); ?>"><i class="md md-face-unlock"></i> Profil Saya<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="<?php echo @ site_url('frontend/user/my-profile') . '#profile-setting'; ?>"><i class="md md-settings"></i> Pengaturan</a></li>
                                    <li><a href="<?php echo @ site_url('frontend/lock-screen'); ?>"><i class="md md-lock"></i> Kunci Layar</a></li>
                                    <li><a href="<?php echo @ site_url('authentication/user/sign-out'); ?>"><i class="md md-settings-power"></i> Keluar (Logout)</a></li>
                                </ul>
                            </div>

                            <p class="text-muted m-0"><?php echo ucwords(strtolower($this->session->tempdata('level'))); ?></p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo @ site_url('frontend/dashboard'); ?>" class="waves-effect waves-light active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="md md-view-list"></i><span> Transaksi </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo @ site_url('frontend/transaction/topup-account'); ?>">Isi Saldo T-MONEY</a></li>
                                    <li><a href="<?php echo @ site_url('frontend/transaction/self-cashout'); ?>">Tarik Tunai T-MONEY</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="md md-vpn-key"></i><span> Autorisasi </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo @ site_url('frontend/authorize/full-service'); ?>">Full Service</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo @ site_url('frontend/reporting'); ?>" class="waves-effect"><i class="md md-print"></i><span> Cetak Laporan </span></a>
                            </li>

                            <li>
                                <a href="<?php echo @ site_url('authentication/user/sign-out'); ?>" class="waves-effect"><i class="fa fa-sign-out"></i><span> Logout </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->