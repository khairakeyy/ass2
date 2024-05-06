<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

// Query untuk mengambil data kamus bahasa isyarat
$query = "SELECT * FROM kamus_bahasa_isyarat";
$result = mysqli_query($koneksi, $query);

// Mengubah hasil query menjadi array asosiatif
$kamus_bahasa_isyarat = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Mengubah array menjadi format JSON
echo json_encode($kamus_bahasa_isyarat);

// Menutup koneksi
mysqli_close($koneksi);
?>
