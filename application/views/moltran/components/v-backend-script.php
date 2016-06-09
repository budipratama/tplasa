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
            
            
        </script>

        <!-- data tables -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/pages/datatables.editable.init.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/jquery.validate.js"></script>
        
        <!-- script untuk admin -->
        <script type="text/javascript">

            $("#tambahAdmin").on("click",function(){
                $("#tambah-admin").modal({backdrop: 'static', keyboard: false});
            });
            $(document).ready(function() {
                // ubah tfooter jadi filter
                $('#adminPlasa tfoot th').each( function () {
                    var title = $(this).text();
                    // alert(title);
                    if(title == "STATUS")
                        $(this).html( '<select><option value="">Pilih    Status</option><option value="1">AKTIF</option><option value="0">TIDAK AKTIF</option></select>' );
                    else
                        $(this).html( '<input type="text" placeholder="Cari '+title+'" />' );
                } );
                //  inisialisasi table admin plasa
                var table = $('#adminPlasa').DataTable( {
                    "language": {
                        "lengthMenu": "Tampil _MENU_ data per-halaman",
                        "zeroRecords": "Data tidak dapat di temukan",
                        "info": "Tampilkan halaman _PAGE_ dari _PAGES_",
                        "infoEmpty": "data tidak tersedia",
                        "infoFiltered": "(filtered from _MAX_ total records)"
                    },
                    "processing": true,
                    "serverSide": true,
                    "sDom":"l",
                    "responsive": true,
                    "ajax": "<?php echo @ site_url('backend/admin-plasa/get-data'); ?>",
                    "columns" : [
                        {'data':'0'},
                        {'data':'1'},
                        {'data':'2'},
                        {'data':'3'},
                        {'data':'4'},
                        {'data':'5'},
                        {
                            searchable: false,
                            render: function ( data, type, full, meta ) {
                                 active = (data==1)?"<i class='fa fa-toggle-down pointer' title='Deaktivasi Admin' id='admin_active'></i>":"<i class='fa fa-toggle-up pointer' title='Aktifasi Admin' id='admin_inactive'></i>";
                                buttonId = "<i class='md md-replay pointer' title='Aktifasi Admin' id='reset-password'></i>&nbsp;<i class='md md-mode-edit pointer' title='Edit Admin' id='edit-admin-plasa'></i>&nbsp;"+active;
                                return buttonId;
                             }
                        },
                    ],
                    /*"columnDefs": [ {
                        "targets": 6,
                        "data": null,
                        "defaultContent": "<i class='md md-replay pointer' title='Reset Password' id='reset-password'></i><i class='md md-mode-edit pointer' title='Edit Admin' id='edit-admin-plasa'></i>"
                        
                    } ]*/
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
                $('#adminPlasa tbody').on( 'click', '#reset-password', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#form-reset-password").modal({backdrop: 'static', keyboard: false});
                    $("#id_admin").val(data[0]);
                });
                // event admin plasa
                $('#adminPlasa tbody').on( 'click', '#edit-admin-plasa', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#admin-form-edit").modal({backdrop: 'static', keyboard: false});
                    $("#admin_edit_id_admin").val(data[0]);
                    $("#admin_edit_nama_lengkap").val(data[2]);
                    $("select#admin_edit_status_admin").val((data[3]=="AKTIF")?"1":"0");
                    // alert("Edit admin id "+ data[6]);
                });
            });
            // validasi form reset password
            $( document ).ready( function () {
                $( "#form-reset-pass" ).validate( {
                    submitHandler: function(form){
                        $.post("<?php echo @ site_url('backend/admin-plasa/manage'); ?>?"+$("#form-reset-pass").serialize(),function(){

                        })
                        .fail(function() {
                            alert( "error" );
                        })
                        .done(function(data) { 
                        if(data == "1")
                        {
                            setTimeout(function(){
                                $("#form-reset-password").modal("hide");
                            },1000);    
                        }                           
                            
                        });
                    },
                    rules: {
                        /*firstname: "required",
                        lastname: "required",*/
                        id_admin: {
                            required: true,
                            minlength: 6
                        },
                        reset_password: {
                            required: true,
                            minlength: 6
                        },
                        confirm_reset_password: {
                            required: true,
                            minlength: 6,
                            equalTo: "#reset_password"
                        },
                        
                    },
                    messages: {
                        id_admin: {
                            required: "Please enter a ID Admin",
                            minlength: "Your ID ADMIN must consist of at least 2 characters"
                        },
                        reset_password: {
                            required: "Isikan sebuah password",
                            minlength: "Nilai Password Boleh Berupa: <br>Alfabet & Numerik. <br> Karaketer Spesial. <br> Panjang 6 - 20 karakter."
                        },
                        confirm_reset_password: {
                            required: "Isikan password sebelumnya",
                            minlength: "Nilai Password Boleh Berupa: <br>Alfabet & Numerik. <br> Karaketer Spesial. <br> Panjang 6 - 20 karakter.",
                            equalTo: "Masukan nilai password sebelumnya"
                        },
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
                    },

                } );
            } );  
            // validasi form tambah admin
            $( document ).ready( function () {
                $( "#form-add-admin" ).validate( {
                    submitHandler: function(form){
                        $.post("<?php echo @ site_url('backend/admin-plasa/manage'); ?>?"+$("#form-add-admin").serialize(),function(){

                        })
                        .fail(function() {
                            alert( "error" );
                        })
                        .done(function(data) {                            
                            setTimeout(function(){
                                $("#tambah-admin").modal("hide");
                            },1000);
                        });
                    },
                    rules: {
                        /*firstname: "required",
                        lastname: "required",*/
                        new_id_admin: {
                            required: true,
                            minlength: 6,
                            remote : {
                                    type : "post",
                                    url: "<?php echo @ site_url('backend/check/username'); ?>",
                            },
                        },
                        status_admin:{
                            required:true,
                        },
                        lvl_admin:{
                            required:true,
                        },
                        nama_lengkap    :{
                            required : true,
                            minlength: 6,
                            lettersonly: true
                        },
                        cabang:{
                            required:true
                        },
                        password: {
                            required: true,
                            minlength: 6
                        },
                        confirm_password: {
                            required: true,
                            minlength: 6,
                            equalTo: "#password"
                        },
                        
                    },
                    messages: {
                        new_id_admin: {
                            required: "Isikan ID ADMIN",
                            minlength: "Nilai ID ADMIN Boleh Berupa :<br>Alfabet & Numerik. <br> Karaketer Spesial. <br>Panjang 6 - 20 karakter",
                            remote:"ID ADMIN sudah terpakai",
                        },
                        status_admin:{
                            required:"Pilih Status Admin",
                        },
                        lvl_admin:{
                            required:"Pilih Level Admin",
                        },
                        nama_lengkap: {
                            required: "Isikan Nama Lengkap",
                            minlength: "Nilai Nama Lengkap Boleh Berupa :<br>Alfabet [A-Z]. <br>Panjang 6 - 20 karakter"
                        },
                        password: {
                            required: "Isikan sebuah password",
                            minlength: "Nilai Password Boleh Berupa: <br>Alfabet & Numerik. <br> Karaketer Spesial. <br> Panjang 6 - 20 karakter."
                        },
                        confirm_password: {
                            required: "Isikan password sebelumnya",
                            minlength: "Nilai Password Boleh Berupa: <br>Alfabet & Numerik. <br> Karaketer Spesial. <br> Panjang 6 - 20 karakter.",
                            equalTo: "Masukan nilai password sebelumnya"
                        },
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
                    },

                } );
            } );    
            jQuery.validator.addMethod("lettersonly", function(value, element) {
              return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);
            }, "Hanya Alfabet [A-Z]");   
        </script>

