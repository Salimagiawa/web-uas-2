<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['siswa_id'];
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];

$ubah=$koneksi->query("update siswa set nis='$nis', nama='$nama', jenis_kelamin='$jenis_kelamin', kelas='$kelas', jurusan='$jurusan', alamat='$alamat' where siswa_id='$id'");

if($ubah==true){

    header("location:tampil-siswa.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>