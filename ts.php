<?php include "header.php"; ?>
	<div class="container">
		<div class="container-fluid">
			<H3>TRANSAKSI SELESAI</H3>
			<div class="table" style="width: 90%;">
				<table class="table table-striped"> 
					<tr>
						<th>Nama</th>
						<th>Nomor Telepon</th>
						<th>Nama Gambar</th>
						<th>Status</th>
					</tr>
					<tr>
						<?php foreach ($status_selesai as $key): ?>
							<td><?= $key['nama']; ?></td>
							<td><?= $key['tlp']; ?></td>
							<td><?= $key['image']; ?></td>
							<td><?= $key['status']; ?></td>
						<?php endforeach ?>
					</tr>
				</table>
			</div>
		</div>
	</div>
<?php include "footer.php"; ?>