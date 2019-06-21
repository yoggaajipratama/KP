<?php include 'header.php'; ?>
	<div class="container">
		<h1>KERTAS GLOSSY</h1>
		<h3 style="text-decoration: underline;">Pengisian kertas</h3>
		<table class="table">
			<tr>
				<th>Warna</th>
				<th>Tambahan</th>
			</tr>
			<form action="insert_glossy.php" method="post">
				<tr>
					<td>
						<select name="warna">
						<?php foreach ($kertas as $key): ?>
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
		<table class="table table-stripped">
			<tr>
				<th class="active">Nomor</th>
				<th class="active">Tanggal</th>
				<th class="active">Warna</th>
				<th class="active">Jumlah</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<h3 style="text-decoration: underline;">Prediksi kertas habis</h3>
		<table class="table table-stripped">
			<tr>
				<th class="active">Nomor</th>
				<th class="active">Tanggal</th>
				<th class="active">Warna</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>
<?php include 'footer.php'; ?>