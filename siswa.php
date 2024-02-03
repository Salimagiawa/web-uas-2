<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Siswa</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>NIS</th>
							<th>Nama Lengkap</th>
							<th>Jenis Kelamin</th>
							<th>kelas</th>
							<th>jurusan</th>
							<th>Alamat</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from siswa order by nis ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nis']?></td>
							<td><?php echo $row['nama']?></td>
							<td><?php echo $row['jenis_kelamin']?></td>
							<td><?php echo $row['kelas']?></td>
							<td><?php echo $row['jurusan']?></td>
						    <td><?php echo $row['alamat']?></td>
				       </tr>
			<?php } ?>
		 </table>
		</div>
      </div>
	</div>
		</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page --><br><br><br><br><br>
		<?php include "footer.php";?>
