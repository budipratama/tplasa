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
                // ubah tfooter jadi filter
                $('#adminPlasa tfoot th').each( function () {
                    var title = $(this).text();
                    // alert(title);
                    if(title == "STATUS")
                        $(this).html( '<select><option value="">Select Status</option><option value="1">AKTIF</option><option value="0">TIDAK AKTIF</option></select>' );
                    else
                        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
                } );
                //  inisialisasi table admin plasa
                var table = $('#adminPlasa').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "sDom":"l",
                    "responsive": true,
                    "ajax": "<?php echo @ site_url('backend/admin-plasa/get-data'); ?>",
                    "columnDefs": [ {
                        "targets": 6,
                        "data": null,
                        "defaultContent": "<i class='md md-replay pointer' title='Reset Password' id='reset-password' data-toggle='modal' data-target='#con-close-modal'></i><i class='md md-mode-edit pointer' title='Edit Admin' id='edit-admin-plasa'></i>"
                        
                    } ]
                });
                // data-toggle="modal" data-target="#con-close-modal"
                // fungsi filter
                table.columns().every( function () {
                    var that = this;  

                    $( 'input', this.footer() ).on( 'keyup change', function () {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        }
                    });

                    $( 'select', this.footer() ).on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
                        that
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        }
                    });
                } );
                // event reset password
                /*$('#adminPlasa tbody').on( 'click', '#reset-password', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    alert("Reset Pass id user"+ data[6]);
                });*/
                // event admin plasa
               /* $('#adminPlasa tbody').on( 'click', '#edit-admin-plasa', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    alert("Edit admin id "+ data[6]);
                });*/
            });

            
        </script>

        <!-- data tables -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/pages/datatables.editable.init.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/jquery.validate.js"></script>

        <script type="text/javascript">
        $.validator.setDefaults( {
            submitHandler: function () {
                alert( "submitted!" );
            }
        } );

        $( document ).ready( function () {
            $( "#signupForm" ).validate( {
                rules: {
                    /*firstname: "required",
                    lastname: "required",*/
                    username: {
                        required: true,
                        minlength: 2
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                    /*email: {
                        required: true,
                        email: true
                    },
                    agree: "required"*/
                },
                messages: {
                    // firstname: "Please enter your firstname",
                    // lastname: "Please enter your lastname",
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 2 characters"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    confirm_password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    // email: "Please enter a valid email address",
                    // agree: "Please accept our policy"
                },
                errorPlacement: function ( error, element ) {
                    error.addClass( "ui red pointing label transition" );
                    error.insertAfter( element.parent() );
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).parents( ".row" ).addClass( errorClass );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).parents( ".row" ).removeClass( errorClass );
                }
            } );
        } );
    </script>

