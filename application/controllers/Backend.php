<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Backend extends CI_Controller
	{

		protected $_uri 		= array
			(
				'self-cashout' 		=> array
								(
									'default' 		=> 'backend/transaction/self-cashout',
									'confirmation' 	=> 'backend/transaction/self-cashout/confirm',
									'final' 		=> 'backend/transaction/self-cashout/final',
								),
				'topup-account' 	=> array
								(
									'default' 		=> 'backend/transaction/topup-account',
									'confirmation' 	=> 'backend/transaction/topup-account/confirm',
									'final' 		=> 'backend/transaction/topup-account/final',
								)
			);


		public function __construct()
		{

			parent::__construct();

			$this->load->helpers(array());
			$this->load->library(array('form_validation', 'user_lib'));
			$this->load->model(array('Fusion_model' => 'fusion'));

			$this->load->database();

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


		public function dashboard()
		{

			$this->auth_access();

			# print_r($this->session->tempdata()); die;
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-dashboard';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-index', $data);

		}


		public function error_404()
		{

		}

		public function lock_screen()
		{

			$this->session->set_tempdata('lock-screen', TRUE, FUSION_SESS_EXPIRED);

			$data['params']			= @ base_barrel();
			$data['content']		= 'v-lock-screen';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-lockscreen', $data);

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


		/**
		 * Management Admin Plasa Telkom
		 * @return [type] [description]
		 */
		public function manage_admin_plasa()
		{
			$this->auth_access();

			# print_r($this->session->tempdata()); die;
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-backend-admin-plasa';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-manage', $data);
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
				array( 'db' => 'EM_STATUS',		'dt' => 3 ),
				array( 'db' => 'CREATED_ON',	'dt' => 4 ),
				array( 'db' => 'CREATED_BY',	'dt' => 5 ),
				/*array(
					'db'        => 'start_date',
					'dt'        => 4,
					'formatter' => function( $d, $row ) {
						return date( 'jS M y', strtotime($d));
					}
				),
				array(
					'db'        => 'salary',
					'dt'        => 5,
					'formatter' => function( $d, $row ) {
						return '$'.number_format($d);
					}
				)*/
			);

			// SQL server connection information
			$sql_details = array(
				'user' => $CI->db->username,
				'pass' => $CI->db->password,
				'db'   => $CI->db->database,
				'host' => $CI->db->hostname
			);/*
			echo "<pre>";
			print_r($_GET);
			echo "</pre>";*/

			echo json_encode(
				$this->ssp->simple($_GET, $sql_details, $table, $primaryKey, $columns )
			);
			
		}

	}