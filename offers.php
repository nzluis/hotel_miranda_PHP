<?php
require_once 'config.php';
require_once __DIR__ .'/queries/getPopularRooms.php';
require_once __DIR__ .'/queries/getOfferedRooms.php';
$conn->close();

echo $blade->run('offers', ['title' => 'Offers', 'offeredRooms' => $offeredRooms, 'popularRooms' => $popularRooms]);
?>