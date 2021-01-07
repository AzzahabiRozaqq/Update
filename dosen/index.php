<!DOCTYPE html>
<html>
<head>
	<title>Dosen</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Data Dosen</div>

		<a href="create.php" class="btn btn-info">Tambah Data</a>
		<br> <br>

		<table class="table table-bordered">
			<thead>				
				<tr>
					<th>NO</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>		
			<tbody>
				<?php
				require '../koneksi.php';
				$query = "select * from dosen";
				$result = mysqli_query($link, $query);
				$no ='1';
				while ($isi = mysqli_fetch_object($result)) {
					?>
					<tr>
						<td><?= $no++;?></td>
						<td><?= $isi-> nip;?></td>
						<td><?= $isi-> nama_dosen;?></td>
						<td><?= $isi-> alamat;?></td>
						<td>
							<a href="DELETE.php?nip=<?php echo $isi->nip; ?>"
							 class="btn btn-danger">DELETE</a>
							
							<a href="Update.php?url-nip=<?php echo $isi->nip; ?>"
							 class="btn btn-warning">EDIT</a>
							 
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>