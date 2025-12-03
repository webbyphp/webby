<?php
defined('COREPATH') or exit('No direct script access allowed');

/*
 | -------------------------------------------------------------------
 | PSR4 Namespaces
 | -------------------------------------------------------------------
 | This maps the locations of namespaces in app directory to
 | their location on the file system. 
 |
 | The '/app' directory is already mapped for you.
 | you cannot change the name of the 'App' namespace,
 | but you can create sub-directories and namespace by creating any namespaced classes,
 |
 | For example:
 |```
 |   $psr4 = [
 |       'Application' => Sylynder/Classes,
 |		 'Example/Namespace' => Example/Directory,
 |   ];
 |```
 | You will now be able to set the namespace for all classes in the directory as:
 | namespace Application (e.g);
 |
 | And you will now use it as:
 | use Application\NameOfClass;
 |
 | @var array<string, string>
 */
$psr4 = [];

/*
| -------------------------------------------------------------------------
| Auto-load Application Helpers
| -------------------------------------------------------------------------
|
 */
$helpers = [
	'url',
	'form',
	'debug'
];

/*
| -------------------------------------------------------------------------
| Auto-load Application Libraries
| -------------------------------------------------------------------------
|
 */
$libraries = [];

/*
| -------------------------------------------------------------------------
| Auto-load Application Models
| -------------------------------------------------------------------------
|
 */
$models = [];

/*
| -------------------------------------------------------------------------
| Auto-load Application Config
| -------------------------------------------------------------------------
|   list config files with comma separated
|   e.g. $config = [auth_config, string_config] etc
 */
$config = [];

/*
| -------------------------------------------------------------------------
| Auto-load Application Drivers
| -------------------------------------------------------------------------
|
 */
$drivers = [];

/*
| -------------------------------------------------------------------------
| Auto-load Language files
| -------------------------------------------------------------------------
| Prototype:
|
|    $language = ['lang1', 'lang2'];
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as ['codeigniter'];
 */
$language = [];

/*
| -------------------------------------------------------------------------
| Auto-load Application Packages
| -------------------------------------------------------------------------
| This file has some settings defined to simplify how
| the framework should work
| Expects strings with comma seperated not array
| eg. [ APPROOT . 'ThirdParty' , APPROOT . 'location']
|
 */
$packages = [];
