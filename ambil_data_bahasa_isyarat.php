<?php
$koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

$query = "SELECT * FROM bahasaisyarat";
$result = mysqli_query($koneksi, $query);

$bahasaisyarat = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $bahasaisyarat[] = $row;
    }
} else {
    echo "Tidak ada data bahasa isyarat.";
}

header('Content-Type: application/json');
echo json_encode($bahasaisyarat);

mysqli_close($koneksi);
?>
