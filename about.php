<?php
require_once('config.php');

echo $blade->run("about", array("title" => "About")); 
?>