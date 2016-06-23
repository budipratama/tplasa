<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Backend extends CI_Controller
	{

		
		public function __construct()
		{

			parent::__construct();

			$this->load->helpers(array());
			$this->load->library(array('form_validation', 'user_lib'));
			$this->load->model(array('Fusion_model' => 'fusion'));

			$this->load->database();

		}

		public function get_outlet()
		{
			$this->auth_access();
			$query = $this->db->get_where('f_outlet', array('DV_ID' => $_POST['terminal_outlet']));
			$option_provinsi = "<option value=''>Pilih Outlet</option>";                
		    foreach ($query->result() as $row)
		    {
		        $option_provinsi .= "<option value='{$row->DV_ID}'>$row->OU_NAME</option>";
		    }
		    echo $option_provinsi;
		    return $option_provinsi;
		}
		
		private function auth_access()
		{

			if($this->session->tempdata('logged_in') == TRUE && $this->session->tempdata('user_id') != '')
			{
				if($this->session->tempdata('lock_screen') == TRUE)
					@ redirect('backend/lock-screen');
			}
			else
				@ redirect('backend/sign-in');

		}

		public function getViewReport()
		{
			$query 		= $this->db->get_where('f_transaction',array('TRANS_ID'=>$_POST['param']));
			$row 		= $query->row();
			$params 	= @ base_barrel();
			$q_terminal = $this->db->get_where('f_terminal',array('TR_ID'=>$row->TR_ID));
			$ter 		= $q_terminal->row();

			$data['report'] 	= $row;
			$data['terminal'] 	= $ter->TR_CODE;
			

			$data = array('data'=>$this->load->view($params['base_page'] . 'sejarah-transaksi/form-transaksi', $data,true));

			echo json_encode($data);

		}
		public function type_transaction($tr)
		{
			if ($tr=='TrxPpobCashInDelima') 
            	$tr_code = "Remittance - Cashin";  
            if ($tr=='TrxPpobCashOutDelima') 
				$tr_code = "Remittance - Cashout";
			if ($tr=='TrxPpobRefundDelima') 
				$tr_code = "Remittance - Refund";
			if ($tr=='TrxPpobTopUpEmoney') 
				$tr_code = "Remittance - Topup";
			if ($tr=='TrxPpobTransferOther') 
                $tr_code = "PPOB - Transfer ke Bank";
            if ($tr=='TrxPpobBillPayment') 
                $tr_code = "PPOB - Pembayaran Tagihan";
            if ($tr=='TrxPpobAirtimeRefill-Airtime') 
                $tr_code = "PPOB - Top Up Pulsa";
            if ($tr=='TrxPpobAirtimeRefill-PLN') 
                $tr_code = "PPOB - PLN Prepaid";
            if ($tr=='TrxPpobDonation') 
                $tr_code = "PPOB - Donasi";
            
            return $tr_code;
		}
		public function report()
		{
			$this->auth_access();

			$role_admin = ucwords(strtolower($this->session->tempdata('flag_regional')));
			if ($_POST) 
			{
				$status 		= $_POST['status'];
				$id_terminal	= $_POST['id_terminal'];
				$trx_type 		= $_POST['trx_type'];
				$start_date 	= date('Y-m-d',strtotime($_POST['start_date']));
				$end_date 		= date('Y-m-d',strtotime($_POST['end_date']));
				
				if ($role_admin=="-1") 
				{
					$terminal = $this->db->get('f_terminal');
				}
				else{
					$rw = $this->db->get_where('f_outlet',array('DV_ID' => $role_admin));
					$terminal = $this->db->get_where('f_terminal',array("OU_ID"=>$rw->row()->OU_ID));
				}
				$sql = "SELECT * FROM f_transaction WHERE TRANS_CURRENTTIME BETWEEN ? AND ? ";
				$where[] = $start_date.' 00:00:00'; 
				$where[] = $end_date.' 23:59:59';

				if ($trx_type != "ALL") 
				{
					$sql.= " AND TRANS_CODE = ?";
					$where[] = $trx_type;
				}
				if ($status != "ALL") 
				{
					$sql .= " AND TRANS_LASTRC = ?";
					$where[] = $status;
				}
				if ($id_terminal != "") 
				{
					$sql .= " AND TR_ID = ?";
					$where[] = $id_terminal;
				}
				$exe = $this->db->query($sql, $where);

				$data['params']			= @ base_barrel();
				$data['content']		= 'v-backend-report';
				$data['terminal']    	= $terminal;
				$data['data_report']    = $exe;
				$data['status']    		= $status;

				$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-index', $data);
			}
			else
			{
				if ($role_admin=="-1") 
				{
					$terminal = $this->db->get('f_terminal');
				}
				else{
					$rw = $this->db->get_where('f_outlet',array('DV_ID' => $role_admin));
					$terminal = $this->db->get_where('f_terminal',array("OU_ID"=>$rw->row()->OU_ID));
				}

				$data['params']			= @ base_barrel();
				$data['content']		= 'v-backend-report';
				$data['terminal']    	= $terminal;

				$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-index', $data);
			}	
			
			
		}


		public function index()
		{
			if($this->session->userdata('logged_in') == '')
				@ redirect('backend/sign-in');
			else
				@ redirect('backend/dashboard');

		}




		public function authorize_fullservice()
		{
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-authorize-full';

			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-index', $data);
		}

		/**
		 * dashboard
		 * @return [type] [description]
		 */
		public function dashboard()
		{

			$this->auth_access();

			# print_r($this->session->tempdata()); die;
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-dashboard';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-index', $data);

		}

		public function view_outlet()
		{
			$query 		= $this->db->get_where('f_outlet',array('OU_ID'=>$_POST['param']));
			$row 		= $query->row();
			
			$params 	= @ base_barrel();
			$q_bank 	= $this->db->get_where('f_bank',array('BANK_ID'=>$row->OU_BANKCODE));
			$q_cabang 	= $this->db->get_where('f_regional',array('DV_ID'=>$row->DV_ID));
			$q_provinsi = $this->db->get_where('f_provinsi',array('ID_PROVINSI'=>$row->ID_PROVINSI));
			$q_kabupaten= $this->db->get_where('f_kabkota',array('ID_KABUPATEN'=>$row->ID_KABUPATEN));

			$data['outlet'] 	= $row;
			$data['bank'] 		= $q_bank->row()->BANK_NAME;
			$data['cabang'] 	= $q_cabang->row()->DV_DESCRIPTION;
			$data['provinsi'] 	= $q_provinsi->row()->NAMA_PROVINSI;
			$data['kabupaten'] 	= $q_kabupaten->row()->NAMA_KABUPATEN;
			
			$data = array('data'=>$this->load->view($params['base_page'] . 'outlet/form-detail-outlet', $data,true));
			
			echo json_encode($data);
		}

		public function view_terminal_outlet()
		{
			$query 		= $this->db->get_where('f_outlet',array('OU_ID'=>$_POST['param']));
			$row 		= $query->row();
			$q_terminal = $this->db->get_where('f_terminal',array('OU_ID'=>$row->OU_ID));
			$params 	= @ base_barrel();

			$data['outlet'] 	= $row;
			$data['terminal'] 	= $q_terminal;			
			
			$data = array('data'=>$this->load->view($params['base_page'] . 'outlet/form-detail-terminal', $data,true));
			
			echo json_encode($data);
		}

		public function view_user_outlet()
		{
			$query 		= $this->db->get_where('f_outlet',array('OU_ID'=>$_POST['param']));
			$row 		= $query->row();
			$user       = $this->db->get_where('f_employee',array('OU_ID'=>$row->OU_ID));
			$params 	= @ base_barrel();

			$data['outlet'] = $row;
			$data['user'] 	= $user;
			

			$data = array('data'=>$this->load->view($params['base_page'] . 'outlet/form-user-outlet', $data,true));

			echo json_encode($data);
		}

		/**
		 * View Terminal 
		 * @return [type] [description]
		 */
		public function view_terminal()
		{
			// $this->debug($_POST);
			$query = $this->db->get_where('f_terminal',array('TR_CODE'=>$_POST['param']));
			$row = $query->row();
			$status = $row->TR_STATUS==1?"Terminal Aktif":"Terminal Tidak Aktif";
			$min = str_replace(".00","", $row->TR_MIN_BALANCE);
			$max = str_replace(".00","", $row->TR_MAX_BALANCE);
			$cur = str_replace(".00","", $row->TR_CURR_BALANCE);
			$balance_min = number_format($row->TR_MIN_BALANCE, 0, '.', '.');
			$balance_max = number_format($row->TR_MAX_BALANCE, 0, '.', '.');
			$balance_cur = number_format($row->TR_CURR_BALANCE, 0, '.', '.');
			$query_outlet = $this->db->get_where('f_outlet',array('OU_ID'=>$row->OU_ID));
			$row_outlet = $query_outlet->row();
			$query_regional = $this->db->get_where('f_regional',array('DV_ID'=>$row_outlet->DV_ID));
			$row_regional = $query_regional->row();


			$tbl = "<table width='100%' cellpadding='5' cellspacing='0' border='0'>
					    <tbody>
					        <tr>
					            <td class='table_default' width='30%'>Cabang</td>
					            <td class='table_default' width='5%'>:</td>
					            <td class='table_default' width='65%'>{$row_regional->DV_DESCRIPTION}</td>
					        </tr>
					        <tr>
					            <td class='table_default'>ID Terminal</td>
					            <td class='table_default'>:</td>
					            <td class='table_default'><strong>{$row->TR_CODE}</strong></td>
					        </tr>
					        <tr>
					            <td class='table_default'>Nama Outlet</td>
					            <td class='table_default'>:</td>
					            <td class='table_default'>{$row_outlet->OU_NAME}</td>
					        </tr>
					        <tr>
					            <td class='table_default'>Saldo Sekarang</td>
					            <td class='table_default'>:</td>
					            <td class='table_default'>IDR $balance_cur,-</td>
					        </tr>
					        <tr>
					            <td class='table_default'>Saldo Minimal</td>
					            <td class='table_default'>:</td>
					            <td class='table_default'>IDR $balance_min,-</td>
					        </tr>
					        <tr>
					            <td class='table_default'>Saldo Maksimal</td>
					            <td class='table_default'>:</td>
					            <td class='table_default'>IDR $balance_max,-</td>
					        </tr>
					        <tr>
					            <td class='table_default'>Status Terminal</td>
					            <td class='table_default'>:</td>
					            <td class='table_default'>$status</td>
					        </tr>
					    </tbody>
					</table>";
			$html = "<div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h4 class='modal-title t-active'>DETAIL TERMINAL</h4></div><div class='modal-body'>$tbl</div></div>";
			echo json_encode(array('data'=>$html));
		}

		public function view_user_terminal()
		{
			// $this->debug($_POST);
			$query = $this->db->get_where('f_terminal',array('TR_CODE'=>$_POST['param']));
			$row = $query->row();
			$query_outlet = $this->db->get_where('f_outlet',array('OU_ID'=>$row->OU_ID));
			$row_outlet = $query_outlet->row();
			$query_employee = $this->db->get_where('f_employee',array('OU_ID'=>$row_outlet->OU_ID));
			$data = "";
			foreach ($query_employee->result() as $rw)
		    {
		    	$status = $rw->EM_STATUS==1?"ACTIVE":"NOT ACTIVE";
		        $data .= "<tr><td width='75'>&bull;&nbsp;<strong><em>{$rw->EM_USERID}</em></strong> - {$rw->EM_NAME}</td><td width='25'><em>$status</em></td></tr>";
		    }		    

			$tbl = "<table width='100%' cellpadding='5' cellspacing='0' border='0'>
					    <tr>
					        <td class='table_default' width='30%'>Nama Outlet</td>
					        <td class='table_default' width='5%'>:</td>
					        <td class='table_default' width='65%'><strong>{$row_outlet->OU_NAME}</strong></td>
					    </tr>
					    <tr>
					        <td class='table_default'>Alamat Email</td>
					        <td class='table_default'>:</td>
					        <td class='table_default'>{$row_outlet->OU_EMAIL}</td>
					    </tr>
					    <tr>
					        <td class='table_default'>No. Telefon</td>
					        <td class='table_default'>:</td>
					        <td class='table_default'>{$row_outlet->OU_PHONE_NUMBER}</td>
					    </tr>
					    <tr>
					        <td class='table_default'>Alamat Lengkap</td>
					        <td class='table_default'>:</td>
					        <td class='table_default'>{$row_outlet->OU_ADDRESS}</td>
					    </tr>
					    <tr><td class='table_default' colspan='3'>&nbsp;</td></tr>
					</table>";
			$tbl .="<div style='clear: both;'>&nbsp;</div>
						<table width='98%' cellpadding='5' cellspacing='1' border='0' style='margin: 5px;'>
						    <tr bgcolor='AAAAAA'>
						        <td class='table_default' style='text-transform: uppercase; font-weight: bold; padding-bottom: 10px; padding-top: 10px; text-align: center;' width='8%'>NO</td>
						        <td class='table_default' style='text-transform: uppercase; font-weight: bold; padding-bottom: 10px; padding-top: 10px; text-align: center;' width='22%'>ID Terminal</td>
						        <td class='table_default' style='text-transform: uppercase; font-weight: bold; padding-bottom: 10px; padding-top: 10px; text-align: center;' width='70%'>Daftar User</td>
						    </tr>
						    <tr bgcolor='DFDFDF'>
						        <td class='table_default'>1</td>
						        <td class='table_default'><strong>PLS0001T</strong></td>
						        <td class='table_default'>
						            <table width='98%' cellpadding='5' cellspacing='0' border='0' style='margin: 5px;'>
						                $data
						            </table>
						        </td>
						    </tr>
						</table>";
			$html = "<div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h4 class='modal-title t-active'>DAFTAR USER</h4></div><div class='modal-body'>$tbl</div></div>";
			echo json_encode(array('data'=>$html));
		}


		/**
		 * Tambah user plasa telkom
		 * 
		 * @param [int] $f_outlet_id      [description]
		 * @param [string] $f_nama_lengkap   [description]
		 * @param [string] $new_id_admin     [description]
		 * @param [int] $f_operator       [description]
		 * @param [string] $f_password       [description]
		 * @param [string] $f_email          [description]
		 * @param [int] $f_provinsi_id    [description]
		 * @param [int] $f_kota           [description]
		 * @param [int] $status_admin     [description]
		 * @param [int] $f_telphone       [description]
		 * @param [int] $f_identitas      [description]
		 * @param [string] $f_alamat_lengkap [description]
		 */
		public function add_user_plasa($f_outlet_id,$f_nama_lengkap,$new_id_admin,$f_operator,$f_password,$f_email,$f_provinsi_id,$f_kota,$status_admin,$f_telphone,$f_identitas,$f_alamat_lengkap)
		{
			$this->auth_access();
			$query = $this->db->get_where('f_terminal', array('TR_ID' => $f_outlet_id));
			$row = $query->row();
			$data = array(
			        'OU_ID' => $row->OU_ID,
			        'EM_NAME' => $f_nama_lengkap,
			        'EM_USERID' => $new_id_admin,
			        'LV_ID' => $f_operator,
			        'EM_PASSWORD' => sha1($f_password),
			        'EM_EMAIL' => $f_email,
			        'ID_PROVINSI' => $f_provinsi_id,
			        'ID_KABUPATEN' => $f_kota,
			        'EM_STATUS' => $status_admin,
			        'EM_PHONE_NUMBER' => $f_telphone,
			        'EM_ADDRESS' => trim($f_alamat_lengkap),
			        'EM_IDENTITYCODE' => $f_identitas,
			        'TR_ID' => $f_outlet_id,
			        'CREATED_ON' => date('Y-m-d H:i:s'),
			        'EM_ACTIVATED_ON' => date('Y-m-d H:i:s'),
			        'CREATED_BY' => $this->session->tempdata('user_name'),
			        'DV_ID' => ucwords(strtolower($this->session->tempdata('flag_regional'))),
			        'PA_ID' => ucwords(strtolower($this->session->tempdata('user_pa_id'))),
			);

			$query = $this->db->insert('f_employee', $data);
			if ($query == 1) 
				echo "1";
			else
				echo "0";
		}

		/**
		 * kumpulan data edit user
		 * 
		 * @return [type] [description]
		 */
		public function edit_user()
		{
			$this->auth_access();
			// $this->debug($_POST);
			if (isset($_POST['get_data'])) {
				$query = $this->db->get_where('f_employee', array('EM_USERID' => $_POST['get_data']));
				$row = $query->row();
				echo json_encode($row);
			}	
		}

		/**
		 * kumpulan data edit terminal
		 * 
		 * @return [type] [description]
		 */
		public function edit_terminal()
		{
			$this->auth_access();
			// $this->debug($_POST);
			if (isset($_POST['get_data'])) {
				$query = $this->db->get_where('f_terminal', array('TR_CODE' => $_POST['get_data']));
				$row = $query->row();
				echo json_encode($row);
			}	
		}

		/**
		 * Management user plasa
		 * 
		 * @return [type] [description]
		 */
		public function manage_user_plasa()
		{
			$this->auth_access();

			if ($_POST) 
			{
				if (isset($_POST['flag_action_add'])) 
				{
					$this->add_user_plasa($_POST['f_outlet_id'],$_POST['f_nama_lengkap'],$_POST['new_id_admin'],$_POST['f_operator'],$_POST['f_password'],$_POST['f_email'],$_POST['f_provinsi_id'],$_POST['f_kota'],$_POST['status_admin'],$_POST['f_telphone'],$_POST['f_identitas'],$_POST['f_alamat_lengkap']);
				}
				if (isset($_POST['flag_action_edit'])) 
				{

					$this->edit_user_plasa($_POST['f_e_outlet_id'],$_POST['f_e_nama_lengkap'],$_POST['f_e_new_id_admin'],$_POST['f_e_operator'],$_POST['f_e_password'],$_POST['f_e_email'],$_POST['f_e_provinsi_id'],$_POST['f_e_kota'],$_POST['f_e_status_admin'],$_POST['f_e_telphone'],$_POST['f_e_identitas'],$_POST['f_e_alamat_lengkap']);
				}
				exit;
			}
			# print_r($this->session->tempdata()); die;
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-user-plasa';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-manage', $data);
		}

		public function manage_report()
		{
			
		}


		/**
		 * Update user plasa telkom
		 * 
		 * @param  [int] $f_e_outlet_id      [description]
		 * @param  [string] $f_e_nama_lengkap   [description]
		 * @param  [string] $f_e_new_id_admin   [description]
		 * @param  [string] $f_e_operator       [description]
		 * @param  [string] $f_e_password       [description]
		 * @param  [string] $f_e_email          [description]
		 * @param  [int] $f_e_provinsi_id    [description]
		 * @param  [int] $f_e_kota           [description]
		 * @param  [int] $f_e_status_admin   [description]
		 * @param  [int] $f_e_telphone       [description]
		 * @param  [int] $f_e_identitas      [description]
		 * @param  [string] $f_e_alamat_lengkap [description]
		 * @return [boolean]                     [description]
		 */
		public function edit_user_plasa($f_e_outlet_id,$f_e_nama_lengkap,$f_e_new_id_admin,$f_e_operator,$f_e_password,$f_e_email,$f_e_provinsi_id,$f_e_kota,$f_e_status_admin,$f_e_telphone,$f_e_identitas,$f_e_alamat_lengkap)
		{
			$this->auth_access();
			$query = $this->db->get_where('f_terminal', array('TR_ID' => $f_e_outlet_id));
			$row = $query->row();
			$data = array(
			        'OU_ID' => $row->OU_ID,
			        'EM_NAME' => $f_e_nama_lengkap,
			        'LV_ID' => $f_e_operator,
			        'EM_PASSWORD' => sha1($f_e_password),
			        'EM_EMAIL' => $f_e_email,
			        'ID_PROVINSI' => $f_e_provinsi_id,
			        'ID_KABUPATEN' => $f_e_kota,
			        'EM_STATUS' => $f_e_status_admin,
			        'EM_PHONE_NUMBER' => $f_e_telphone,
			        'EM_ADDRESS' => trim($f_e_alamat_lengkap),
			        'EM_IDENTITYCODE' => $f_e_identitas,
			        'TR_ID' => $f_e_outlet_id,
			        'UPDATED_ON' => date('Y-m-d H:i:s'),
			        'UPDATED_BY' => $this->session->tempdata('username')
			);

			$where = "EM_USERID = '$f_e_new_id_admin'";

			$str = $this->db->update_string('f_employee', $data, $where);
			if ($this->db->query($str)) 
				echo "1";
			else
				echo "0";

		}
		
		public function add_terminal_plasa($terminal_cabang,$terminal_outlet,$terminal_prefix,$terminal_suffix,$terminal_minimum_balance,$terminal_maximum_balance,$terminal_status)
		{
			$this->auth_access();
			$data = array(
			        'OU_ID' => $terminal_outlet,
			        'TR_CODE' => $terminal_prefix.$terminal_suffix,
			        'TR_MIN_BALANCE' => $terminal_minimum_balance,
			        'TR_MAX_BALANCE' => $terminal_maximum_balance,
			        'TR_STATUS' => $terminal_status,
			        // '' => $terminal_trf_template,
			        'CREATED_ON' => date('Y-m-d H:i:s'),
			        'CREATED_BY' => $this->session->tempdata('user_name')
			);

			$query = $this->db->insert('f_terminal', $data);
			if ($query == 1) 
				echo "1";
			else
				echo "0";	
		}

		public function edit_terminal_plasa($terminal_cabang,$terminal_outlet,$terminal_prefix,$terminal_suffix,$terminal_minimum_balance,$terminal_maximum_balance,$terminal_status)
		{
			$this->auth_access();
			$data = array(
			        'OU_ID' => $terminal_outlet,
			        'TR_MIN_BALANCE' => $terminal_minimum_balance,
			        'TR_MAX_BALANCE' => $terminal_maximum_balance,
			        'TR_STATUS' => $terminal_status,
			        'UPDATED_ON' => date('Y-m-d H:i:s'),
			        'UPDATED_BY' => $this->session->tempdata('user_name')
			);
			$where = "TR_CODE = '$terminal_prefix$terminal_suffix'";

			$str = $this->db->update_string('f_terminal', $data, $where);
			if ($this->db->query($str)) 
				echo "1";
			else
				echo "0";
		}

		public function change_status($status,$tr_code)
		{
			$this->auth_access();
			$data = array(			        
			        'TR_STATUS' => $status,
			        'UPDATED_ON' => date('Y-m-d H:i:s'),
			        'UPDATED_BY' => $this->session->tempdata('username')
			);
			$where = "TR_CODE = '$tr_code'";

			$str = $this->db->update_string('f_terminal', $data, $where);
			if ($this->db->query($str)) 
				echo "1";
			else
				echo "0";
		}

		/**
		 * Management Terminal
		 * 
		 * @return [type] [description]
		 */
		public function manage_terminal_plasa()
		{
			$this->auth_access();

			if ($_POST) 
			{
				if (isset($_POST['flag_action_add'])) 
				{
					// $this->debug($_POST);
					$this->add_terminal_plasa($_POST['terminal_cabang'],$_POST['terminal_outlet'],$_POST['terminal_prefix'],$_POST['terminal_suffix'],$_POST['terminal_minimum_balance'],$_POST['terminal_maximum_balance'],$_POST['terminal_status']);
				}
				if (isset($_POST['flag_action_edit'])) 
				{
					$this->edit_terminal_plasa($_POST['edit_terminal_cabang'],$_POST['edit_terminal_outlet'],$_POST['edit_terminal_prefix'],$_POST['edit_terminal_suffix'],$_POST['edit_terminal_minimum_balance'],$_POST['edit_terminal_maximum_balance'],$_POST['edit_terminal_status']);
				}
				if (isset($_POST['activ_deactive_flag'])) {
					// $this->debug($_POST);
					$this->change_status($_POST['activ_deactive_flag'],$_POST['activ_deactive_terminal']);
				}
				exit;
			}
			// $t = $this->db->get('f_terminal')->order_by('TR_ID','desc');
			// $this->db->order_by('TR_ID','desc');
			$t = $this->db->query("SELECT `TR_CODE` FROM `f_terminal` ORDER BY `TR_ID` DESC LIMIT 1");
			$row = $t->row();

			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-terminal-plasa';
			$data['tr_code']        = $row->TR_CODE;


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-manage', $data);
		}
		public function debug($data)
		{
			echo "<pre>";
			print_r($data);
			echo "</pre>";
		}
		/**
		 * List Kota
		 * 
		 * @return [type] [description]
		 */
		public function get_kota()
		{	
			$this->auth_access();
			$query = $this->db->get_where('f_kabkota', array('ID_PROVINSI' => $_POST['province']));
			$option_provinsi = "<option value=''>Pilih Kota</option>";                
		    foreach ($query->result() as $row)
		    {
		    	// $option_provinsi[$row->ID_KABUPATEN] = $row->NAMA_KABUPATEN;
		        $option_provinsi .= "<option value='{$row->ID_KABUPATEN}'>{$row->NAMA_KABUPATEN}</option>";
		    }
		    echo $option_provinsi;
		    // echo json_encode($option_provinsi);exit;
		    return $option_provinsi;
		}
		/**
		 * Data di table f_employee
		 * 
		 * @return [type] [description]
		 */
		public function user_data_table()
		{
			$CI =& get_instance();
        	$CI->load->database();

			$this->auth_access();
			// DB table to use
			// $table = 'f_employee';
			$table = 'f_employee,f_terminal';

			$this->load->library('ssp');
			// Table's primary key
			$primaryKey = 'f_employee.EM_ID';

			// Array of database columns which should be read and sent back to DataTables.
			// The `db` parameter represents the column name in the database, while the `dt`
			// parameter represents the DataTables column identifier. In this case simple
			// indexes
			$columns = array(
				array( 'db' => 'f_employee.EM_USERID',		'dt' => 0 ),
				array( 'db' => 'f_employee.EM_NAME',		'dt' => 1 ),
				array( 'db' => 'f_terminal.TR_CODE',		'dt' => 2 ),
				array( 'db' => 'f_employee.EM_ACTIVATED_ON',		'dt' => 3,
					   'formatter' => function( $d, $row ) {
			            		return substr($d,0,10);
			        	},
				),
				array( 'db' => 'f_employee.EM_STATUS',	'dt' => 4,
						'formatter' => function( $d, $row ) {
			            		return $d?"AKTIF":"TIDAK AKTIF";
			        	},
				),
				array( 'db' => 'f_employee.CREATED_BY',	'dt' => 5,
						'formatter' => function( $d, $row ) {
			            		return "Belum di ketahui nilai nya";
			        	},
				),
				array( 'db' => 'f_employee.DV_ID',			'dt' => 6 ),
				array( 'db' => 'f_employee.EM_STATUS',		'dt' => 7 ),
			);
			
			// SQL server connection information
			$sql_details = array(
				'user' => $CI->db->username,
				'pass' => $CI->db->password,
				'db'   => $CI->db->database,
				'host' => $CI->db->hostname
			);
			$role_admin = ucwords(strtolower($this->session->tempdata('flag_regional')));
			if ($role_admin=="-1") 
			{
				echo json_encode(
					$this->ssp->complex($_GET, $sql_details, $table, $primaryKey, $columns,'f_employee.TR_ID = f_terminal.TR_ID AND LV_ID!=1')
				);
			}
			else
			{
				echo json_encode(
					$this->ssp->complex($_GET, $sql_details, $table, $primaryKey, $columns,"f_employee.DV_ID='$role_admin' AND f_employee.TR_ID = f_terminal.TR_ID AND LV_ID!=1")
				);
			}	
		}

		public function getUser($OU_ID)
		{
			$this->auth_access();
			$query = $this->db->select("count(1) as jml")->get_where('f_employee', array('OU_ID' => $OU_ID));
            $row = $query->row();
            return $row->jml;
		}
		/**
		 * Data di table terminal
		 * @return [type] [description]
		 */
		public function terminal_data_table()
		{
			$this->auth_access();
			$CI =& get_instance();
        	$CI->load->database();

			$this->auth_access();
			// DB table to use
			// $table = 'f_employee';
			$table = 'f_terminal,f_outlet';

			$this->load->library('ssp');
			// Table's primary key
			$primaryKey = 'f_terminal.TR_ID';

			// Array of database columns which should be read and sent back to DataTables.
			// The `db` parameter represents the column name in the database, while the `dt`
			// parameter represents the DataTables column identifier. In this case simple
			// indexes
			$columns = array(
				array( 'db' => 'f_terminal.TR_CODE',		'dt' => 0 ),
				array( 'db' => 'f_outlet.OU_NAME',		'dt' => 1 ),
				array( 'db' => 'f_terminal.TR_CURR_BALANCE',		'dt' => 2 ,
					   'formatter' => function( $d, $row ) {
			            		return "IDR ".number_format($d,0,".",".").",-";
			        	},
			    ),
				array( 'db' => 'f_terminal.CREATED_ON',		'dt' => 3,
					   'formatter' => function( $d, $row ) {
			            		return substr($d,0,10);
			        	},
				),
				array( 'db' => 'f_terminal.OU_ID',	'dt' => 4,
						'formatter' => function( $d, $row ) {
							$user = $this->getUser($d);
			            	return "$user user";
			        	},
				),
				array( 'db' => 'f_terminal.TR_STATUS',	'dt' => 5,
						'formatter' => function( $d, $row ) {
			            		return $d?"AKTIF":"TIDAK AKTIF";
			        	},
				),
				array( 'db' => 'f_terminal.TR_CODE',			'dt' => 6 ),
				array( 'db' => 'f_terminal.TR_STATUS',		'dt' => 7 ),
			);
			
			// SQL server connection information
			$sql_details = array(
				'user' => $CI->db->username,
				'pass' => $CI->db->password,
				'db'   => $CI->db->database,
				'host' => $CI->db->hostname
			);
			$role_admin = ucwords(strtolower($this->session->tempdata('flag_regional')));
			
			
			if ($role_admin=="-1") 
			{
				echo json_encode(
					$this->ssp->complex($_GET, $sql_details, $table, $primaryKey, $columns,'f_terminal.OU_ID = f_outlet.OU_ID')
				);
			}
			else
			{
				$ou_id = $this->db->get_where('f_outlet',array('DV_ID'=>$role_admin));
				foreach ($ou_id->result() as $row)
			    {
			        $id[] = $row->OU_ID;
			    }
			    $id_outlet = implode(",",$id);
			    
				echo json_encode(
					$this->ssp->complex($_GET, $sql_details, $table, $primaryKey, $columns,"f_terminal.OU_ID IN($id_outlet) AND f_terminal.OU_ID = f_outlet.OU_ID")
				);
			}	
		}

		public function error_404()
		{

		}

		public function login()
		{
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-login-form';

			// echo $this->router->fetch_class();
			// echo CURRENT_CONTROLLER;
			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-login', $data);

		}

		public function my_profile()
		{

			$this->auth_access();

			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-profile';
			$data['profile']		= $this->fusion->get_profile(trim($this->session->tempdata('user_id')), trim($this->session->tempdata('user_name')));


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-index', $data);

		}


		public function print_report()
		{

			$this->auth_access();

			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-daily-report';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-transaction-index', $data);

		}

		public function active_deactive_admin()
		{
			$this->auth_access();
			$data = array('EM_STATUS' => $_GET['activ_deactive_flag']);

			$where = "EM_USERID = '{$_GET['activ_deactive_username']}'";

			$str = $this->db->update_string('f_employee', $data, $where);
			if ($this->db->query($str)) 
				echo "1";
			else
				echo "0";

		}
		/**
		 * Reset Password Admin
		 * @param  [string] $id_admin 
		 * @param  [string] $password 
		 * @return [boolean]
		 */
		public function reset_password($id_admin,$password)
		{
			$this->auth_access();
			$data = array('EM_PASSWORD' => sha1($_GET['reset_password']),'UPDATED_ON' => date('Y-m-d H:i:s'),'UPDATED_BY' => $this->session->tempdata('username') );
			$where = "EM_USERID = '{$_GET['id_admin']}'";
			$str = $this->db->update_string('f_employee', $data, $where);
			if ($this->db->query($str)) 
				echo "1";
			else
				echo "0";
		}
		
		/**
		 * check username 
		 * @return [boolean] 
		 */
		public function check_username()
		{
			$this->auth_access();
			$query = $this->db->get_where('f_employee', array('EM_USERID' => isset($_POST['new_id_admin'])?$_POST['new_id_admin']:$_POST['f_enew_id_admin'] ));
			if ($query->num_rows() > 0) {
				echo 'false';
			}
			else
				echo 'true';
		}
		public function terminal_used()
		{
			$this->auth_access();
			// $this->debug($_POST);
			if ($_POST['f_terminal']=="") {
				return true;
			}
			$query = $this->db->get_where('f_employee', array('TR_ID' => $_POST['f_terminal'] ));
			if ($query->num_rows() > 0) {
				echo 'false';
			}
			else
				echo 'true';
		}
		/**
		 * check username 
		 * @return [boolean] 
		 */
		public function terminal_by_outlet()
		{
			$this->auth_access();
			$query = $this->db->get_where('f_terminal', array('OU_ID' => isset($_POST['f_outlet_id'])?$_POST['f_outlet_id']:$_POST['f_enew_id_admin'] ));
			$val = "<option value=''>Pilih Terminal</option>";
			foreach($query->result() as $row){
				$val.="<option value='{$row->TR_ID}'>{$row->TR_CODE}</option>";
			}

			echo json_encode(array('data'=>$val));

		}

		/**
		 * check username 
		 * @return [boolean] 
		 */
		public function check_terminal()
		{
			$this->auth_access();
			$query = $this->db->get_where('f_terminal', array('TR_CODE' => 'PLS'.$_POST['terminal_suffix'] ));
			if ($query->num_rows() > 0) {
				echo 'false';
			}
			else
				echo 'true';
		}

		/**
		 * Edit admin
		 * @param  [string] $userid     [description]
		 * @param  [string] $nama_lengkap [description]
		 * @param  [int] $lvl_admin    [description]
		 * @param  [int] $cabang       [description]
		 * @param  [int] $status       [description]
		 * @return [boolean]               [description]
		 */
		public function edit_admin($id_admin,$nama_lengkap,$lvl_admin,$cabang,$status)
		{
			$this->auth_access();
			$dv_id = ($lvl_admin=="-1")?"-1":$cabang;
			$data = array(
			        'EM_NAME' => $nama_lengkap,
			        'LV_ID' => 1,
			        'EM_STATUS' => $status,
			        'UPDATED_ON' => date('Y-m-d H:i:s'),
			        'DV_ID' => $dv_id,
			        'UPDATED_BY' => $this->session->tempdata('user_name'),
			);

			$where = "EM_USERID = '$id_admin'";
			$str = $this->db->update_string('f_employee', $data, $where);
			if ($this->db->query($str)) 
				echo "1";
			else
				echo "0";
		}

		/**
		 * Tambah Admin
		 * @param [string] $id_admin     [ID Admin]
		 * @param [string] $nama_lengkap [Nama Lengkap]
		 * @param [int] $cabang       [Cabang]
		 * @param [int] $level_admin  [Level Admin]
		 * @param [int] $status_admin [Status]
		 * @param [string] $password     [password]
		 *
		 * @return boolean
		 */
		public function add_admin($id_admin,$nama_lengkap,$cabang,$level_admin,$status_admin,$password,$cabang,$merchant)
		{
			$this->auth_access();
			$dv_id = ($level_admin=="-1")?"-1":$cabang;
			$data = array(
			        'EM_USERID' => $id_admin,
			        'EM_NAME' => $nama_lengkap,
			        'LV_ID' => 1,
			        'EM_STATUS' => $status_admin,
			        'EM_PASSWORD' => sha1($password),
			        'CREATED_ON' => date('Y-m-d H:i:s'),
			        'CREATED_BY' => $this->session->tempdata('user_name'),
			        'EM_ACTIVATED_ON' => date('Y-m-d H:i:s'),
			        'DV_ID' => $dv_id,
			        // 'TR_ID' => 1,
			        'PA_ID' => $merchant,
			);
			
			if ($this->db->insert('f_employee', $data)) 
				echo "1";
			else
				echo "0";
		}


		/**
		 * Management Admin Plasa Telkom
		 * @return [type] [description]
		 */
		public function manage_admin_plasa()
		{
			$this->auth_access();

			if ($_POST) {
				// $this->debug($_POST);
				// add
				if (isset($_POST['new_id_admin']) && isset($_POST['nama_lengkap']) && isset($_POST['cabang']) && isset($_POST['lvl_admin']) && isset($_POST['status_admin']) && isset($_POST['password']) && isset($_POST['cabang']) && isset($_POST['flag_action_add'])) {
										
					$this->add_admin($_POST['new_id_admin'],$_POST['nama_lengkap'],$_POST['cabang'],$_POST['lvl_admin'],$_POST['status_admin'],$_POST['password'],$_POST['cabang'],$_POST['merchant']);
				}	

				// edit admin
				if (isset($_POST['admin_edit_id_admin']) && isset($_POST['admin_edit_nama_lengkap']) && isset($_POST['admin_edit_lvl_admin']) && isset($_POST['admin_edit_cabang']) && isset($_POST['admin_edit_status_admin']) && isset($_POST['admin_edit_flag'])) {

					$this->edit_admin($_POST['admin_edit_id_admin'],$_POST['admin_edit_nama_lengkap'],$_POST['admin_edit_lvl_admin'],$_POST['admin_edit_cabang'],$_POST['admin_edit_status_admin'],$_POST['admin_edit_merchant']);
				}
				exit;
			}

			if ($_GET) {
				// echo "<pre>";print_r($_GET);echo "</pre>";
				// reset password 
				if (isset($_GET['id_admin']) && isset($_GET['reset_password']) && isset($_GET['flag_action_reset'])) {
					// echo "masuk reset";
					$this->reset_password($_GET['id_admin'],$_GET['reset_password']);
				}
				
				// add
				if (isset($_GET['new_id_admin']) && isset($_GET['nama_lengkap']) && isset($_GET['cabang']) && isset($_GET['lvl_admin']) && isset($_GET['status_admin']) && isset($_GET['password']) && isset($_GET['cabang']) && isset($_GET['flag_action_add'])) {
										
					$this->add_admin($_GET['new_id_admin'],$_GET['nama_lengkap'],$_GET['cabang'],$_GET['lvl_admin'],$_GET['status_admin'],$_GET['password'],$_GET['cabang']);
				}

				// edit admin
				if (isset($_GET['admin_edit_id_admin']) && isset($_GET['admin_edit_nama_lengkap']) && isset($_GET['admin_edit_lvl_admin']) && isset($_GET['admin_edit_cabang']) && isset($_GET['admin_edit_status_admin']) && isset($_GET['admin_edit_flag'])) {

					$this->edit_admin($_GET['admin_edit_id_admin'],$_GET['admin_edit_nama_lengkap'],$_GET['admin_edit_lvl_admin'],$_GET['admin_edit_cabang'],$_GET['admin_edit_status_admin']);
				}

				// aktivasi / deaktivasi
				exit;
			}
			# print_r($this->session->tempdata()); die;
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-admin-plasa';
			// $data['merchant'] 		= ;


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-manage', $data);
		}
		/**
		 * Profile
		 * @return [type] [description]
		 */
		public function profile()
		{
			// echo isset($_GET['tab']);die();
			$tab = 1;
			if (isset($_GET['tab'])) 
				$tab = 2;

			$this->auth_access();
			$data['params']			= @ base_barrel();
			$data['profile']		= $this->fusion->get_profile_admin(trim($this->session->tempdata('user_id')), trim($this->session->tempdata('user_name')));
			$data['tab'] 			= $tab;
			$data['content']		= 'v-backend-profile';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-manage', $data);
		}
		/**
		 * Lock Screen
		 * @return [type] [description]
		 */
		public function lock_screen()
		{

			$this->session->set_tempdata('lock-screen', TRUE, FUSION_SESS_EXPIRED);

			$data['params']			= @ base_barrel();
			$data['content']		= 'v-lock-screen';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-lockscreen', $data);

		}

		/*public function update_admin_plasa($id)
		{
			$this->auth_access();
			$data['params']			= @ base_barrel();
			$query = $this->db->get_where('f_employee', array('EM_ID' => $id));
			$data['query'] = $query;

			
            $this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-manage-reset-password', $data);
            
		}*/

		public function admin_data_table()
		{
			$CI =& get_instance();
        	$CI->load->database();

			$this->auth_access();
			// DB table to use
			// $table = 'f_employee';
			$table = 'f_employee,f_partner';

			$this->load->library('ssp');
			// Table's primary key
			$primaryKey = 'f_employee.EM_ID';

			// Array of database columns which should be read and sent back to DataTables.
			// The `db` parameter represents the column name in the database, while the `dt`
			// parameter represents the DataTables column identifier. In this case simple
			// indexes
			$columns = array(
				array( 'db' => 'f_employee.EM_USERID',		'dt' => 0 ),
				array( 'db' => 'f_partner.PA_NAME',		'dt' => 1 ),
				array( 'db' => 'f_employee.EM_NAME',		'dt' => 2 ),
				array( 'db' => 'f_employee.EM_STATUS',		'dt' => 3,
					   'formatter' => function( $d, $row ) {
			            return $d?"AKTIF":"TIDAK AKTIF";
			        },
				),
				array( 'db' => 'f_employee.CREATED_ON',	'dt' => 4 ),
				array( 'db' => 'f_employee.CREATED_BY',	'dt' => 5 ),
				array( 'db' => 'f_employee.DV_ID',			'dt' => 6 ),
				array( 'db' => 'f_employee.EM_STATUS',		'dt' => 7 ),
			);
			
			// SQL server connection information
			$sql_details = array(
				'user' => $CI->db->username,
				'pass' => $CI->db->password,
				'db'   => $CI->db->database,
				'host' => $CI->db->hostname
			);
			$role_admin = ucwords(strtolower($this->session->tempdata('flag_regional')));
			if ($role_admin=="-1") 
			{
				echo json_encode(
					$this->ssp->complex($_GET, $sql_details, $table, $primaryKey, $columns,'LV_ID = 1 AND f_employee.PA_ID = f_partner.PA_ID')
				);
			}
			else
			{
				echo json_encode(
					$this->ssp->complex($_GET, $sql_details, $table, $primaryKey, $columns,"LV_ID = 1 AND f_employee.DV_ID='$role_admin' AND f_employee.PA_ID = f_partner.PA_ID")
				);
			}			
		}
		public function ajax()
		{
			$CI =& get_instance();
        	$CI->load->database();
			$this->auth_access();
			// DB table to use
			$table = 'f_employee';
			$this->load->library('ssp');
			// Table's primary key
			$primaryKey = 'EM_ID';
			// Array of database columns which should be read and sent back to DataTables.
			// The `db` parameter represents the column name in the database, while the `dt`
			// parameter represents the DataTables column identifier. In this case simple
			// indexes
			$columns = array(
				array( 'db' => 'EM_USERID',		'dt' => 0 ),
				array( 'db' => 'EM_NAME',		'dt' => 1 ),
				array( 'db' => 'EM_NAME',		'dt' => 2 ),
				array( 'db' => 'EM_STATUS',		'dt' => 3,
					   'formatter' => function( $d, $row ) {
			            return $d?"AKTIF":"TIDAK AKTIF";
			        },
				),
				array( 'db' => 'CREATED_ON',	'dt' => 4 ),
				array( 'db' => 'CREATED_BY',	'dt' => 5 ),
				array( 'db' => 'EM_STATUS',			'dt' => 6 ),
				
			);
			
			// SQL server connection information
			$sql_details = array(
				'user' => $CI->db->username,
				'pass' => $CI->db->password,
				'db'   => $CI->db->database,
				'host' => $CI->db->hostname
			);
			/*
			echo "<pre>";
			print_r($_GET);
			echo "</pre>";
			*/
			if (ucwords(strtolower($this->session->tempdata('flag_regional')))=="-1") 
			{
				echo json_encode(
					$this->ssp->simple($_GET, $sql_details, $table, $primaryKey, $columns)
				);
			}
			else
			{
				echo json_encode(
					$this->ssp->complex($_GET, $sql_details, $table, $primaryKey, $columns,'DV_ID!="<?=ucwords(strtolower($this->session->tempdata(\'flag_regional\')))?>"')
				);
			}
			
			
		}





		//------ START OUTLET --------//
		public function add_outlet()
		{
			$this->auth_access();
			
			if ($_GET) {
				// echo isset($_GET['nama_lengkap'])."<pre>";print_r($_GET);echo "</pre>";
				$query = $this->db->get_where('f_employee', array('EM_ID' => $this->session->tempdata('user_id')));
				$row = $query->row();
				
				$data = array(
						'OU_NAME' => $_GET['nama_lengkap'],
						'OU_EMAIL' => $_GET['email'],
						'OU_PHONE_NUMBER' => $_GET['telp'],
						'OU_ACTIVATED_ON' => date('Y-m-d H:i:s'),//$_GET[''],
						'OU_IDENTITYCODE' => $_GET['no_identitas'],
						'OU_BANKCODE' => $_GET['bank'],
						'OU_BANKACCOUNT' => $_GET['no_rekening'],
						'OU_BANKHOLDER' => $_GET['pemilik_rekening'],
						'OU_LATITUDE' => $_GET['koordinat_gb'],
						'OU_LONGITUDE' => $_GET['koordinat_gl'],
						'OU_ADDRESS' => $_GET['alamat'],
						'ID_KABUPATEN' => $_GET['kota'],
						'ID_PROVINSI' => $_GET['provinsi'],
						'DV_ID' => $_GET['cabang'],
						'WA_ID' => $_GET['provinsi'],
						
						
						'CREATED_ON' => date('Y-m-d H:i:s'),
						'CREATED_BY' => $row->EM_USERID,
						'UPDATED_ON' => date('Y-m-d H:i:s'),
				);
				// echo "<pre>";print_r($data);echo "</pre>";exit;
				if ($this->db->insert('f_outlet', $data)) 
					echo "1";
				else
					echo "0";
				
				
				exit;
			}
			
			# print_r($this->session->tempdata()); die;
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-outlet';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-manage', $data);
		}

		public function data_table_outlet()
		{
			// echo "hallo";
			$CI =& get_instance();
        	$CI->load->database();

			$this->auth_access();
			// DB table to use
			$table = 'f_outlet';

			$this->load->library('ssp');
			// Table's primary key
			$primaryKey = 'f_outlet.OU_ID';

			// Array of database columns which should be read and sent back to DataTables.
			// The `db` parameter represents the column name in the database, while the `dt`
			// parameter representesents the DataTables column identifier. In this case simple
			// indexes
			$columns = array(
				array( 'db' => 'f_outlet.OU_ID',		'dt' => 0 ),
				array( 'db' => 'f_outlet.OU_NAME',		'dt' => 1 ),
				array( 'db' => 'f_outlet.OU_ACTIVATED_ON',		'dt' => 2 ),
				
				array( 'db' => 'f_outlet.OU_ID',	'dt' => 3,
					'formatter' => function( $d, $row ) {
						$user = $this->getTerminal($d);
						return "$user Terminal";
					},
				),
				
				array( 'db' => 'f_outlet.OU_ID',	'dt' => 4,
					'formatter' => function( $d, $row ) {
						$user = $this->getUser($d);
						return "$user User";
					},
				),
				
				array( 'db' => 'f_outlet.ID_KABUPATEN',	'dt' => 5,
					'formatter' => function( $d, $row ) {
						$user = $this->showkotaNprovinsi($d);
						return "$user";
					},
				),
				
			);
			
			// SQL server connection information
			$sql_details = array(
				'user' => $CI->db->username,
				'pass' => $CI->db->password,
				'db'   => $CI->db->database,
				'host' => $CI->db->hostname
			);
			$role_admin = ucwords(strtolower($this->session->tempdata('flag_regional')));
			// echo $role_admin;exit;
			// $this->debug($_GET);
			if ($role_admin=="-1") 
			{
				echo json_encode(
					$this->ssp->complex($_GET, $sql_details, $table, $primaryKey, $columns)
				);
			}
			else
			{
				echo json_encode(
					$this->ssp->complex($_GET, $sql_details, $table, $primaryKey, $columns,"DV_ID='$role_admin'")
				);
			}	
		}

		public function select_get_kota()
		{	
			$this->auth_access();
			$query = $this->db->get_where('f_kabkota', array('ID_PROVINSI' => $_POST['province']));
			$kota = "<option value=''>Pilih Kota</option>";                
			foreach ($query->result() as $row)
			{
				$kota .= "<option value='".$row->ID_KABUPATEN."'>{".$row->NAMA_KABUPATEN."}</option>";
			} 
			// echo json_encode($option_provinsi);exit;
			echo $kota;
		}

		public function getDataOutlet()
		{	
			$this->auth_access();
			if($_POST['get_data']){
				$query = $this->db->get_where('f_outlet', array('OU_ID' => $_POST['get_data']));
				$row = $query->row();
				
				$pr = $this->db->get_where('f_kabkota',array('ID_PROVINSI'=>$row->ID_PROVINSI));
				$dt = "<option value=''>Pilih Kota</option>";
				foreach ($pr->result() as $rw) {
					$dt .="<option value='{$rw->ID_KABUPATEN}'>{$rw->NAMA_KABUPATEN}</option>";
				}
				$row->kab = $dt;
				echo json_encode($row);
			}
		}

		public function update_outlet()
		{
			$this->auth_access();
			
			if ($_GET) {
				// echo "<br><br>".isset($_GET['nama_lengkap'])."<pre>";print_r($_GET);echo "</pre>";
				$query = $this->db->get_where('f_employee', array('EM_ID' => $this->session->tempdata('user_id')));
				$row = $query->row();
				
				$data = array(
						'OU_NAME' => $_GET['nama_lengkap'],
						'OU_EMAIL' => $_GET['email'],
						'OU_PHONE_NUMBER' => $_GET['telp'],
						'OU_ACTIVATED_ON' => date('Y-m-d H:i:s'),//$_GET[''],
						'OU_IDENTITYCODE' => $_GET['no_identitas'],
						'OU_BANKCODE' => $_GET['bank'],
						'OU_BANKACCOUNT' => $_GET['no_rekening'],
						'OU_BANKHOLDER' => $_GET['pemilik_rekening'],
						'OU_LATITUDE' => $_GET['koordinat_gb'],
						'OU_LONGITUDE' => $_GET['koordinat_gl'],
						'OU_ADDRESS' => $_GET['alamat'],
						'ID_KABUPATEN' => $_GET['kota'],
						'ID_PROVINSI' => $_GET['provinsi'],
						'DV_ID' => $_GET['cabang'],
						'WA_ID' => $_GET['provinsi'],
						
						
						'CREATED_ON' => date('Y-m-d H:i:s'),
						'UPDATED_BY' => $row->EM_USERID,
						'UPDATED_ON' => date('Y-m-d H:i:s'),
				);

				// echo "<pre>";print_r($data);echo "</pre>";exit;
				if ($this->db->update('f_outlet', $data, "OU_ID=".$_GET['ou_id'])) 
					echo "1";
				else
					echo "0";
				
				
				exit; 
			}
			
			# print_r($this->session->tempdata()); die;
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-outlet';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-manage', $data);
            
		}

		public function getTerminal($id)
		{
			$this->auth_access();
			$query = $this->db->select("count(OU_ID) as jml")->get_where('f_terminal', array('OU_ID' => $id));
            $row = $query->row();
            return $row->jml;
		}

		public function showkotaNprovinsi($id)
		{
			$this->auth_access();
			$query = $this->db->select("NAMA_KABUPATEN, ID_PROVINSI")->get_where('f_kabkota', array('ID_KABUPATEN' => $id));
            $row = $query->row();
			$query2 = $this->db->select("NAMA_PROVINSI")->get_where('f_provinsi', array('ID_PROVINSI' => 12));
            $row2 = $query2->row();
            return $row->NAMA_KABUPATEN .", ". $row2->NAMA_PROVINSI;
		}
	}