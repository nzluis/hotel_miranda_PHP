<?php
require_once 'config.php';

echo $blade->run("index", array("title" => "Home"));
?>