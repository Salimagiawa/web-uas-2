<?php include "header.php"; ?>

  <div id="pendaftaran">
        <div class="container">
          <div class="row">
          	<h2>Pendaftaran</h2>
            <div class="col-md-12">


         <?php 

          if(@$_GET['pesan']=="inputBerhasil"){

          ?>
                  <div class="alert alert-success">
                  Terimakasih, Anda telah berhasil mendaftar!
                  </div>
          <?php

          }

          ?>


              <form action="proses-pendaftaran.php" method="post">

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


                 		<button type="submit" class="btn btn-primary">Kirim</button>
                 		<button type="reset" class="btn btn-danger">Batal</button>
              </form>
            </div>
          </div>
       </div>
		</div> <br><br>

		<?php include "footer.php"; ?>