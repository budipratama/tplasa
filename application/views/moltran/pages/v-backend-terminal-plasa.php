<?php
    $divre = ucwords(strtolower($this->session->tempdata('flag_regional')));
    
    $query = $this->db->get('f_provinsi');
    
    $option_provinsi = "<option value=''>Pilih Provinsi</option>";                
    foreach ($query->result() as $row)
    {
        $option_provinsi .= "<option value='{$row->ID_PROVINSI}'>{$row->NAMA_PROVINSI}</option>";
    }

    $divre = ucwords(strtolower($this->session->tempdata('flag_regional')));
    if ($divre!="-1") {
        $query = $this->db->get_where('f_regional',array('DV_ID'=>$divre), 0, 7);
    }
    else
        $query = $this->db->get('f_regional', 0, 7);

    $option_cabang = "<option value=''>Pilih Cabang</option>";                
    foreach ($query->result() as $row)
    {
        $option_cabang .= "<option value='{$row->DV_ID}'>{$row->DV_DESCRIPTION}</option>";
    }
            
    
?>
<div class="container">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">                        
            <ul class="breadcrumb">
                <li><a href="#">Atur Outlet</a></li>
                <li><a href="#">Terminal PLASA TELKOM</a></li>
                <li class="active">Manage Terminal</li>
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
    #table_terminal_plasa tfoot th:last-child{
        display: none;
    }
    #table_terminal_plasa thead th:last-child{
        width:20px !important;
    }
</style>
                <div class="panel"> 
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <button id="tambah_terminal" class="btn btn-primary waves-effect waves-light">Tambah Terminal <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        <table id="table_terminal_plasa" class="display table table-bordered table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID TERMINAL</th>
                                    <th>NAMA OUTLET</th>
                                    <th>SALDO SEKARANG</th>
                                    <th>TANGGAL CREATE</th>
                                    <th>JUMLAH USER</th>
                                    <th>STATUS</th>
                                    <th>DV ID</th>
                                    <th>Action</th>
                                </tr>
                                
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID TERMINAL</th>
                                    <th>NAMA OUTLET</th>
                                    <th>SALDO SEKARANG</th>
                                    <th>TANGGAL CREATE</th>
                                    <th>JUMLAH USER</th>
                                    <th>STATUS</th>
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
            
            
            

            <!-- form edit terminal -->
            <div id="modal_edit_terminal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                <div class="modal-dialog">
                    <form id="form-edit-terminal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Edit Terminal</h4>
                            </div>
                            <div class="modal-body">
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="terminal_cabang" class="control-label">Pilih Cabang</label>
                                            <select class="form-control" name="edit_terminal_cabang" id="edit_terminal_cabang">
                                                <?= $option_cabang?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="outlet" class="control-label">Nama Outlet</label>
                                            <select class="form-control" name="edit_terminal_outlet" id="edit_terminal_outlet">
                                                <option value="">Pilih Outlet</option>   
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="f_user_id" class="control-label">Terminal ID</label>
                                            <input id="edit_terminal_prefix" name="edit_terminal_prefix" class="form-control" type="text" value="PLS" readonly="readonly"/>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                            <input id="edit_terminal_suffix" readonly="readonly" name="edit_terminal_suffix" class="form-control" style="margin-top: 24px;margin-left: -5px;" type="text" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_operator" class="control-label">Minimum Balance</label>
                                            <input id="edit_terminal_minimum_balance" name="edit_terminal_minimum_balance" class="form-control" type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_operator" class="control-label">Maksimum Balance</label>
                                            <input id="edit_terminal_maximum_balance" name="edit_terminal_maximum_balance" class="form-control" type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_email" class="control-label">Status Terminal</label>
                                            <select name="edit_terminal_status" id="edit_terminal_status" class="form-control">
                                                <option value="">Pilih Terminal</option>
                                                <option value="1">Terminal Aktif</option>
                                                <option value="0">Terminal Tidak Aktif</option>
                                            </select>
                                            <input id="flag_action_add" name="flag_action_edit" id="flag_action_edit" value="1" style="display:none" />

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

            <!-- form tambah terminal -->
            <div id="modal_add_terminal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                <div class="modal-dialog">
                    <form id="form-add-terminal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Tambah Terminal</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        TERMINAL yang Terakhir Anda Masukkan ke SISTEM KAMI adalah : <?=$tr_code?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="terminal_cabang" class="control-label">Pilih Cabang</label>
                                            <select class="form-control" name="terminal_cabang" id="terminal_cabang" class="terminal_cabang">
                                                <?= $option_cabang?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="outlet" class="control-label">Nama Outlet</label>
                                            <select class="form-control" name="terminal_outlet" id="terminal_outlet">
                                                <option value="">Pilih Outlet</option>   
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="f_user_id" class="control-label">Terminal ID</label>
                                            <input id="terminal_prefix" name="terminal_prefix" class="form-control" type="text" value="PLS" readonly="readonly"/>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                            <input id="terminal_suffix" name="terminal_suffix" class="form-control" style="margin-top: 24px;margin-left: -5px;" type="text" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_operator" class="control-label">Minimum Balance</label>
                                            <input id="terminal_minimum_balance" name="terminal_minimum_balance" class="form-control" type="text" value="0"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_operator" class="control-label">Maksimum Balance</label>
                                            <input id="terminal_maximum_balance" name="terminal_maximum_balance" class="form-control" type="text" value="50000000"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_email" class="control-label">Status Terminal</label>
                                            <select name="terminal_status" id="terminal_status" class="form-control">
                                                <option value="">Pilih Terminal</option>
                                                <option value="1">Terminal Aktif</option>
                                                <option value="0">Terminal Tidak Aktif</option>
                                            </select>
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

            

<!-- form active or deactive admin -->
<div id="terminal_reset_status" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <form id="activat_or_deactive_terminal">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title t-active"></h4>
                </div>
                <div class="modal-body">
                    <h4 class="modal-body">Tekan tombol Ya Untuk melanjutkan</h4>
                    <input type="text" class="hide" name="activ_deactive_flag" id="activ_deactive_flag"/>
                    <input type="text" class="hide" name="activ_deactive_terminal" id="activ_deactive_terminal"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">TIDAK</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">YA</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- form reset mesin user -->
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
<!-- Footer -->
<?php $this->load->view($params['base_comp'] . 'v-backend-footer'); ?>
<!-- End Footer -->
