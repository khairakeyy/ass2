$(document).ready(function(){
    $.ajax({
        url: "ambil_data_bahasa_isyarat.php",
        type: "GET",
        dataType: "json",
        success: function(data){
            tampilkanData(data);
        }
    });
});

function tampilkanData(data){
    var tabelHTML = "<table><tr><th>ID</th><th>Kata</th><th>Arti</th><th>Aksi</th></tr>";

    for(var i = 0; i < data.length; i++){
        var id = data[i].id;
        var kata = data[i].kata;
        var arti = data[i].arti;

        tabelHTML += "<tr><td>" + id + "</td><td>" + kata + "</td><td>" + arti + "</td><td><button onclick='hapusData(" + id + ")'>Hapus</button></td></tr>";
    }

    tabelHTML += "</table>";

    $("#tabel_bahasa_isyarat").html(tabelHTML);
}

function hapusData(id){
    $.ajax({
        url: "hapus_data_bahasa_isyarat.php?id=" + id,
        type: "GET",
        success: function(){
            location.reload();
        }
    });
}
