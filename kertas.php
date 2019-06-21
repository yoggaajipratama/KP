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
                  <a href="mate.php"><p>MATE</p></a>
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
        </td>
      </tr>
    </table>

    <h3 style="text-decoration: underline;">Contoh warna kertas</h3>
    <div class="container">
      <table class="table">
        <tr>
          <th><h4>Glossy</h4></th>
          <tr>
            <td>
              <img class="images" src="img/rg.jpg">
              <img class="images" src="img/bg.jpg">
              <img class="images" src="img/hg.jpg">
              <img class="images" src="img/eg.jpg">
              <img class="images" src="img/kg.jpg">
              <img class="images" src="img/pg.jpg">
            </td>
          </tr>
        </tr>
        <tr>
          <th><h4>Matte</h4></th>
          <tr>
              <td>
                <img class="images" src="img/rm.jpg">
                <img class="images" src="img/bm.jpg">
                <img class="images" src="img/himatt.jpg">
                <img class="images" src="img/gm.jpeg">
                <img class="images" src="img/rama.jpg">
                <img class="images" src="img/pm.jpg">
              </td>
          </tr>
        </tr>
      </table>
    </div>
  </div>
<?php include "footer.php"; ?>