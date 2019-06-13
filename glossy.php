<?php include 'header.php'; ?>
	<div class="container">
		<h1>KERTAS GLOSSY</h1>
		<h3 style="text-decoration: underline;">Pengisian kertas</h3>
		<table class="table">
			<tr>
				<th class="active">Tanggal</th>
				<th class="active">Jumlah</th>
				<th class="active">Warna</th>
			</tr>
			<tr>
				<td><input type="date" name="tgl"></td>
				<td><input type="number" step="number" name="jml" value="0" placeholder="0"></td>
				<td>
					<select>
						<option>Hitam</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><button class="btn btn-success" type="submit">submit</button></td>
			</tr>
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