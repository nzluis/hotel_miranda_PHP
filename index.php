<?php
require_once 'config.php';
require_once __DIR__ .'/queries/getRooms.php';

echo $blade->run("index", array("title" => "Home", 'rooms' => $rooms));
?>