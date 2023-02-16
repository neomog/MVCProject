<?php
/**
 * DB Params
 */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'shareposts');

/**
 * App Root Definition
 */
//define('APPROOT', dirname(__FILE__, 3));
//define('APPROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
//                                    ^
// Use above in case of virtual host |||
define('APPROOT', $_SERVER['DOCUMENT_ROOT'] . 'sharepost/');

define('STYLE', APPROOT . "public/css/men.css");
/**
 * URL Root Definition
 */
//define('URLROOT', $_SERVER['REQUEST_URI']);
define('URLROOT', 'http://localhost/sharepost');
define('CSS_URLROOT', 'http://localhost/sharepost');

/**
 * App Root Definition
 */
define('SITENAME', 'SharePosts');

/**
 * App Version
 */
define('APPVERSION', '1.0.0');