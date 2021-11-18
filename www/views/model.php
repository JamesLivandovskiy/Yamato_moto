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
    <link rel="stylesheet" href="/assets/CSS/style_model.css">
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
                    <a class="nav_link" href="" data-scroll="#about_of_model">Информация</a>
                    <a class="nav_link" href="" data-scroll="#specification_of_model">Спецификация</a>
                    <a class="nav_link" href="" data-scroll="#photo_of_model">Фото</a>
                </nav>
            </div>
        </div>
    </heder>
    <?php
      $model = new model();
      $modelList = array();
      $modelList = $model->getNameOfModelById($Id);
     ?>
     <div class="intro" id="intro">
        <div class="contener">
            <div class="intro_inner">
              <?php foreach ($modelList as $modelItem): ?>
                <h1 class="intro_title"><?php echo $nameMark." ".$modelItem['Name'];?></h1>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php
      $model = new model();
      $modelList = array();
      $modelList = $model->getModelInformationById($Id);
     ?>

      <?php foreach ($modelList as $modelItem): ?>
    <section class="section_about_model" id="about_of_model">
        <div class="contener">
            <div class="cection_heder">
                <h3 class="section_suptitle">機械モデル情報</h3>
                <h2 class="section_title"> О модели</h2>
                <img src="/assets/imges/foto_car_on_caorusel/<?php echo $modelItem['Main_photo'] ?>" alt="" class="foto_of_model">
                <div class="section_text">
                <p><?php echo $modelItem['Information']; ?></p>
                </div>
            </div>
        </div>
    </section>


    <section class="section_with_specification" id="specification_of_model">
        <div class="contener">
            <div class="specification">
               <h3 class="section_suptitle">モデル仕様</h3>
                <h2 class="section_title">Спецификация</h2>
                <div class="section_text">
                <p>Объем двигателя: <?php echo $modelItem['Engine_capacity']; ?> л</p>
                <p>Лошадинные силы: <?php echo $modelItem['Horsepower']; ?></p>
                <p>Тип трансмиссии: <?php echo $modelItem['Type_of_transmission']; ?></p>
                <p>Год: <?php echo $modelItem['Year']; ?></p>
                </div>
            </div>
        </div>
    </section>

      <?php endforeach; ?>

      <?php
        $model = new model();
        $modelList = array();
        $modelList = $model->getModelListOfPhotoById($Id);
       ?>
  <?php foreach ($modelList as $modelItem): ?>
    <section class="section_with_foto" id="photo_of_model">
        <div class="contener">
        <div class="photo">
               <h3 class="section_suptitle">このモデルの他の写真</h3>
                <h2 class="section_title">Фото</h2>
                <div class="section_text">
                <p>Другие фото этой модели</p>
                </div>
                <?php
                  $dir = '\assets\imges\foto_car_on_caorusel/'.$modelItem['Way'].'';
                  $photoList =scandir(ROOT.$dir);
                 ?>
            <div class="owl-carousel owl-theme">
                <?php
                  for ($i=0; $i < count($photoList); $i++) {
                    if (substr_count($photoList[$i],'.jpg')) {

                      echo ' <img src="'.$dir.'/'.$photoList[$i].'" alt="">';
                    }
                  }
                 ?>
            </div>
        </div>
        </div>
    </section>
      <?php endforeach; ?>

    <div class="footer">
        <p class="footer_text">© 2020 大和元</p>
    </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>

</body>
</html>
