 Navigation Bar-->
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

                            <li class="has-submenu">
                                <a href="#"><i class="md md-palette "></i> <span> Atur Admin </span> </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Admin PLASA TELKOM</a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo @ site_url('backend/admin-plasa/manage'); ?>">Manage Admin</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Forms</a>
                                        <ul class="submenu">
                                            <li><a href="form-elements.html">General Elements</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-advanced.html">Advanced Form</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                            <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                                            <li><a href="code-editor.html">Code Editors</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                            <li><a href="form-xeditable.html">X-editable</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Tables</a>
                                        <ul class="submenu">
                                            <li><a href="tables.html">Basic Tables</a></li>
                                            <li><a href="table-datatable.html">Data Table</a></li>
                                            <li><a href="tables-editable.html">Editable Table</a></li>
                                            <li><a href="responsive-table.html">Responsive Table</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Charts</a>
                                        <ul class="submenu">
                                            <li><a href="morris-chart.html">Morris Chart</a></li>
                                            <li><a href="chartjs.html">Chartjs</a></li>
                                            <li><a href="flot-chart.html">Flot Chart</a></li>
                                            <li><a href="peity-chart.html">Peity Charts</a></li>
                                            <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                            <li><a href="chart-radial.html">Radial charts</a></li>
                                            <li><a href="other-chart.html">Other Chart</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="gmap.html"> Google Map</a></li>
                                            <li><a href="vector-map.html"> Vector Map</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Mail</a>
                                        <ul class="submenu">
                                            <li><a href="inbox.html">Inbox</a></li>
                                            <li><a href="email-compose.html">Compose Mail</a></li>
                                            <li><a href="email-read.html">View Mail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-palette "></i> <span> Atur Outlet </span> </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Outlet PLASA TELKOM</a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo @ site_url('backend/admin-plasa/manage'); ?>">Manage Outlet</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Terminal PLASA TELKOM</a>
                                        <ul class="submenu">
                                            <li><a href="form-elements.html">Manage Terminal</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">User PLASA TELKOM</a>
                                        <ul class="submenu">
                                            <li><a href="tables.html">Manage User</a></li>
                                            
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
                                    <li><a href="grid.html">Profil-ku</a></li>
                                    <li><a href="portlets.html">Ubah Password</a></li>
                                </ul>
                            </li>

                            <!-- <li class="has-submenu">
                                <a href="#"><i class="md md-redeem"></i> <span> Other </span> </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="material-icon.html">Material Design</a></li>
                                            <li><a href="ion-icons.html">Ion Icons</a></li>
                                            <li><a href="font-awesome.html">Font awesome</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Forms</a>
                                        <ul class="submenu">
                                            <li><a href="form-elements.html">General Elements</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-advanced.html">Advanced Form</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                            <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                                            <li><a href="code-editor.html">Code Editors</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                            <li><a href="form-xeditable.html">X-editable</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Tables</a>
                                        <ul class="submenu">
                                            <li><a href="tables.html">Basic Tables</a></li>
                                            <li><a href="table-datatable.html">Data Table</a></li>
                                            <li><a href="tables-editable.html">Editable Table</a></li>
                                            <li><a href="responsive-table.html">Responsive Table</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Charts</a>
                                        <ul class="submenu">
                                            <li><a href="morris-chart.html">Morris Chart</a></li>
                                            <li><a href="chartjs.html">Chartjs</a></li>
                                            <li><a href="flot-chart.html">Flot Chart</a></li>
                                            <li><a href="peity-chart.html">Peity Charts</a></li>
                                            <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                            <li><a href="chart-radial.html">Radial charts</a></li>
                                            <li><a href="other-chart.html">Other Chart</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="gmap.html"> Google Map</a></li>
                                            <li><a href="vector-map.html"> Vector Map</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Mail</a>
                                        <ul class="submenu">
                                            <li><a href="inbox.html">Inbox</a></li>
                                            <li><a href="email-compose.html">Compose Mail</a></li>
                                            <li><a href="email-read.html">View Mail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->

                            <!-- <li class="has-submenu">
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
                            </li> -->

                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar