<?php include "header.php"; ?>
	<div class="container">
		<div class="container-fluid">
			<H3>TRANSAKSI BELUM SELESAI</H3>
			<div class="table" style="width: 90%;">
				<table class="table table-striped"> 
					<tr>
						<th>Nama</th>
						<th>Nomor Telepon</th>
						<th>Nama Gambar</th>
						<th>Status</th>
						<th>Warna Kertas</th>
						<th>Jenis Kertas</th>
						<th>Ubah status</th>
						<th>Perkiraan selesai</th>
					</tr>
					<?php foreach ($status_bselesai as $key): ?>
						<tr>
							<td><?= $key['nama']; ?></td>
							<td><?= $key['tlp']; ?></td>
							<td><?= $key['image']; ?></td>
							<td><?= $key['status']; ?></td>
							<td><?= $key['warna_kertas']; ?></td>
							<td><?= $key['jenis_kertas']; ?></td>
							<td><a href="<?php  ?>">Selesai</a></td>
						</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
<?php include "footer.php"; ?>