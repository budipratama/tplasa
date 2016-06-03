		<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/detect.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/fastclick.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.slimscroll.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.blockUI.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/waves.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.nicescroll.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.scrollTo.min.js"></script>

        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/js/jquery.app.js"></script>

        <!-- moment js  -->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/moment/moment.js"></script>

        <!-- counters  -->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- sweet alert  -->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>


        <!-- flot Chart -->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/flot-chart/jquery.flot.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- todos app  -->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/pages/jquery.todo.js"></script>

        <!-- chat app  -->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/pages/jquery.chat.js"></script>

        <!-- dashboard  -->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/pages/jquery.dashboard.js"></script>

        <!--Form Validation-->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js"></script>

        <!--Form Wizard-->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/jquery.steps/build/jquery.steps.min.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/pages/jquery.wizard-init.js"></script>

        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/select2/dist/js/select2.min.js"></script>

        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/toggles/toggles.min.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/colorpicker/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme']; ?>dark/ssets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($)
            {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                jQuery('#datepicker-start').datepicker();
                jQuery('#datepicker-stop').datepicker();

                jQuery(".select2").select2({
                    width: '100%'
                });
            });
        </script>