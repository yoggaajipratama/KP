<?php include "header.php"; ?>
	<div class="container">
		<div class="container-fluid" style="margin-right: 4%;">
			<H3>TRANSAKSI BELUM SELESAI</H3>
			<div class="table">
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
						<form action="transaksi.php" method="post">
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
									<input type="submit" name="submit" onclick="return confirm('Selesaikan pesanan? ')" value="submit" class="btn btn-danger">
								</td>
							</tr>
						</form>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
<?php include "footer.php"; ?>