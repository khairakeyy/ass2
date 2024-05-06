<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

    if (!$koneksi) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    $query = "DELETE FROM bahasa_isyarat WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data.";
    }

    mysqli_close($koneksi);
}
?>
