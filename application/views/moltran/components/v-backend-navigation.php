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
                                    <img src="<?php echo $params['base_image']; ?>ravi-vendra.png" alt="user-img" class="img-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
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
                            <li class="active">
                                <a href="<?php echo @ site_url('backend/dashboard'); ?>"><i class="md md-home"></i> <span> Dashboard </span> </a>
                            </li>


                            <!-- <li class="has-submenu">
                                <a href="#"><i class="md md-palette "></i><span> Elements </span> </a>
                                <ul class="submenu">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="panels.html">Panels</a></li>
                                    <li><a href="checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="bootstrap-ui.html">BS Elements</a></li>
                                    <li><a href="progressbars.html">Progress Bars</a></li>
                                    <li><a href="notification.html">Notification</a></li>
                                    <li><a href="sweet-alert.html">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-invert-colors-on"></i> <span> Components </span> </a>
                                <ul class="submenu">
                                    <li><a href="grid.html">Grid</a></li>
                                    <li><a href="portlets.html">Portlets</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="nestable-list.html">Nesteble</a></li>
                                    <li><a href="ui-sliders.html">Sliders </a></li>
                                    <li><a href="gallery.html">Gallery </a></li>
                                    <li><a href="pricing.html">Pricing Table </a></li>
                                    <li><a href="calendar.html">Calendar </a></li>
                                </ul>
                            </li> -->

                            <li class="has-submenu">
                                <a href="#"><i class="md md-redeem"></i> <span> Atur Admin </span> </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Admin PLASA TELKOM </a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo @ site_url('backend/admin-plasa/manage'); ?>">Manage Admin</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-redeem"></i> <span> Atur Outlet </span> </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Outlet PLASA TELKOM </a>
                                        <ul class="submenu">
                                            <li><a href="material-icon.html">Manage Outlet</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Terminal PLASA TELKOM </a>
                                        <ul class="submenu">
                                            <li><a href="material-icon.html">Manage Terminal</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">User PLASA TELKOM </a>
                                        <ul class="submenu">
                                            <li><a href="material-icon.html">Manage User</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-invert-colors-on"></i> <span> Log & Laporan </span> </a>
                                <ul class="submenu">
                                    <li><a href="grid.html">Log Browser</a></li>
                                    <li><a href="portlets.html">Sejarah Transaksi</a></li>                                    
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-invert-colors-on"></i> <span> Privatisasi </span> </a>
                                <ul class="submenu">
                                    <li><a href="grid.html">Profile-ku</a></li>
                                    <li><a href="portlets.html">Ubah Password</a></li>                                    
                                </ul>
                            </li>


                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->