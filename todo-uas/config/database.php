<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "uas_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal!");
}
