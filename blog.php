<!doctype html>
<html lang="tr">
<?php
$currentpage = "";
$CANONICAL = "https://www.kiralikmobiljenerator.com/" . $currentpage;
$IMAGE = "https://www.kiralikmobiljenerator.com/assets/images/site/logo.png";
$TITLE = "Blog";
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
        <a href="blog.php" class="bold">Blog</a>
    </div>
</div>

<div class="sayfa-icerik-2">
    <div class="sayfa-icerik-2-content animated animatedFadeInUp fadeInUp">
        <h1 class="baslik-h1">Blog</h1>
        <p>
       Kiralık Jeneratör ile ilgili güncel gelişme ve haberlerin yer aldığı blog sayfasına, video görüntülerine ve basında ile ilgili çıkan haberlere aşağıdan ulaşabilirsiniz.
        </p>

        <div class="haberler">
            <div class="haberler-item">
                <a href="blog-detay.php">
                    <figure>
                        <img src="assets/images/site/haberler-1.jpg" alt="">
                    </figure>
                    <div class="haber-basliklar">
                        <div class="haber-baslik-1">
                            <h2>Jeneratör Kiralarken Nelere Dikkat Etmeliyim?</h2>
                        </div>
                        <div class="haberi-oku">
                            <p>haberi oku <i class="fa-regular fa-right-long"></i></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="haberler-item">
                <a href="mobil-jenerator-nedir.php">
                    <figure>
                        <img src="assets/images/site/haberler-2.jpg" alt="">
                    </figure>
                    <div class="haber-basliklar">
                        <div class="haber-baslik-1">
                            <h2>Mobil jeneratör Nedir ?</h2>
                        </div>
                        <div class="haberi-oku">
                            <p>haberi oku <i class="fa-regular fa-right-long"></i></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="haberler-item">
                <a href="jenerator-ne-amacla-kullanilir.php">
                    <figure>
                        <img src="assets/images/site/haberler-3.jpg" alt="">
                    </figure>
                    <div class="haber-basliklar">
                        <div class="haber-baslik-1">
                            <h2>Jeneratör ne amaçla kullanılır?</h2>
                        </div>
                        <div class="haberi-oku">
                            <p>haberi oku <i class="fa-regular fa-right-long"></i></p>
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
