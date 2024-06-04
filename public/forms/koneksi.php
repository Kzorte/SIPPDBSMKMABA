<?php
$host = "localhost"; // Ganti dengan host Anda
$user = "root"; // Ganti dengan username Anda
$password = ""; // Ganti dengan password Anda
$database = "db_ppdb2024"; // Ganti dengan nama database Anda

$koneksi = new mysqli($host, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
?>
