<!-- jQuery  -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/detect.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/fastclick.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/waves.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/wow.min.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/jquery.app.js"></script>

        <!-- moment js  -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/moment/moment.js"></script>

        <!-- counters  -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- sweet alert  -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script>


        <!-- flot Chart -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- todos app  -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/pages/jquery.todo.js"></script>

        <!-- chat app  -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/pages/jquery.chat.js"></script>

        <!-- dashboard  -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/pages/jquery.dashboard.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
            $(document).ready(function() {
                $('#example tfoot th').each( function () {
                    var title = $(this).text();
                    $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
                    // $(this).html( '<input type="text" placeholder="Search" />' );
                } );
                /*$('#example thead:last-child th').each( function () {
                    var title = $(this).text();
                    $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
                    // $(this).html( '<input type="text" placeholder="Search" />' );
                } );*/
                var table = $('#example').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "ajax": "<?php echo @ site_url('backend/admin-plasa/get-data'); ?>",
                    /*"columns": [
                        {
                            data: null,
                            defaultContent: '',
                            className: 'select-checkbox',
                            orderable: false
                        },
                        { data: "EM_USERID" },
                        { data: "EM_NAME" },
                        { data: "EM_NAME" },
                        { data: "EM_STATUS" },
                        { data: "start_date" },
                    ],*/
                });
                table.columns().every( function () {
                    var that = this;             
                    $( 'input', this.footer() ).on( 'keyup change', function () {
                        console.log(this.value);
                        if ( that.search() !== this.value ) {
                            console.log("masuk");
                            that
                                .search( this.value )
                                .draw();
                        }
                    });
                } );
            });

            
        </script>

        <!-- data tables -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/pages/datatables.editable.init.js"></script>
