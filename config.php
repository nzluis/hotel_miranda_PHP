<?php
require_once 'BladeOne.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); 

$env = parse_ini_file('.env');
$conn = new mysqli($env['SERVER'], $env['USER'], $env['PASS'], $env['DB']);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>