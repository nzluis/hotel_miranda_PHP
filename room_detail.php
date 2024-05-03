<?php
require_once 'config.php';
require_once __DIR__ .'/queries/getPopularRooms.php';
require_once __DIR__ .'/queries/getRoom.php';
$conn->close();

echo $blade->run('room_detail', ['title' => 'Detail', 'room' => $room, 'popularRooms' => $popularRooms]);
?>