<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-pendaftaran.php" method="POST">
                  
                  <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                 </div>

                  <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                  <div class="form-group">
                    <label for="nama">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                 </div>

                 <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat"class="form-control" placeholder="isikan Alamat Lengkap"></textarea>
                    </div>

                   <div class="form-group">
                        <label for="pilih_jurusan">Pilih Jurusan</label>
                        <select name="pilih_jurusan" class="form-control">
                            <option value="Manajemen">Manajemen</option>
                            <option value="Pertanian">Pertanian</option>
                            <option value="Otomotif">Otomotif</option>
                            <option value="Akuntansi">Akuntansi</option>
                        </select>
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>