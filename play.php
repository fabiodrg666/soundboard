<?php

require 'functions.php';
require 'vendor/autoload.php';

use wapmorgan\Mp3Info\Mp3Info;

$file=$_GET['file'];

if(!fileExists($file)){
	die("die, you jerk.");
}



$audio = new Mp3Info("sounds/$file", true);
if($audio->duration > 7){
	die("too long, you fool.");
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
	die('badIp.');
}

$cmd="mpg321 'sounds/{$file}' | at now & disown";

echo $cmd;
var_dump(shell_exec($cmd));


?>
