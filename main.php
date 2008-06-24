#!/usr/bin/php
<?php
require_once('config/base.php');
require_once(GETTEXT_DIR . '/gettext.inc');
require_once(LOG4PHP_DIR . '/LoggerManager.php');
require_once(PHPCLI_DIR . '/class_cli.php');
$log_main =& LoggerManager::getLogger('Main');
$log_main->info('All base componet ara loaded.');
require_once(APP_CONFIGURATION . '/default.php');
$log_main->info(_('Base config and default values loaded.'));
echo _('Welcome to PHP APPNAME.'),"\n",_('Your request: HTTP://'),$hola, '',"\n";
require_once(PROJECT_DIR . '/cli_values.php');
require_once(PROJECT_DIR . '/app.php');
LoggerManager::shutdown();
?>