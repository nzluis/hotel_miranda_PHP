<?php

require_once 'config.php';
require_once(__DIR__ .'/utils/getPopularRooms.php');

$getAllOfferedRooms = 'SELECT * FROM room WHERE offer = 1';
$offeredRooms = $conn->query($getAllOfferedRooms);
$offeredRooms = $offeredRooms->fetch_all(MYSQLI_ASSOC);


$conn->close();

echo $blade->run('offers', ['title' => 'Offers', 'offeredRooms' => $offeredRooms, 'popularRooms' => $popularRooms]);
