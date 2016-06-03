<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Frontend extends CI_Controller
	{

		protected $_uri 		= array
			(
				'self-cashout' 		=> array
								(
									'default' 		=> 'frontend/transaction/self-cashout',
									'confirmation' 	=> 'frontend/transaction/self-cashout/confirm',
									'final' 		=> 'frontend/transaction/self-cashout/final',
								),
				'topup-account' 	=> array
								(
									'default' 		=> 'frontend/transaction/topup-account',
									'confirmation' 	=> 'frontend/transaction/topup-account/confirm',
									'final' 		=> 'frontend/transaction/topup-account/final',
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
					@ redirect('frontend/lock-screen');

			}
			else

				@ redirect('frontend/sign-in');

		}


		public function index()
		{
			// echo "masuk coy";die();
			if($this->session->userdata('logged_in') == '')
				@ redirect('frontend/sign-in');
			else
				@ redirect('frontend/dashboard');

		}




		public function authorize_fullservice()
		{
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-frontend-authorize-full';

			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-frontend-index', $data);
		}


		public function dashboard()
		{

			$this->auth_access();

			# print_r($this->session->tempdata()); die;
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-frontend-dashboard';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-frontend-index', $data);

		}


		public function error_404()
		{

		}

		public function lock_screen()
		{

			$this->session->set_tempdata('lock-screen', TRUE, FUSION_SESS_EXPIRED);

			$data['params']			= @ base_barrel();
			$data['content']		= 'v-lock-screen';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-frontend-lockscreen', $data);

		}


		public function login()
		{
			$data['params']			= @ base_barrel();
			$data['content']		= 'v-login-form';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-frontend-login', $data);

		}


		public function my_profile()
		{

			$this->auth_access();

			$data['params']			= @ base_barrel();
			$data['content']		= 'v-frontend-profile';
			$data['profile']		= $this->fusion->get_profile(trim($this->session->tempdata('user_id')), trim($this->session->tempdata('user_name')));


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-frontend-index', $data);

		}


		public function print_report()
		{

			$this->auth_access();

			$data['params']			= @ base_barrel();
			$data['content']		= 'v-frontend-daily-report';


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-transaction-index', $data);

		}


		public function self_cashout()
		{

			$this->auth_access();

			# print_r($this->session->tempdata());die;
			$data['params']					= @ base_barrel();


	    	$this->form_validation->set_rules('transfer_code', 'Kode Transfer', 'required|numeric');


			if ($this->form_validation->run() == FALSE)
			{

				$data['params']				= @ base_barrel();
				$data['content']			= 'v-frontend-self-cashout';
				$data['template']			= (string) FUSION_DEFAULT_THEME . '/';


				$this->load->view((string) FUSION_DEFAULT_THEME . '/v-transaction-index', $data);

			}
			else
			{

				$id_tmoney 					= trim($this->session->tempdata('wallet_code'));
				$id_fusion 					= trim($this->session->tempdata('fusion_code'));


				if($this->session->tempdata('transaction_token') == '')
				{

					$fusion_signin 			= $this->fusion->sign_in('ravi.vendra.rishika@gmail.com', 'D14n_Agnest14');
					$token 					= (isset($fusion_signin['user']['token'])) ? trim($fusion_signin['user']['token']) : '';

					$this->session->set_tempdata('transaction_token', $token, FUSION_SESS_EXPIRED);

				}
				else
					$token					= trim($this->session->tempdata('transaction_token'));


				$transfer_code	 			= @ sanitizer_vars($this->input->post('transfer_code'));


				$inquiry_data 				= $this->fusion->self_cashout_inquiry
									($id_tmoney, $id_fusion, $token, $transfer_code,
									(($this->session->tempdata('terminal_name') != '') ? trim($this->session->tempdata('terminal_name')) : ''));


				$this->user_lib->set_user_transaction($inquiry_data, $this->_uri['self-cashout']['default']);


				if(isset($inquiry_data['resultCode']) && $inquiry_data['resultCode'] == '0')
					@ redirect($this->_uri['self-cashout']['confirmation']);
				else
				if(isset($inquiry_data['resultCode']) && $inquiry_data['resultCode'] != '0')
					$this->session->set_flashdata('errors', $inquiry_data['resultDesc']);
				else
					$this->session->set_flashdata('errors', 'Terjadi kesalahan pada sistem T-MONEY, silahkan menunggu beberapa saat');


				@ redirect($this->_uri['self-cashout']['default']);

			}

		}


		public function self_cashout_confirmation()
		{

			$this->auth_access();


			$data['params']					= @ base_barrel();


	    	$this->form_validation->set_rules('id_tmoney', 'Akun T-MONEY Tujuan', 'required');
	    	$this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric|greater_than_equal_to[1]|less_than_equal_to[5000000]');


			if ($this->form_validation->run() == FALSE)
			{

				$data['params']				= @ base_barrel();
				$data['content']			= 'v-frontend-self-cashout-confirm';
				$data['template']			= (string) FUSION_DEFAULT_THEME . '/';

				$data['transaction']		= $this->user_lib->get_user_transaction($this->_uri['self-cashout']['default']);


				$this->load->view((string) FUSION_DEFAULT_THEME . '/v-transaction-index', $data);

			}
			else
			{

				$id_tmoney 					= trim($this->session->tempdata('wallet_code'));
				$id_fusion 					= trim($this->session->tempdata('fusion_code'));
				$token						= trim($this->session->tempdata('transaction_token'));

				$dest_id_tmoney 			= @ sanitizer_vars($this->input->post('dest_code'));
				$nominal 					= @ sanitizer_vars($this->input->post('nominal'));
				$fee 						= @ sanitizer_vars($this->input->post('fee_amount'));
				$total 						= @ sanitizer_vars($this->input->post('total_amount'));
				$transaction_id 			= @ sanitizer_vars($this->input->post('transaction_id'));
				$ref_code 					= @ sanitizer_vars($this->input->post('ref_code'));

				$pin 						= '854794';


				$payment_data 				= $this->fusion->self_cashout_payment
										(
											$id_tmoney, $id_fusion, $token, $dest_id_tmoney, $nominal,
											$transaction_id, $ref_code, $pin
										);


				if(isset($payment_data['resultCode']) && $payment_data['resultCode'] == '0')
				{

					$this->user_lib->set_transaction_status($payment_data, $this->_uri['self-cashout']['default']);
					@ redirect($this->_uri['self-cashout']['final']);

				}
				else
				if(isset($payment_data['resultCode']) && $payment_data['resultCode'] != '0')
					$this->session->set_flashdata('errors', $payment_data['resultDesc']);
				else
					$this->session->set_flashdata('errors', 'Terjadi kesalahan pada sistem T-MONEY, silahkan menunggu beberapa saat');


				@ redirect($this->_uri['self-cashout']['confirmation']);

			}

		}


		public function self_cashout_invoice()
		{

			$this->auth_access();


			$data['params']					= @ base_barrel();
			$data['content']				= 'v-frontend-self-cashout-invoice';
			$data['template']				= (string) FUSION_DEFAULT_THEME . '/';

			$data['transaction']			= $this->user_lib->get_transaction_status($this->_uri['self-cashout']['default']);


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-transaction-index', $data);

		}


		public function topup_account()
		{

			$this->auth_access();

			# print_r($this->session->tempdata());die;
			$data['params']					= @ base_barrel();


	    	$this->form_validation->set_rules('id_tmoney', 'Akun T-MONEY Tujuan', 'required');
	    	$this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric|greater_than_equal_to[1]|less_than_equal_to[5000000]');


			if ($this->form_validation->run() == FALSE)
			{

				$data['params']				= @ base_barrel();
				$data['content']			= 'v-frontend-topup-account';
				$data['template']			= (string) FUSION_DEFAULT_THEME . '/';


				$this->load->view((string) FUSION_DEFAULT_THEME . '/v-transaction-index', $data);

			}
			else
			{

				$id_tmoney 					= trim($this->session->tempdata('wallet_code'));
				$id_fusion 					= trim($this->session->tempdata('fusion_code'));


				if($this->session->tempdata('transaction_token') == '')
				{

					$fusion_signin 			= $this->fusion->sign_in('ravi.vendra.rishika@gmail.com', 'D14n_Agnest14');
					$token 					= (isset($fusion_signin['user']['token'])) ? trim($fusion_signin['user']['token']) : '';

					$this->session->set_tempdata('transaction_token', $token, FUSION_SESS_EXPIRED);

				}
				else
					$token					= trim($this->session->tempdata('transaction_token'));


				$dest_id_tmoney 			= @ sanitizer_vars($this->input->post('id_tmoney'));
				$nominal 					= @ sanitizer_vars($this->input->post('nominal'));


				$inquiry_data 				= $this->fusion->topup_account_inquiry($id_tmoney, $id_fusion, $token, $dest_id_tmoney, $nominal);
				$inquiry_data['destAccount']= $dest_id_tmoney;


				$this->user_lib->set_user_transaction($inquiry_data, $this->_uri['topup-account']['default']);


				if(isset($inquiry_data['resultCode']) && $inquiry_data['resultCode'] == '0')
					@ redirect($this->_uri['topup-account']['confirmation']);
				else
				if(isset($inquiry_data['resultCode']) && $inquiry_data['resultCode'] != '0')
					$this->session->set_flashdata('errors', $inquiry_data['resultDesc']);
				else
					$this->session->set_flashdata('errors', 'Terjadi kesalahan pada sistem T-MONEY, silahkan menunggu beberapa saat');


				@ redirect($this->_uri['topup-account']['default']);

			}

		}


		public function topup_account_confirmation()
		{

			$this->auth_access();


			$data['params']					= @ base_barrel();


	    	$this->form_validation->set_rules('id_tmoney', 'Akun T-MONEY Tujuan', 'required');
	    	$this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric|greater_than_equal_to[1]|less_than_equal_to[5000000]');


			if ($this->form_validation->run() == FALSE)
			{

				$data['params']				= @ base_barrel();
				$data['content']			= 'v-frontend-topup-account-confirm';
				$data['template']			= (string) FUSION_DEFAULT_THEME . '/';

				$data['transaction']		= $this->user_lib->get_user_transaction($this->_uri['topup-account']['default']);


				$this->load->view((string) FUSION_DEFAULT_THEME . '/v-transaction-index', $data);

			}
			else
			{

				$id_tmoney 					= trim($this->session->tempdata('wallet_code'));
				$id_fusion 					= trim($this->session->tempdata('fusion_code'));
				$token						= trim($this->session->tempdata('transaction_token'));

				$dest_id_tmoney 			= @ sanitizer_vars($this->input->post('dest_code'));
				$nominal 					= @ sanitizer_vars($this->input->post('nominal'));
				$fee 						= @ sanitizer_vars($this->input->post('fee_amount'));
				$total 						= @ sanitizer_vars($this->input->post('total_amount'));
				$transaction_id 			= @ sanitizer_vars($this->input->post('transaction_id'));
				$ref_code 					= @ sanitizer_vars($this->input->post('ref_code'));

				$pin 						= '854794';


				$payment_data 				= $this->fusion->topup_account_payment
										(
											$id_tmoney, $id_fusion, $token, $dest_id_tmoney, $nominal,
											$transaction_id, $ref_code, $pin
										);


				if(isset($payment_data['resultCode']) && $payment_data['resultCode'] == '0')
				{

					$this->user_lib->set_transaction_status($payment_data, $this->_uri['topup-account']['default']);
					@ redirect($this->_uri['topup-account']['final']);

				}
				else
				if(isset($payment_data['resultCode']) && $payment_data['resultCode'] != '0')
					$this->session->set_flashdata('errors', $payment_data['resultDesc']);
				else
					$this->session->set_flashdata('errors', 'Terjadi kesalahan pada sistem T-MONEY, silahkan menunggu beberapa saat');


				@ redirect($this->_uri['topup-account']['confirmation']);

			}

		}


		public function topup_account_invoice()
		{

			$this->auth_access();


			$data['params']					= @ base_barrel();
			$data['content']				= 'v-frontend-topup-account-invoice';
			$data['template']				= (string) FUSION_DEFAULT_THEME . '/';

			$data['transaction']			= $this->user_lib->get_transaction_status($this->_uri['topup-account']['default']);


			$this->load->view((string) FUSION_DEFAULT_THEME . '/v-transaction-index', $data);

		}

	}