<?php

require_once 'config.php';
require_once(__DIR__ .'/utils/getPopularRooms.php');

$id = $_GET['id'];

$getRoom = 'SELECT * FROM room WHERE _id = '.$id;
$room = $conn->query($getRoom);
$room = $room->fetch_assoc();

$conn->close();

echo $blade->run('room_detail', ['title' => 'Detail', 'room' => $room, 'popularRooms' => $popularRooms]);
