<?php
$getRooms = 'SELECT * FROM room';
$rooms = $conn->query($getRooms);
$rooms = $rooms->fetch_all(MYSQLI_ASSOC);
?>