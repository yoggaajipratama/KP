<?php include "header.php"; ?>
<?php include "connection.php"; ?>
	<div class="container">
		<div class="container-fluid">
			<a href=""><i class="fa fa-plus-square"> TAMBAH GAMBAR</i></a>
			<form action="insert.php" method="post">
				<div class="table">
					<table class="table"> 
						<tr>
							<th>Nama</th>
							<th>Nomor Telepon</th>
							<th>Gambar</th>
						</tr>
						<tr>
							<td>
								<input type="text" name="nama" placeholder="Nama">
							</td>
							<td>
								<input type="text" name="tlp" placeholder="Nomor Telepon">
							</td>
							<td>
								<input type="file" name="image">
							</td>
						</tr>
						<tr>
							<td>
								<button class="btn btn-success" type="submit">submit</button>
							</td>
						</tr>
					</table>
				</div>
			</form>

			<a href=""><i class="fa fa-plus-square"> HAPUS GAMBAR</i></a>
			<div class="table">
				<table class="table"> 
					<tr>
						<th>Nama</th>
						<th>Nomor Telepon</th>
						<th>Gambar</th>
						<th>Status</th>
					</tr>
					<?php while($dt = mysqli_fetch_array($query)){ ?>
					<tr>
							<td><?= $dt['nama']; ?></td>
							<td><?= $dt['tlp']; ?></td>
							<td><?= $dt['gambar']; ?></td>
							<td><?= $dt['status']; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
<?php include "footer.php"; ?>