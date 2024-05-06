<?php
$koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

$query = "SELECT * FROM tabel_bahasa_isyarat";
$result = mysqli_query($koneksi, $query);

$tabel_bahasa_isyarat = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tabel_bahasa_isyarat[] = $row;
    }
} else {
    echo "Tidak ada data bahasa isyarat.";
}

header('Content-Type: application/json');
echo json_encode($tabel_bahasa_isyarat);

mysqli_close($koneksi);
?>
