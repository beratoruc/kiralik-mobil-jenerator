<!doctype html>
<html lang="tr">
<?php
$currentpage = "";
$CANONICAL = "https://www.kiralikmobiljenerator.com/" . $currentpage;
$IMAGE = "https://www.kiralikmobiljenerator.com/assets/images/site/logo.png";
$TITLE = "Görevlerimiz";
$DESCRIPTION = "";
$TITLE .= " | Kiralık Mobil Jeneratör";
include 'head.php'; ?>
<body>

<?php include "header.php" ?>
<div class="breadcrumb-header">
    <div class="content-brandcamp">
        <a title="Anasayfa" href="index.php">Anasayfa</a>
        <i class="fa fa-angle-right"></i>
        <a href="neden-sonetrol.php" class="bold">Görevlerimiz</a>
    </div>
</div>

<div class="sayfa-icerik">
    <div class="sayfa-icerik-content animated animatedFadeInUp fadeInUp">
        <h1 class="baslik-h1">Görevlerimiz</h1>
        <div class="sayfa-grid">
            <div class="sayfa-left">
                <figure>
                    <img src="assets/images/site/gorevlerimiz.jpg" alt="Görevlerimiz">
                </figure>
                <p>
                Şirketimizin temel görevi; müşterilerimizin ihtiyaç ve beklentilerini en üst seviyede karşılayarak müşteri memnuniyetini artırmak, müşteri tatminini sağlamak ve sürekli kılmaktır.
                </p>
                <p>
                Şirketimiz, tüm faaliyet ve süreçlerinde sürekli iyileşme ve gelişme elde etmeyi ilke edinmiş  olup aynı zamanda çalışanlarımızın mutluluğunu da kendisinin birincil görevlerinden biri olarak görmektedir.
                </p>
                <h2 class="baslik-h2">Şirketimizin Temel İlkeleri</h2>
                <p><i class="fa-regular fa-hand-point-right"></i> <b>Koşulsuz müşteri mutluluğu en asli ilkemizdir</b>. Müşteri mutluluğunun sağlanabilmesi için, mükemmel ürün ve hizmet kalitesine sahip olmalıyız. Bu yüzden <b>Önce Kalite</b> diyoruz.</p>
                <p><i class="fa-solid fa-hand-point-right"></i> <b>Müşterilerimiz, işlerimizin merkezindedir</b>. İşlerimizi her zaman müşterilerimizi düşünerek ve rakiplerimizden daha mükemmel ürün ve hizmet sağlayacak biçimde yaparak, müşterinin bize güvenmesini ve bağlanmasını mutlaka sağlamalıyız.</p>
                <p>
                <b><i class="fa-regular fa-hand-point-right"></i> Sürekli iyileştirme, başarının olmazsa olmasıdır</b>. Yaptığımız her işte mükemmeliyeti aramalıyız. Bunu başarabilmek için iyileştirme çalışmalarımız hayatımızın bir rutini haline gelmelidir.
                </p>
               
            </div>

            <div class="sayfa-right">
                <?php include 'kurumsal-sag-menu.php'?>
            </div>
        </div>
    </div>
</div>
<?php include "whatsapp.php" ?>
<?php include "footer.php" ?>
</body>
</html>
