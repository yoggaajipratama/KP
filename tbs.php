<?php include "header.php"; ?>
	<div class="container">
		<div class="container-fluid">
			<H3>TRANSAKSI BELUM SELESAI</H3>
			<div class="table" style="width: 90%;">
				<table class="table table-striped"> 
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Nomor telepon</th>
						<th>Nama gambar</th>
						<th>Status</th>
						<th>Warna kertas</th>
						<th>Jenis kertas</th>
						<th>Perkiraan selesai</th>
						<th>Ubah status</th>
					</tr>
					<?php foreach ($status_bselesai as $key): ?>
						<form action="connection.php" method="post">
							<tr>
								<input type="hidden" name="id" value="<?= $key['id']; ?>">
								<td><?= $key['id']; ?></td>
								<td><?= $key['nama']; ?></td>
								<td><?= $key['tlp']; ?></td>
								<td><?= $key['image']; ?></td>
								<td><?= $key['status']; ?></td>
								<td><?= $key['warna_kertas']; ?></td>
								<td><?= $key['jenis_kertas']; ?></td>
								<td>~</td>
								<td>
									<button type="submit" name="selesai" onclick="return confirm('Selesaikan pesanan? ')" class="btn btn-danger">Selesai</button>
								</td>
							</tr>
						</form>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
<?php include "footer.php"; ?>