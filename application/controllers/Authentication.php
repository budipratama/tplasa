<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	final class Authentication extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();

			$this->load->helpers(array());
			$this->load->library(array('form_validation'));
			$this->load->model(array());

			$this->load->database();

		}


		public function index()
		{
			redirect('frontend/sign-in', 'refresh');
		}


		public function login()
		{

			$this->form_validation->set_rules('userid', 'User ID', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$subject = $_SERVER['HTTP_REFERER'];

			if ($this->form_validation->run() == FALSE)
			{

				$data['params']			= @ base_barrel();
				$data['content']		= 'v-login-form';
				$this->load->view((string) FUSION_DEFAULT_THEME . '/v-frontend-login', $data);

			}
			else
			{

				$user_id 				= @ sanitizer_vars($this->input->post('userid'));
				$password 				= @ sanitizer_vars($this->input->post('password'));

				$enc_passwd 			= sha1($password);


				$login_query 			= 'SELECT EM.EM_ID AS COUNTER_ID, EM.EM_NAME AS FULL_NAME, EM.EM_EMAIL AS EMAIL_ADDR, '
								. 'EM.EM_USERID AS USER_ID, EM.EM_STATUS AS STATUS, EM.TR_ID AS TERMINAL_ID, EM.OU_ID AS OUTLET_ID, '
								. 'EM.LV_ID AS LEVEL_ID, LV.LV_NAME AS LEVEL_NAME, LV.LV_TYPE AS LEVEL_TYPE, CI.ID_KABUPATEN, '
								. 'CI.NAMA_KABUPATEN, PR.ID_PROVINSI, PR.NAMA_PROVINSI, EM.EM_PASSWORD AS PASSWORD '
							. 'FROM ' . TBL_EMPLOYEE . ' EM INNER JOIN ' . TBL_LEVEL . ' LV '
								. 'INNER JOIN ' . TBL_CITY . ' CI INNER JOIN ' . TBL_PROVINCE . ' PR '
							. 'ON EM.LV_ID = LV.LV_ID AND EM.ID_KABUPATEN = CI.ID_KABUPATEN '
								. ' AND EM.ID_PROVINSI = PR.ID_PROVINSI '
							. 'WHERE EM.EM_USERID = "' . $user_id . '" AND LV.LV_TYPE = "FRONT"';

				$login_exec 			= $this->db->query($login_query);


				if($login_exec->num_rows() == 0)
				{
					$this->session->set_flashdata('errors', 'User ID tersebut tidak ditemukan di sistem Plasa Telkom kami');
					@ redirect('frontend/sign-in');
				}


				$login_row 				= $login_exec->row();


				if($enc_passwd != $login_row->PASSWORD)
				{
					$this->session->set_flashdata('errors', 'Password yang anda masukkan tidak valid');
					@ redirect('frontend/sign-in');
				}

				if($login_row->STATUS == '0')
				{
					$this->session->set_flashdata('errors', 'Status akun tersebut tidak aktif');
					@ redirect('frontend/sign-in');
				}


				if($login_row->OUTLET_ID != '')
				{

					$outlet_query 		= 'SELECT OU.OU_ID AS OUTLET_ID, OU_NAME AS OUTLET_NAME, NULL AS TERMINAL_ID, '
								. 'NULL AS TERMINAL_NAME, DV.DV_ID AS DIVRE_ID, DV.DV_NAME AS DIVRE_NAME, '
								. 'WA.WA_ID AS WALLET_ID, WA.WA_CUSTCODE AS WALLET_CODE, WA.WA_NAME AS WALLET_NAME, '
								. 'CI.ID_KABUPATEN, CI.NAMA_KABUPATEN, PR.ID_PROVINSI, PR.NAMA_PROVINSI, '
								. 'PA.PA_ID AS PARTNER_ID, PA.PA_NAME AS PARTNER_NAME, PA.PA_PREFIX_CODE AS PARTNER_PREFIX, '
								. 'PA.PA_SUFFIX_CODE AS PARTNER_SUFFIX, PA.PA_DETECT_MACADDR, PA.PA_DETECT_IPADDR, '
								. 'WA.WA_CONTACTPHONE AS FUSION_CODE '
							. 'FROM ' . TBL_OUTLET . ' OU INNER JOIN ' . TBL_REGION . ' DV '
								. 'INNER JOIN ' . TBL_WALLET . ' WA INNER JOIN ' . TBL_CITY . ' CI '
								. 'INNER JOIN ' . TBL_PROVINCE . ' PR INNER JOIN ' . TBL_PARTNER . ' PA '
							. 'ON OU.DV_ID = DV.DV_ID AND OU.ID_KABUPATEN = CI.ID_KABUPATEN '
								. ' AND OU.ID_PROVINSI = PR.ID_PROVINSI AND OU.WA_ID = WA.WA_ID '
								. ' AND WA.PA_ID = PA.PA_ID '
							. 'WHERE OU.OU_ID = "' . $login_row->OUTLET_ID . '"';

					$outlet_exec 		= $this->db->query($outlet_query);

					$outlet_row 		= $outlet_exec->row();


					if($outlet_row->PA_DETECT_MACADDR == 1)
						echo 'MAC ADDR';

					if($outlet_row->PA_DETECT_IPADDR == 1)
						echo 'IP ADDR';


					$user_level 		= 'SUPERVISOR';
					$detail_data 		= $outlet_row;


				}
				else
				if($login_row->TERMINAL_ID != '')
				{

					$terminal_query		= 'SELECT OU.OU_ID AS OUTLET_ID, OU_NAME AS OUTLET_NAME, TR.TR_ID AS TERMINAL_ID, '
								. 'TR.TR_CODE AS TERMINAL_NAME, DV.DV_ID AS DIVRE_ID, DV.DV_NAME AS DIVRE_NAME, '
								. 'WA.WA_ID AS WALLET_ID, WA.WA_CUSTCODE AS WALLET_CODE, WA.WA_NAME AS WALLET_NAME, '
								. 'CI.ID_KABUPATEN, CI.NAMA_KABUPATEN, PR.ID_PROVINSI, PR.NAMA_PROVINSI, '
								. 'PA.PA_ID AS PARTNER_ID, PA.PA_NAME AS PARTNER_NAME, PA.PA_PREFIX_CODE AS PARTNER_PREFIX, '
								. 'PA.PA_SUFFIX_CODE AS PARTNER_SUFFIX, PA.PA_DETECT_MACADDR, PA.PA_DETECT_IPADDR, '
								. 'WA.WA_CONTACTPHONE AS FUSION_CODE '
							. 'FROM ' . TBL_TERMINAL . ' TR '
								. 'INNER JOIN ' . TBL_OUTLET . ' OU INNER JOIN ' . TBL_REGION . ' DV '
								. 'INNER JOIN ' . TBL_WALLET . ' WA INNER JOIN ' . TBL_CITY . ' CI '
								. 'INNER JOIN ' . TBL_PROVINCE . ' PR INNER JOIN ' . TBL_PARTNER . ' PA '
							. 'ON TR.OU_ID = OU.OU_ID AND OU.ID_KABUPATEN = CI.ID_KABUPATEN '
								. ' AND OU.ID_PROVINSI = PR.ID_PROVINSI AND OU.WA_ID = WA.WA_ID '
								. ' AND OU.DV_ID = DV.DV_ID AND WA.PA_ID = PA.PA_ID '
							. 'WHERE TR.TR_ID = "' . $login_row->TERMINAL_ID . '"';

					$terminal_exec 		= $this->db->query($terminal_query);

					$terminal_row 		= $terminal_exec->row();


					if($terminal_row->PA_DETECT_MACADDR == 1)
						echo 'MAC ADDR';

					if($terminal_row->PA_DETECT_IPADDR == 1)
						echo 'IP ADDR';


					$user_level 		= 'FRONTLINER';
					$detail_data 		= $terminal_row;


				}

				#print_r($detail_data); die;
				$session_data 			= array
									(
										'logged_in' 		=> TRUE,
										'lock_screen'		=> FALSE,
										'user_id'			=> trim($login_row->COUNTER_ID),
										'user_name'			=> trim($login_row->USER_ID),
										'full_name'			=> trim(ucwords(strtolower($login_row->FULL_NAME))),
										'email'				=> trim($login_row->EMAIL_ADDR),
										'level'				=> trim($user_level),
										'terminal_id'		=> (isset($detail_data->TERMINAL_ID) && $detail_data->TERMINAL_ID != '') ? trim($detail_data->TERMINAL_ID) : '',
										'terminal_name'		=> (isset($detail_data->TERMINAL_NAME) && $detail_data->TERMINAL_NAME != '') ? trim($detail_data->TERMINAL_NAME) : '',
										'outlet_id'			=> isset($detail_data->OUTLET_ID) ? trim($detail_data->OUTLET_ID) : '',
										'outlet_name'		=> isset($detail_data->OUTLET_NAME) ? trim($detail_data->OUTLET_NAME) : '',
										'wallet_id'			=> trim($detail_data->WALLET_ID),
										'wallet_name'		=> trim($detail_data->WALLET_NAME),
										'wallet_code'		=> trim($detail_data->WALLET_CODE),
										'fusion_code'		=> trim($detail_data->FUSION_CODE),
										'partner_id'		=> trim($detail_data->PARTNER_ID),
										'partner_name'		=> trim($detail_data->PARTNER_NAME),
										'partner_prefix'	=> trim($detail_data->PARTNER_PREFIX),
										'partner_suffix'	=> trim($detail_data->PARTNER_SUFFIX)
									);


				# $this->session->set_userdata($session_data);
				$this->session->set_tempdata($session_data, NULL, FUSION_SESS_EXPIRED);
				@ redirect('frontend/dashboard');

			}

		}

		public function login_admin()
		{

			$this->form_validation->set_rules('userid', 'User ID', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$subject = $_SERVER['HTTP_REFERER'];

			if ($this->form_validation->run() == FALSE)
			{

				$data['params']			= @ base_barrel();
				$data['content']		= 'v-login-form';
				$this->load->view((string) FUSION_DEFAULT_THEME . '/v-backend-login', $data);

			}
			else
			{

				$user_id 				= @ sanitizer_vars($this->input->post('userid'));
				$password 				= @ sanitizer_vars($this->input->post('password'));

				$enc_passwd 			= sha1($password);


				$login_query 			= 'SELECT EM.EM_ID AS COUNTER_ID,EM.DV_ID AS REGIONAL, EM.EM_NAME AS FULL_NAME, EM.EM_EMAIL AS EMAIL_ADDR, '
								. 'EM.EM_USERID AS USER_ID, EM.EM_STATUS AS STATUS,EM.DV_ID AS DV_ID, EM.TR_ID AS TERMINAL_ID, EM.OU_ID AS OUTLET_ID, '
								. 'EM.LV_ID AS LEVEL_ID, LV.LV_NAME AS LEVEL_NAME, LV.LV_TYPE AS LEVEL_TYPE, CI.ID_KABUPATEN, '
								. 'CI.NAMA_KABUPATEN, PR.ID_PROVINSI, PR.NAMA_PROVINSI, EM.EM_PASSWORD AS PASSWORD '
							. 'FROM ' . TBL_EMPLOYEE . ' EM INNER JOIN ' . TBL_LEVEL . ' LV '
								. 'INNER JOIN ' . TBL_CITY . ' CI INNER JOIN ' . TBL_PROVINCE . ' PR '
							. 'ON EM.LV_ID = LV.LV_ID AND EM.ID_KABUPATEN = CI.ID_KABUPATEN '
								. ' AND EM.ID_PROVINSI = PR.ID_PROVINSI '
							. 'WHERE EM.EM_USERID = "' . $user_id . '" AND LV.LV_TYPE = "ADMIN"';

				$login_exec 			= $this->db->query($login_query);


				if($login_exec->num_rows() == 0)
				{
					$this->session->set_flashdata('errors', 'Admin ID tersebut tidak ditemukan di sistem Plasa Telkom kami');
					@ redirect('backend/sign-in');
				}


				$login_row 				= $login_exec->row();


				if($enc_passwd != $login_row->PASSWORD)
				{
					$this->session->set_flashdata('errors', 'Password yang anda masukkan tidak valid');
					@ redirect('backend/sign-in');
				}

				if($login_row->STATUS == '0')
				{
					$this->session->set_flashdata('errors', 'Status akun tersebut tidak aktif');
					@ redirect('backend/sign-in');
				}
				echo "<pre>";
				print_r($login_row);
				if($login_row->OUTLET_ID != '')
				{
					// echo "masuk OUTLET_ID";
					$outlet_query 		= 'SELECT OU.OU_ID AS OUTLET_ID, OU_NAME AS OUTLET_NAME, NULL AS TERMINAL_ID, '
								. 'NULL AS TERMINAL_NAME, DV.DV_ID AS DIVRE_ID, DV.DV_NAME AS DIVRE_NAME, '
								. 'WA.WA_ID AS WALLET_ID, WA.WA_CUSTCODE AS WALLET_CODE, WA.WA_NAME AS WALLET_NAME, '
								. 'CI.ID_KABUPATEN, CI.NAMA_KABUPATEN, PR.ID_PROVINSI, PR.NAMA_PROVINSI, '
								. 'PA.PA_ID AS PARTNER_ID, PA.PA_NAME AS PARTNER_NAME, PA.PA_PREFIX_CODE AS PARTNER_PREFIX, '
								. 'PA.PA_SUFFIX_CODE AS PARTNER_SUFFIX, PA.PA_DETECT_MACADDR, PA.PA_DETECT_IPADDR, '
								. 'WA.WA_CONTACTPHONE AS FUSION_CODE '
							. 'FROM ' . TBL_OUTLET . ' OU INNER JOIN ' . TBL_REGION . ' DV '
								. 'INNER JOIN ' . TBL_WALLET . ' WA INNER JOIN ' . TBL_CITY . ' CI '
								. 'INNER JOIN ' . TBL_PROVINCE . ' PR INNER JOIN ' . TBL_PARTNER . ' PA '
							. 'ON OU.DV_ID = DV.DV_ID AND OU.ID_KABUPATEN = CI.ID_KABUPATEN '
								. ' AND OU.ID_PROVINSI = PR.ID_PROVINSI AND OU.WA_ID = WA.WA_ID '
								. ' AND WA.PA_ID = PA.PA_ID '
							. 'WHERE OU.OU_ID = "' . $login_row->OUTLET_ID . '"';

					$outlet_exec 		= $this->db->query($outlet_query);

					$outlet_row 		= $outlet_exec->row();


					if($outlet_row->PA_DETECT_MACADDR == 1)
						echo 'MAC ADDR';

					if($outlet_row->PA_DETECT_IPADDR == 1)
						echo 'IP ADDR';


					$user_level 		= 'SUPERVISOR';
					$detail_data 		= $outlet_row;
					// die();

				}
				else
				if($login_row->TERMINAL_ID != '')
				{
					// echo "masuk TERMINAL_ID";
					$terminal_query		= 'SELECT OU.OU_ID AS OUTLET_ID, OU_NAME AS OUTLET_NAME, TR.TR_ID AS TERMINAL_ID, '
								. 'TR.TR_CODE AS TERMINAL_NAME, DV.DV_ID AS DIVRE_ID, DV.DV_NAME AS DIVRE_NAME, '
								. 'WA.WA_ID AS WALLET_ID, WA.WA_CUSTCODE AS WALLET_CODE, WA.WA_NAME AS WALLET_NAME, '
								. 'CI.ID_KABUPATEN, CI.NAMA_KABUPATEN, PR.ID_PROVINSI, PR.NAMA_PROVINSI, '
								. 'PA.PA_ID AS PARTNER_ID, PA.PA_NAME AS PARTNER_NAME, PA.PA_PREFIX_CODE AS PARTNER_PREFIX, '
								. 'PA.PA_SUFFIX_CODE AS PARTNER_SUFFIX, PA.PA_DETECT_MACADDR, PA.PA_DETECT_IPADDR, '
								. 'WA.WA_CONTACTPHONE AS FUSION_CODE '
							. 'FROM ' . TBL_TERMINAL . ' TR '
								. 'INNER JOIN ' . TBL_OUTLET . ' OU INNER JOIN ' . TBL_REGION . ' DV '
								. 'INNER JOIN ' . TBL_WALLET . ' WA INNER JOIN ' . TBL_CITY . ' CI '
								. 'INNER JOIN ' . TBL_PROVINCE . ' PR INNER JOIN ' . TBL_PARTNER . ' PA '
							. 'ON TR.OU_ID = OU.OU_ID AND OU.ID_KABUPATEN = CI.ID_KABUPATEN '
								. ' AND OU.ID_PROVINSI = PR.ID_PROVINSI AND OU.WA_ID = WA.WA_ID '
								. ' AND OU.DV_ID = DV.DV_ID AND WA.PA_ID = PA.PA_ID '
							. 'WHERE TR.TR_ID = "' . $login_row->TERMINAL_ID . '"';

					$terminal_exec 		= $this->db->query($terminal_query);

					$terminal_row 		= $terminal_exec->row();


					if($terminal_row->PA_DETECT_MACADDR == 1)
						echo 'MAC ADDR';

					if($terminal_row->PA_DETECT_IPADDR == 1)
						echo 'IP ADDR';


					$user_level 		= 'FRONTLINER';
					$detail_data 		= $terminal_row;

					// die();
				}

				// print_r($detail_data); die;
				$session_data 			= array
									(
										'logged_in' 		=> TRUE,
										'lock_screen'		=> FALSE,
										'user_id'			=> trim($login_row->COUNTER_ID),
										'user_name'			=> trim($login_row->USER_ID),
										'full_name'			=> trim(ucwords(strtolower($login_row->FULL_NAME))),
										'email'				=> trim($login_row->EMAIL_ADDR),
										'level'				=> trim($login_row->LEVEL_NAME),
										'flag_regional'     => trim($login_row->DV_ID),
										// 'terminal_id'		=> (isset($detail_data->TERMINAL_ID) && $detail_data->TERMINAL_ID != '') ? trim($detail_data->TERMINAL_ID) : '',
										// 'terminal_name'		=> (isset($detail_data->TERMINAL_NAME) && $detail_data->TERMINAL_NAME != '') ? trim($detail_data->TERMINAL_NAME) : '',
										/*'outlet_id'			=> isset($detail_data->OUTLET_ID) ? trim($detail_data->OUTLET_ID) : '',
										'outlet_name'		=> isset($detail_data->OUTLET_NAME) ? trim($detail_data->OUTLET_NAME) : '',
										'wallet_id'			=> trim($detail_data->WALLET_ID),
										'wallet_name'		=> trim($detail_data->WALLET_NAME),
										'wallet_code'		=> trim($detail_data->WALLET_CODE),
										'fusion_code'		=> trim($detail_data->FUSION_CODE),
										'partner_id'		=> trim($detail_data->PARTNER_ID),
										'partner_name'		=> trim($detail_data->PARTNER_NAME),
										'partner_prefix'	=> trim($detail_data->PARTNER_PREFIX),
										'partner_suffix'	=> trim($detail_data->PARTNER_SUFFIX)*/
									);
				/*print_r($session_data);
				die();*/
				# $this->session->set_userdata($session_data);
				$this->session->set_tempdata($session_data, NULL, FUSION_SESS_EXPIRED);
				@ redirect('backend/dashboard');

			}

		}


		public function logout()
		{

			$this->session->unset_tempdata();
			$this->session->sess_destroy();

			@ redirect('frontend/sign-in');

		}

		public function logout_admin()
		{

			$this->session->unset_tempdata();
			$this->session->sess_destroy();

			@ redirect('backend/sign-in');

		}


		public function unlock_screen()
		{

			$this->form_validation->set_rules('userid', 'User ID', 'required');
			$this->form_validation->set_rules('username', 'User Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');


			if ($this->form_validation->run() == FALSE)
			{

				$data['params']			= @ base_barrel();
				$data['content']		= 'v-lock-screen';

				$this->load->view((string) FUSION_DEFAULT_THEME . '/v-frontend-lockscreen', $data);

			}
			else
			{

				$user_id 				= @ sanitizer_vars($this->input->post('userid'));
				$user_name 				= @ sanitizer_vars($this->input->post('username'));
				$password 				= @ sanitizer_vars($this->input->post('password'));

				$enc_passwd 			= sha1($password);


				$unlock_query 			= 'SELECT EM.EM_ID AS COUNTER_ID, EM.EM_NAME AS FULL_NAME, EM.EM_EMAIL AS EMAIL_ADDR, '
								. 'EM.EM_USERID AS USER_ID, EM.EM_STATUS AS STATUS, EM.TR_ID AS TERMINAL_ID, EM.OU_ID AS OUTLET_ID, '
								. 'EM.LV_ID AS LEVEL_ID, LV.LV_NAME AS LEVEL_NAME, LV.LV_TYPE AS LEVEL_TYPE, CI.ID_KABUPATEN, '
								. 'CI.NAMA_KABUPATEN, PR.ID_PROVINSI, PR.NAMA_PROVINSI, EM.EM_PASSWORD AS PASSWORD '
							. 'FROM ' . TBL_EMPLOYEE . ' EM INNER JOIN ' . TBL_LEVEL . ' LV '
								. 'INNER JOIN ' . TBL_CITY . ' CI INNER JOIN ' . TBL_PROVINCE . ' PR '
							. 'ON EM.LV_ID = LV.LV_ID AND EM.ID_KABUPATEN = CI.ID_KABUPATEN '
								. ' AND EM.ID_PROVINSI = PR.ID_PROVINSI '
							. 'WHERE EM.EM_ID = "' . $user_id . '" AND EM.EM_USERID = "' . $user_name . '" AND LV.LV_TYPE = "FRONT"';

				$unlock_exec 			= $this->db->query($unlock_query);


				if($unlock_exec->num_rows() == 0)
				{
					$this->session->set_flashdata('errors', 'User ID tersebut tidak ditemukan di sistem Plasa Telkom kami');
					@ redirect('frontend/lock-screen');
				}


				$unlock_row 			= $unlock_exec->row();


				if($enc_passwd != $unlock_row->PASSWORD)
				{
					$this->session->set_flashdata('errors', 'Password yang anda masukkan tidak valid');
					@ redirect('frontend/lock-screen');
				}

				if($unlock_row->STATUS == '0')
				{
					$this->session->set_flashdata('errors', 'Status akun tersebut tidak aktif');
					@ redirect('frontend/lock-screen');
				}


				# $this->session->set_userdata($session_data);
				$this->session->set_tempdata('lock_screen', FALSE, FUSION_SESS_EXPIRED);


				@ redirect('frontend/dashboard');

			}

		}

	}