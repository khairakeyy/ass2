<?php
$koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

$query = "SELECT * FROM bahasa_isyarat";
$result = mysqli_query($koneksi, $query);

$data_bahasa_isyarat = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data_bahasa_isyarat[] = $row;
    }
} else {
    echo "Tidak ada data bahasa isyarat.";
}

header('Content-Type: application/json');
echo json_encode($data_bahasa_isyarat);

mysqli_close($koneksi);
?>
