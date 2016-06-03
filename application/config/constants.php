<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESCTRUCTIVE') OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/*
 |--------------------------------------------------------------------------
 | FUSION Predefined constants
 |--------------------------------------------------------------------------
 |
 | Used to provide the predefined constants for the FUSION Integrated Application (FIA).
 | While there is no universal standard for predefined constants, so it can be added easily
 |
 | The three main reason why it would be necessaried are as follows:
 |
 |    Make the code easier to be understood
 |    Cleaner code [standardized]
 |    Minimize the redundanced parameters [if declared on the each front]
 |
 */
defined('FUSION_DEFAULT_THEME')     OR define('FUSION_DEFAULT_THEME', 'moltran');
defined('FUSION_DEFAULT_THEME_BACKEND')     OR define('FUSION_DEFAULT_THEME_BACKEND', 'moltran/horizontal');

defined('CONTROLLER_BACKEND')     	OR define('CONTROLLER_BACKEND', 'backend');

defined('FUSION_TERMINAL')     		OR define('FUSION_TERMINAL', 'PLASA-TELKOM');
defined('FUSION_BASE_API')     		OR define('FUSION_BASE_API', 'https://prodapi.tmoney.co.id/');
defined('FUSION_API')     			OR define('FUSION_API', FUSION_BASE_API . 'api/');

defined('FUSION_SESS_EXPIRED')		OR define('FUSION_SESS_EXPIRED', 1800);
defined('FUSION_AES_BLOCKSIZE')		OR define('FUSION_AES_BLOCKSIZE', 256);


defined('TBL_BANK')     			OR define('TBL_BANK', strtolower('F_BANK'));
defined('TBL_BANK_GROUP')     		OR define('TBL_BANK_GROUP', strtolower('F_BANK_GROUP'));
defined('TBL_CURRENCY')     		OR define('TBL_CURRENCY', strtolower('F_CURRENCY'));
defined('TBL_EMPLOYEE')     		OR define('TBL_EMPLOYEE', strtolower('F_EMPLOYEE'));
defined('TBL_CITY')     			OR define('TBL_CITY', strtolower('F_KABKOTA'));
defined('TBL_LEVEL')     			OR define('TBL_LEVEL', strtolower('F_LEVELING'));
defined('TBL_COUNTRY')     			OR define('TBL_COUNTRY', strtolower('F_NEGARA'));
defined('TBL_OUTLET')     			OR define('TBL_OUTLET', strtolower('F_OUTLET'));
defined('TBL_PARTNER')     			OR define('TBL_PARTNER', strtolower('F_PARTNER'));
defined('TBL_PROVINCE')     		OR define('TBL_PROVINCE', strtolower('F_PROVINSI'));
defined('TBL_REGION')     			OR define('TBL_REGION', strtolower('F_REGIONAL'));
defined('TBL_TERMINAL')     		OR define('TBL_TERMINAL', strtolower('F_TERMINAL'));
defined('TBL_TRANSACTION')     		OR define('TBL_TRANSACTION', strtolower('F_TRANSACTION'));
defined('TBL_WALLET')     			OR define('TBL_WALLET', strtolower('F_WALLET'));
defined('TBL_WALLET_NEWS')     		OR define('TBL_WALLET_NEWS', strtolower('F_WALLET_NEWS'));