<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$alamat=$_POST['alamat'];
$pilih_jurusan=$_POST['pilih_jurusan'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into pendaftaran(nama,jenis_kelamin,tanggal_lahir,alamat,pilih_jurusan) 
                        values ('$nama', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$pilih_jurusan')");

if($simpan==true){

    header("location:tampil-pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>