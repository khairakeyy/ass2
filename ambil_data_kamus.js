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
