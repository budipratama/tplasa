<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">



                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center" style="background-image:url('<?php echo $params['base_theme']; ?>dark/assets/images/big/bg.jpg')">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="<?php echo $params['base_image']; ?>ravi-vendra.png" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h3 class="text-white"><?php echo ucwords(strtolower($this->session->tempdata('full_name'))); ?></h3>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class="row user-tabs">
                        <div class="col-lg-6 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                            <li class="active tab">
                                <a href="#about-me" data-toggle="tab" aria-expanded="false" class="active">
                                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                                    <span class="hidden-xs">Tentang Saya</span>
                                </a>
                            </li>
                            <li class="tab">
                                <a href="#profile-setting" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                    <span class="hidden-xs">Pengaturan</span>
                                </a>
                            </li>
                        <div class="indicator"></div></ul>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                        <div class="tab-content profile-tab-content">
                            <div class="tab-pane active" id="about-me">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Informasi Personal</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="about-info-p">
                                                    <strong>Nama Lengkap</strong>
                                                    <br>
                                                    <p class="text-muted"><?php echo trim(ucwords(strtolower($this->session->tempdata('full_name')))); ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Nomor Telepon</strong>
                                                    <br>
                                                    <p class="text-muted"><?php echo trim($profile->NO_HP); ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted"><?php echo trim(strtolower($profile->EMAIL_ADDR)); ?></p>
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
                            </div>

                            <div class="tab-pane" id="profile-setting">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Ubah Profil</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="Username">User ID</label>
                                                <input autocomplete="off" placeholder="Masukkan user ID anda" readonly="readonly" type="text" value="<?php echo trim($this->session->tempdata('user_name')); ?>" name="Username" id="Username" class="form-control" />
                                                <input autocomplete="off" placeholder="Masukkan user ID anda" readonly="readonly" type="hidden" value="<?php echo trim($this->session->tempdata('user_id')); ?>" name="UserID" id="UserID" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="FullName">Nama Lengkap</label>
                                                <input autocomplete="off" placeholder="Masukkan nama lengkap anda" type="text" value="<?php echo trim(ucwords(strtolower($this->session->tempdata('full_name')))); ?>" name="FullName" id="FullName" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Nomor HP</label>
                                                <input autocomplete="off" placeholder="Masukkan nomor HP anda" type="text" value="<?php echo trim($profile->NO_HP); ?>" name="Phone" id="Phone" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input autocomplete="off" placeholder="Masukkan alamat email anda" type="email" value="<?php echo trim(strtolower($profile->EMAIL_ADDR)); ?>" name="Email" id="Email" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="Password">Password</label>
                                                <input type="password" placeholder="Masukkan password anda (8 - 25 karakter)" name="Password" id="Password" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="RePassword">Ulangi Password</label>
                                                <input type="password" placeholder="Masukkan password anda (8 - 25 karakter)" name="RePassword" id="RePassword" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="AboutMe">About Me</label>
                                                <textarea style="height: 125px" placeholder="Masukkan deskripsi singkat anda" name="AboutMe" id="AboutMe" class="form-control"><?php echo trim($profile->EM_ABOUT_ME); ?></textarea>
                                            </div>
                                            <button class="btn btn-danger waves-effect waves-light w-md" type="submit">Simpan</button>
                                            <button class="btn btn-default waves-effect waves-light w-md" type="reset">Reset</button>
                                        </form>

                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>
                        </div>
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