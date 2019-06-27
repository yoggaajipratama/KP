<?php include 'header.php'; ?>
    <table class="table">
        <tr>
            <h1><b>PESANAN STIKER</b></h1>
        </tr>
        <tr>
            <th>
                <tr>
                    <th><h2>KERTAS GLOSSY</h2></th>
                    <?php foreach ($english_color_g as $key): ?>
                    <th>
                        <div class="box-print" style="background-color: <?= $key['color']; ?>;">
                            <?php if ($key['color']=='white' || $key['color'] == 'yellow'): ?>
                                <center>
                                    <?php if ($key['color']=='white'): ?>
                                        <form action="paper.php" method="post">
                                        <input type="hidden" name="warna" value="<?= $key['color']; ?>">
                                            <div class="center">
                                                <button type="submit" style="color: black">
                                                    <?= $key['color']; ?> <?= $key['types']; ?>
                                                </button>
                                            </div>
                                        </form>
                                        <?php else: ?>
                                            <form action="paper.php" method="post">
                                            <input type="hidden" name="warna" value="<?= $key['color']; ?>">
                                                <div class="center">
                                                    <button type="submit" style="color: black">
                                                        <?= $key['color']; ?>
                                                    </button>
                                                </div>
                                            </form>
                                    <?php endif ?>
                                </center>
                                <?php else: ?>
                                    <center>
                                        <form action="paper.php" method="post">
                                        <input type="hidden" name="warna" value="<?= $key['color']; ?>">
                                            <div class="center">
                                                <button type="submit" style="color: black">
                                                    <?= $key['color']; ?>
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
            <th>
                <tr>
                    <th><h2>KERTAS MATTE</h2></th>
                    <?php foreach ($english_color_m as $key): ?>
                    <th>
                        <div class="box-print" style="background-color: <?= $key['color']; ?>;">
                            <?php if ($key['color']=='white' || $key['color'] == 'yellow'): ?>
                                <center>
                                    <?php if ($key['color']=='white'): ?>
                                        <a href="">
                                            <p style="color: black" class="center">White</p>
                                        </a>
                                        <?php else: ?>
                                            <a href="">
                                                <p style="color: black" class="center">Yellow</p>
                                            </a>
                                    <?php endif ?>
                                </center>
                                <?php else: ?>
                                    <center>
                                        <a href="">
                                            <p style="color: white" class="center">
                                                <?= $key['color']; ?>
                                            </p>
                                        </a>
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