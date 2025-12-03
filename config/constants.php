<?php
defined('COREPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Your Constants Here
|--------------------------------------------------------------------------
|
 */


// ---- All Constants Defined Below Are Untouchable If You Don't Know What You Are Doing ------------

/*
| This file contains constants for making Webby work great
| Don't change any defined "constant name" else it will result
| in an error or may brake the application
|
| Add your constants at the section "Your constants here"
|
 */

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your Webby root. Typically this will be your base URL,
| WITH a trailing slash:
|
|   http://example.com/
|
| If this is not set then Webby will try guess the protocol, domain
| and path to your installation. However, you should always configure this
| explicitly and never rely on auto-guessing, especially in production
| environments.
|
 */
$base_url = '';

if (!defined('STDIN')) {
    $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
    $base_url .= "://" . $_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
}

define('APP_BASE_URL', getenv('app.baseURL') ?: $base_url);

/*
|--------------------------------------------------------------------------
| Encryption Key
| IMPORTANT: Don't change this EVER
|--------------------------------------------------------------------------
|
| If you use the Encryption class, you must set an encryption key.
| See the user guide for more info.
|
| http://codeigniter.com/user_guide3/libraries/encryption.html
|
| Auto updated added on install
 */

define('APP_ENCRYPTION_KEY', getenv('app.encryptionKey'));

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
|--------------------------------------------------------------------------
| Database credentials - Auto added
|--------------------------------------------------------------------------
|
 */


// Default Database Driver

/* The dsn of your database server. */
define('APP_DB_DSN', getenv('database.default.dsn') ?: '');

define('APP_DB_DRIVER', getenv('database.default.DBDriver'));
/* The hostname of your database server. */
define('APP_DB_HOSTNAME', getenv('database.default.hostname'));
/* The username used to connect to the database */
define('APP_DB_USERNAME', getenv('database.default.username'));
/* The password used to connect to the database */
define('APP_DB_PASSWORD', getenv('database.default.password'));
/* The name of the database you want to connect to */
define('APP_DB_NAME', getenv('database.default.database'));
/* The name of the database if you want to use a seperate 
*  authentication database
*/
define('APP_AUTH_DB', getenv('database.default.authDB'));

// Test Database Driver

/* The dsn of your test database server. */
define('TEST_DB_DSN', getenv('database.test.dsn') ?: '');

define('TEST_DB_DRIVER', getenv('database.test.DBDriver'));
/* The hostname of your database server. */
define('TEST_DB_HOSTNAME', getenv('database.test.hostname'));
/* The username used to connect to the database */
define('TEST_DB_USERNAME', getenv('database.test.username'));
/* The password used to connect to the database */
define('TEST_DB_PASSWORD', getenv('database.test.password'));
/* The name of the database you want to connect to */
define('TEST_DB_NAME', getenv('database.test.database'));
/* The name of the database if you want to use a seperate 
*  authentication database
*/
define('TEST_AUTH_DB', getenv('database.test.authDB'));

/*
|--------------------------------------------------------------------------
| Postgres SQL Configuration and Credentials
|--------------------------------------------------------------------------
|
*/

/* The dsn of your database server. */
define('PGSQL_DB_DSN', getenv('database.pgsql.dsn') ?: '');
/* The hostname of your database server. */ //PGSQL_DB_DSN
define('PGSQL_DB_HOSTNAME', getenv('database.pgsql.hostname'));
//The database Driver to user to the database
define('PGSQL_DB_DRIVER', getenv('database.pgsql.DBDriver'));
/* The username used to connect to the database */
define('PGSQL_DB_USERNAME', getenv('database.pgsql.username'));
/* The password used to connect to the database */
define('PGSQL_DB_PASSWORD', getenv('database.pgsql.password'));
/* The name of the database you want to connect to */
define('PGSQL_DB_NAME', getenv('database.pgsql.database'));
/* The port number of database engine */
define('PGSQL_DB_PORT', getenv('database.pgsql.port'));


/*
|--------------------------------------------------------------------------
| Site Maintenance view file path and Enable/Disable
|--------------------------------------------------------------------------
|
 */

// Note: If you modify this constants' name 
// Webby will malfunction. You can only 
// Change value to "true" or "false" as string 
define('APP_ON', "true");

// Set Maintenance Mode Path
define('APP_MAINTENANCE_PATH', ROOTPATH . 'writable/maintenance/');

// Set Maintenance Mode View
define('APP_MAINTENANCE_VIEW', 'maintenance.php');

/*
| -------------------------------------------------------------------------
| Application Uses Subdomain
|  
| Indicates whether the application uses subdomain routing.
| default value is false. Setting it to `true` enables subdomain routing, while 
| setting it to `false` disables it.
| -------------------------------------------------------------------------
|
 */
define('HOST_NAME', getenv('host_name'));

/*
|--------------------------------------------------------------------------
| Log Configurations
|--------------------------------------------------------------------------
|
 */

define('LOG_PATH', ROOTPATH . 'writable/logs/system/');
define('APP_LOG_PATH', ROOTPATH . 'writable/logs/app/');
define('USER_LOG_PATH', ROOTPATH . 'writable/logs/user/');
define('INFO_LOG_PATH', ROOTPATH . 'writable/logs/system/info/');
define('DEBUG_LOG_PATH', ROOTPATH . 'writable/logs/system/debug/');
define('ERROR_LOG_PATH', ROOTPATH . 'writable/logs/system/error/');

/*
|   Log Threshold for Webby logging
|    0 = Disables logging, Error logging TURNED OFF
|    1 = User Messages (Log messages based on user activities)
|    2 = App Messages (Log messages based on your application)
|    3 = Error Messages (including PHP errors)
|    4 = Informational Messages
|    5 = Debug Messages
|    6 = All Messages
 */

define('LOG_LEVEL', getenv('log.level') ?: 4);

/*
|   Log permission for Webby logging
|   integer notation (i.e. 0700, 0644, etc.)
|
 */

define('LOG_PERMISSION', 0644);

/*
|   Log date format for Webby logging
|   You can use PHP date codes to set your own date formatting
 */

define('LOG_DATE_FORMAT', getenv('log.dateformat') ?: 'Y-m-d H:i:s');

/*
|   Log file extension
|   The default filename extension for log files. The default 'php' allows for
|   protecting the log files via basic scripting, when they are to be stored
|   under a publicly accessible directory.
|
|   Note: Leaving it blank will default to 'php'.
|
 */
define('LOG_FILE_EXTENSION', '');

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| By default cache path is set in writable/cache/ directory. You can relocate it
| based on your preference
| Use a full server path with trailing slash.
|
 */

define('CACHE_PATH', WRITABLEPATH . 'cache/');

/*
|--------------------------------------------------------------------------
| Web Cache Directory Path
|--------------------------------------------------------------------------
|
| Cache path for web views
|
 */

define('WEB_CACHE_PATH', CACHE_PATH . 'web/');

/*
|
| Session handler driver
| By default the database driver will be used.
|
| The Constants below have been made to control the values
| of the $config['sess_|'] array variables in the config/config.php
|
| For files session use this config:
| define('SESS_DRIVER','files');
| define('SESS_SAVE_PATH',NULL);
| In case you are having problem with the SESS_SAVE_PATH consult with your hosting provider to set "session.save_path" value to php.ini
|
 */

define('SESSION_SAVE_PATH', getenv('app.sessionSavePath') ?: ROOTPATH . 'writable/session');
define('SESSION_DRIVER', getenv('app.sessionDriver') ?: 'files');
define('SESSION_COOKIE_NAME', getenv('app.sessionCookieName') ?: 'i_');
define('SESSION_SAMESITE', getenv('app.sessionSamesite') ?: 'Lax');
define('SESSION_EXPIRATION', getenv('app.sessionExpiration') ?: 7200);
define('SESSION_MATCH_IP', getenv('app.sessionMatchIP') ?: false);
define('SESSION_TIME_TO_UPDATE', getenv('app.sessionTimeToUpdate') ?: 300);
define('SESSION_REGENERATE_DESTROY', getenv('app.sessionRegenerateDestroy') ?: false);

/*
|
|  Cookie Related Variables
|
|  The Constants below have been made to control the values
|  of the $config['sess|'] array variables in the vendor/webbyphp/engine/config/config.php
|
|  'cookie_prefix'   = Set a cookie name prefix if you need to avoid collisions
|  'cookie_domain'   = Set to .your-domain.com for site-wide cookies
|  'cookie_path'     = Typically will be a forward slash
|  'cookie_secure'   = Cookie will only be set if a secure HTTPS connection exists.
|  'cookie_httponly' = Cookie will only be accessible via HTTP(S) (no javascript)
|  'cookie_samesite' = Identify whether or not to allow a cookie to be accessed. 
|					  SameSite attribute include 'Strict', 'Lax', or 'None' (The first character must be an uppercase letter)
|
|    				  'Lax' enables only first-party cookies to be sent/accessed
|					  'Strict' is a subset of 'lax' and won’t fire if the incoming link is from an external site
|    				  'None' signals that the cookie data can be shared with third parties/external sites
|
|  Note: These settings (with the exception of 'cookie_prefix' and
|       'cookie_httponly') will also affect sessions.
|
 */

define('COOKIE_PREFIX', getenv('app.cookiePrefix') ?: 'i_');
define('COOKIE_DOMAIN', getenv('app.cookieDomain') ?: '');
define('COOKIE_PATH', getenv('app.cookiePath') ?: '/');
define('COOKIE_SECURE', getenv('app.cookieSecure') ?: false);
define('COOKIE_HTTPONLY', getenv('app.cookieHTTPOnly') ?: true);
define('COOKIE_SAMESITE', getenv('app.cookieSameSite') ?: 'Lax');

/*
|
|  Cross Site Request Forgery
|
|  Enables a CSRF cookie token to be set. When set to true, token will be
|  checked on a submitted form. If you are accepting user data, it is strongly
|  recommended CSRF protection be enabled.
|
|  'csrf_token_name' = The token name
|  'csrf_cookie_name' = The cookie name
|  'csrf_expire' = The number in seconds the token should expire.
|  'csrf_regenerate' = Regenerate token on every submission
|  'csrf_exclude_uris' = Array of URIs which ignore CSRF checks
 */

$exludedURIs = str_contains(getenv('app.CSRFExcludeURIs'), ',')
    ? explode(',', getenv('app.CSRFExcludeURIs'))
    : (getenv('app.CSRFExcludeURIs') ?: []);

define('CSRF_PROTECTION', getenv('app.CSRFProtection') ?: false);
define('CSRF_TOKEN_NAME', getenv('app.CSRFTokenName') ?: 'csrf_app_token');
define('CSRF_COOKIE_NAME', getenv('app.CSRFCookieName') ?: 'csrf_app');
define('CSRF_EXPIRE', getenv('app.CSRFExpire') ?: 7200);
define('CSRF_REGENERATE', getenv('app.CSRFRegenerate') ?: false);
define('CSRF_EXCLUDE_URIS', $exludedURIs);

/*
| These constants are defined to help make some
| work arounds simple
 */

if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

// TimeZone and Dates

// Do not change these names
// Other functions depend on them 
// to work properly e.g. datetime() function
define('DEFAULT_TIMEZONE', 'Africa/Accra'); // system_default_timezone()

!empty(getenv('app.timezone'))
    ? date_default_timezone_set(getenv('app.timezone'))
    : date_default_timezone_set(DEFAULT_TIMEZONE);

define('TIMEZONE', date_default_timezone_get()); // timezone()
define('DATETIME', date('Y-m-d H:i:s', time())); // datetime()
define('NOW', time()); // now(true)
define('TIME', date('H:i:s', time()));
define('DATE', date('Y-m-d'));
define('TIMESTAMP', strtotime(date('Y-m-d') . ' ' . date('H:i:s'))); // timestamp()
define('TODAY', date('Y-m-d')); // today()

/*
| These definitions are for characters 
| and symbols e.g.(s, a, c, ., @, #)
 */

define('PHPEXT', '.php');
define('BREAKLINE', '<br/>');
define('ADD_S', 's');
define('DOT', '.');
define('AT', '@');
define('HASH', '#');
define('PERCENT', '%');
define('COMMA', ',');
define('COLON', ':');
define('SEMICOLON', ';');

/*
 |--------------------------------------------------------------------------
 | Number Constants
 |--------------------------------------------------------------------------
 |
 | Use in place of numbers between 0 to 10
 */
define('ZERO', 0);
define('ONE', 1);
define('TWO', 2);
define('THREE', 3);
define('FOUR', 4);
define('FIVE', 5);
define('SIX', 6);
define('SEVEN', 7);
define('EIGHT', 8);
define('NINE', 9);
define('TEN', 10);

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to true, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') or define('SHOW_DEBUG_BACKTRACE', true);

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
defined('FILE_READ_MODE')  or define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') or define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   or define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  or define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           or define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     or define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       or define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  or define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   or define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              or define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            or define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       or define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

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
defined('EXIT_SUCCESS')        or define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          or define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         or define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   or define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  or define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') or define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     or define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       or define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      or define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      or define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') or define('SECOND', 1);
defined('MINUTE') or define('MINUTE', 60);
defined('HOUR')   or define('HOUR', 3600);
defined('DAY')    or define('DAY', 86400);
defined('WEEK')   or define('WEEK', 604800);
defined('MONTH')  or define('MONTH', 2592000);
defined('YEAR')   or define('YEAR', 31536000);
defined('DECADE') or define('DECADE', 315360000);
