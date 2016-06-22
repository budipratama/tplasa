<div class="container">
                <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Selamat Datang, PLASA TELKOM - Administrator Plasa</h4>
        </div>
    </div>
    <div style="margin-top:10px;"></div>

    <!-- Start Widget -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-3">
            <div class="mini-stat clearfix bx-shadow bg-info">
                <span class="mini-stat-icon"><i class="ion-social-usd"></i></span>
                <div class="mini-stat-info text-right">
                    <span class="counter">15852</span>
                    SALDO
                </div>
                <div class="tiles-progress">
                    <div class="m-t-20">
                        <h5 class="text-uppercase text-white m-0">Tipe Akun <span class="pull-right">Merchant</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row-->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="mini-stat clearfix bg-purple bx-shadow" style="float:left">
                <img src="<?php echo $params['base_image']; ?>information_italic.png" class="img-responsive" style="max-width:90px;float:left">
                <div class="mini-stat-info text-left">
                <h5 class="text-uppercase text-white m-0" style="margin-left: 90px">Informasi - Panduan Awal Aplikasi</h5>
                    <ul style="margin-left: 90px;list-style: disc;">
                        <li>Pilih salah satu Panel Menu di bawah ini untuk memulai. Setiap Panel memiliki fungsi tersendiri</li>
                        <li>Anda bisa melakukan kontrol terhadap Aplikasi di Outlet-Outlet PLASATELKOM melalui Aplikasi ini</li>
                        <li>Aplikasi ini HANYA BISA melakukan Lihat, Tambah, dan Update Data. TIDAK ADA Hapus Data</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <a title="Manage Admin PLASA TELKOM" href="<?php echo @ site_url('backend/admin-plasa/manage'); ?>">
            <div class="col-md-6 col-sm-6 col-lg-2">
                <div class="mini-stat clearfix bg-primary  bx-shadow">
                    <img src="<?php echo $params['base_image']; ?>user.png" class="img-responsive" style="max-width:90px;margin-left:30px;">
                    <h5 class="text-uppercase text-white m-0 text-center">Manage Admin</h5>
                </div>
            </div>
        </a>

        <div class="col-md-6 col-sm-6 col-lg-2">
            <a title="Manage Terminal PLASA TELKOM" href="<?php echo @ site_url('backend/terminal-plasa/manage'); ?>">
                <div class="mini-stat clearfix bg-primary bx-shadow">
                    <img src="<?php echo $params['base_image']; ?>terminal-rambutan.png" class="img-responsive" style="max-width:90px;margin-left:30px;">
                    <h5 class="text-uppercase text-white m-0 text-center">Manage Terminal</h5>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-sm-6 col-lg-2">
            <a title="Manage Outlet PLASA TELKOM" href="<?php echo @ site_url('backend/outlet-plasa/outlet'); ?>">
                <div class="mini-stat clearfix bg-primary bx-shadow">
                    <img src="<?php echo $params['base_image']; ?>shop2.png" class="img-responsive" style="max-width:90px;margin-left:30px;">
                    <h5 class="text-uppercase text-white m-0 text-center">Manage Outlet</h5>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-sm-6 col-lg-2">
            <a title="Manage User PLASA TELKOM" href="<?php echo @ site_url('backend/user-plasa/manage'); ?>">
                <div class="mini-stat clearfix bg-primary bx-shadow">
                    <img src="<?php echo $params['base_image']; ?>users.png" class="img-responsive" style="max-width:90px;margin-left:30px;">
                    <h5 class="text-uppercase text-white m-0 text-center">Manage Users</h5>                
                </div>
            </a>
        </div>

        <div class="col-md-6 col-sm-6 col-lg-2">
            <a title="Sejarah Transaksi PLASA TELKOM" href="<?php echo @ site_url('backend/laporan/manage'); ?>">
                <div class="mini-stat clearfix bx-shadow bg-primary">
                    <img src="<?php echo $params['base_image']; ?>report.png" class="img-responsive" style="max-width:90px;margin-left:30px;">
                    <h5 class="text-uppercase text-white m-0 text-center">Sejarah Transaksi</h5>                
                </div>
            </a>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-2">
            <a title="Profile-ku" href="<?php echo @ site_url('backend/user/profile'); ?>">
                <div class="mini-stat clearfix bg-primary bx-shadow">
                    <img src="<?php echo $params['base_image']; ?>profile.png" class="img-responsive" style="max-width:90px;margin-left:30px;">
                    <h5 class="text-uppercase text-white m-0 text-center">Profile-ku</h5>                
                </div>
            </a>
        </div>
    </div>
    <!-- End row-->

    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-2">
            <a title="Ubah Password" href="<?php echo @ site_url('backend/user/profile?tab=2'); ?>">
                <div class="mini-stat clearfix bg-primary bx-shadow">
                    <img src="<?php echo $params['base_image']; ?>change-pass.png" class="img-responsive" style="max-width:90px;margin-left:30px;">
                    <h5 class="text-uppercase text-white m-0 text-center">Ubah Password</h5>                
                </div>
            </a>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-2">
            <a title="Logout" href="<?php echo @ site_url('authentication/admin/sign-out'); ?>">
                <div class="mini-stat clearfix bg-primary bx-shadow">
                    <img src="<?php echo $params['base_image']; ?>logout.png" class="img-responsive" style="max-width:90px;margin-left:30px;">
                    <h5 class="text-uppercase text-white m-0 text-center">Logout</h5>
                </div>
            </a>
        </div>
    </div>
    <?php $this->load->view($params['base_comp'] . 'v-backend-footer'); ?>
</div>
<!-- end container -->