<?php include 'header.php'; ?>
<table class="table" border="1">
<h2>CETAK STIKER BERDASARKAN WARNA</h2>
<tr>
    <h3>KERTAS GLOSSY</h3>
    <th>
        <tr>
            <?php foreach ($kertasglossy as $key): ?>
                <th>
                    <div class="box-print" style="background-color: <?= $key['warna_kertas']; ?>;">
                        <?php if ($key['warna_kertas']=='white' || $key['warna_kertas'] == 'yellow'): ?>
                            <center>
                                <?php if ($key['warna_kertas']=='white'): ?>
                                    <form action="paper.php" method="post">
                                    <input type="hidden" name="warna" value="<?= $key['warna_kertas']; ?>">
                                    <input type="hidden" name="jenis" value="<?= $key['jenis']; ?>">
                                        <div class="center">
                                            <button type="submit" style="color: black">
                                                <?= $key['warna_kertas']; ?>
                                            </button>
                                        </div>
                                    </form>
                                    <?php else: ?>
                                        <form action="paper.php" method="post">
                                        <input type="hidden" name="warna" value="<?= $key['warna_kertas']; ?>">
                                        <input type="hidden" name="jenis" value="<?= $key['jenis']; ?>">
                                            <div class="center">
                                                <button type="submit" style="color: black">
                                                    <?= $key['warna_kertas']; ?>
                                                </button>
                                            </div>
                                        </form>
                                <?php endif ?>
                            </center>
                        <?php else: ?>
                            <center>
                                <form action="paper.php" method="post">
                                <input type="hidden" name="warna" value="<?= $key['warna_kertas']; ?>">
                                <input type="hidden" name="jenis" value="<?= $key['jenis']; ?>">
                                    <div class="center">
                                        <button type="submit" style="color: black">
                                            <?= $key['warna_kertas']; ?>
                                        </button>
                                    </div>
                                </form>
                            </center>
                        <?php endif ?>
                    </div>
                </th>
            <?php endforeach ?>
        </tr>
    </th>
</tr>
</table>

<table class="table" border="1">
<tr>
    <h3>KERTAS MATTE</h3>
    <th>
        <tr>
            <?php foreach ($kertasmatte as $key): ?>
                <th>
                    <div class="box-print" style="background-color: <?= $key['warna_kertas']; ?>;">
                        <?php if ($key['warna_kertas']=='white' || $key['warna_kertas'] == 'yellow'): ?>
                            <center>
                                <?php if ($key['warna_kertas']=='white'): ?>
                                    <form action="paper.php" method="post">
                                    <input type="hidden" name="warna" value="<?= $key['warna_kertas']; ?>">
                                    <input type="hidden" name="jenis" value="<?= $key['jenis']; ?>">
                                        <div class="center">
                                            <button type="submit" style="color: black">
                                                <?= $key['warna_kertas']; ?>
                                            </button>
                                        </div>
                                    </form>
                                    <?php else: ?>
                                        <form action="paper.php" method="post">
                                        <input type="hidden" name="warna" value="<?= $key['warna_kertas']; ?>">
                                        <input type="hidden" name="jenis" value="<?= $key['jenis']; ?>">
                                            <div class="center">
                                                <button type="submit" style="color: black">
                                                    <?= $key['warna_kertas']; ?>
                                                </button>
                                            </div>
                                        </form>
                                <?php endif ?>
                            </center>
                        <?php else: ?>
                            <center>
                                <form action="paper.php" method="post">
                                <input type="hidden" name="warna" value="<?= $key['warna_kertas']; ?>">
                                <input type="hidden" name="jenis" value="<?= $key['jenis']; ?>">
                                    <div class="center">
                                        <button type="submit" style="color: black">
                                            <?= $key['warna_kertas']; ?>
                                        </button>
                                    </div>
                                </form>
                            </center>
                        <?php endif ?>
                    </div>
                </th>
            <?php endforeach ?>
        </tr>
    </th>
</tr>
</table>
<?php include 'footer.php'; ?>