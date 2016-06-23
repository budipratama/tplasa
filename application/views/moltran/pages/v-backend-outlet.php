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
</style>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			
			<div class="row">
                <div class="col-sm-12">                        
                    <ul class="breadcrumb">
                        <li><a href="#">Atur Outlet</a></li>
                        <li><a href="#">Outlet PLASA TELKOM</a></li>
                        <li class="active">Manage Outlet</li>
                    </ul>
                </div>
            </div>
		</div>
	</div>	
	<div class="panel"> 
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-6">
					<div class="m-b-30">
						<button id="show-popup" class="btn btn-primary waves-effect waves-light">Tambah Outlet <i class="fa fa-plus"></i></button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table id="list_outlet" class="display table table-bordered table-striped" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>NAMA OUTLET</th>
								<th>WAKTU AKTIF</th>
								<th>JUMLAH TERMINAL</th>
								<th>JUMLAH USER</th>
								<th>KOTA, PROPPINSI</th>
								<th>Action</th>
							</tr>
							
						</thead>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>NAMA OUTLET</th>
								<th>WAKTU AKTIF</th>
								<th>UMLAH TERMINAL</th>
								<th>JUMLAH USER</th>
								<th>KOTA, PROPPINSI</th>
								<th>Action</th>
							</tr>
							
						</tfoot>
					</table>
				</div>
			</div>
			<?php //$this->load->view($params['base_comp'] . 'v-backend-footer'); ?>
		</div>
		<!-- end: page -->
	</div> <!-- end Panel -->

	<!-- Footer -->
        <?php $this->load->view($params['base_comp'] . 'v-backend-footer'); ?>
	<!-- End Footer -->
</div>
            <!-- end container -->
 <script type='text/javascript'>
// a = document.getElementById('provinsi3');
// alert(a);
</script>


<?php
	$role_admin = ucwords(strtolower($this->session->tempdata('flag_regional')));
	// echo $role_admin;exit;
	if ($role_admin=="-1")
		$query = $this->db->get('f_regional', 0, 7);
	else
		$query = $this->db->where('DV_ID', $role_admin)->get('f_regional', 0, 7);
	
	$cabang = "<option value=''>Pilih Cabang</option>";                
	foreach ($query->result() as $row)
	{
		$cabang .= "<option value='{$row->DV_ID}'>{$row->DV_DESCRIPTION}</option>";
	}	
	
	$query1 = $this->db->get('f_provinsi');
	$propinsi = "<option value=''>Pilih Propinsi</option>";                
	foreach ($query1->result() as $row)
	{
		$propinsi .= "<option value='{$row->ID_PROVINSI}'>{$row->NAMA_PROVINSI}</option>";
	}
	
	// $query3 = $this->db->get('f_kabkota');
	// $kota = "<option value=''>Pilih Kota</option>";                
	// foreach ($query3->result() as $row)
	// {
		// $kota .= "<option value='".$row->ID_KABUPATEN."'>".$row->NAMA_KABUPATEN."</option>";
	// } 
	
	$query2 = $this->db->get('f_bank');
	$bank = "<option value=''>Pilih Bank</option>";                
	foreach ($query2->result() as $row)
	{
		$bank .= "<option value='{$row->BANK_ID}'>{$row->BANK_NAME}</option>";
	}
	
	
?>

<!-- form tambah admin -->
<div id="frame-popup-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
	<div class="modal-dialog">
		<form id="form-add-outlet">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Tambah Outlet</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="new_id_admin" class="control-label">Pilih Cabang</label>
								<select name="cabang" class="form-control">
									<?=$cabang;?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama_lengkap" class="control-label">Nama Outlet</label>
								<input id="nama_lengkap" name="nama_lengkap" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama_lengkap" class="control-label">Alamat Email</label>
								<input name="email" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama_lengkap" class="control-label">No Identitas</label>
								<input name="no_identitas" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="lvl_admin" class="control-label">Alamat Lengkap</label>
								<div class="col-md-14">
								<textarea name="alamat" class="form-control" rows="5"></textarea>
							</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="cabang" class="control-label">No Telefon</label>
								<input id="" name="telp" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="status_admin" class="control-label">Provinsi</label>
								 <select id="provinsi" name="provinsi" class="form-control">
									<?=$propinsi;?>
								</select>
							</div>
						</div>
					</div>                                                                
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="kota" class="control-label">Kota</label>
								 <select id="kota" name="kota" class="form-control">
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="confirm_password" class="control-label">Nama Bank</label>
								<select id="" name="bank" class="form-control">
									<?=$bank;?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">No Rekening</label>
								<input id="" name="no_rekening" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Pemilik Rekening</label>
								<input id="" name="pemilik_rekening" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Koordinat Garis Lintang</label>
								<input id="" name="koordinat_gl" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Koordinat Garis Bujur</label>
								<input id="" name="koordinat_gb" class="form-control" type="text" />
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

<!-- form edit outlet -->
<div id="frame-popup-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
	<div class="modal-dialog">
		<form id="form-edit-outlet">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Edit Outlet</h4>
				</div>
				<div class="modal-body">
					<div class="row" style="display:none">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">id</label>
								<input name="ou_id" id="ou_id" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Pilih Cabang</label>
								<select name="cabang" id="cabang3" class="form-control">
									<?=$cabang;?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama_lengkap" class="control-label">Nama Outlet</label>
								<input id="nama_lengkap3" name="nama_lengkap" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Alamat Email</label>
								<input name="email" id="email3" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">No Identitas</label>
								<input name="no_identitas" id="no_identitas3" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Alamat Lengkap</label>
								<div class="col-md-14">
								<textarea name="alamat" id="alamat3" class="form-control" rows="5"></textarea>
							</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="telp" class="control-label">No Telefon</label>
								<input id="telp3" name="telp" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Provinsi</label>
								 <select id="provinsi3" name="provinsi" class="form-control">
									<?=$propinsi;?>
								</select>
							</div>
						</div>
					</div>                                                                
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="kota" class="control-label">Kota</label>
								 <select id="kota3" name="kota" class="form-control">
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="confirm_password" class="control-label">Nama Bank</label>
								<select id="bank3" name="bank" class="form-control">
									<?=$bank;?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">No Rekening</label>
								<input id="no_rekening3" name="no_rekening" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Pemilik Rekening</label>
								<input id="pemilik_rekening3" name="pemilik_rekening" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Koordinat Garis Lintang</label>
								<input id="koordinat_gl3" name="koordinat_gl" class="form-control" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Koordinat Garis Bujur</label>
								<input id="koordinat_gb3" name="koordinat_gb" class="form-control" type="text" />
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
            