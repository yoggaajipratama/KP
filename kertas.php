<?php include "header.php"; ?>
	<div class="container">
    <h2>JENIS KERTAS</h2>
    <table class="table">
      <tr>
        <th>
          <div class="deep">
            <div class="container">
              <div class="deep2">
                <center>
                  <a href="glossy.php"><p>GLOSSY</p></a>
                </center>
              </div>
            </div>
          </div>
        </th>
        <th>
          <div class="right">
            <div class="container">
              <div class="right2">
                <center>
                  <a href="matte.php"><p>MATTE</p></a>
                </center>
              </div>
            </div>
          </div>
        </th>
      </tr>
      <tr>
        <td><br>
          <h4><b>Sisa kertas : </b></h4>
            <div>
              <table style="width: 55%;" class="table">
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
            </div>
        </td>
        <td><br>
          <h4><b>Sisa kertas : </b></h4>
            <div>
              <table style="width: 55%;" class="table">
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
            </div>
        </td>
      </tr>
    </table>
<?php include "footer.php"; ?>