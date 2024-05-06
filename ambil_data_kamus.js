// Panggil data dari server ke dalam bentuk JSON menggunakan AJAX
$(document).ready(function(){
    $.ajax({
        url: "ambil_data_kamus.php",
        type: "GET",
        dataType: "json",
        success: function(data){
                // Proses hasil pemanggilan AJAX
            // Tampilkan data ke dalam bentuk tabel
            var tabel = "<table><tr><th>ID</th><th>Kata Isyarat</th><th>Terjemahan</th><th>Aksi</th></tr>";
            $.each(data, function(index, kata){
                tabel += "<tr>";
                tabel += "<td>" + kata.id + "</td>";
                tabel += "<td>" + kata.kata_isyarat + "</td>";
                tabel += "<td>" + kata.terjemahan + "</td>";
                tabel += "<td><button onclick='hapusData(" + kata.id + ")'>Hapus</button></td>";
                tabel += "</tr>";
            });
            tabel += "</table>";
            $("#tabel_kamus").html(tabel);
        }
    });
});