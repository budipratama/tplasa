<!-- modal global -->
<div id="modal_global" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="append-modal"></div>
</div>
<header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo"><img height="40" src="<?php echo $params['base_image'] . 'favicon.png'; ?>" />&nbsp; <span>Plasa Telkom </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                           

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <img src="<?php echo $params['base_image']; ?>budi.jpg" alt="user-img" class="img-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo @ site_url('backend/user/profile'); ?>"><i class="md md-face-unlock"></i> Profile</a></li>
                                    <li><a href="<?php echo @ site_url('backend/user/profile'); ?>#settings-2"><i class="md md-settings"></i> Pengaturan</a></li>
                                    <li><a href="<?php echo @ site_url('backend/lock-screen'); ?>"><i class="md md-lock"></i> Kunci Layar</a></li>
                                    <li><a href="<?php echo @ site_url('authentication/admin/sign-out'); ?>"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li>
                                <a href="<?php echo @ site_url('backend/dashboard'); ?>"><i class="fa fa-dashboard"></i> <span> Dashboard </span> </a>
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-users"></i> <span> Atur Admin </span> </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Admin PLASA TELKOM</a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo @ site_url('backend/admin-plasa/manage'); ?>">Manage Admin</a></li>
                                        </ul>
                                    </li>
                                 
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-bank"></i> <span> Atur Outlet </span> </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Outlet PLASA TELKOM</a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo @ site_url('backend/outlet-plasa/outlet'); ?>">Manage Outlet</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Terminal PLASA TELKOM</a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo @ site_url('backend/terminal-plasa/manage'); ?>">Manage Terminal</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">User PLASA TELKOM</a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo @ site_url('backend/user-plasa/manage'); ?>">Manage User</a></li>
                                        </ul>
                                    </li>
                                 
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-file"></i> <span>Laporan </span> </a>
                                <ul class="submenu">
                                    <!--<li><a href="grid.html">Log Browser</a></li>-->
                                    <li><a href="<?php echo @ site_url('backend/laporan/manage');?>">Sejarah Transaksi</a></li>
                                </ul>
                            </li>

                            <!-- <li class="has-submenu">
                                <a href="#"><i class="md md-invert-colors-on"></i> <span> Privatisasi </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo @ site_url('backend/user/profile'); ?>">Profil-ku</a></li>
                                    <li><a href="<?php echo @ site_url('backend/user/profile'); ?>#settings-2">Ubah Password</a></li>
                                </ul>
                            </li> -->

                            <li class="has-submenu" style="display:none">
                                <a href="#"><i class="md md-pages"></i><span>Pages </span> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="profile.html">Profile</a></li>
                                            <li><a href="timeline.html">Timeline</a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="email-template.html">Email template</a></li>
                                            <li><a href="contact.html">Contact-list</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="recoverpw.html">Recover Password</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="lock-screen.html">Lock Screen</a></li>
                                            <li><a href="blank.html">Blank Page</a></li>
                                            <li><a href="maintenance.html">Maintenance</a></li>
                                            <li><a href="coming-soon.html">Coming-soon</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                            <li><a href="404_alt.html">404 alt</a></li>
                                            <li><a href="500.html">500 Error</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>