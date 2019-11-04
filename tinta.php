<?php include "header.php"; ?>
<div class="container">
	<h3> TINTA</h3>	
	<center>
		<img src="img/tinta.png" width="400" height="200" style="margin-right: 180px;">
	</center>
	<div class="container">
		<h3> Pengisian Ulang</h3>
		<table class="table">
			<th>Warna</th>
			<th>Jumlah</th>
			<th>Tambahkan</th>
			<tr>
				<form action="db/insert_tinta.php" method="post">
					<td>
						<select name="warna">
							<?php foreach ($warna_tinta as $key): ?>
								<option><?= $key['warna_tinta']; ?></option>
							<?php endforeach ?>
						</select>
					</td>
					<td><input type="number" name="jml" min="0" placeholder="0"></td>
					<td>
						<button class="btn btn-success" type="submit" name="submit">Tambahkan(+)</button>
					</td>
				</form>
			</tr>	
		</table>
		<h3> Keterangan Tinta</h3>
		<div class="table" style="width: 80%">
			<table class="table table-striped">
				<tr>
					<th>Warna</th>
					<th>Sisa</th>
				</tr>
				<?php foreach ($warna_tinta as $key): ?>
					<tr>
						<td><?= $key['warna_tinta'] ?></td>
						<td><?= $key['jml'] ?></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
	</div>
<?php include "footer.php"; ?>