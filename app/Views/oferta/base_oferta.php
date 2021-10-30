<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edumen - LMS & Online Courses Html Template</title>
    <link rel=icon href="edumen/assets/img/favicon.png" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('edumen/assets/css/vendor.css') ?>">
    <link rel="stylesheet" href="<?= base_url('edumen/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('edumen/assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <?= $menu ?>
    <?= $contenido ?>


    <?= $pie ?>
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="<?= base_url('edumen/assets/js/vendor.js') ?>"></script>
    <script src="<?= base_url('edumen/assets/js/counter.js') ?>"></script>
    <!-- main js  -->
    <script src="<?= base_url('edumen/assets/js/main.js') ?>"></script>
    <script src="<?= base_url('js/oferta/formulario.js') ?>"></script>
</body>

</html>