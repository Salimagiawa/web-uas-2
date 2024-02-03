<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['pendaftaran_id'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$alamat=$_POST['alamat'];
$pilih_jurusan=$_POST['pilih_jurusan'];


$ubah=$koneksi->query("update pendaftaran set nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat', pilih_jurusan='$pilih_jurusan' where pendaftaran_id='$id'");

if($ubah==true){

    header("location:tampil-pendaftaran.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>