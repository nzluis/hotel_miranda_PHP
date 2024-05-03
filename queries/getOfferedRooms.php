<?php
$getAllOfferedRooms = 'SELECT * FROM room WHERE offer = 1';
$offeredRooms = $conn->query($getAllOfferedRooms);
$offeredRooms = $offeredRooms->fetch_all(MYSQLI_ASSOC);
?>