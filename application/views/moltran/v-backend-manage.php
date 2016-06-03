<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view($params['base_comp'] . 'v-backend-header'); ?>
	</head>
	<body>
		<!-- Begin page -->
		<?php $this->load->view($params['base_comp'] . 'v-backend-navigation'); ?>
        <div class="wrapper">           

			<?php $this->load->view($params['base_page'] . $content); ?>

        </div>
        <!-- END wrapper -->

		<?php $this->load->view($params['base_comp'] . 'v-backend-script'); ?>
	</body>
</html>