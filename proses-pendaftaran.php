
<?php

include "koneksi.php";
$nama = $koneksi->real_escape_string($_POST['nama']); 
$jenis_kelamin = $koneksi->real_escape_string($_POST['jenis_kelamin']); 
$tanggal_lahir = $koneksi->real_escape_string($_POST['tanggal_lahir']);
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$pilih_jurusan = $koneksi->real_escape_string($_POST['pilih_jurusan']);



$simpan=$koneksi->query("insert into pendaftaran(nama,jenis_kelamin,tanggal_lahir,alamat,pilih_jurusan) 
                        values ('$nama', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$pilih_jurusan')");

if($simpan==true){

    header("location:pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>