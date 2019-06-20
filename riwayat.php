<?php include "header.php"; ?>
	<div class="container">
		<h3> Pembelian</h3>
		<div class="table">
			<table class="table">
				<tr>
					<th>ID</th>
					<th>Tanggal Pembelian</th>
					<th>Status</th>
				</tr>
				<tr>
					<?php foreach ($status_selesai as $key): ?>
						<td><?= $key['id']; ?></td>
						<td><?= $key['tanggal']; ?></td>
						<td><?= $key['status']; ?></td>
					<?php endforeach ?>
				</tr>
			</table>
		</div>
	</div>
<?php include "footer.php"; ?>