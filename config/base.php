<?php
/**
 *
*/
define(PROJECT_DIR, realpath('./'));
define(LOCALE_DIR, PROJECT_DIR .'/locale');
define(DEFAULT_LOCALE, 'en_US');
define('LIB_DIR', PROJECT_DIR . '/lib');
define('LOG4PHP_DIR', LIB_DIR . '/log4php');
define('PHPCLI_DIR', LIB_DIR . '/phpcli');
define('PHP-FORK_DIR', LIB_DIR . '/php_fork');
define('GETTEXT_DIR', LIB_DIR . '/php-gettext');
define('APP_CONFIGURATION', PROJECT_DIR . "config");
define('LOG4PHP_CONFIGURATION',APP_CONFIGURATION . "log4php/.xml");
$supported_locales = array('en_US', 'sr_CS', 'de_CH');
$encoding = 'UTF-8';
$locale = (isset($_GET['lang']))? $_GET['lang'] : DEFAULT_LOCALE;

?>
