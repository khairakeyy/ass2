// Panggil data dari server ke dalam bentuk JSON menggunakan AJAX
$(document).ready(function(){
    $.ajax({
        url: "ambil_data_kamus.php",
        type: "GET",
        dataType: "json",
        success: function(data){