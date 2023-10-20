
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="manifest" href="manifest.json">


    <?php
    $FAVICON = "https://www.karaybeton.com.tr/images/favicon.png";
    if (!isset($IMAGE)) $IMAGE = $FAVICON;
    if (!isset($CANONICAL)) $CANONICAL = "";
    $SITE_NAME = "Kiralık Jeneratör";
    $facebook = addcslashes("", "/");
    $youtube = addcslashes("https://www.youtube.com/channel/UCa1eN-PaM8jqX9exYBB2_Ow", "/");
    $instagram = addcslashes("https://www.instagram.com/karay_beton/", "/");
    ?>


    <!-- meta -->
    <meta name="author" content="Sahne Medya">
    <meta name="robots" content="index,follow">
    <meta property="og:locale" content="tr_TR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $TITLE ?>">
    <meta property="og:description" content="<?= $DESCRIPTION?>">
    <meta property="og:url" content="<?= $CANONICAL ?>">
    <meta property="og:site_name" content="<?= $SITE_NAME ?>">
    <meta property="og:image:url" content="<?= $IMAGE ?>">
    <meta property="og:image:secure_url" content="<?= $IMAGE ?>">
    <meta property="og:image:width" content="320">
    <meta property="og:image:height" content="200">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="<?= $DESCRIPTION ?>">
    <meta name="twitter:title" content="<?= $TITLE ?>">
    <meta name="twitter:image" content="<?= $IMAGE ?>">
    <link rel="canonical" href="<?= $CANONICAL ?>" />
    <title><?= $TITLE ?></title>
    <meta name="description" content="<?= $DESCRIPTION?>">







    <!-- FONT AWESOME-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap"
          rel="stylesheet">

    <!-- CSS -->

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/jquery.min.js"></script>

    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- DATA FANCYBOX-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


</head>