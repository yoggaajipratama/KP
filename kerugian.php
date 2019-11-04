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