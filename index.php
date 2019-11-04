<?php include "header.php"; ?>
<div class="container">
<?php include 'db/warning.php'; ?>
<hr style="width: 100%">
<h2>Kerugian</h2>
<hr style="width: 100%">
<table style="width: 300px;" class="table-striped">
	<tr>
		<th><b style="text-decoration: underline;">Nomor</b></th>
		<th><b style="text-decoration: underline;">Sisa ukuran</b></th>
		<th><b style="text-decoration: underline;">Kerugian</b></th>
	</tr>
	<?php $n=1; ?>
	<?php foreach ($rugi as $key): ?>
	<tr>
		<td><?= $n++; ?></td>
		<td><?= $key['potongan_kertas']; ?></td>
		<td><?= $key['kerugian_uang']; ?></td>
	</tr>
	<?php endforeach ?>
</table>
	<hr style="width: 100%">
	<h2>Sisa Kertas & Tinta</h2>
	<hr style="width: 100%">
	<table width="90%">
		<td>
			<h3>Glossy</h3>
			<table style="width: 300px;" class="table-striped">
				<tr>
					<th><b style="text-decoration: underline;">Nomor</b></th>
					<th><b style="text-decoration: underline;">Warna</b></th>
					<th><b style="text-decoration: underline;">Sisa</b></th>
					<th><b style="text-decoration: underline;">Pengisi terakhir</b></th>
				</tr>
				<?php $n=1; ?>
				<?php foreach ($kertasglossy as $key): ?>
				<tr>
					<td><?= $n++; ?></td>
					<td><?= $key['warna_kertas']; ?></td>
					<td><?= $key['jml']; ?></td>
					<td><?= $key['tgl']; ?></td>
				</tr>
				<?php endforeach ?>
			</table>
		</td>
		<td>
			<h3>Matte</h3>
			<table style="width: 300px;" class="table-striped">
				<tr>
					<th><b style="text-decoration: underline;">Nomor</b></th>
					<th><b style="text-decoration: underline;">Warna</b></th>
					<th><b style="text-decoration: underline;">Sisa</b></th>
					<th><b style="text-decoration: underline;">Pengisi terakhir</b></th>
				</tr>
				<?php $n=1; ?>
				<?php foreach ($kertasmatte as $key): ?>
				<tr>
					<td><?= $n++; ?></td>
					<td><?= $key['warna_kertas']; ?></td>
					<td><?= $key['jml']; ?></td>
					<td><?= $key['tgl']; ?></td>
				</tr>
				<?php endforeach ?>
			</table>
		</td>
			<td>
			<h3>Tinta</h3>
			<table style="width: 300px;" class="table-striped">
				<tr>
					<th><b style="text-decoration: underline;">Nomor</b></th>
					<th><b style="text-decoration: underline;">Warna</b></th>
					<th><b style="text-decoration: underline;">Sisa</b></th>
					<th><b style="text-decoration: underline;">Pengisi terakhir</b></th>
				</tr>
				<?php $n=1; ?>
				<?php foreach ($warna_tinta as $key): ?>
					<tr>
						<td><?= $n++; ?></td>
						<td><?= $key['warna_tinta'] ?></td>
						<td><?= $key['jml'] ?></td>
						<td><?= $key['tgl'] ?></td>
					</tr>
				<?php endforeach ?>
			</table>
			</td>
	</table>
<<<<<<< HEAD
	<h2>Tambah Gambar</h2>
	<p>Catatan: Hanya diperuntukkan untuk gambar dengan ukuran kecil dengan max lebar 21 cm (793 pixel) dan tinggi 29,7 cm (1122 pixel) atau standar ukuran kertas A4.</p>
	<hr style="width: 100%">
	<form action="db/insert.php" method="post" enctype="multipart/form-data">
		<div class="table">
			<table class="table" style="background-color: white; width: 90%;"> 
				<tr>
					<th>Nama</th>
					<th>Nomor telepon</th>
					<th>Jenis kertas</th>
					<th>Warna kertas</th>
					<th>Gambar</th>
				</tr>
				<tr>
					<td>
						<input type="text" name="nama" placeholder="Nama" autocomplete="off">
					</td>
					<td>
						<input type="text" name="tlp" placeholder="Nomor Telepon" autocomplete="off">
					</td>
					<td>
						<select name="jenis_kertas">
							<option>glossy</option>
							<option>matte</option>
						</select>
					</td>
					<td>
						<select name="warna_kertas">
							<?php foreach ($kertasglossy as $key): ?>
							<option value="<?= $key['warna_kertas'];?>">
								<?= $key['warna_kertas']; ?> <?= $key['jenis']; ?>
							</option>
							<?php endforeach ?>

							<?php foreach ($kertasmatte as $key): ?>
							<option value="<?= $key['warna_kertas'];?>">
									<?= $key['warna_kertas']; ?> <?= $key['jenis']; ?>
							</option>
							<?php endforeach ?>
						</select>
					</td>
					<td>
						<input type="file" name="image">
					</td>
				</tr>
				<tr>
					<td>
						<button class="btn btn-success" type="submit" name="submit">Submit</button>
					</td>
				</tr>
			</table>
		</div>
	</form>
=======
>>>>>>> fb557a827701cbcbaf421ebb517bd4f00997e044
<h2>Pesanan Masuk</h2>
	<table class="table" style="background-color: white; width: 90%;"> 
		<tr>
			<th style="width: 20%;">ID</th>
			<th>Warna & Jenis</th>
			<th>Gambar</th>
			<th>Status</th>
			<th>Masukkan ke cetak</th>
			<th>Hapus Pesanan</th>
		</tr>
		<?php while($row = mysqli_fetch_array($result)){ ?>
		<tr>
			<td><?= $row['id']; ?></td>
			<td><?= $row['warna_kertas']; ?>-<?= $row['jenis_kertas']; ?></td>
			<td><img src="images/<?= $row['image']?>" style='width:auto;height:75px;'></td>
			<td><b><?= $row['tahap']; ?></b></td>
			<td>
				<a href="db/tahap.php?id=<?= $row['id']; ?>" onclick="return confirm('Masukkan ke tahap cetak sekang? (tidak bisa di batalkan kembali) ')">Print</a> |
				<a href="db/tahap2.php?id=<?= $row['id']; ?>" onclick="return confirm('Batalkan printing? ')">Pending</a>
			</td>
			<td>
				<?php if ($row['tahap']=='print'): ?>
					<p>Tidak dapat dibatalkan</p>
					<?php else: ?>
						<a href="db/delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Batalkan pesanan? ')">Batalkan Pesanan</a>
				<?php endif ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
<?php include "footer.php"; ?>