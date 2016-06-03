<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view($params['base_comp'] . 'v-frontend-header'); ?>
	</head>
	<body class="fixed-left">
		<!-- Begin page -->
        <div id="wrapper">
            <?php $this->load->view($params['base_comp'] . 'v-frontend-navigation'); ?>

			<?php $this->load->view($params['base_page'] . $content); ?>

        </div>
        <!-- END wrapper -->

		<?php $this->load->view($params['base_comp'] . 'v-frontend-script'); ?>
	</body>
</html>