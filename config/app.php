<?php
defined('COREPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Your Application Array Configurations
|--------------------------------------------------------------------------
|
| You can add more config array here for your application
|
| e.g $config['some_config_name_here'] = 'some_value_here';
*/

/*
| -------------------------------------------------------------------------
| Application name: e.g Webby 
|  
| It makes the name available everywhere
| 
| Your App Name might be the name of the application
| you are working on.
| -------------------------------------------------------------------------
|
 */
$config['app_name'] = getenv('app.name') ?: 'Webby';

/*
| -------------------------------------------------------------------------
| Cached Classmap File 
|  
| Allows you to set the cache name for your autoloaded classmap
| 
| -------------------------------------------------------------------------
|
 */
$config['cached_classmap_file'] = 'autoload_classmap.php';


/*
| -------------------------------------------------------------------------
| Application Status
|  
| This sets the status of the app
| defaults to maintenance mode if false
| -------------------------------------------------------------------------
|
 */
$config['app_status'] = true;

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
$config['uses_subdomain'] = false;

/*
|--------------------------------------------------------------------------
| Force the use of SSL
|--------------------------------------------------------------------------
|
| Set to force the use of SSL
|
*/
$config['force_ssl'] = false;

/*
| -------------------------------------------------------------------------
| Application Maintenance
|  
| Turn site maintenance on or off 
| (found in config/constants.php)
| 
| -------------------------------------------------------------------------
|
 */
$config['maintenance_mode'] = getenv('app.mode.on') ?: APP_ON;

/*
| -------------------------------------------------------------------------
| App maintenance view
|  
| Set this to show app maintenance view
| 
| -------------------------------------------------------------------------
|
 */

$config['maintenance_view'] = getenv('app.maintenance.view') ?: APP_MAINTENANCE_VIEW;

/*
| -------------------------------------------------------------------------
| Error 404 Emergency view
|  
| Set this view for possible 
| error 404 page
| 
| -------------------------------------------------------------------------
|
 */

$config['app_error_view'] = 'errors/app/error404';

/*
| -------------------------------------------------------------------------
| Error 404 Emergency Route
|  
| Default is using 404_override route
|
| Set this route for possible 
| error 404 page
| 
| e.g. Route::get('not-found', 'App/App/error404');
| 
| 
| -------------------------------------------------------------------------
|
 */
$config['app_error_route'] = '404_override';

/*
| -------------------------------------------------------------------------
| Set location to view profiler bar
| -------------------------------------------------------------------------
| Allows you to set the location of profiler bar
| 
| The options available are:
|
| bottom-left
| bottom-right
| top-left
| top-right
| bottom
| top
| 
*/
$config['profiler_bar_location'] = 'bottom';

/*
| -------------------------------------------------------------------------
| Set app profiler view
| -------------------------------------------------------------------------
| Allows you to set your custom profiler
| 
*/
$config['profiler_view'] = 'default-view';

/*
| -------------------------------------------------------------------------
| Set editor to use to access error line
| -------------------------------------------------------------------------
| Allows you to go to error line in a specified editor
|
| Supported editors are antigravity, vscode, sublime, emacs, phpstorm,
| cursor, atom
|
*/

$config['use_editor'] = 'vscode';

// ------------------------- Custom Application Config Here --------------------------------
