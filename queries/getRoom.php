<?php
$id = $_GET['id'];
$getRoom = 'SELECT * FROM room WHERE _id = ?';
$stmt = $conn->prepare($getRoom);
$stmt->bind_param('i', $id);
$stmt->execute();
$room = $stmt->get_result();
$room = $room->fetch_assoc();
?>