<?php

/********* General Information *******
 * Framework Name : TODO
 * Author : Digby Marsh
 * Website : http://TODO
 * Contact : digby.j.marsh@gmail.com
 * ©2014
 */

// Database settings.
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'mvc');
	define('DB_USER', '');
	define('DB_PASS', '');
	
// Initial constant variables.
	define('URL', 'http://localhost/projects/mvc/');
	define('FRAMEWORK', 'framework/');
	define('LIBS', FRAMEWORK . 'libs/');
	define('PROJECT_CODE', 'project_code/');
	define('PROJECT_PAGES', 'pages/');
	define('PROJECT_MODELS', 'models/');
	define('PUBLIC_SITE', 'web/public/');
	define('SITE_NAME', 'test');
	
	define('FILE_DOES_NOT_EXIST', 0);
	define('IS_PHP_FILE', 1);
	define('IS_CSS_FILE', 2);
	define('IS_JS_FILE', 3);
	
	// The sitewide hashkey, do not change this because its used for passwords!
	// This is for other hash keys... Not sure yet
	define('HASH_GENERAL_KEY', 'MixitUp200');
	
	// This is for database passwords only
	define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');
