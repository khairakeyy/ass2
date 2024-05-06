$(document).ready(function(){
    $.ajax({
        url: "ambil_data_jadwal.php",
        type: "GET",
        dataType: "json",
        success: function(data){
            // Panggil fungsi untuk menampilkan data
            tampilkanData(data);
        }
    });
});

function tampilkanData(data){
    // Buat variabel untuk menyimpan HTML tabel
    var tabelHTML = "<table><tr><th>ID</th><th>Nama Kegiatan</th><th>Waktu</th><th>Tempat</th></tr>";

    // Loop melalui setiap objek dalam data JSON
    for(var i = 0; i < data.length; i++){
        // Ambil nilai properti dari setiap objek
        var id = data[i].id;
        var namaKegiatan = data[i].nama_kegiatan;
        var waktu = data[i].waktu;
        var tempat = data[i].tempat;

        // Tambahkan baris baru ke dalam tabelHTML
        tabelHTML += "<tr><td>" + id + "</td><td>" + namaKegiatan + "</td><td>" + waktu + "</td><td>" + tempat + "</td></tr>";
    }

    // Tutup tag tabel
    tabelHTML += "</table>";

    // Masukkan HTML tabel ke dalam elemen dengan id "tabel_jadwal"
    document.getElementById("tabel_jadwal").innerHTML = tabelHTML;
}
