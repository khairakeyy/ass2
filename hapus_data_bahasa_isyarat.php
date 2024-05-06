<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $koneksi = mysqli_connect("bahasaisyarat");

    if (!$koneksi) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    $query = "DELETE FROM tabel_bahasa_isyarat WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data.";
    }

    mysqli_close($koneksi);
}
?>
