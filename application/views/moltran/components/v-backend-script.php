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
        
        <!-- script untuk admin plasa-->
        <script type="text/javascript">
            // menghilangkan nilai admin all jika login sebagai admin regional
            var admin_role = "<?=ucwords(strtolower($this->session->tempdata('flag_regional')))?>"; 
            if (admin_role != "-1")
            {
                $("#admin_edit_lvl_admin option[value='-1']").remove();
                $("#lvl_admin option[value='-1']").remove();
            }


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
                    "ajax": "<?php echo @ site_url('backend/admin-plasa/get-data-table'); ?>",
                    "columns" : [
                        {'data':'0'},
                        {'data':'1'},
                        {'data':'2'},
                        {'data':'3'},
                        {'data':'4'},
                        {'data':'5'},
                        {'data':'6',visible:false},
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
                // event edit admin plasa
                $('#adminPlasa tbody').on( 'click', '#edit-admin-plasa', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#admin-form-edit").modal({backdrop: 'static', keyboard: false});
                    $("#admin_edit_id_admin").val(data[0]);
                    $("#admin_edit_nama_lengkap").val(data[2]);
                    $("select#admin_edit_status_admin").val((data[3]=="AKTIF")?"1":"0");
                    
                    $("select#admin_edit_lvl_admin").val(data[6]);
                    // alert("Edit admin id "+ data[6]);
                });

                // event deaktivasi admin plasa
                $('#adminPlasa tbody').on( 'click', '#admin_active', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#activ_deactive_flag").val("0");
                    $("#activ_deactive_username").val(data[0]);
                    $("#activ_deactive").modal({backdrop: 'static', keyboard: false,title:'kampret'});
                    $(".t-active").text("Non Aktifkan Admin");
                    // alert("Edit admin id "+ data[6]);
                });

                // event aktivasi admin plasa
                $('#adminPlasa tbody').on( 'click', '#admin_inactive', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    // alert("Edit admin id "+ data[6]);
                    $(".t-active").text("Aktifkan Admin");
                    $("#activ_deactive_flag").val("1");
                    $("#activ_deactive_username").val(data[0]);
                    $("#activ_deactive").modal({backdrop: 'static', keyboard: false,title:'kampret'});
                });
            });
            // validasi form activat_or_deactive password
            $( document ).ready( function () {
                $( "#activat_or_deactive" ).validate( {
                    submitHandler: function(form){
                        $.post("<?php echo @ site_url('backend/admin-plasa/active_or_deactive'); ?>?"+$("#activat_or_deactive").serialize(),function(){

                        })
                        .fail(function() {
                            alert( "error" );
                        })
                        .done(function(data) {
                        if(data == "1")
                        {
                            setTimeout(function(){
                                $("#activ_deactive").modal("hide");
                                $('#adminPlasa').DataTable().ajax.reload();
                                $('#table_user_plasa').DataTable().ajax.reload();
                            },1000);    
                        }                           
                            
                        });
                    },
                    rules: {
                            activ_deactive_flag:{
                                required :true,
                            },
                            activ_deactive_username:{
                                required :true,
                            }                    
                    },
                    messages: {
                        activ_deactive_flag: {
                            required: "Status Tidak Ada",
                        },
                        activ_deactive_username: {
                            required: "Username Tidak Ada",
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
                            $('#adminPlasa').DataTable().ajax.reload();
                            $("#form-add-admin").trigger("reset");
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

            // validasi form edit admin
            $( document ).ready( function () {
                $( "#form-edit-admin" ).validate( {
                    submitHandler: function(form){
                        $.post("<?php echo @ site_url('backend/admin-plasa/manage'); ?>?"+$("#form-edit-admin").serialize(),function(){

                        })
                        .fail(function() {
                            alert( "error" );
                        })
                        .done(function(data) { 
                            if(data == "1")
                            {           
                                $('#adminPlasa').DataTable().ajax.reload();                
                                setTimeout(function(){
                                    $("#admin-form-edit").modal("hide");
                                },1000);
                            }
                        });
                    },
                    rules: {
                        /*firstname: "required",
                        lastname: "required",*/
                        
                        admin_edit_status_admin:{
                            required:true,
                        },
                        admin_edit_lvl_admin:{
                            required:true,
                        },
                        admin_edit_nama_lengkap :{
                            required : true,
                            minlength: 6,
                            lettersonly: true
                        },
                        admin_edit_cabang:{
                            required:true
                        },
                        
                    },
                    messages: {
                        
                        admin_edit_status_admin:{
                            required:"Pilih Status Admin",
                        },
                        admin_edit_lvl_admin:{
                            required:"Pilih Level Admin",
                        },
                        admin_edit_nama_lengkap: {
                            required: "Isikan Nama Lengkap",
                            minlength: "Nilai Nama Lengkap Boleh Berupa :<br>Alfabet [A-Z]. <br>Panjang 6 - 20 karakter"
                        },
                        admin_edit_cabang:{
                            required:"Pilih Cabang Admin",
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
            $("#lvl_admin").change(function(){
                // alert($(this).val());
                if($(this).val()=="-1"){
                    $("#add-cabang").toggle("slow");
                    $("select#cabang").val(1);
                }
                else{
                    $("#add-cabang").toggle("slow");
                    // $("select#cabang").val(0);
                    $('#cabang > option').filter(function() { 
                        return ($(this).text() == 'Pilih Cabang'); //To select Blue
                    }).prop('selected', true);
                }

            });
        </script>




        <!-- script untuk user plasa-->
        <script type="text/javascript">
            $(document).ready(function(){
                $("#f_provinsi_id").change(function(){
                    $.ajax({
                        type:       "POST",
                        data:       "province=" + $(this).val(),
                        url:        "<?=@ site_url('backend/user-plasa/list-kota');?>",
                        success: function(msg)
                        {
                            $("#f_kota").html(msg);
                            $("#f_kota").fadeIn("slow");
                        }
                    });
                   
                });
                $("#f_e_provinsi_id").change(function(){
                    $.ajax({
                        type:       "POST",
                        data:       "province=" + $(this).val(),
                        url:        "<?=@ site_url('backend/user-plasa/list-kota');?>",
                        success: function(msg)
                        {
                            $("#f_e_kota").html(msg);
                            $("#f_e_kota").fadeIn("slow");
                        }
                    });
                   
                });
                $("#tambah_user").on("click",function(){
                    $("#modal_add_user").modal({backdrop: 'static', keyboard: false});
                });
                $('#table_user_plasa tfoot th').each( function () {
                    var title = $(this).text();
                    // alert(title);
                    if(title == "STATUS USER")
                        $(this).html( '<select><option value="">Pilih    Status</option><option value="1">AKTIF</option><option value="0">TIDAK AKTIF</option></select>' );
                    else
                        $(this).html( '<input type="text" placeholder="Cari '+title+'" />' );
                } );
                //  inisialisasi table admin plasa
                var table = $('#table_user_plasa').DataTable( {
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
                    "ajax": "<?php echo @ site_url('backend/user-plasa/get-data-table'); ?>",
                    "columns" : [
                        {'data':'0'},
                        {'data':'1'},
                        {'data':'2'},
                        {'data':'3'},
                        {'data':'4'},
                        {'data':'5'},
                        {'data':'6',visible:false},
                        {
                            searchable: false,
                            render: function ( data, type, full, meta ) {
                                 active = (data==1)?"<i class='fa fa-toggle-down pointer' title='Deaktivasi Admin' id='admin_active'></i>":"<i class='fa fa-toggle-up pointer' title='Aktifasi Admin' id='admin_inactive'></i>";
                                buttonId = "<i class='md md-cached pointer' title='Reset Mesin ID User' id='reset-mesin-user'></i>&nbsp;<i class='md md-replay pointer' title='Reset Password' id='reset-password'></i>&nbsp;<br><i class='md md-mode-edit pointer' title='Edit User' id='edit-user-plasa'></i>&nbsp;"+active;
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
                $('#table_user_plasa tbody').on( 'click', '#reset-password', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#form-reset-password").modal({backdrop: 'static', keyboard: false});
                    $("#id_admin").val(data[0]);
                });


                // event edit admin plasa
                $('#table_user_plasa tbody').on( 'click', '#edit-user-plasa', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $.ajax({
                        url: "<?php echo @ site_url('backend/user-plasa/edit')?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {get_data: data[0]},
                    })
                    .done(function(data) {
                        $("select#f_e_outlet_id").val(data.TR_ID);
                        $("#f_e_nama_lengkap").val(data.EM_NAME);
                        $("#f_e_new_id_admin").val(data.EM_USERID);
                        $("#f_e_operator").val(data.LV_ID);
                        $("#f_e_alamat_lengkap").val(data.EM_ADDRESS);
                        $("#f_e_email").val(data.EM_EMAIL);
                        $("select#f_e_provinsi_id").val(data.ID_PROVINSI);
                        $("select#f_e_kota").val(data.ID_KABUPATEN);
                        $("select#f_e_status_admin").val(data.EM_STATUS);
                        $("#f_e_telphone").val(data.EM_PHONE_NUMBER);
                        $("#f_e_identitas").val(data.EM_IDENTITYCODE);
                    })
                    .fail(function() {
                        alert("error");
                    });
                    
                    $("#modal_edit_user").modal({backdrop: 'static', keyboard: false});
                    $("#admin_edit_id_admin").val(data[0]);
                    $("#admin_edit_nama_lengkap").val(data[2]);
                    $("select#admin_edit_status_admin").val((data[3]=="AKTIF")?"1":"0");
                    
                    $("select#admin_edit_lvl_admin").val(data[6]);
                    // alert("Edit admin id "+ data[6]);
                });

                // event Reset mesin id user
                $('#table_user_plasa tbody').on( 'click', '#reset-mesin-user', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#activ_deactive_flag").val("0");
                    $("#activ_deactive_username").val(data[0]);
                    $("#modal_reset_mesin_user").modal({backdrop: 'static', keyboard: false});
                    $(".t-active").text("Reset Mesin ID User "+data[0]);
                    // alert("Edit admin id "+ data[6]);
                });


                // event deaktivasi admin plasa
                $('#table_user_plasa tbody').on( 'click', '#admin_active', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#activ_deactive_flag").val("0");
                    $("#activ_deactive_username").val(data[0]);
                    $("#activ_deactive").modal({backdrop: 'static', keyboard: false});
                    $(".t-active").text("Non Aktifkan Admin");
                    // alert("Edit admin id "+ data[6]);
                });

                // event aktivasi admin plasa
                $('#table_user_plasa tbody').on( 'click', '#admin_inactive', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    // alert("Edit admin id "+ data[6]);
                    $(".t-active").text("Aktifkan Admin");
                    $("#activ_deactive_flag").val("1");
                    $("#activ_deactive_username").val(data[0]);
                    $("#activ_deactive").modal({backdrop: 'static', keyboard: false});
                });

                $( "#form-add-user" ).validate( {
                    submitHandler: function(form){
                        $.ajax({
                            url: "<?php echo @ site_url('backend/user-plasa/manage')?>",
                            type: 'POST',
                            dataType: 'html',
                            data: $("#form-add-user").serialize(),
                        })
                        .done(function(data) {
                            if (data==1) {
                                $("#modal_add_user").modal("hide");
                                $('#table_user_plasa').DataTable().ajax.reload();
                                $("#form-add-user").trigger("reset");
                            }
                            console.log("success");
                        })
                        .fail(function() {
                            console.log("error");
                        })
                        .always(function() {
                            console.log("complete");
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
                        f_outlet_id:{
                            required:true,
                        },
                        status_admin:{
                            required:true,
                        },
                        f_operator:{
                            required:true,
                        },
                        f_nama_lengkap    :{
                            required : true,
                            minlength: 6,
                            lettersonly: true
                        },
                        cabang:{
                            required:true
                        },
                        f_password: {
                            required: true,
                            minlength: 6
                        },
                        f_confirm_password: {
                            required: true,
                            minlength: 6,
                            equalTo: "#f_password"
                        },
                        f_provinsi_id:{
                            required:true,
                        },
                        f_kota:{
                            required:true,
                        }
                        
                    },
                    messages: {
                        new_id_admin: {
                            required: "Isikan USER ID",
                            minlength: "Nilai USER ID Boleh Berupa :<br>Alfabet & Numerik. <br> Karaketer Spesial. <br>Panjang 6 - 20 karakter",
                            remote:"User ID sudah terpakai",
                        },
                        f_kota:{
                            required:"Pilih Kota",
                        },
                        f_provinsi_id:{
                            required:"Pilih Provinsi",
                        },
                        f_outlet_id: {
                            required: "Pilih Outlet ID ",
                        },
                        status_admin:{
                            required:"Pilih Status User",
                        },
                        f_operator:{
                            required:"Pilih Level Operator",
                        },
                        f_nama_lengkap: {
                            required: "Isikan Nama Lengkap",
                            minlength: "Nilai Nama Lengkap Boleh Berupa :<br>Alfabet [A-Z]. <br>Panjang 6 - 20 karakter"
                        },
                        f_password: {
                            required: "Isikan sebuah password",
                            minlength: "Nilai Password Boleh Berupa: <br>Alfabet & Numerik. <br> Karaketer Spesial. <br> Panjang 6 - 20 karakter."
                        },
                        f_confirm_password: {
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
                $( "#form-edit-user" ).validate( {
                    submitHandler: function(form){
                        $.ajax({
                            url: "<?php echo @ site_url('backend/user-plasa/manage')?>",
                            type: 'POST',
                            dataType: 'html',
                            data: $("#form-edit-user").serialize(),
                        })
                        .done(function(data) {
                            if (data==1) {
                                $("#modal_edit_user").modal("hide");
                                $('#table_user_plasa').DataTable().ajax.reload();
                                $("#form-edit-user").trigger("reset");
                            }
                            console.log("success");
                        })
                        .fail(function() {
                            console.log("error");
                        })
                        .always(function() {
                            console.log("complete");
                        });
                    },
                    rules: {
                        /*firstname: "required",
                        lastname: "required",*/
                        f_e_outlet_id:{
                            required:true,
                        },
                        f_e_nama_lengkap    :{
                            required : true,
                            minlength: 6,
                            lettersonly: true
                        },
                        
                        f_e_operator:{
                            required:true,
                        },
                        f_e_status_admin:{
                            required:true,
                        },                       
                        
                        cabang:{
                            required:true
                        },
                        f_e_password: {
                            required: true,
                            minlength: 6
                        },
                        f_e_confirm_password: {
                            required: true,
                            minlength: 6,
                            equalTo: "#f_e_password"
                        },
                        f_e_provinsi_id:{
                            required:true,
                        },
                        f_e_kota:{
                            required:true,
                        }
                        
                    },
                    messages: {
                        
                        f_e_kota:{
                            required:"Pilih Kota",
                        },
                        f_e_provinsi_id:{
                            required:"Pilih Provinsi",
                        },
                        f_e_outlet_id: {
                            required: "Pilih Outlet ID ",
                        },
                        f_e_status_admin:{
                            required:"Pilih Status User",
                        },
                        f_e_operator:{
                            required:"Pilih Level Operator",
                        },
                        f_e_nama_lengkap: {
                            required: "Isikan Nama Lengkap",
                            minlength: "Nilai Nama Lengkap Boleh Berupa :<br>Alfabet [A-Z]. <br>Panjang 6 - 20 karakter"
                        },
                        f_e_password: {
                            required: "Isikan sebuah password",
                            minlength: "Nilai Password Boleh Berupa: <br>Alfabet & Numerik. <br> Karaketer Spesial. <br> Panjang 6 - 20 karakter."
                        },
                        f_e_confirm_password: {
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
            });
        </script>






        <!-- script untuk terminal plasa -->
        <script type="text/javascript">
            $('#table_terminal_plasa tfoot th').each( function () {
                    var title = $(this).text();
                    // alert(title);
                    if(title == "STATUS USER")
                        $(this).html( '<select><option value="">Pilih    Status</option><option value="1">AKTIF</option><option value="0">TIDAK AKTIF</option></select>' );
                    else
                        $(this).html( '<input type="text" placeholder="Cari '+title+'" />' );
                } );
                //  inisialisasi table admin plasa
                var table = $('#table_terminal_plasa').DataTable( {
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
                    "ajax": "<?php echo @ site_url('backend/terminal-plasa/get-data-table'); ?>",
                    "columns" : [
                        {'data':'0'},
                        {'data':'1'},
                        {'data':'2'},
                        {'data':'3'},
                        {'data':'4'},
                        {'data':'5'},
                        {'data':'6',visible:false},
                        {
                            searchable: false,
                            render: function ( data, type, full, meta ) {
                                 active = (data==1)?"<i class='fa fa-toggle-down pointer' title='Deaktivasi Admin' id='admin_active'></i>":"<i class='fa fa-toggle-up pointer' title='Aktifasi Admin' id='admin_inactive'></i>";
                                buttonId = "<i class='md md-cached pointer' title='Reset Mesin ID User' id='reset-mesin-user'></i>&nbsp;<i class='md md-replay pointer' title='Reset Password' id='reset-password'></i>&nbsp;<br><i class='md md-mode-edit pointer' title='Edit User' id='edit-user-plasa'></i>&nbsp;"+active;
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
                $('#table_terminal_plasa tbody').on( 'click', '#reset-password', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#form-reset-password").modal({backdrop: 'static', keyboard: false});
                    $("#id_admin").val(data[0]);
                });


                // event edit admin plasa
                $('#table_terminal_plasa tbody').on( 'click', '#edit-user-plasa', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $.ajax({
                        url: "<?php echo @ site_url('backend/user-plasa/edit')?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {get_data: data[0]},
                    })
                    .done(function(data) {
                        $("select#f_e_outlet_id").val(data.TR_ID);
                        $("#f_e_nama_lengkap").val(data.EM_NAME);
                        $("#f_e_new_id_admin").val(data.EM_USERID);
                        $("#f_e_operator").val(data.LV_ID);
                        $("#f_e_alamat_lengkap").val(data.EM_ADDRESS);
                        $("#f_e_email").val(data.EM_EMAIL);
                        $("select#f_e_provinsi_id").val(data.ID_PROVINSI);
                        $("select#f_e_kota").val(data.ID_KABUPATEN);
                        $("select#f_e_status_admin").val(data.EM_STATUS);
                        $("#f_e_telphone").val(data.EM_PHONE_NUMBER);
                        $("#f_e_identitas").val(data.EM_IDENTITYCODE);
                    })
                    .fail(function() {
                        alert("error");
                    });
                    
                    $("#modal_edit_user").modal({backdrop: 'static', keyboard: false});
                    $("#admin_edit_id_admin").val(data[0]);
                    $("#admin_edit_nama_lengkap").val(data[2]);
                    $("select#admin_edit_status_admin").val((data[3]=="AKTIF")?"1":"0");
                    
                    $("select#admin_edit_lvl_admin").val(data[6]);
                    // alert("Edit admin id "+ data[6]);
                });

                // event Reset mesin id user
                $('#table_terminal_plasa tbody').on( 'click', '#reset-mesin-user', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#activ_deactive_flag").val("0");
                    $("#activ_deactive_username").val(data[0]);
                    $("#modal_reset_mesin_user").modal({backdrop: 'static', keyboard: false});
                    $(".t-active").text("Reset Mesin ID User "+data[0]);
                    // alert("Edit admin id "+ data[6]);
                });


                // event deaktivasi admin plasa
                $('#table_terminal_plasa tbody').on( 'click', '#admin_active', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#activ_deactive_flag").val("0");
                    $("#activ_deactive_username").val(data[0]);
                    $("#activ_deactive").modal({backdrop: 'static', keyboard: false});
                    $(".t-active").text("Non Aktifkan Admin");
                    // alert("Edit admin id "+ data[6]);
                });

                // event aktivasi admin plasa
                $('#table_terminal_plasa tbody').on( 'click', '#admin_inactive', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    // alert("Edit admin id "+ data[6]);
                    $(".t-active").text("Aktifkan Admin");
                    $("#activ_deactive_flag").val("1");
                    $("#activ_deactive_username").val(data[0]);
                    $("#activ_deactive").modal({backdrop: 'static', keyboard: false});
                });
        </script>

