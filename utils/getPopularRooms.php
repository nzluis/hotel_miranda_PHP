<?php

$getPopularRooms = 'SELECT * FROM room ORDER BY price DESC';
$popularRooms = $conn->query($getPopularRooms);
$popularRooms = $popularRooms->fetch_all(MYSQLI_ASSOC);
$popularRooms = array_slice($popularRooms, 0, 3);

?>