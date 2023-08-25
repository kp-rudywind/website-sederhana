<?php
$servername = "0.0.0.0:3306";
$username = "root";
$password = "root";
$dbname = "prakerja";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
