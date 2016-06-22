<?php
    $divre = ucwords(strtolower($this->session->tempdata('flag_regional')));
    if ($divre == "-1") 
    {
        $query = $this->db->get('f_outlet');
        
        $option_outlet = "<option value=''>Pilih ID Outlet</option>";                
        foreach ($query->result() as $row)
        {
            $option_outlet .= "<option value='{$row->OU_ID}'>{$row->OU_NAME}</option>";
        }

    }
    else
    {
        $this->db->select("TR_ID,TR_CODE");
        $this->db->from("f_terminal");
        $this->db->where_in('OU_ID', array(1));
        $query = $this->db->get();
        // print_r($query->result());
        $option_outlet = "<option value=''>Pilih ID Outlet</option>";                
        foreach ($query->result() as $row)
        {
            $option_outlet .= "<option value='{$row->TR_ID}'>{$row->TR_CODE}</option>";
        }
    }
    

    $query = $this->db->get('f_provinsi');
    
    $option_provinsi = "<option value=''>Pilih Provinsi</option>";                
    foreach ($query->result() as $row)
    {
        $option_provinsi .= "<option value='{$row->ID_PROVINSI}'>{$row->NAMA_PROVINSI}</option>";
    }
    
?>
<div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">                        
                        <ul class="breadcrumb">
                            <li><a href="#">Atur Outlet</a></li>
                            <li><a href="#">User PLASA TELKOM</a></li>
                            <li class="active">Manage User</li>
                        </ul>
                    </div>
                </div>
                <style type="text/css">
                    tfoot {
                        display: table-header-group;
                    }
                    tfoot input {
                        width: 100%;
                        padding: 3px;
                        box-sizing: border-box;
                    }
                    #table_user_plasa tfoot th:last-child{
                        display: none;
                    }
                    #table_user_plasa thead th:last-child{
                        width:20px !important;
                    }
                </style>
                <div class="panel"> 
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <button id="tambah_user" class="btn btn-primary waves-effect waves-light">Tambah User <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>

                        <table id="table_user_plasa" class="display table table-bordered table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>USER ID</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>ID TERMINAL</th>
                                    <th>TANGGAL AKTIF</th>
                                    <th>STATUS USER</th>
                                    <th>LOGIN/BELUM LOGIN</th>
                                    <th>DV ID</th>
                                    <th>Action</th>
                                </tr>
                                
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>USER ID</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>ID TERMINAL</th>
                                    <th>TANGGAL AKTIF</th>
                                    <th>STATUS USER</th>
                                    <th>LOGIN/BELUM LOGIN</th>
                                    <th>DV ID</th>
                                    <th>Action</th>
                                </tr>
                               
                            </tfoot>
                        </table>
                    </div>
                    <!-- end: page -->

                </div> <!-- end Panel -->




                <!-- Footer -->
                <?php $this->load->view($params['base_comp'] . 'v-backend-footer'); ?>

                <!-- End Footer -->
            </div>
            <!-- end container -->

            


            <!-- form tambah user -->
            <div id="modal_add_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                <div class="modal-dialog">
                    <form id="form-add-user">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Tambah User</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_outlet_id" class="control-label">Pilih ID Outlet</label>
                                            <select class="form-control" name="f_outlet_id" id="f_outlet_id">
                                                <?= $option_outlet?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_operator" class="control-label">Level Operator</label>
                                            <select class="form-control" name="f_operator" id="f_operator">
                                                <option value="">Pilih Level Operator</option>
                                                <option value="2">SPV</option>
                                                <option value="3">FRONT LINER</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="f_t_display">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_terminal" class="control-label">Pilih Terminal</label>
                                            <select class="form-control" name="f_terminal" id="f_terminal">
                                                <option value="">Pilih Terminal</option> 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_nama_lengkap" class="control-label">Nama Lengkap</label>
                                            <input id="f_nama_lengkap" name="f_nama_lengkap" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_user_id" class="control-label">User ID</label>
                                            <input id="new_id_admin" name="new_id_admin" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_operator" class="control-label">Alamat Lengkap</label>
                                            <textarea  class="form-control" rows="3" name="f_alamat_lengkap" id="f_alamat_lengkap">
                                                
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_password" class="control-label">Password</label>
                                            <input id="f_password" name="f_password" class="form-control" type="password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_confirm_password" class="control-label">Ulangi Password</label>
                                            <input id="f_confirm_password" name="f_confirm_password" class="form-control" type="password" />
                                            <input id="flag_action_add" name="flag_action_add" id="flag_action_add" value="1" style="display:none" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_email" class="control-label">Alamat Email</label>
                                            <input id="f_email" name="f_email" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>     
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="new_id_admin" class="control-label">Pilih Provinsi</label>
                                            <select class="form-control" name="f_provinsi_id" id="f_provinsi_id">
                                                <?= $option_provinsi?>
                                            </select>
                                        </div>
                                    </div>
                                </div>                       
                                
                                <div class="row" id="add-cabang">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cabang" class="control-label">Pilih Kota</label>
                                            <select id="f_kota" name="f_kota" class="form-control">
                                            <option value="">Pilih Kota</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status_admin" class="control-label">Status Admin</label>
                                            <select class="form-control" name="status_admin" id="status_admin">
                                                <option value="">Pilih Status Admin</option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_telphone" class="control-label">Nomor Telefon</label>
                                            <input id="f_telphone" name="f_telphone" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>                                                                 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_identitas" class="control-label">Nomor Identitas</label>
                                            <input id="f_identitas" name="f_identitas" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- form edit user -->
            <div id="modal_edit_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                <div class="modal-dialog">
                    <form id="form-edit-user">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Edit User</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_outlet_id" class="control-label">Pilih ID Outlet</label>
                                            <select class="form-control" name="f_e_outlet_id" id="f_e_outlet_id">
                                                <?= $option_outlet?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_nama_lengkap" class="control-label">Nama Lengkap</label>
                                            <input id="f_e_nama_lengkap" name="f_e_nama_lengkap" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_user_id" class="control-label">User ID</label>
                                            <input id="f_e_new_id_admin" name="f_e_new_id_admin" class="form-control" type="text" readonly="readonly"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_operator" class="control-label">Level Operator</label>
                                            <select class="form-control" name="f_e_operator" id="f_e_operator">
                                                <option value="">Pilih Level Operator</option>
                                                <option value="2">SPV</option>
                                                <option value="3">FRONT LINER</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_operator" class="control-label">Alamat Lengkap</label>
                                            <textarea  class="form-control" rows="3" name="f_e_alamat_lengkap" id="f_e_alamat_lengkap">
                                                
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_password" class="control-label">Password</label>
                                            <input id="f_e_password" name="f_e_password" class="form-control" type="password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_confirm_password" class="control-label">Ulangi Password</label>
                                            <input id="f_e_confirm_password" name="f_e_confirm_password" class="form-control" type="password" />
                                            <input id="flag_action_add" name="flag_action_edit" id="flag_action_edit" value="1" style="display:none" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_email" class="control-label">Alamat Email</label>
                                            <input id="f_e_email" name="f_e_email" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>     
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="new_id_admin" class="control-label">Pilih Provinsi</label>
                                            <select class="form-control" name="f_e_provinsi_id" id="f_e_provinsi_id">
                                                <?= $option_provinsi?>
                                            </select>
                                        </div>
                                    </div>
                                </div>                       
                                
                                <div class="row" id="add-cabang">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cabang" class="control-label">Pilih Kota</label>
                                            <select id="f_e_kota" name="f_e_kota" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status_admin" class="control-label">Status Admin</label>
                                            <select class="form-control" name="f_e_status_admin" id="f_e_status_admin">
                                                <option value="">Pilih Status Admin</option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_telphone" class="control-label">Nomor Telefon</label>
                                            <input id="f_e_telphone" name="f_e_telphone" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>                                                                 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_identitas" class="control-label">Nomor Identitas</label>
                                            <input id="f_e_identitas" name="f_e_identitas" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- form edit -->
            <div id="form-reset-password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                <!-- <form data-toggle="validator" role="form"> -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Reset Password</h4>
                            </div>
                            <div class="modal-body">
                                <form id="form-reset-pass" class="ui grid form" style="padding: 10px">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="id_admin" class="control-label">ID ADMIN</label>
                                                <!-- <input type="text" class="form-control" id="field-2" placeholder="Doe"> -->
                                                <input id="id_admin" name="id_admin" class="form-control" type="text" readonly="readonly" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="reset_password" class="control-label">Password</label>
                                                <!-- <input type="text" class="form-control" id="field-2" placeholder="Doe"> -->
                                                <input id="reset_password" name="reset_password" class="form-control" type="password"  />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="confirm_reset_password" class="control-label">Ulangi Password</label>
                                                <!-- <input type="text" class="form-control" id="field-2" placeholder="Doe"> -->
                                                <input id="confirm_reset_password" name="confirm_reset_password" class="form-control" type="password" />
                                                <input id="flag_action_reset" name="flag_action_reset" value="1" style="display:none" />
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                            </div>
                        </form>   
                        </div>
                    </div>
                <!-- </form> -->
            </div><!-- /.modal -->

             <!-- form active or deactive admin -->
            <div id="activ_deactive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                <div class="modal-dialog">
                    <form id="activat_or_deactive">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title t-active"></h4>
                            </div>
                            <div class="modal-body">
                                <h4 class="modal-body">Tekan tombol Ya Untuk melanjutkan</h4>
                                <input type="text" class="hide" name="activ_deactive_flag" id="activ_deactive_flag"/>
                                <input type="text" class="hide" name="activ_deactive_username" id="activ_deactive_username"/>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">TIDAK</button>
                                <button type="submit" class="btn btn-info waves-effect waves-light">YA</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- form tambah admin -->
            <div id="modal_reset_mesin_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                <div class="modal-dialog">
                    <form id="activat_or_deactive">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title t-active"></h4>
                            </div>
                            <div class="modal-body">
                                <h4 class="modal-body">Tekan tombol Ya Untuk melanjutkan</h4>
                                <input type="text" name="activ_deactive_flag" id="activ_deactive_flag"/>
                                <input type="text" name="activ_deactive_username" id="activ_deactive_username"/>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">TIDAK</button>
                                <button type="submit" class="btn btn-info waves-effect waves-light">YA</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>