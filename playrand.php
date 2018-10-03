<?php


require('functions.php');

$file=getSoundFiles()[array_rand(getSoundFiles())];
echo $file;

if(!fileExists($file)){
	die("die, you jerk.");
}

// Let the filtering begin!

$file=str_replace('..', '', $file);
$file=str_replace('/', '', $file);
$file=str_replace('\'', '\\\'', $file);

// filtering done!

if(!fileExists($file)){
	die("die, you jerk.");
}

if(!in_array($_SERVER['REMOTE_ADDR'], array('192.168.111.95', '192.168.111.97'))){
#	header('HTTP/1.0 403 Forbidden');
	die('badIp.');
}

$cmd="mpg321 'sounds/{$file}' | at now & disown";

echo $cmd;
var_dump(shell_exec($cmd));


?>
