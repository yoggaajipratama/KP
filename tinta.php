<?php include "header.php"; ?>
	<div class="container">
		<h3> TINTA</h3>	
		<center>
		<img src="img/tinta.png" width="500" height="300">
		</center>
		<div class="container">
			<h3> Pengisian Ulang</h3>
				<table class="table">
						<th>Tanggal</th>
						<th>Jumlah</th>
						<th>Warna</th>
					<tr>
						<td><input type="date" name="date"></td>
						<td><input type="number" name="number"></td>
						<td>
							<select>
								<option>Glossy</option>
							</select>
						</td>
					</tr>	
					<div>
						<td>
							<button class="btn-success" type="submit">submit</button>
						</td>
					</div>	
				</table>
			<h3> Prediksi Tinta Habis</h3>
				<table class="table">
					<tr>
						<th>Tanggal</th>
						<th>Warna</th>
					</tr>	
				</table>
			<h3> Keterangan Tinta</h3>
			<div class="table">
				<table class="table">
					<tr>
						<th>Nomor</th>
						<th>Warna</th>
						<th>Keterangan</th>
					</tr>				
				</table>
			</div>
			</div>
			</div>		
		</div>
	</div>
<?php include "footer.php"; ?>