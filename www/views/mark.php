<!DOCTYPE html>
<?php
    ini_set('displey_errors','1') ;
    header('Content-Type: text/html; charset=utf-8');
    error_reporting(E_ALL);
?>
<html lang="en,rus,ja">

<head>
    <meta charset="UTF-8">
    <title>大和元</title>
    <link rel="shortcut icon" href="/assets/imges/title.jpg">
    <link rel="stylesheet" href="/assets/CSS/style_mark.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Charmonman|Monsieur+La+Doulaise|Montserrat+Subrayada|Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Noto+Sans+JP&display=swap&subset=cyrillic,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="/Owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/Owlcarousel/dist/assets/owl.theme.default.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e44f756022.js" crossorigin="anonymous"></script>
</head>

<body>
   
    <heder class="header" id="header">
        <div class="contener">
            <div class="header_inner">
                <a class="href_home" href="/">大和元</a>
                <nav class="nav" id="nav">
                    <a class="nav_link" href="" data-scroll="#about_of_mark">О марке</a>
                    <a class="nav_link" href="" data-scroll="#model">Модели</a>
                </nav>
            </div>
        </div>
    </heder>

    <div class="intro" id="intro">
        <div class="contener">
            <div class="intro_inner">
                <h1 class="intro_title"><?php echo $nameMark;?></h1>
            </div>
        </div>
    </div>

    <?php
    $mark = new mark();
    $markList = array();
    $markList = $mark->getMarkItemByName($nameMark);
     ?>

    <section class="section_about" id="about_of_mark">
        <div class="contener">
            <div class="cection_heder">
                <h3 class="section_suptitle">ブランド情報</h3>
                <h2 class="section_title"> О марке</h2>
                <?php foreach ($markList as $markItem): ?>
                <img src="/assets/imges/logo/<?php echo $markItem['Foto_of_logo'] ?>" alt="" class="foto_of_mark">
                <div class="section_text">
                    <p><?php echo $markItem['information'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php
     $mark = new mark();
     $markList = array();
     $markList = $mark->getMarkItemsWithPhotByName($nameMark);
     ?>

    <section class="brand-slider" id="model">
        <div class="contener">
            <div class="cection_heder">
                <h3 class="section_suptitle">提示されたモデル範囲</h3>
                <h2 class="section_title">Модели</h2>
                <div class="owl-carousel owl-theme">
                    <?php foreach ($markList as $markItem): ?>
                    <div>
                        <a href="model/<?php echo $nameMark.'/'.$markItem['Id']; ?>" class="item_link">
                            <img src="/assets/imges/foto_car_on_caorusel/<?php echo $markItem['Main_photo'] ?>" class="item_img">
                            <p class="item_text"><?php echo $markItem['Name'] ?>
                            </p>
                        </a></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="footer">
        <p class="footer_text">© 2020 大和元</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>

</body>

</html>
