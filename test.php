<?php

require 'functions.php';
require 'vendor/autoload.php';
  
use wapmorgan\Mp3Info\Mp3Info;

$audio = new Mp3Info("sounds/BaDumTss.mp3", true);

var_dump($audio->duration);


?>
