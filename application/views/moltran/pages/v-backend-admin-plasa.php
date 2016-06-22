<?php
$divre          = ucwords(strtolower($this->session->tempdata('flag_regional')));
$id_merchant    = ucwords(strtolower($this->session->tempdata('user_pa_id')));

if ($divre!="-1") 
    $query = $this->db->get_where('f_regional',array('DV_ID'=>$divre), 0, 7);
else
    $query = $this->db->get('f_regional', 0, 7);

$option = "<option value=''>Pilih Cabang</option>";                

foreach ($query->result() as $row)
{
    $option .= "<option value='{$row->DV_ID}'>{$row->DV_DESCRIPTION}</option>";
}

$pa_id = ucwords(strtolower($this->session->tempdata('user_pa_id')));
if ($divre!="-1") {
    $query = $this->db->get_where('f_partner',array('PA_ID'=>$id_merchant), 0, 7);
}
else
    $query = $this->db->get('f_partner');

$merchant = "<option value=''>Pilih ID Merchant</option>";                

foreach ($query->result() as $row)
{
    $merchant .= "<option value='{$row->PA_ID}'>{$row->PA_NAME}</option>";
}
?>
<style type="text/css">
tfoot {
    display: table-header-group;
}
tfoot input {
    width: 100%;
    padding: 3px;
    box-sizing: border-box;
}
#adminPlasa tfoot th:last-child{
    display: none;
}
#adminPlasa thead th:last-child{
    width:20px !important;
}
</style>
<div class="container">
                <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">                        
            <ul class="breadcrumb">
                <li><a href="#">Atur Admin</a></li>
                <li><a href="#">Admin PLASA TELKOM</a></li>
                <li class="active">Manage Admin</li>
            </ul>
        </div>
    </div>
                
    <div class="panel"> 
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="m-b-30">
                        <button id="tambahAdmin" class="btn btn-primary waves-effect waves-light">Tambah Admin <i class="fa fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <table id="adminPlasa" class="display table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID ADMIN</th>
                        <th>ID MERCHANT</th>
                        <th>NAMA LENGKAP</th>
                        <th>STATUS</th>
                        <th>TANGGAL CREATE</th>
                        <th>DI-CREATE</th>
                        <th>DV ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID ADMIN</th>
                        <th>ID MERCHANT</th>
                        <th>NAMA LENGKAP</th>
                        <th>STATUS</th>
                        <th>TANGGAL CREATE</th>
                        <th>DI-CREATE</th>
                        <th>DV ID</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- end: page -->
    </div> <!-- end Panel -->
</div>
<!-- end container -->


<!-- form tambah admin -->
<div id="tambah-admin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <form id="form-add-admin">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cabang" class="control-label">ID Merchant</label>
                                <select id="merchant" name="merchant" class="form-control">
                                    <?=$merchant;?>
                                </select>
                            </div>
                        </div>                        
                    </div>
                    <div class="row"  id="add-cabang">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cabang" class="control-label">Cabang</label>
                                <select id="cabang" name="cabang" class="form-control">
                                    <?=$option;?>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="new_id_admin" class="control-label">ID Admin</label>
                                <input id="new_id_admin" name="new_id_admin" class="form-control" type="text" />
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="lvl_admin" class="control-label">Level Admin</label>
                                <select class="form-control" name="lvl_admin" id="lvl_admin">
                                    <option value="">Pilih Level Admin</option>
                                    <option value="-1">Admin All</option>
                                    <option value="1">Admin Regional</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama_lengkap" class="control-label">Nama Lengkap</label>
                                <input id="nama_lengkap" name="nama_lengkap" class="form-control" type="text" />
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
                                <label for="password" class="control-label">Password</label>
                                <input id="password" name="password" class="form-control" type="password" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="confirm_password" class="control-label">Ulangi Password</label>
                                <input id="confirm_password" name="confirm_password" class="form-control" type="password" />
                                <input id="flag_action_add" name="flag_action_add" id="flag_action_add" value="1" style="display:none" />
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
<!-- form edit admin -->
<div id="admin-form-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <form id="form-edit-admin">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Edit Admin</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="admin_edit_id_admin" class="control-label">ID Admin</label>
                                <input id="admin_edit_id_admin" name="admin_edit_id_admin" class="form-control" type="text" readonly="readonly" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="admin_edit_nama_lengkap" class="control-label">Nama Lengkap</label>
                                <input id="admin_edit_nama_lengkap" name="admin_edit_nama_lengkap" class="form-control" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="admin_edit_lvl_admin" class="control-label">Level Admin</label>
                                <select class="form-control" name="admin_edit_lvl_admin" id="admin_edit_lvl_admin">
                                    <option value="">Pilih Level Admin</option>
                                    <option value="-1">Admin All</option>
                                    <option value="1">Admin Regional</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="add-cabang-edit">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="admin_edit_cabang" class="control-label">Cabang</label>
                                <select id="admin_edit_cabang" name="admin_edit_cabang" class="form-control">
                                    <?=$option;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cabang" class="control-label">ID Merchant</label>
                                <select id="admin_edit_merchant" name="admin_edit_merchant" class="form-control">
                                    <?=$merchant;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="admin_edit_status_admin" class="control-label">Status Admin</label>
                                <select class="form-control" name="admin_edit_status_admin" id="admin_edit_status_admin">
                                    <option value="">Pilih Status Admin</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                                <input name="admin_edit_flag" id="admin_edit_flag" class="hide" type="text" value="1"/>
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
<!-- form reset password -->
<div id="form-reset-password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Reset Password</h4>
            </div>
            <form id="form-reset-pass" class="ui grid form" style="padding: 10px">
                <div class="modal-body">                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="id_admin" class="control-label">ID ADMIN</label>
                                <input id="id_admin" name="id_admin" class="form-control" type="text" readonly="readonly" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="reset_password" class="control-label">Password</label>
                                    <input id="reset_password" name="reset_password" class="form-control" type="password"  />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="confirm_reset_password" class="control-label">Ulangi Password</label>
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
</div><!-- /.modal -->

<!-- form tambah admin -->
<div id="activ_deactive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <form id="activat_or_deactive">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title t-active"></h4>
                </div>
                <div class="modal-body">
                    <h6 class="modal-body">Tekan tombol Ya Untuk melanjutkan</h6>
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

<!-- Footer -->
<?php $this->load->view($params['base_comp'] . 'v-backend-footer'); ?>
<!-- End Footer -->