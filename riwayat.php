<?php include "header.php"; ?>
	<div class="container">
		<h3> Pembelian</h3>
		<div class="table">
			<table class="table">
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