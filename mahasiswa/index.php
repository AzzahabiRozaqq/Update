<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Data Mahasiswa</div>
		<table class="table table-bordered">
			<thead>					
				<tr>
					<th>NO</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Aksi</th>
				</tr>
			</thead>		
			<tbody>
				<?php
				require '../koneksi.php';
				$query = "select * from mahasiswa";
				$result = mysqli_query($link, $query);
				$no ='1';
				while ($isi = mysqli_fetch_object($result)) {
					?>
					<tr>
						<td><?= $no++;?></td>
						<td><?= $isi-> nim;?></td>
						<td><?= $isi-> nama_mahasiswa;?></td>
						<td><?= $isi-> prodi;?></td>
						<td>
							<a href="" class="btn btn-danger">DELETE</a>
							<a href="" class="btn btn-warning">EDIT</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>