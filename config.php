<?php

$host = 'localhost';
$db = 'cv_data';
$user = 'root';
$pwd = '';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
    die('Gagal terhubung ke database' . mysqli_connect_error());
}

