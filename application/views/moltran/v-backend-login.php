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
                    <h3 class="text-center m-t-10 text-white"> Login ke aplikasi <strong>Plasa Telkom</strong> </h3>
                </div>

                <div class="panel-body">

					<?php $this->load->view($params['base_widget'] . 'v-widget-alert'); ?>

	                <form method="post" class="form-horizontal m-t-20" action="<?php echo @ site_url('authentication/admin/sign-in'); ?>">

	                    <div class="form-group">
	                        <div class="col-xs-12">
	                            <input autocomplete="off" name="userid" class="form-control input-lg" type="text" required="required" placeholder="Masukkan User ID anda" />
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <div class="col-xs-12">
	                            <input autocomplete="off" name="password" class="form-control input-lg" type="password" required="required" placeholder="Masukkan Password anda" />
	                        </div>
	                    </div>

	                    <div class="form-group text-center m-t-40">
	                        <div class="col-xs-12">
	                            <button class="btn btn-danger btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
	                        </div>
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