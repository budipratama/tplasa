<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	final class Fusion_model extends CI_Model
	{

		public function __construct()
		{

			parent::__construct();

			$this->load->database();

		}


		public function get_profile($profile_id = '', $profile_userid = '')
		{

			$profile_query 				= 'SELECT EM.EM_ID AS COUNTER_ID, EM.EM_NAME AS FULL_NAME, EM.EM_EMAIL AS EMAIL_ADDR, '
								. 'EM.EM_USERID AS USER_ID, EM.EM_STATUS AS STATUS, EM.TR_ID AS TERMINAL_ID, EM.OU_ID AS OUTLET_ID, '
								. 'EM.LV_ID AS LEVEL_ID, LV.LV_NAME AS LEVEL_NAME, LV.LV_TYPE AS LEVEL_TYPE, CI.ID_KABUPATEN, '
								. 'CI.NAMA_KABUPATEN, PR.ID_PROVINSI, PR.NAMA_PROVINSI, EM.EM_PHONE_NUMBER AS NO_HP, EM.EM_ABOUT_ME '
							. 'FROM ' . TBL_EMPLOYEE . ' EM INNER JOIN ' . TBL_LEVEL . ' LV '
								. 'INNER JOIN ' . TBL_CITY . ' CI INNER JOIN ' . TBL_PROVINCE . ' PR '
							. 'ON EM.LV_ID = LV.LV_ID AND EM.ID_KABUPATEN = CI.ID_KABUPATEN '
								. ' AND EM.ID_PROVINSI = PR.ID_PROVINSI '
							. 'WHERE EM.EM_ID = "' . $profile_id . '" AND EM.EM_USERID = "' . $profile_userid . '" AND LV.LV_TYPE = "FRONT"';

			$profile_exec 				= $this->db->query($profile_query);

			$profile_row 				= $profile_exec->row();


			return ($profile_row);

		}

		public function get_profile_admin($profile_id = '', $profile_userid = '')
		{

			$profile_query 				= 'SELECT EM.EM_ID AS COUNTER_ID, EM.EM_NAME AS FULL_NAME, EM.EM_EMAIL AS EMAIL_ADDR, '
								. 'EM.EM_USERID AS USER_ID, EM.EM_STATUS AS STATUS, EM.TR_ID AS TERMINAL_ID, EM.OU_ID AS OUTLET_ID, '
								. 'EM.LV_ID AS LEVEL_ID, LV.LV_NAME AS LEVEL_NAME, LV.LV_TYPE AS LEVEL_TYPE, CI.ID_KABUPATEN, '
								. 'CI.NAMA_KABUPATEN, PR.ID_PROVINSI, PR.NAMA_PROVINSI, EM.EM_PHONE_NUMBER AS NO_HP, EM.EM_ABOUT_ME '
							. 'FROM ' . TBL_EMPLOYEE . ' EM INNER JOIN ' . TBL_LEVEL . ' LV '
								. 'INNER JOIN ' . TBL_CITY . ' CI INNER JOIN ' . TBL_PROVINCE . ' PR '
							. 'ON EM.LV_ID = LV.LV_ID AND EM.ID_KABUPATEN = CI.ID_KABUPATEN '
								. ' AND EM.ID_PROVINSI = PR.ID_PROVINSI '
							. 'WHERE EM.EM_ID = "' . $profile_id . '" AND EM.EM_USERID = "' . $profile_userid . '" AND LV.LV_TYPE = "ADMIN"';

			$profile_exec 				= $this->db->query($profile_query);

			$profile_row 				= $profile_exec->row();


			return ($profile_row);

		}

		public function sign_in($user_name = '', $password = '', $additional_params = array())
		{

			$params['userName'] 		= $user_name;
			$params['password'] 		= $password;
			$params['terminal'] 		= 'PLASATELKOM';

			$fusion_api_url 			= 'https://prodapi.tmoney.co.id/api/sign-in';


			return (json_decode(curl_post($fusion_api_url, $params), TRUE));

		}


		public function self_cashout_inquiry
		(
			$id_tmoney = '', $id_fusion = '', $token = '', $transfer_code = '',
			$terminal_code = '', $additional_params = array()
		)
		{

			$user_data 						= $this->session->userdata('user_data');


			$params['transactionType'] 		= (int) 1;
			$params['terminal'] 			= 'PLASATELKOM';
			$params['idTmoney'] 			= trim($id_tmoney);
			$params['idFusion'] 			= trim($id_fusion);
			$params['token'] 				= trim($token);

			$params['receiverCode']			= trim($transfer_code);
			$params['merchantCode']			= trim($id_tmoney);
			$params['outletCode']			= trim($terminal_code);


			$fusion_api_url					= 'https://prodapi.tmoney.co.id/api/cashout-tarik-tunai';

			$response 						= @ json_decode(curl_post($fusion_api_url, $params), TRUE);


			if ($response['resultCode'] == '0')
				$this->user_lib->reset_user_transaction();


			return $response;

		}


		public function self_cashout_payment
		(
			$id_tmoney = '', $id_fusion = '', $token = '', $transfer_code = '', $terminal_code = '',
			$transaction_id = '', $ref_code = '', $pin = '', $additional_params = array())
		{

			$user_data 						= $this->session->userdata('user_data');


			$params['transactionType'] 		= (int) 1;
			$params['terminal'] 			= 'PLASATELKOM';
			$params['idTmoney'] 			= trim($id_tmoney);
			$params['idFusion'] 			= trim($id_fusion);
			$params['token'] 				= trim($token);

			$params['receiverCode']			= trim($transfer_code);
			$params['merchantCode']			= trim($id_tmoney);
			$params['outletCode']			= trim($terminal_code);

			$params['transactionID'] 		= trim($transaction_id);
			$params['refNo'] 				= trim($ref_code);
			$params['pin'] 					= trim($pin);


			$fusion_api_url					= 'https://prodapi.tmoney.co.id/api/cashout-tarik-tunai';

			$response 						= @ json_decode(curl_post($fusion_api_url, $params), TRUE);


			if ($response['resultCode'] == '0')
				$this->user_lib->reset_user_transaction();


			return $response;

		}


		public function topup_account_inquiry
		(
			$id_tmoney = '', $id_fusion = '', $token = '', $dest_tmoney_id = '',
			$nominal = 0, $additional_params = array()
		)
		{

			$user_data 						= $this->session->userdata('user_data');


			$params['transactionType'] 		= (int) 1;
			$params['terminal'] 			= 'PLASATELKOM';
			$params['idTmoney'] 			= trim($id_tmoney);
			$params['idFusion'] 			= trim($id_fusion);
			$params['token'] 				= trim($token);

			$params['destAccount'] 			= trim($dest_tmoney_id);
			$params['amount'] 				= floatval($nominal);


			$fusion_api_url					= 'https://prodapi.tmoney.co.id/api/topup-balance';

			$response 						= @ json_decode(curl_post($fusion_api_url, $params), TRUE);


			if ($response['resultCode'] == '0')
				$this->user_lib->reset_user_transaction();


			return $response;

		}


		public function topup_account_payment
		(
			$id_tmoney = '', $id_fusion = '', $token = '', $dest_tmoney_id = '', $nominal = 0,
			$transaction_id = '', $ref_code = '', $pin = '', $additional_params = array())
		{

			$user_data 						= $this->session->userdata('user_data');


			$params['transactionType'] 		= (int) 2;
			$params['terminal'] 			= 'PLASATELKOM';
			$params['idTmoney'] 			= trim($id_tmoney);
			$params['idFusion'] 			= trim($id_fusion);
			$params['token'] 				= trim($token);

			$params['destAccount'] 			= trim($dest_tmoney_id);
			$params['amount'] 				= floatval($nominal);

			$params['transactionID'] 		= trim($transaction_id);
			$params['refNo'] 				= trim($ref_code);
			$params['pin'] 					= trim($pin);


			$fusion_api_url					= 'https://prodapi.tmoney.co.id/api/topup-balance';

			$response 						= @ json_decode(curl_post($fusion_api_url, $params), TRUE);


			if ($response['resultCode'] == '0')
				$this->user_lib->reset_user_transaction();


			return $response;

		}

	}