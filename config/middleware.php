<?php
defined('COREPATH') or exit('No direct script access allowed');

use Base\Middleware\MiddlewareRunner;

/*
 |--------------------------------------------------------------------------
 | Global Middleware Registration Configurations Here
 |--------------------------------------------------------------------------
 |
 */

/*
 * ------------------------------------------------------
 *  Register custom middleware aliases
 * ------------------------------------------------------
 * e.g 
 * MiddlewareRunner::registerAlias('logger', 'LogRequestMiddleware');
 * MiddlewareRunner::registerAlias('check_maintenance', 'MaintenanceModeMiddleware');
 * 
 */


/*
 * ------------------------------------------------------
 *  Register global middlewares (run on every request)
 * ------------------------------------------------------
 * e.g 
 * MiddlewareRunner::registerGlobal('logger'); OR
 * MiddlewareRunner::registerGlobal(['logger|only:index', 'check_maintenance']);
 * 
 */
