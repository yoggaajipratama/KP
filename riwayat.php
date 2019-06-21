<?php include "header.php"; ?>
	<div class="container-fluid">
		<H3>PEMBELIAN BERHASIL</H3>
		<div class="table" style="width: 90%;">
			<table class="table table-striped">
				<tr>
					<th>ID transaksi</th>
					<th>Tanggal Pembelian</th>
					<th>Status</th>
				</tr>
				<?php foreach ($status_selesai as $key): ?>
				<tr>
					<td><?= $key['id']; ?></td>
					<td><?= $key['tanggal']; ?></td>
					<td><?= $key['status']; ?></td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
	</div>
<?php include "footer.php"; ?>