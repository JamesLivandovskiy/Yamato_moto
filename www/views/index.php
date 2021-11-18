<?php
    ini_set('displey_errors','1') ;
    error_reporting(E_ALL);
    require_once(ROOT.'/components/Bd.php');

// закрываем подключение
?>
<!DOCTYPE html>
<html lang="en""rus""ja">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/assets/imges/title.jpg">
    <link rel="stylesheet" href="/assets\CSS\style.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Charmonman|Monsieur+La+Doulaise|Montserrat+Subrayada|Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Noto+Sans+JP&display=swap&subset=cyrillic,vietnamese" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e44f756022.js" crossorigin="anonymous"></script>
    <title>大和元</title>
</head>

<body>
    <heder class="header" id="header">
        <div class="contener">
            <div class="header_inner">
                <a class="href_home" href="">大和元</a>
                <nav class="nav" id="nav">
                    <a class="nav_link" href="" data-scroll="#about">О компании</a>
                    <a class="nav_link" href="" data-scroll="#stats">Статистика</a>
                    <a class="nav_link" href="" data-scroll="#service">Услуги</a>
                    <a class="nav_link" href="" data-scroll="#marks">Марки</a>
                    <a class="nav_link" href="" data-scroll="#contact">Контакты</a>

                </nav>
            </div>
        </div>
    </heder>

    <div class="intro" id="intro">
        <div class="contener">

            <div class="intro_inner">
                <h1 class="intro_title">Welcom to 大和元</h1>
            </div>
        </div>
    </div>

    <section class="section_about" id="about">
        <div class="contener">
            <div class="cection_heder">
                <h3 class="section_suptitle">私たちは何をしています</h3>
                <h2 class="section_title"> О компании</h2>
                <div class="section_text">
                    <p>Мы компания Yamato-moto(大和元) занимаемся доставкой, продажей и тюненгом эксклюзивых японских автообилий прямиком из японии с япокнским комплектующим, а так же с уникальным дизайном.</p>
                </div>
            </div>
            <div class="about">
                <div class="about_item">
                    <img src="/assets/imges/supra_tun.jpg" alt="" height="220px">
                </div>
                <div class="about_item">
                    <img src="/assets/imges/mr2_tun.jpg" alt="" height="220px">
                </div>
                <div class="about_item">
                    <img src="/assets/imges/mazda_rx8_tun_anime.jpg" alt="" height="220px">
                </div>

            </div>
        </div>
    </section>

    <div class="stats" id="stats">
        <div class="contener">
            <div class="stat">
                <div class="stats_item">
                    <div class="stats_item_nomber">5</div>
                    <div class="stats_item_text">
                        преедставленных марок
                    </div>
                </div>
                <div class="stats_item">
                    <div class="stats_item_nomber">4</div>
                    <div class="stats_item_text">
                        дилера
                    </div>
                </div>
                <div class="stats_item">
                    <div class="stats_item_nomber">7</div>
                    <div class="stats_item_text">
                        городов
                    </div>
                </div>
                <div class="stats_item">
                    <div class="stats_item_nomber">98</div>
                    <div class="stats_item_text">
                        проданных машин в прошлом году
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="services" id="service">
        <div class="contener">
            <div class="services_heder">
                <h3 class="services_suptitle">私たちが提供するサービス</h3>
                <h2 class="services_title">Услуги</h2>
                <div class="services_text">
                    <p>Мы предесловляем широкий спектр услуг свзязанных с японскими авто, а именно:</p>
                </div>
            </div>
        </div>
        <div class="stafs">
            <div class="contener">
                <div class="staf">
                    <div class="staf_item">
                        <i class="fas fa-dollar-sign"></i>
                        <i class="fas fa-car"></i>
                        <div class="staf_item_text">продажа авто</div>
                    </div>
                    <div class="staf_item">
                        <i class="fas fa-dollar-sign"></i>
                        <i class="fas fa-cog"></i>
                        <div class="staf_item_text">продажа фирменных запчастей</div>
                    </div>
                    <div class="staf_item">
                        <i class="fas fa-spray-can"></i>
                        <div class="staf_item_text">создание унекального дизайна</div>
                    </div>
                    <div class="staf_item">
                        <i class="fas fa-tools"></i>
                        <div class="staf_item_text">тюниг авто</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="marks" id="marks">
        <div class="contener">
            <div class="marks_heder">
                <h3 class="marks_suptitle">提示されているブランド</h3>
                <h2 class="marks_title">Марки</h2>
            </div>

            <?php
     $db = Db::connectionBd();
     $markList = array();
     $result = $db->query('SELECT `Name_of_mark`,`Foto_of_logo` FROM `mark` WHERE 1');
     $result->setFetchMode(PDO::FETCH_ASSOC);
     $i = 0;
     while ($row = $result->fetch()) {
      $markList[$i]['Name_of_mark'] = $row['Name_of_mark'];
      $markList[$i]['Foto_of_logo'] = $row['Foto_of_logo'];
      $i++;
     }
     ?>

            <div class="mark">
                <?php foreach ($markList as $markItem): ?>
                <div class="mark_item">
                    <a class="mark_link" href="mark/<?php echo $markItem['Name_of_mark']; ?>">
                        <div class="mark_item_text">
                            <p><?php echo $markItem['Name_of_mark']; ?></p>
                        </div>
                        <img class="mark_item_logo" src="/assets/imges/logo/<?php echo $markItem['Foto_of_logo']; ?>" alt="">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="contener">
            <div class="contact_heder">
                <h3 class="contact_suptitle">お問い合わせ先</h3>
                <h2 class="contact_title">Контакты</h2>
                <div class="contact_text">
                    <p>Телефон: +7-913-092-20-45</p>
                    <p>Адрес: г.Барнаул пос.Бельмесево кп.Сибирская долина ул.Кубанская д.54</p>
                    <p>Режим работы:Пн-Суб с 8:00 до 21:00 Воскресенье: с 9:00 до 20:00</p>
                </div>
                <div class="contact_map">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A047fb3fa72592daa6327e1ba972d662e3ee9cc5bc2397c5e6d15ebde10ebebd3&amp;source=constructor" width="1000" height="450" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p class="footer_text">© 2020 大和元</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
