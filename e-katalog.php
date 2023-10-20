<!doctype html>
<html lang="tr">
<?php
$currentpage = "";
$CANONICAL = "https://www.kiralikmobiljenerator.com/" . $currentpage;
$IMAGE = "https://www.kiralikmobiljenerator.com/assets/images/site/logo.png";
$TITLE = "E-Katalog";
$DESCRIPTION = "";
$TITLE .= " | Kiralık Mobil Jeneratör";
include 'head.php';
?>
<body>
<?php include "header.php" ?>

<div class="breadcrumb-header">
    <div class="content-brandcamp">
        <a title="Anasayfa" href="index.php">Anasayfa</a>
        <i class="fa fa-angle-right"></i>
        <a href="e-katalog.php" class="bold">E-Katalog</a>
    </div>
</div>

<div class="sayfa-icerik-2">
    <div class="sayfa-icerik-2-content animated animatedFadeInUp fadeInUp">
        <h1 class="baslik-h1">E-Katalog</h1>
        <p>
       Kiralık Mobil Jeneratör hakkında ürünler ve hakkımız ile ilgili e-katalog hakkında detaylı bilgiye sayfamızdan ulaşabilirsiniz.
        </p>

        <div class="haberler">
            <div class="haberler-item">
                <a href="assets/kataloglar/hakkimizda/e catalog hakkımızda.pdf" target="_blank">
                    <figure>
                        <img src="assets/images/site/hakkimizda.jpg" alt="Hakkımızda E-Katalog">
                    </figure>
                    <div class="haber-basliklar">
                        <div class="haber-baslik-1">
                            <h2>Hakkımızda E-Katalog</h2>
                        </div>
                        <div class="haberi-oku">
                            <p>detaylı incele <i class="fa-regular fa-right-long"></i></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include "whatsapp.php" ?>
<?php include "footer.php" ?>

</body>
</html>
