<!doctype html>
<html lang="tr">
<?php
$currentpage = "";
$CANONICAL = "https://www.kiralikmobiljenerator.com/" . $currentpage;
$IMAGE = "https://www.kiralikmobiljenerator.com/assets/images/site/logo.png";
$TITLE = "İletişim";
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
        <a href="sunmate.php" class="bold">İletişim</a>
    </div>
</div>

<div class="iletisim">
    <div class="iletisim-inner animated animatedFadeInUp fadeInUp">
        <div class="iletisim-header">
            <h1 class="baslik-h1">İletişim Bilgileri</h1>
            <p>
            Kiralık Mobil Jeneratör’un adres, telefon numarası, whatsApp iletişim hattı ve e-mail adreslerine, Google Haritalar üzerinden konumuna ait bilgilere aşağıdan ulaşabilirsiniz.
            </p>
        </div>

        <h2 class="baslik-h2">Merkez Ofis Adresi</h2>

        <div class="iletisim-contact">

            <div class="location span-2 ">
                <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="baslik">
                    <p>Adres</p>
                </div>
                <div class="adres-bilgileri">
                    <p>Abdurrahmangazi Mahallesi Fatih Bulvar Kazanci İş Merkezi No:73 Kat:3 Daire:9 <b>Sultanbeyli/ İstanbul</b></p>
                </div>
            </div>

            <div class="phone animated animatedFadeInUp fadeInUp">
                <div class="icon ">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="baslik">
                    <p>Telefon & Whatsapp</p>
                </div>
                <div class="telefon-bilgileri">
                    <p>
                        <a href="tel:+902122119002">+90 212 211 90 02</a> <br>
                    </p>
                </div>
            </div>

            <div class="e-mail animated animatedFadeInUp fadeInUp">
                <div class="icon">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <div class="baslik">
                    <p>E-Posta</p>
                </div>
                <div class="telefon-bilgileri">
                    <p>
                        <a href="mailto:info@sonetrol.com.tr">info@kiralikjenerator.com</a>
                    </p>
                </div>
            </div>

        </div>

        <div class="haritalar">

        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3012.5451128450754!2d29.2549890760386!3d40.969542971355935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cad06b0d45bfe9%3A0x2b3d75d5d861a82!2zS2F6YW5jxLEgxLDFnyBIYW7EsQ!5e0!3m2!1str!2str!4v1696618126994!5m2!1str!2str"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>


</div>

<div class="iletisim-form">
    <div class="iletisim-form-inner animated animatedFadeInUp fadeInUp">

        <div class="iletisim-form-header">
            <h2 class="baslik-h1">İletişim Formu</h2>
            <p>
            Kiralık mobil jeneratörlerle enerji ihtiyacınızı karşılayın. Hızlı ve güvenilir çözümler için bize ulaşın!
            </p>
        </div>


        <form name="teklif-islem" id="teklif-islem" class="kurumsal_form" method="POST">

            <?php include 'assets/mail/mail.php'?>

        </form>
    </div>
</div>

<?php include "whatsapp.php" ?>
<?php include "footer.php" ?>

</body>
</html>
        
