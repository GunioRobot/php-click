<?php
/**
 *
*/
$ch = curl_init("http://www.whatsmyip.info/");
$log_main->info(_('start the conector.'));
$fp = fopen('downloads/' . time() . "_ip.html", "w");
$log_main->info(_('open the file.'));

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_PROXY, '194.103.241.250:8080');
$log_main->info(_('set the values.'));

curl_exec($ch);
$log_main->info(_('exec query.'));
curl_close($ch);
$log_main->info(_('close the conector.'));
fclose($fp);
$log_main->info(_('close the file.'));
?>
