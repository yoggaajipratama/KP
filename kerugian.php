<?php require 'header.php'; ?>
<div style="margin: 30px">
	<hr style="width: 100%">
	<h2>Kerugian</h2>
	<hr style="width: 100%">
	<table style="width: 80%;" class="table table-striped">
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
</div>