<?php
require_once 'config.php';
require_once __DIR__ .'/queries/getRooms.php';
$conn->close();

echo $blade->run('rooms_grid', ['title' => 'Rooms', 'rooms' => $rooms]);
?>