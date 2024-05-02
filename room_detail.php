<?php

require_once 'config.php';

$id = $_GET['id'];

$getRoom = 'SELECT * FROM room WHERE _id = 1';
$room = $conn->query($getRoom);
$conn->close();

echo $blade->run('room_detail', ['title' => 'Detail', 'room' => $room]);
