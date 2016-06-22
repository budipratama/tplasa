<!-- jQuery  -->
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/bootstrap.min.js"></script>
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/detect.js"></script> -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/js/fastclick.js"></script> -->
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
        

        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/toggles/toggles.min.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/colorpicker/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
        <script type="text/javascript" src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>

        <!-- sweet alert  -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script> -->


        <!-- flot Chart -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.js"></script> -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.time.js"></script> -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script> -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.resize.js"></script> -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.pie.js"></script> -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.selection.js"></script> -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.stack.js"></script> -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/plugins/flot-chart/jquery.flot.crosshair.js"></script> -->

        <!-- todos app  -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/pages/jquery.todo.js"></script> -->

        <!-- chat app  -->
        <!-- <script src="<?php echo $params['base_theme_horizontal']; ?>assets/pages/jquery.chat.js"></script> -->

        
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
                    // $("select#admin_edit_merchant").val(data[1]);
                    $('#admin_edit_merchant > option').filter(function() { 
                        return ($(this).text() == data[1]); //To select Blue
                    }).prop('selected', true);
                    $("select#admin_edit_status_admin").val((data[3]=="AKTIF")?"1":"0");
                    if (data[6] != "-1") 
                    {
                        $lvl_admin = "1";
                    }
                    else if(data[6]== "-1")
                    {
                        $lvl_admin = "-1";
                    }

                    $("select#admin_edit_lvl_admin").val($lvl_admin);
                    if(data[6] == "-1")
                    {
                        $("#add-cabang-edit").css({"display":"none"});
                        $("select#admin_edit_cabang").val(1);
                    }
                    else
                    {
                        $("#add-cabang-edit").css({"display":"block"});
                       $("select#admin_edit_cabang").val(1); 
                    }
                    // alert("Edit admin id "+ data[6]);
                });
                $("#admin_edit_cabang").on('change',function(){
                    if ($(this).val()=="-1") 
                    {
                        $("#add-cabang-edit").css({"display":"none"});
                        $("select#admin_edit_cabang").val(1);
                    }
                    else if($(this).val()=="1")
                    {
                        $("#add-cabang-edit").css({"display":"block"});
                        $("select#admin_edit_cabang").val();
                    }
                });
                // event deaktivasi admin plasa
                $('#adminPlasa tbody').on( 'click', '#admin_active', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#activ_deactive_flag").val("0");
                    $("#activ_deactive_username").val(data[0]);
                    $("#activ_deactive").modal({backdrop: 'static', keyboard: false});
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
                    $("#activ_deactive").modal({backdrop: 'static', keyboard: false});
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
                            // setTimeout(function(){
                                $("#activ_deactive").modal("hide");
                                $("#form-add-admin").trigger('reset');
                                $('#adminPlasa').DataTable().ajax.reload();
                                $('#table_user_plasa').DataTable().ajax.reload();
                            // },1000);    
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
                        $.ajax({
                            url: '<?php echo @ site_url('backend/admin-plasa/manage'); ?>',
                            type: 'POST',
                            dataType: 'html',
                            data: $("#form-add-admin").serialize(),
                        })
                        .done(function(data) {
                            if (data == "1") 
                            {
                                $("#tambah-admin").modal("hide");
                                $('#adminPlasa').DataTable().ajax.reload();
                                $("#form-add-admin").trigger("reset");
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
                        new_id_admin: {
                            required: true,
                            minlength: 6,
                            remote : {
                                    type : "post",
                                    url: "<?php echo @ site_url('backend/check/username'); ?>",
                            },
                        },
                        merchant : {
                            required:true,
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
                        merchant : {
                            required : "Pilih ID Merchant"
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
                        $.ajax({
                            url: "<?php echo @ site_url('backend/admin-plasa/manage'); ?>",
                            type: 'POST',
                            dataType: 'html',
                            data: $("#form-edit-admin").serialize(),
                        })
                        .done(function(data) {
                            if (data == 1) 
                            {
                                $("#admin-form-edit").modal("hide");
                                $('#adminPlasa').DataTable().ajax.reload();
                                $("#form-edit-admin").trigger('reset');
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
            $("#admin_edit_lvl_admin").change(function(){
                if($(this).val()=="-1"){
                    $("#add-cabang-edit").css({"display":"none"});
                    $("select#cabang").val(1);
                }
                else if($(this).val()=="1"){
                    $("#add-cabang-edit").css({"display":"block"});
                    $('#admin_edit_cabang > option').filter(function() { 
                        return ($(this).text() == 'Pilih Cabang'); //To select Blue
                    }).prop('selected', true);
                }
            });
                
            $("#lvl_admin").change(function(){
                if($(this).val()=="-1"){
                    $("#add-cabang").css({"display":"none"});
                    $("select#cabang").val(1);
                }
                else if($(this).val()=="1"){
                    $("#add-cabang").css({"display":"block"});
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
                            orderable: false,
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
                $("#f_operator").change(function(){
                    if ($(this).val()==2) 
                    {
                        $("#f_t_display").css({"display":"none"});
                        $('#f_terminal > option').filter(function() { 
                            return ($(this).text() == 'Pilih Terminal'); //To select Blue
                        }).prop('selected', true); 
                    }
                    else
                    {
                        $("#f_t_display").css({"display":"block"});
                    }
                        
                });
                // event outlet
                $("#f_outlet_id").change(function(){
                    $.ajax({
                        url: "<?php echo @ site_url('backend/check/terminal_outlet')?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {f_outlet_id: $(this).val()},
                    })
                    .done(function(data) {
                        console.log("success");
                        $("#f_terminal").html(data.data);
                        $("#f_terminal").fadeIn("slow");
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
                    
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
                        f_terminal:{
                            required:{
                               depends: function(element){
                                   var status = true;
                                   if( $("#f_operator").val() == 2){
                                       var status = false;
                                   }
                                   return status;
                               }
                           },
                           remote : {
                                type : "post",
                                url: "<?php echo @ site_url('backend/check/terminal-used'); ?>",
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
                        f_terminal:{
                            remote:"Terminal Telah di pakai",
                            required : "Pilih Terminal",
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
            $("#terminal_cabang,#edit_terminal_cabang").change(function(){
                $.ajax({
                        type:       "POST",
                        data:       "terminal_outlet=" + $(this).val(),
                        url:        "<?=@ site_url('backend/terminal/list-outlet');?>",
                        success: function(msg)
                        {
                            $("#terminal_outlet").html(msg);
                            $("#edit_terminal_outlet").html(msg);
                            $("#terminal_outlet").fadeIn("slow");
                            $("#edit_terminal_outlet").fadeIn("slow");
                        }
                });
            });
            $("#tambah_terminal").on("click",function(){
                $("#modal_add_terminal").modal({backdrop: 'static', keyboard: false});
            });
            $('#table_terminal_plasa tfoot th').each( function () {
                    var title = $(this).text();
                    // alert(title);
                    if(title == "STATUS")
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
                        // {'data':'6',visible:false},
                        {'data':'6',visible:false},
                        {
                            orderable: false,
                            render: function ( data, type, full, meta ) {
                                 active = (data==1)?"<i class='fa fa-toggle-down pointer' title='Deaktivasi Terminal' id='terminal_active'></i>":"<i class='fa fa-toggle-up pointer' title='Aktifasi Terminal' id='terminal_inactive'></i>";
                                 // <i class='md md-cached pointer' title='Reset Mesin ID User' id='reset-mesin-terminal'></i>&nbsp;
                                buttonId = "<i class='md md-account-circle pointer' title='View Daftar User' id='view-user-terminal'></i>&nbsp;<i class='md md-description pointer' title='View Detail Terminal' id='terminal-detail'></i>&nbsp;<br><i class='md md-mode-edit pointer' title='Edit User' id='edit-terminal-plasa'></i>&nbsp;"+active;
                                return buttonId;
                             }
                        },
                        // {'data':'7'},

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

                
                // event reset terminal
                /*$('#table_terminal_plasa tbody').on( 'click', '#reset-password', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#form-reset-password").modal({backdrop: 'static', keyboard: false});
                    $("#id_admin").val(data[0]);
                });*/

                // event daftar user
                $('#table_terminal_plasa tbody').on( 'click', '#view-user-terminal', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $.ajax({
                        url: "<?php echo @ site_url('backend/terminal-plasa/view-user-terminal')?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {param: data[0]},
                    })
                    .done(function(data) {
                        $("#modal_global").modal({backdrop: 'static', keyboard: false});
                        $("#append-modal").html(data.data);
                        console.log("success"+data);
                    })
                    .fail(function(data) {
                        alert('error');
                    });                    
                    var data = table.row( $(this).parents('tr') ).data();
                });

                // event detail terminal
                $('#table_terminal_plasa tbody').on( 'click', '#terminal-detail', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $.ajax({
                        url: "<?php echo @ site_url('backend/terminal-plasa/view-terminal')?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {param: data[0]},
                    })
                    .done(function(data) {
                        $("#modal_global").modal({backdrop: 'static', keyboard: false});
                        $("#append-modal").html(data.data);
                        console.log("success"+data);
                    })
                    .fail(function(data) {
                        alert('error');
                    });                    
                    var data = table.row( $(this).parents('tr') ).data();
                });


                // event edit terminal plasa
                $('#table_terminal_plasa tbody').on( 'click', '#edit-terminal-plasa', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $.ajax({
                        url: "<?php echo @ site_url('backend/terminal-plasa/edit')?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {get_data: data[0]},
                    })
                    .done(function(data) {
                        // console.log(data.TR_ID);
                        lengthMinBal = data.TR_MIN_BALANCE.length;
                        lengthMaxBal = data.TR_MAX_BALANCE.length;
                        $("select#edit_terminal_cabang").val(data.OU_ID);
                        $("#edit_terminal_suffix").val(data.TR_CODE.substring(3,8));
                        $("#edit_terminal_minimum_balance").val(data.TR_MIN_BALANCE.substring(0,(lengthMinBal-3)));
                        $("#edit_terminal_maximum_balance").val(data.TR_MAX_BALANCE.substring(0,(lengthMaxBal-3)));
                        $("select#edit_terminal_status").val(data.TR_STATUS);                   
                    })
                    .fail(function() {
                        alert("error");
                    });
                    
                    $("#modal_edit_terminal").modal({backdrop: 'static', keyboard: false});
                   
                });

                // event deaktivasi admin plasa
                $('#table_terminal_plasa tbody').on( 'click', '#terminal_active', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $("#activ_deactive_flag").val("0");
                    $("#activ_deactive_terminal").val(data[0]);
                    $("#terminal_reset_status").modal({backdrop: 'static', keyboard: false});
                    $(".t-active").text("Non Aktifkan Terminal");
                    // alert("Edit admin id "+ data[6]);
                });

                // event aktivasi admin plasa
                $('#table_terminal_plasa tbody').on( 'click', '#terminal_inactive', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    // alert("Edit admin id "+ data[6]);
                    $(".t-active").text("Aktifkan Terminal");
                    $("#activ_deactive_flag").val("1");
                    $("#activ_deactive_terminal").val(data[0]);
                    $("#terminal_reset_status").modal({backdrop: 'static', keyboard: false});
                });


                // form validasi add terminal
                $( "#form-add-terminal" ).validate( {
                    submitHandler: function(form){
                        $.ajax({
                            url: "<?php echo @ site_url('backend/terminal-plasa/manage')?>",
                            type: 'POST',
                            dataType: 'html',
                            data: $("#form-add-terminal").serialize(),
                        })
                        .done(function(data) {
                            if (data==1) {
                                $("#modal_add_terminal").modal("hide");
                                $('#table_terminal_plasa').DataTable().ajax.reload();
                                $("#form-add-terminal").trigger("reset");
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
                        terminal_suffix: {
                            required: true,
                            minlength: 5,
                            maxlength:5,
                            integersonly:true,
                            remote : {
                                    type : "post",
                                    url: "<?php echo @ site_url('backend/check/terminal'); ?>",
                            },
                        },
                        terminal_cabang:{
                            required:true,
                        },
                        terminal_outlet:{
                            required:true,
                        },                       
                        terminal_minimum_balance:{
                            required:true,
                            integersonly:true,
                        },
                        terminal_maximum_balance:{
                            required:true,
                            integersonly:true,
                        },
                        terminal_status:{
                            required:true,
                        }                        
                    },
                    messages: {
                        terminal_suffix: {
                            required: "Isikan TERMINAL ID",
                            minlength: "Nilai TERMINAL ID Boleh Berupa :<br>Numerik. <br>Minimal dan maksimal 5 karakter ",
                            remote:"TERMINAL ID sudah terpakai",
                            integersonly:"Hanya Numerik",
                        },
                        terminal_cabang:{
                            required:"Pilih Cabang",
                        },
                        terminal_outlet:{
                            required:"Pilih Outlet",
                        },
                        terminal_minimum_balance:{
                            required:"Minimum Balance Tidak Boleh Kosong",
                        },
                        terminal_maximum_balance:{
                            required:"Maximum Balance Tidak Boleh Kosong",
                        },
                        terminal_status:{
                            required:"Pilih Status",
                        }
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
    
                // form validasi edit terminal
                $( "#form-edit-terminal" ).validate( {
                    submitHandler: function(form){
                        $.ajax({
                            url: "<?php echo @ site_url('backend/terminal-plasa/manage')?>",
                            type: 'POST',
                            dataType: 'html',
                            data: $("#form-edit-terminal").serialize(),
                        })
                        .done(function(data) {
                            if (data==1) {
                                $("#modal_edit_terminal").modal("hide");
                                $('#table_terminal_plasa').DataTable().ajax.reload();
                                $("#form-edit-terminal").trigger("reset");
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
                        edit_terminal_suffix: {
                            required: true,
                            minlength: 5,
                            maxlength:5,
                            integersonly:true,
                        },
                        edit_terminal_cabang:{
                            required:true,
                        },
                        edit_terminal_outlet:{
                            required:true,
                        },                       
                        edit_terminal_minimum_balance:{
                            required:true,
                            integersonly:true,
                        },
                        edit_terminal_maximum_balance:{
                            required:true,
                            integersonly:true,
                        },
                        edit_terminal_status:{
                            required:true,
                        }
                        
                    },
                    messages: {
                        edit_terminal_suffix: {
                            required: "Isikan TERMINAL ID",
                            minlength: "Nilai TERMINAL ID Boleh Berupa :<br>Numerik. <br>Minimal dan maksimal 5 karakter ",
                            integersonly:"Hanya Numerik",
                        },
                        edit_terminal_cabang:{
                            required:"Pilih Cabang",
                        },
                        edit_terminal_outlet:{
                            required:"Pilih Outlet",
                        },
                        edit_terminal_minimum_balance:{
                            required:"Minimum Balance Tidak Boleh Kosong",
                        },
                        edit_terminal_maximum_balance:{
                            required:"Maximum Balance Tidak Boleh Kosong",
                        },
                        edit_terminal_status:{
                            required:"Pilih Status",
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

                $( document ).ready( function () {
                $( "#activat_or_deactive_terminal" ).validate( {
                    submitHandler: function(form){
                        $.ajax({
                            url: '<?php echo @ site_url('backend/terminal-plasa/manage'); ?>',
                            type: 'POST',
                            dataType: 'html',
                            data: $("#activat_or_deactive_terminal").serialize(),
                        })
                        .done(function(data) {
                            if(data == "1")
                            {
                                $("#terminal_reset_status").modal("hide");
                                $("#activat_or_deactive_terminal").trigger("reset");
                                $('#table_terminal_plasa').DataTable().ajax.reload();
                            }
                        })
                        .fail(function() {
                            alert("error");
                        });
                    },
                    rules: {
                            activ_deactive_flag:{
                                required :true,
                            },
                            activ_deactive_terminal:{
                                required :true,
                            }                    
                    },
                    messages: {
                        activ_deactive_flag: {
                            required: "Status Tidak Ada",
                        },
                        activ_deactive_terminal: {
                            required: "Terminal Tidak Ada",
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
        </script>


        <!-- script outlet -->
        <script type="text/javascript">
        $("#provinsi").change(function(){
            // alert('vangke');
                $.ajax({
                    type:       "POST",
                    data:       "province=" + $(this).val(),
                    url:        "<?=@ site_url('backend/user-plasa/list-kota');?>",
                    success: function(msg)
                    { 
                        $("#kota").html(msg);
                        $("#kota").fadeIn("slow");
                    }
                });
            });
            $(document).ready(function() {
                // ubah tfooter jadi filter
                $('#list_outlet tfoot th').each( function () {
                    var title = $(this).text();

                    if(title == "Action")
                        $(this).html('');
                    else
                        $(this).html( '<input type="text" placeholder="Cari '+title+'" />' );
                } );
                //  inisialisasi table outlet
                var table = $('#list_outlet').DataTable( {
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
                    
                    "ajax": "<?php echo @ site_url('backend/admin-plasa/outlet/manage'); ?>",
                    "columns" : [
                        {'data':'0',visible:false},
                        {'data':'1'},
                        {'data':'2'},
                        {'data':'3'},
                        {'data':'4'},
                        {'data':'5'},
                        {
                            orderable: false,
                            render: function ( data, type, full, meta ) {
                                buttonId = "<i class='md md-laptop-windows pointer' title='View Terminal' id='view-terminal-outlet'></i>&nbsp;<i class='md md-description pointer' title='View Detail Outlet' id='detail-outlet'></i>&nbsp;<i class='md md-folder pointer' title='View User Outlet' id='view-user-outlet'></i>&nbsp;<i class='md md-mode-edit pointer' title='Edit Outlet' id='btn-edit'></i>&nbsp;";
                                 
                                return buttonId;
                             }
                        },
                    ],
                });

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
                // event view detail outlet
                $('#list_outlet tbody').on( 'click', '#detail-outlet', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $.ajax({
                        url: "<?php echo @ site_url('backend/outlet-plasa/view-outlet')?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {param: data[0]},
                    })
                    .done(function(data) {
                        $("#modal_global").modal({backdrop: 'static', keyboard: false});
                        $("#append-modal").html(data.data);
                        console.log(data);
                        console.log("success"+data);
                    })
                    .fail(function(data) {
                        alert('error');
                    });                    
                    var data = table.row( $(this).parents('tr') ).data();
                });
                
                // event view terminal outlet
                $('#list_outlet tbody').on( 'click', '#view-terminal-outlet', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $.ajax({
                        url: "<?php echo @ site_url('backend/outlet-plasa/view-terminal-outlet')?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {param: data[0]},
                    })
                    .done(function(data) {
                        $("#modal_global").modal({backdrop: 'static', keyboard: false});
                        $("#append-modal").html(data.data);
                    })
                    .fail(function(data) {
                        alert('error');
                    });                    
                    var data = table.row( $(this).parents('tr') ).data();
                });

                // event view user outlet
                $('#list_outlet tbody').on( 'click', '#view-user-outlet', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $.ajax({
                        url: "<?php echo @ site_url('backend/outlet-plasa/view-user-outlet')?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {param: data[0]},
                    })
                    .done(function(data) {
                        $("#modal_global").modal({backdrop: 'static', keyboard: false});
                        $("#append-modal").html(data.data);
                        console.log(data);
                        console.log("success"+data);
                    })
                    .fail(function(data) {
                        alert('error');
                    });                    
                    var data = table.row( $(this).parents('tr') ).data();
                });

                // event outlet
                $('#list_outlet tbody').on( 'click', '#btn-edit', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    
                    $.ajax({
                        type:       "POST",
                        datatype:   "json",
                        data:       {get_data:data[0]},
                        url:        "<?=@ site_url('backend/user-plasa/getDataOutlet');?>",
                    })
                    .done(function(data){
                        // alert(data);
                        var data = eval("(function(){return " + data + ";})()");
                        
                        $("#ou_id").val(data.OU_ID);
                        $("select#cabang3").val(data.DV_ID);
                        $("#nama_lengkap3").val(data.OU_NAME);
                        $("#email3").val(data.OU_EMAIL);
                        $("#no_identitas3").val(data.OU_IDENTITYCODE);
                        $("#alamat3").val(data.OU_ADDRESS);
                        $("#telp3").val(data.OU_PHONE_NUMBER);
                        $("select#provinsi3").val(data.ID_PROVINSI);
                        $("select#kota3").val(data.ID_KABUPATEN);
                        $("select#bank3").val(data.OU_BANKCODE);
                        $("#no_rekening3").val(data.OU_BANKACCOUNT);
                        $("#pemilik_rekening3").val(data.OU_BANKHOLDER);
                        $("#koordinat_gl3").val(data.OU_LATITUDE);
                        $("#koordinat_gb3").val(data.OU_LONGITUDE);
                    })
                    .fail(function(){
                        alert("Error");
                    }); 
                    
                    $("#frame-popup-edit").modal({backdrop: 'static', keyboard: false});
                        
                        // alert("Edit admin id "+ data[0]);
                });
            });
            
            // popup form tambah outlet
            $("#show-popup").on("click",function(){
                $("#frame-popup-add").modal({backdrop: 'static', keyboard: false});
            });
            
            // validasi form tambah outlet
            $( document ).ready( function () {
                
                $( "#form-add-outlet" ).validate( {
                    submitHandler: function(form){
                        $.post("<?php echo @ site_url('backend/outlet-plasa/outlet'); ?>?"+$("#form-add-outlet").serialize(),function(){

                        })
                        .fail(function() {
                            alert( "error" );
                        })
                        .done(function(data) {                            
                            $("#frame-popup-add").modal("hide");
                            $('#list_outlet').DataTable().ajax.reload();
                        });
                    },
                    rules: {
                        cabang: { required: true, },
                        nama_lengkap :{ required : true, minlength: 6, lettersonly: true },
                        email:{  required:true, email:true, },
                        no_identitas:{ required:true, },
                        alamat:{ required:true, minlength: 10,},
                        telp:{ required:true, digits:true, minlength: 6, },
                        provinsi:{ required:true, },
                        kota:{ required:true, },
                        bank:{  required:true, },
                        no_rekening:{ required:true, },
                        pemilik_rekening:{ required:true, },
                        koordinat_gl:{ required:false, },
                        koordinat_gb:{ required:false, }, 
                    },
                    messages: {
                        cabang: { required: "Pilih Cabang", },
                        nama_lengkap: {
                            required: "Isikan Nama Lengkap",
                            minlength: "Nilai Nama Lengkap Boleh Berupa :<br>Alfabet [A-Z]. <br>Panjang 6 - 20 karakter"
                        },
                        email:{ required:"Email harus diisi", email:"Penulisan Email salah", },
                        no_identitas:{ required:"Nomor Identitas harus diisi", },
                        alamat:{ required:"Alamat harus diisi", minlength:"Minimal 10 characters",},
                        telp:{ required:"No telpon harus diisi", digits:"Hanya Numerik", minlength:"Minimal 6 characters",},
                        provinsi:{ required:"Pilih provinsi", },
                        kota:{ required:"Pilih kota", },
                        bank:{ required:"Pilih bank", },
                        no_rekening:{ required:"Nomor rekening harus diisi", },
                        pemilik_rekening:{ required:"Nama pemilik rekening harus diisi", },
                        koordinat_gl:{ required:"Koordinat garis lintang harus diisi", },
                        koordinat_gb:{ required:"Koordinat garis bujur harus diisi", },
                        
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
            
            // validasi form edit outlet
            $( document ).ready( function () {
                
                $( "#form-edit-outlet" ).validate( {
                    submitHandler: function(form){
                        $.post("<?php echo @ site_url('backend/outlet-plasa/update-outlet'); ?>?"+$("#form-edit-outlet").serialize(),function(){
                            
                        })
                        .fail(function() {
                            alert( "error" );
                        })
                        .done(function(data) {                            
                            $("#frame-popup-edit").modal("hide");
                            $('#list_outlet').DataTable().ajax.reload();
                        });
                    },
                    rules: {
                        cabang: { required: true, },
                        nama_lengkap :{ required : true, minlength: 6, lettersonly: true },
                        email:{  required:true, email:true, },
                        no_identitas:{ required:true, },
                        alamat:{ required:true, minlength: 10,},
                        telp:{ required:true, digits:true, minlength: 6, },
                        provinsi:{ required:true, },
                        kota:{ required:true, },
                        bank:{  required:true, },
                        no_rekening:{ required:true, },
                        pemilik_rekening:{ required:true, },
                        koordinat_gl:{ required:false, },
                        koordinat_gb:{ required:false, }, 
                    },
                    messages: {
                        cabang: { required: "Pilih Cabang", },
                        nama_lengkap: {
                            required: "Isikan Nama Lengkap",
                            minlength: "Nilai Nama Lengkap Boleh Berupa :<br>Alfabet [A-Z]. <br>Panjang 6 - 20 karakter"
                        },
                        email:{ required:"Email harus diisi", email:"Penulisan Email salah", },
                        no_identitas:{ required:"Nomor Identitas harus diisi", },
                        alamat:{ required:"Alamat harus diisi", },
                        telp:{ required:"No telpon harus diisi", digits:"Hanya Numerik"},
                        provinsi:{ required:"Pilih provinsi", },
                        kota:{ required:"Pilih kota", },
                        bank:{ required:"Pilih bank", },
                        no_rekening:{ required:"Nomor rekening harus diisi", },
                        pemilik_rekening:{ required:"Nama pemilik rekening harus diisi", },
                        koordinat_gl:{ required:"Koordinat garis lintang harus diisi", },
                        koordinat_gb:{ required:"Koordinat garis bujur harus diisi", },
                        
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

        <!-- method custom validation -->
        <script type="text/javascript">
            jQuery.validator.addMethod("lettersonly", function(value, element) {
              return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);
            }, "Hanya Alfabet [A-Z]"); 
            jQuery.validator.addMethod("letIntOnly", function(value, element) {
              return this.optional(element) || /^[a-zA-Z0-9\s]+$/i.test(value);
            }, "Hanya Alfabet Dan Numerik"); 
            jQuery.validator.addMethod("integersonly", function(value, element) {
              return this.optional(element) || /^[0-9\s]+$/i.test(value);
            }, "Hanya Numerik [0-9]");
        </script>

        <script type="text/javascript">
        $("#form-sejarah-transaksi").validate({
        
            /*submitHandler: function(form){
                $.ajax({
                    url: "<?php echo @ site_url('backend/laporan/manage')?>",
                    type: 'POST',
                    dataType: 'html',
                    data: $("#form-sejarah-transaksi").serialize(),
                })
                .done(function(data) {
                    console.log(data);
                    var table = $('#report').DataTable( {
                                "ajax": data,
                                "columns": [
                                    { "data": "sys_log" },
                                    { "data": "transaction_type" },
                                    { "data": "id_terminal" },
                                    { "data": "t_nominal" },
                                    { "data": "transaction_time" },
                                    { "data": "status" },
                                    { "data": "rc" },
                                    { "data": "aksi" },
                                ]
                    });            
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
            },*/
            rules: {
                start_date : {
                    required : true,
                },
                end_date : {
                    required : true,
                }
            },
            messages : {
                start_date :{
                    required : "Tanggal tidak boleh kosong",
                },
                end_date :{
                    required : "Tanggal tidak boleh kosong",
                }
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
        });

        function viewDetailReport(id)
        {
            alert(id);
            $.ajax({
                url: "<?php echo @ site_url('backend/laporan/view')?>",
                type: 'POST',
                dataType: 'json',
                data: {param: id},
            })
            .done(function(data) {
                $("#modal_global").modal({backdrop: 'static', keyboard: false});
                $("#append-modal").html(data.data);
            })
            .fail(function() {
                console.log("error");
            });
            
            
        }
        $('#report').DataTable({
            "language": {
                        "lengthMenu": "Tampil _MENU_ data per-halaman",
                        "zeroRecords": "Data tidak dapat di temukan",
                        "info": "Tampilkan halaman _PAGE_ dari _PAGES_",
                        "infoEmpty": "data tidak tersedia",
                        "infoFiltered": "(filtered from _MAX_ total records)"
                    },
            "sDom":"l",
            /*"columns" : [
                        {'data':'0'},
                        {'data':'1'},
                        {'data':'2'},
                        {'data':'3'},
                        {'data':'4'},
                        {'data':'5'},
                        {
                            'data':'5',
                            orderable: false,
                            
                        },
                    ],*/
            
        });
            /*var table = $('#report').DataTable( {
                        "ajax": "data.txt",
                        "columns": [
                            { "data": "name" },
                            { "data": "position" },
                            { "data": "office" },
                            { "data": "extn" },
                            { "data": "start_date" },
                            { "data": "salary" },
                            { "data": "salary" },
                            { "data": "salary" },
                        ]
            });*/
        </script>


