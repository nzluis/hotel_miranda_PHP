<?php

require_once 'config.php';

$getAllOfferedRooms = 'SELECT * FROM room WHERE offer = 1';
$offeredRooms = $conn->query($getAllOfferedRooms);
$offeredRooms = $offeredRooms->fetch_all(MYSQLI_ASSOC);

$getCheapestRooms = 'SELECT * FROM room ORDER BY price DESC';
$cheapestRooms = $conn->query($getCheapestRooms);
$cheapestRooms = $cheapestRooms->fetch_all(MYSQLI_ASSOC);
$cheapestRooms = array_slice($cheapestRooms, 0, 3);
$conn->close();

echo $blade->run('offers', ['title' => 'Offers', 'offeredRooms' => $offeredRooms, 'cheapestRooms' => $cheapestRooms]);
