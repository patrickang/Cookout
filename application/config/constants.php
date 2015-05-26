<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */

define('TOKEN_URI', 'https://connect.stripe.com/oauth/token');
define('AUTHORIZE_URI', 'https://connect.stripe.com/oauth/authorize');

/*for development*/
define('CLIENT_ID', 'ca_4YyMpgdRuzqegLnPIyY2leldzs7OKYIE');
define('API_KEY', 'sk_test_4WQAfCsWdbU5ZJ2cfWbUFvWa');

/*for production*/
// define('CLIENT_ID', 'ca_4YyMqbIM2KUBWuOGNnsgo37XVy1Gbpsc');
// define('API_KEY', 'sk_live_4RplWmscaiC1WlUcpAUjJ3v5');


define('BRICKTIX_CONTENT', 'https://bricktix-content.s3.amazonaws.com/');
define('TRANSACTION_FEE', 0.76);
define('COMMISSION_FEE', 1.75);
define('CONSTANT_FEE_BRICKTIX', 0.5);
define('BRICKTIX', 'BrickTix');
define('TRANSACTION_ID_CREATE_ATTENDANT', 'manual');
define('CHECKOUT_URL', 'https://checkout/');
define('BRICKTIX_URL', 'http://bricktix/');
define('API_URL', 'http://localhost/bricktix_api/');

define('UNLIMITED', 0);
define('PERCENT_OFF', 0);
define('DOLLAR_OFF', 1);
define('START_DATE_TYPE_NOW', 0);
define('START_DATE_TYPE_CUSTOM', 1);
define('END_DATE_TYPE_WHEN_SALES_END', 0);
define('END_DATE_TYPE_CUSTOM', 1);