<!doctype html>
<html lang="tr">
<?php
$currentpage = "";
$CANONICAL = "https://www.kiralikmobiljenerator.com/" . $currentpage;
$IMAGE = "https://www.kiralikmobiljenerator.com/assets/images/site/logo.png";
$TITLE = "Teklif Al";
$DESCRIPTION = "";
$TITLE .= " | Kiralık Mobil Jeneratör";
include 'head.php'; ?>
<body>
<?php include "header.php" ?>
<div class="breadcrumb-header">
    <div class="content-brandcamp">
        <a title="Anasayfa" href="index.php">Anasayfa</a>
        <i class="fa fa-angle-right"></i>
        <a href="teklif-al.php" class="bold">Teklif Al</a>
    </div>
</div>

<div class="iletisim-form">
    <div class="iletisim-form-inner animated animatedFadeInUp fadeInUp">
        <div class="iletisim-form-header">
            <h2 class="baslik-h1 ">Teklif Al</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, consequuntur deserunt enim fuga iusto
                magnam natus officiis suscipit vel veniam?
            </p>
        </div>


        <form name="teklif-islem" id="teklif-islem" class="kurumsal_form" method="POST" >
            <?php include 'assets/mail/teklif-al.php'?>

        </form>
    </div>
</div>

<?php include "whatsapp.php" ?>
<?php include "footer.php" ?>
</body>
</html>

