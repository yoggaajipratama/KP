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