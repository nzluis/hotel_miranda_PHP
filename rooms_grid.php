<?php

require_once 'config.php';

$getRooms = 'SELECT * FROM room';
$rooms = $conn->query($getRooms);
$rooms = $rooms->fetch_all(MYSQLI_ASSOC);
$conn->close();

echo $blade->run('rooms_grid', ['title' => 'Rooms', 'rooms' => $rooms]);
