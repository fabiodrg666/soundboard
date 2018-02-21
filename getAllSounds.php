<?php 
require_once("functions.php");

foreach(getSoundFiles() as $sound){ 
    echo($sound . " "); 
}

?>
