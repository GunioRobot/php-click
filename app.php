<?php
/**
 *
*/
include ('app/click.php');
$proxys = file('config/proxys.txt');
$refers = file('config/refers.txt');
/*print_r($fp);
function click($url,$proxy,$refer = 'google.com/'){
	$log_download =& LoggerManager::getLogger('Download');
	$ch = curl_init($url);
	$log_download->info(_('start the conector.'));
	$fp = fopen('downloads/' . time() . "_ip.html", "w");
	$log_download->info(_('open the file.') . time());
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_PROXY, $proxy);
	$log_download->info(_('set the values.'));
	curl_exec($ch);
	$log_download->info(_('exec query.'));
	curl_close($ch);
	$log_download->info(_('close the conector.'));
	fclose($fp);
	$log_download->info(_('close the file.'));
}*/

foreach($proxys as $proxy){
	#$click = new clickThread(time() . microtime());
	#$click->run('http://www.andy21.com/ip/',$proxy);
	#$click = new clickThread(time() . microtime(),'http://www.andy21.com/ip/',$proxy,$refer,$user,$lang);
	$click = new clickThread(time() . microtime(),'http://localhost/~compermisos/info.php',$proxy);
	$click->start();
}
?>
