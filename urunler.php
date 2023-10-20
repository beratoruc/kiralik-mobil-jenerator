<!doctype html>
<html lang="tr">
<?php
$currentpage = "";
$CANONICAL = "https://www.kiralikmobiljenerator.com/" . $currentpage;
$IMAGE = "https://www.kiralikmobiljenerator.com/assets/images/site/logo.png";
$TITLE = "Ürünler";
$DESCRIPTION = "";
$TITLE .= " | Kiralık Mobil Jeneratör";
include 'head.php'; ?>
<body>
<?php include "header.php" ?>

<div class="breadcrumb-header">
    <div class="content-brandcamp">
        <a title="Anasayfa" href="index.php">Anasayfa</a>
        <i class="fa fa-angle-right"></i>
        <a href="blog.php" class="bold">Ürünler</a>
    </div>
</div>
<div class="sayfa-icerik-2">
    <div class="sayfa-icerik-2-content animated animatedFadeInUp fadeInUp">
        <h1 class="baslik-h1">Ürünler</h1>
        <p>
            Kiralık mobil jenerator urunler sayfasında size özel istediğiniz özellikle jeneratör bulabilirsiniz.
        </p>

        <div class="haberler">
            <div class="haberler-item">
                <a href="mobil-jenerator.php">
                    <figure>
                        <img src="assets/images/site/urunler/mobil-jenerator-2.jpg" alt="Mobil Jeneratör">
                    </figure>
                    <div class="haber-basliklar">
                        <div class="haber-baslik-1">
                            <h2>Mobil Jeneratör</h2>
                        </div>
                        <div class="haberi-oku">
                            <p>detaylı bilgi <i class="fa-regular fa-right-long"></i></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="haberler-item">
                <a href="kargo-film-mobil-jenerator.php">
                    <figure>
                        <img src="assets/images/site/urunler/kargo-film-mobil-jenerator.jpg" alt="Kargo Film Mobil Jeneratör">
                    </figure>
                    <div class="haber-basliklar">
                        <div class="haber-baslik-1">
                            <h2>Kargo Film Mobil Jeneratör</h2>
                        </div>
                        <div class="haberi-oku">
                            <p>detaylı bilgi <i class="fa-regular fa-right-long"></i></p>
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
