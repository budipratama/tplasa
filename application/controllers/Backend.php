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
			$query = $this->db->get_where('f_outlet', array('DV_ID' => $_POST['terminal_outlet']));
			$option_provinsi = "<option value=''>Pilih Outlet</option>";                
		    foreach ($query->result() as $row)
		    {
		    	// $option_provinsi[$row->ID_KABUPATEN] = $row->NAMA_KABUPATEN;
		        $option_provinsi .= "<option value='{$row->DV_ID}'>{$row->OU_NAME}</option>";
		    }
		    echo $option_provinsi;
		    // echo json_encode($option_provinsi);exit;
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
			        'CREATED_BY' => $this->session->tempdata('full_name')
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
			        'UPDATED_BY' => $this->session->tempdata('full_name')
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
			$data = array(
			        'OU_ID' => $terminal_outlet,
			        'TR_CODE' => $terminal_prefix.$terminal_suffix,
			        'TR_MIN_BALANCE' => $terminal_minimum_balance,
			        'TR_MAX_BALANCE' => $terminal_maximum_balance,
			        'TR_STATUS' => $terminal_status,
			        // '' => $terminal_trf_template,
			        'CREATED_ON' => date('Y-m-d H:i:s'),
			        'CREATED_BY' => $this->session->tempdata('full_name')
			);

			$query = $this->db->insert('f_terminal', $data);
			if ($query == 1) 
				echo "1";
			else
				echo "0";	
		}

		public function edit_terminal_plasa($terminal_cabang,$terminal_outlet,$terminal_prefix,$terminal_suffix,$terminal_minimum_balance,$terminal_maximum_balance,$terminal_status)
		{
			$data = array(
			        'OU_ID' => $terminal_outlet,
			        'TR_MIN_BALANCE' => $terminal_minimum_balance,
			        'TR_MAX_BALANCE' => $terminal_maximum_balance,
			        'TR_STATUS' => $terminal_status,
			        'UPDATED_ON' => date('Y-m-d H:i:s'),
			        'UPDATED_BY' => $this->session->tempdata('full_name')
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
			$data = array(			        
			        'TR_STATUS' => $status,
			        'UPDATED_ON' => date('Y-m-d H:i:s'),
			        'UPDATED_BY' => $this->session->tempdata('full_name')
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
					$this->edit_terminal_plasa($_POST['terminal_cabang'],$_POST['terminal_outlet'],$_POST['terminal_prefix'],$_POST['terminal_suffix'],$_POST['terminal_minimum_balance'],$_POST['terminal_maximum_balance'],$_POST['terminal_status']);
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
				array( 'db' => 'f_terminal.TR_CURR_BALANCE',		'dt' => 2 ),
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
				echo json_encode(
					$this->ssp->complex($_GET, $sql_details, $table, $primaryKey, $columns,"f_terminal.OU_ID = f_outlet.OU_ID")
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
			$data = array('EM_PASSWORD' => sha1($_GET['reset_password']),'UPDATED_ON' => date('Y-m-d H:i:s'),'UPDATED_BY' => $this->session->tempdata('full_name') );
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
			$query = $this->db->get_where('f_employee', array('EM_USERID' => isset($_POST['new_id_admin'])?$_POST['new_id_admin']:$_POST['f_enew_id_admin'] ));
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
		public function check_terminal()
		{
			
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
			$dv_id = ($lvl_admin=="-1")?"-1":$cabang;
			$data = array(
			        'EM_NAME' => $nama_lengkap,
			        'LV_ID' => 1,
			        'EM_STATUS' => $status,
			        'UPDATED_ON' => date('Y-m-d H:i:s'),
			        'DV_ID' => $dv_id,
			        'UPDATED_BY' => $this->session->tempdata('full_name'),
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
			$dv_id = ($level_admin=="-1")?"-1":$cabang;
			$data = array(
			        'EM_USERID' => $id_admin,
			        'EM_NAME' => $nama_lengkap,
			        'LV_ID' => 1,
			        'EM_STATUS' => $status_admin,
			        'EM_PASSWORD' => sha1($password),
			        'CREATED_ON' => date('Y-m-d H:i:s'),
			        'CREATED_BY' => $this->session->tempdata('full_name'),
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
			$data['params']			= @ base_barrel();
			$data['profile']		= $this->fusion->get_profile_admin(trim($this->session->tempdata('user_id')), trim($this->session->tempdata('user_name')));
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
	}