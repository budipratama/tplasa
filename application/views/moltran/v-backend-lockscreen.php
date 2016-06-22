<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="PT Telkom Indonesia">

		<link rel="shortcut icon" href="<?php echo $params['base_image'] . 'favicon.png'; ?>" />

        <title>Plasa Telkom Indonesia - Powered by T-MONEY</title>

        <link href="<?php echo $params['base_theme']; ?>dark/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>dark/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>dark/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>dark/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>dark/assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>dark/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>dark/assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
	</head>
    <body>
        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">

                <div class="panel-heading bg-img">
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white">&nbsp;</h3>
                </div>

                <div class="panel-body" style="padding-top:0px">
                 	<form method="post" action="<?php echo @ site_url('authentication/admin/unlock-screen'); ?>" role="form" class="text-center">
	                    <div class="user-thumb">
	                        <img src="<?php echo $params['base_image']; ?>budi.jpg" class="img-responsive img-circle img-thumbnail" alt="thumbnail">
	                    </div>
	                    <div class="form-group">
	                        <h3><?php echo trim(ucwords(strtolower($this->session->tempdata('full_name')))); ?></h3>
	                        <p class="text-muted">Masukkan password anda untuk mengakses aplikasi Plasa Telkom</p>

							<?php $this->load->view($params['base_widget'] . 'v-widget-alert'); ?>

	                        <div class="input-group m-t-30">
	                            <input required="required" name="userid" id="userid" type="hidden" class="form-control input-lg" placeholder="Masukkan User ID anda" value="<?php echo trim($this->session->tempdata('user_id')); ?>" />
	                            <input required="required" name="username" id="username" type="hidden" class="form-control input-lg" placeholder="Masukkan User Name anda" value="<?php echo trim($this->session->tempdata('user_name')); ?>" />
	                            <input required="required" name="password" id="password" type="password" class="form-control input-lg" placeholder="Masukkan password anda" />
	                            <span class="input-group-btn"> <button type="submit" class="btn btn-danger btn-lg waves-effect waves-light">Log In</button> </span>
	                        </div>
	                    </div>
	                    <div class="text-right">
	                        <a href="<?php echo @ site_url('frontend/sign-in'); ?>">Bukan <?php echo trim(ucwords(strtolower($this->session->tempdata('full_name')))); ?> ?</a>
	                    </div>
                	</form>

                </div>

            </div>
        </div>


    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/detect.js"></script>
        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/fastclick.js"></script>
        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/waves.js"></script>
        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/wow.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.app.js"></script>

	</body>
</html>