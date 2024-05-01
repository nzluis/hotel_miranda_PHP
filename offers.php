<?php
require_once('config.php');

echo $blade->run("offers", array("title" => "Offers")); 
?>