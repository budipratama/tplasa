			<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Selamat Datang, <strong><?php echo ucwords(strtolower($this->session->tempdata('full_name'))); ?></strong></h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?php echo @ site_url('frontend/dashboard'); ?>">Plasa Telkom</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow bg-info">
                                    <span class="mini-stat-icon"><i class="ion-social-usd"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter">505</span>
                                        Transaksi Tarik Tunai
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">Minggu Ini <span class="pull-right">23</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bg-purple bx-shadow">
                                    <span class="mini-stat-icon"><i class="ion-ios7-cart"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter">956</span>
                                        Transaksi Topup
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">Minggu Ini <span class="pull-right">59</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bg-success bx-shadow">
                                    <span class="mini-stat-icon"><i class="ion-eye"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter">20544</span>
                                        Pengunjung
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">Minggu Ini <span class="pull-right">1026</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bg-primary bx-shadow">
                                    <span class="mini-stat-icon"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter">10</span>
                                        Pelanggan Baru
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">Minggu Ini <span class="pull-right">136</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row-->

                        <div style="clear: both;">&nbsp;</div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                            	&nbsp;
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                            	<table width="100%" cellpadding="5">
                            		<tr>
                            			<td style="padding-bottom: 10px;" width="40%">User ID anda :</td><td style="padding-bottom: 10px;" width="60%"><strong><?php echo $this->session->tempdata('user_name'); ?></strong></td>
                            		</tr>
                            		<tr>
                            			<td style="padding-bottom: 10px;">Terminal anda :</td><td style="padding-bottom: 10px;"><?php echo $this->session->tempdata('terminal_name'); ?></td>
                            		</tr>
                            		<tr>
                            			<td style="padding-bottom: 10px;">Lokasi outlet anda :</td><td style="padding-bottom: 10px;"><?php echo $this->session->tempdata('outlet_name'); ?></td>
                            		</tr>
                            		<tr>
                            			<td style="padding-bottom: 10px;">Nama Mitra T-MONEY :</td><td style="padding-bottom: 10px;"><?php echo strtoupper($this->session->tempdata('partner_name')); ?></td>
                            		</tr>
                            		<tr>
                            			<td style="padding-bottom: 10px;">Transaksi pertama anda :</td><td style="padding-bottom: 10px;">-</td>
                            		</tr>
                            		<tr>
                            			<td style="padding-bottom: 10px;">Transaksi terakhir anda :</td><td style="padding-bottom: 10px;">-</td>
                            		</tr>
                            	</table>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                            	&nbsp;
                            </div>
                       	</div>

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 &copy; by PT Telkom Indonesia. Developed by <em>DANRA Team</em>
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->