<?php include "header.php"; ?>
<?php include "connection.php"; ?>

	<div class="container">
		<div class="container-fluid">
			<h2>Tambah Gambar</h2>
			<form action="insert.php" method="post" enctype="multipart/form-data">
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
								<button class="btn btn-success" type="submit" name="upload">Submit</button>
							</td>
						</tr>
					</table>
				</div>
			</form>

			<h2>Pesanan Masuk</h2>
		<div class="table">
				<table class="table"> 
					<tr>
						<th>Nama</th>
						<th>Nomor Telepon</th>
						<th>Gambar</th>
						<th>Status</th>
					</tr>
					<?php while($row = mysqli_fetch_array($result)){ ?>
					<tr>
							<td><?= $row['nama']; ?></td>
							<td><?= $row['tlp']; ?></td>
							<td><img src="images/<?= $row['image']?>" style='width:auto;height:75px;'></td>

							<td><?= $row['status']; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
<?php include "footer.php"; ?>