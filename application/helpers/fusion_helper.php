<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	/**
	 * aes_decrypt()
	 *
	 * Decrypt the string into AES decrypted (plain) form
	 * Returning the decrypted value, so can be parsed securely in the front side
	 *
	 * @param		string $string
	 *
	 * @return		string $dec_pin
	 */
	if(! function_exists('aes_decrypt'))
	{

		function aes_decrypt($string = '')
		{

			$CI 				= & get_instance();

			$aes 				= new AES(trim($string), $CI->config->item('encryption_key'), (int) FUSION_AES_BLOCKSIZE);
			$dec_pin			= $aes->decrypt();

			return ($dec_pin);

		}

	}


	/**
	 * aes_encrypt()
	 *
	 * Encrypt the string into AES encrypted form
	 * Returning the encrypted value, so can be parsed securely in the front side
	 *
	 * @param		string $string
	 *
	 * @return		string $enc_pin
	 */
	if(! function_exists('aes_encrypt'))
	{

		function aes_encrypt($string = '')
		{

			$CI 				= & get_instance();

			$aes 				= new AES(trim($string), $CI->config->item('encryption_key'), (int) FUSION_AES_BLOCKSIZE);
			$enc_pin			= $aes->encrypt();

			return ($enc_pin);

		}

	}


	/**
	 * cleaner_vars()
	 *
	 * Clean the parameters from HTML, JS and CSS tag scripts
	 * Avoid from hijacking & make it safer
	 *
	 * @param		string $input
	 * @return		string $output
	 */
	if(! function_exists('cleaner_vars'))
	{

		function cleaner_vars($input = '')
		{

			$search 			= array
						(
							'@<script[^>]*?>.*?</script>@si', 	# Strip out any Javascript codes
							'@<[\/\!]*?[^<>]*?>@si', 			# Strip out any HTML tag codes
							'@<style[^>]*?>.*?</style>@siU', 	# Strip out any CSS tag codes
							'@<![\s\S]*?--[ \t\n\r]*>@'
						);

			$output 			= preg_replace($search, '', $input);
			return ($output);

		}

	}


	/**
	 * curl_post()
	 *
	 * Hit the remote url using cURL with POST method
	 * Return value will be set from the remote url
	 *
	 * @param		string $url
	 * @param		array $post_data
	 * @return		string
	 */
	if(! function_exists('curl_post'))
	{

		function curl_post($url = '', $post_data = '', $SSL_VERIFYPEER = TRUE, $debug = FALSE)
		{

			$curl_handle 		= curl_init();

	        curl_setopt($curl_handle, CURLOPT_URL, $url);
	        # curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, $SSL_VERIFYPEER);
	        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	        curl_setopt($curl_handle, CURLOPT_POST, 1);
	        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $post_data);
			curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, 2);

	        $response 			= curl_exec($curl_handle);


	        if ($debug)
	        {
	        	var_dump(curl_errno($curl_handle));
	        	var_dump($response);

	        	exit();
	        }


	        curl_close($curl_handle);

	        return $response;

		}

	}


	/**
	 * formatter_currency()
	 *
	 * Change the number of money format
	 *
	 * @param		int $value
	 * @return		string
	 */
	if(! function_exists('formatter_currency'))
	{

		function formatter_currency($value = 0)
		{

			return ('IDR ' . number_format($value, 0, ',', '.') . ',-');

		}

	}


	/**
	 * formatter_date()
	 *
	 * Formatting the date from [YYYY-MM-DD/DD-MM-YYYY] HH:II:SS
	 * into Indonesian medium date format (example : 20-02-2016 10:15:20)
	 *
	 * @param		string $input
	 *
	 * @return		string $output
	 */
	if(! function_exists('formatter_date'))
	{

		function formatter_date($input = '')
		{

			$chunks				= @ explode(' ', $input);
			$chunk_date			= @ explode('-', $chunks[0]);


			$day 				= (strlen($chunk_date[0]) == 2) ? $chunk_date[0] : $chunk_date[2];
			$month 				= $chunk_date[1];
			$year 				= (strlen($chunk_date[2]) == 4) ? $chunk_date[2] : $chunk_date[0];


			switch ($month)
			{
				case '01' :	$month = 'Januari';		break;
				case '02' :	$month = 'Februari';	break;
				case '03' :	$month = 'Maret';		break;
				case '04' :	$month = 'April';		break;
				case '05' :	$month = 'Mei';			break;
				case '06' :	$month = 'Juni';		break;
				case '07' :	$month = 'Juli';		break;
				case '08' :	$month = 'Agustus';		break;
				case '09' :	$month = 'September';	break;
				case '10' :	$month = 'Oktober';		break;
				case '11' :	$month = 'November';	break;
				case '12' :	$month = 'Desember';	break;
			}


			return ($day . ' ' . $month . ' ' . $year . ' - ' . $chunks[1]);

		}

	}


	/**
	 * password_checker()
	 *
	 * Check the security level of password
	 * Avoid from insecure password and make it safer from hacking
	 *
	 * @param		string $input
	 * @return		boolean $result
	 */
	if(! function_exists('password_checker'))
	{

		function password_checker($input = '')
		{

			if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $input))
				$result			= TRUE;
			else
				$result			= FALSE;

			return ($result);

		}

	}


	/**
	 * sanitizer_vars()
	 *
	 * Sanitize each parameters executed in this application
	 * Avoid from hijacking & make it safer
	 *
	 * @param		string $input
	 * @return		string $output
	 */
	if(! function_exists('sanitizer_vars'))
	{

		function sanitizer_vars($input = '')
		{

		    if (is_array($input))
		    {

		        foreach($input as $var => $val)
		            $output[$var] 	= sanitizer_vars($val);

		    }
		    else
		    {

		        if (get_magic_quotes_gpc())
		            $output 		= @ stripslashes($input);
		        else
		        	$output 		= $input;


		       	$output  			= trim($output);
		        $output  			= cleaner_vars($output);
		        # $output 			= mysql_real_escape_string($output);

		    }

		    return ($output);

		}

	}


	/**
	 * splitter_vars()
	 *
	 * Splitting and combining string with our specified delimiter
	 * Default delimiter is "-" and length is 4
	 *
	 * @param		string $input $delimiter
	 * @param		int $length
	 *
	 * @return		string $output
	 */
	if(! function_exists('splitter_vars'))
	{

		function splitter_vars($input = '', $length = 4, $delimiter = ' ')
		{

			$split 				= str_split($input, $length);
			$output 			= implode($delimiter, $split);


			return ($output);

		}

	}