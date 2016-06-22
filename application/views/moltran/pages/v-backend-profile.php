<div class="wrapper">
            <div class="container">

                <div class="wraper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center" style="background-image:url('<?php echo $params['base_theme']; ?>dark/assets/images/big/bg.jpg">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="<?php echo $params['base_image']; ?>budi.jpg" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h3 class="text-white"><?=ucwords(strtolower($this->session->tempdata('full_name')))?></h3>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class="row user-tabs">
                        <div class="col-lg-6 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                            <li class="<?= $tab==1?'active':''?> tab">
                                <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active">
                                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                                    <span class="hidden-xs">Tentang Saya</span>
                                </a>
                            </li>

                            <li class="tab <?= $tab==2?'active':''?>">
                                <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                    <span class="hidden-xs">Pengaturan</span>
                                </a>
                            </li>
                        <div class="indicator"></div></ul>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                        <div class="tab-content profile-tab-content">
                            <div class="tab-pane <?= $tab==1?'active':''?>" id="home-2" style="<?= $tab==1?'display:block':'display:none'?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Informasi Personal</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br>
                                                    <p class="text-muted"><?=ucwords(strtolower($this->session->tempdata('full_name')))?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Mobile</strong>
                                                    <br>
                                                    <p class="text-muted"><?= trim($profile->NO_HP); ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted"><?=ucwords(strtolower($this->session->tempdata('email')))?></p>
                                                </div>
                                                <div class="about-info-p m-b-0">
                                                    <strong>Lokasi Kerja</strong>
                                                    <br>
                                                    <p class="text-muted"><?php echo trim($this->session->tempdata('outlet_name')); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->
                                    </div>
                                    <div class="col-md-8">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Deskripsi Singkat</h3>
                                            </div>
                                            <div class="panel-body">
                                                <p style="text-align: justify;">
                                                    <?php echo trim($profile->EM_ABOUT_ME); ?>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->
                                    </div>
                                </div>
                            </div>
                           <div class="tab-pane <?= $tab==2?'active':''?>" id="settings-2" style="<?= $tab==2?'display:block !important':'none'?>">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Ubah Profile</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="FullName">User ID</label>
                                                <input type="text" value="<?php echo trim($this->session->tempdata('user_name')); ?>" id="FullName" class="form-control" readonly="readonly">
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Nama Lengkap</label>
                                                <input type="text" value="<?php echo trim(ucwords(strtolower($this->session->tempdata('full_name')))); ?>" id="Email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">Nomor HP</label>
                                                <input type="text" value="<?php echo trim($profile->NO_HP); ?>" id="Username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">Email</label>
                                                <input type="text" value="<?php echo trim(strtolower($profile->EMAIL_ADDR)); ?>" id="Username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Password">Password</label>
                                                <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="RePassword">Ulangi Password</label>
                                                <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="AboutMe">Tentang Saya</label>
                                                <textarea style="height: 125px" id="AboutMe" class="form-control"><?php echo trim($profile->EM_ABOUT_ME); ?></textarea>
                                            </div>
                                            <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                        </form>

                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>
                        </div>
                    </div>
                    </div>



                <!-- Footer -->
                <?php $this->load->view($params['base_comp'] . 'v-backend-footer'); ?>
                <!-- End Footer -->

            </div>
            <!-- end container -->

        </div>