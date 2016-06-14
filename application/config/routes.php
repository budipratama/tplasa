<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['plasatelkom'] 									= 'frontend';
$route['authentication/user/sign-in']					= 'authentication/login';
$route['authentication/user/sign-out']					= 'authentication/logout';
$route['authentication/user/unlock-screen']				= 'authentication/unlock_screen';
$route['frontend/authorize/full-service']				= 'frontend/authorize_fullservice';
$route['frontend/dashboard']							= 'frontend/dashboard';
$route['frontend/lock-screen']							= 'frontend/lock_screen';
$route['frontend/reporting']							= 'frontend/print_report';
$route['frontend/sign-in'] 								= 'frontend/login';
$route['frontend/sign-out']								= 'frontend/logout';
$route['frontend/transaction/self-cashout']				= 'frontend/self_cashout';
$route['frontend/transaction/self-cashout/confirm']		= 'frontend/self_cashout_confirmation';
$route['frontend/transaction/self-cashout/final']		= 'frontend/self_cashout_invoice';
$route['frontend/transaction/topup-account']			= 'frontend/topup_account';
$route['frontend/transaction/topup-account/confirm']	= 'frontend/topup_account_confirmation';
$route['frontend/transaction/topup-account/final']		= 'frontend/topup_account_invoice';
$route['frontend/user/my-profile'] 						= 'frontend/my_profile';

// backend
$route['plasatelkom'] 									= 'backend';
$route['authentication/admin/sign-in']					= 'authentication/login_admin';
$route['authentication/user/sign-out']					= 'authentication/logout';
$route['authentication/admin/unlock-screen']			= 'authentication/unlock_screen_admin';
$route['backend/authorize/full-service']				= 'backend/authorize_fullservice';
$route['backend/dashboard']								= 'backend/dashboard';
$route['backend/reporting']								= 'backend/print_report';
$route['backend/sign-in'] 								= 'backend/login';

$route['backend/admin-plasa/manage'] 					= 'backend/manage_admin_plasa';
$route['backend/user/profile'] 							= 'backend/profile';
$route['backend/admin-plasa/get-data-table']			= 'backend/admin_data_table';
$route['backend/admin-plasa/edit-data/(:num)'] 			= 'backend/update_admin_plasa/$1';
$route['backend/check/username'] 						= 'backend/check_username';
$route['backend/check/terminal'] 						= 'backend/check_terminal';
$route['backend/admin-plasa/active_or_deactive']		= 'backend/active_deactive_admin';
$route['authentication/admin/sign-out']					= 'authentication/logout_admin';
$route['backend/lock-screen']							= 'backend/lock_screen';
$route['backend/user-plasa/manage']						= 'backend/manage_user_plasa';
$route['backend/terminal-plasa/manage']					= 'backend/manage_terminal_plasa';
$route['backend/user-plasa/edit']						= 'backend/edit_user';
$route['backend/terminal-plasa/edit']					= 'backend/edit_terminal';
$route['backend/user-plasa/get-data-table']				= 'backend/user_data_table';
$route['backend/terminal-plasa/get-data-table']			= 'backend/terminal_data_table';
$route['backend/user-plasa/list-kota']					= 'backend/get_kota';
$route['backend/terminal/list-outlet']					= 'backend/get_outlet';
