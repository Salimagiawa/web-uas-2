<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nis=$_POST['nis'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into siswa(nis,nama,jenis_kelamin,kelas,jurusan,alamat) 
                        values ('$nis', '$nama', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat')");

if($simpan==true){

    header("location:tampil-siswa.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>