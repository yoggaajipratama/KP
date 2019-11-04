<?php include 'header.php'; ?>
	<div class="container">
		<h1>KERTAS MATTE</h1>
		<h3 style="text-decoration: underline;">Pengisian kertas</h3>
		<table class="table">
			<tr>
				<th>Warna</th>
				<th>Tambahkan</th>
			</tr>
			<form action="db/insert_matte.php" method="post">
				<tr>
					<td>
						<select name="warna">
						<?php foreach ($kertasmatte as $key): ?>
							<option><?= $key['warna_kertas']; ?></option>
						<?php endforeach ?>
						</select>
					</td>
				
					<td>
						<input type="number" step="number" name="jml" min="0" placeholder="0">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" class="btn btn-success">
					</td>
				</tr>
			</form>
		</table>
		<h3 style="text-decoration: underline;">Pengisian terakhir</h3>
		<p>(Diurutkan berdasarkan pengisian terakhir)</p>
		<div style="width: 80%;">
			<table class="table table-striped">
				<tr>
					<th>Nomor</th>
					<th>Tanggal</th>
					<th>Warna</th>
					<th>Sisa</th>
				</tr>
				<?php $n=1; ?>
				<?php foreach ($kertasmatte as $key): ?>
					<tr>
						<td><?= $n++; ?></td>
						<td><?= $key['tgl']; ?></td>
						<td><?= $key['warna_kertas']; ?></td>
						<td><?= $key['jml']; ?></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
<?php include 'footer.php'; ?>