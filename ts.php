<?php include "header.php"; ?>
	<div class="container">
		<div class="container-fluid">
			<H3>TRANSAKSI SELESAI</H3>
			<div class="table" style="width: 90%;">
				<table class="table table-striped"> 
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Nomor telepon</th>
						<th>Nama gambar</th>
						<th>Status</th>
					</tr>
					<?php foreach ($status_selesai as $key): ?>
					<tr>
							<td><?= $key['id']; ?></td>
							<td><?= $key['nama']; ?></td>
							<td><?= $key['tlp']; ?></td>
							<td><?= $key['image']; ?></td>
							<td><?= $key['status']; ?></td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
<?php include "footer.php"; ?>