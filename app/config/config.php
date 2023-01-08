<?php

/**
 * App Root Definition
 */
//define('APPROOT', dirname(__FILE__, 3));
//define('APPROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
//                                    ^
// Use above in case of virtual host |||
define('APPROOT', $_SERVER['DOCUMENT_ROOT'] . 'nathmvc/');

define('STYLE', APPROOT . "public/css/men.css");
/**
 * URL Root Definition
 */
define('URLROOT', $_SERVER['REQUEST_URI']);

/**
 * App Root Definition
 */
define('SITENAME', 'NathMVC');
//echo SITENAME;