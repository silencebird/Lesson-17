<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lesson-16</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script src="js/jquery-2.2.0.js"></script>

</head>
<body>

<!---------------------------------------HEADER------------------------------------>
<?php
include_once('inc/header.html');
?>
<!------------------------------------------HEADER------------------------------------>

<!------------------------------------------MAIN-------------------------------------->
    <main>

<!--------------------------------------Carousel-------------------------------------->

        <section class="slider clearfix" id="slider">
            <div class="flexslider">
                <ul class="slides" >

                    <li class="item-1">
                        <div class="container">
                            <div class="banner">
                                <p>Купить продукцию сейчас</p>
                                <div >
                                    <a href="catalog.php" class="buy">Узнать больше <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="item-2">
                        <div class="container">
                            <div class="banner">
                                <p>Купить продукцию сейчас</p>
                                <div >
                                    <a href="catalog.php" class="buy">Узнать больше <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="item-3">
                        <div class="container">
                            <div class="banner">
                                <p>Купить продукцию сейчас</p>
                                <div >
                                    <a href="catalog.php" class="buy">Узнать больше <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="item-4">
                        <div class="container">
                            <div class="banner">
                                <p>Купить продукцию сейчас</p>
                                <div >
                                    <a href="catalog.php" class="buy">Узнать больше <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </section>

<!--------------------------------------Carousel-------------------------------------->

<!------------------------------------------NEWS-------------------------------------->
<div class="news clearfix" id="new">
    <div class="container">
        <h2>Новости</h2>
        <ul class="clearfix">

            <li class="xs-col-12 sm-col-6 m-col-6 lm-col-3 lg-col-3 ">
                <div>
                    <img src="images/news/1.png" alt=""/>
                    <p class="main-text">
                        Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"
                    </p>
                </div>
                <div> <a href="#" class="more">Подробнеее <i class="fa fa-caret-right"></i></a></div>
            </li >

            <li class="xs-col-12 sm-col-6 m-col-6 lm-col-3 lg-col-3 ">
                <div>
                    <img src="images/news/2.png" alt="">
                    <p class="main-text">
                        Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"
                    </p>
                </div>
                <div> <a href="#" class="more">Подробнеее <i class="fa fa-caret-right"></i></a></div>
            </li>
            <li class="xs-col-12 sm-col-6 m-col-6 lm-col-3 lg-col-3 ">
                <div>
                    <img src="images/news/1.png" alt=""/>
                    <p class="main-text">
                        Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"
                    </p>
                </div>
                <div> <a href="#" class="more">Подробнеее <i class="fa fa-caret-right"></i></a></div>
            </li>
            <li class="xs-col-12 sm-col-6 m-col-6 lm-col-3 lg-col-3 ">
                <img src="images/news/4.png" alt="">
                <p class="main-text">
                    Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"
                </p>
                <a href="#" class="more">Подробнеее <i class="fa fa-caret-right"></i></a>
            </li>
                </ul>
            </div>
        </div>
<!------------------------------------------NEWS-------------------------------------->

<!------------------------------------I RECOMEND-------------------------------------->
        <div class="i-recomend" id="i-recomend">
            <div class="container">
                <h2>Я рекомендую</h2>
                <nav class="recomend-menu clearfix">
                    <ul>
                        <li><a href="catalog.php">Соли и грязи</a></li>
                        <li><a href="catalog.php">Кремы и лосьены</a></li>
                        <li><a href="catalog.php">Парфюмерия</a></li>
                        <li><a href="catalog.php">Витамины и бады</a></li>
                        <li><a href="catalog.php">Чаи</a></li>
                    </ul>
                </nav>

                <div class="catalog ">
                    <ul class="clearfix">
                        <li >
                            <img src="images/i-recomend/defult-shampoo.png" alt="shampoo">
                            <p class="main-goods-type"> Шампунь ежедневного пользования </p>
                            <p class="main-text">
                                Доктор Нонна на телеканале домашний в программе
                                спросите повара Доктор Нонна на телеканале
                                домашний в программе спросите повара Доктор
                                Нонна на телеканале домашний в программе Доктор
                                Нонна на телеканале домашний в программе...
                            </p>
                            <div class="price-row">
                                <p class="price">280 грн.</p>
                                <div><a href="info.php" class="buy" >Купить</a></div>
                            </div>
                        </li>

                        <li>
                            <a href="info.php"><img src="images/i-recomend/1-1.png" alt="shampoo"></a>
                            <p class="goods-type">Шампунь ежедневного пользования</p>
                            <p class="price">280 грн.</p>

                        </li>

                        <li>
                            <a href="info.php"> <img src="images/i-recomend/1-2.png" alt="shampoo"></a>
                            <p class="goods-type">Шампунь ежедневного пользования</p>
                            <p class="price">280 грн.</p>

                        </li>

                        <li>
                            <a href="info.php"> <img src="images/i-recomend/1-3.png" alt="shampoo"></a>
                            <p class="goods-type">Шампунь ежедневного пользования</p>
                            <p class="price">280 грн.</p>
                        </li>

                        <li>
                            <a href="info.php"> <img src="images/i-recomend/1-1.png" alt="shampoo"></a>
                            <p class="goods-type">Шампунь ежедневного пользования</p>
                            <p class="price">280 грн.</p>
                        </li>

                        <li>
                            <a href="info.php"> <img src="images/i-recomend/1-2.png" alt="shampoo"></a>
                            <p class="goods-type">Шампунь ежедневного пользования</p>
                            <p class="price">280 грн.</p>
                        </li>

                        <li>
                            <a href="info.php"> <img src="images/i-recomend/1-3.png" alt="shampoo"></a>
                            <p class="goods-type">Шампунь ежедневного пользования</p>
                            <p class="price">280 грн.</p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

<!-----------------------------------I RECOMEND-------------------------------------->

<!------------------------------------TELEDOM-------------------------------------->

        <div class="teledom">
            <div class="tel-cover-blue">
                <div class="container">
                    <h2>Телеканал Теледом</h2>
                    <div class="clearfix">
                        <div class="recomend-video  xs-col-12 sm-col-12 m-col-12 lm-col-6 lg-col-6">
                            <video  class="defult-video" onclick="playPause()" poster="images/teledom/poster-top.png " id="video1">
                                    <source src="video/1.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                    <source src="video/1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                    <source src="video/1.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    Тег video не поддерживается вашим браузером.


                            </video>
                        </div>
                        <ul class="clearfix video">
                            <li class="xs-col-6 sm-col-6 m-col-3 lm-col-3 lg-col-3">
                                <video  class=" xs-col-12 sm-col-12 m-col-6 lm-col-6 lg-col-6 " poster="images/teledom/poster-1.png " >
                                    <source src="video/1.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                    <source src="video/1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                    <source src="video/1.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    Тег video не поддерживается вашим браузером.
                                </video>
                            </li>
                            <li class="xs-col-6 sm-col-6 m-col-3 lm-col-3 lg-col-3 ">
                                <video  class=" xs-col-12 sm-col-12 m-col-6 lm-col-6 lg-col-6 " poster="images/teledom/poster-2.png ">
                                    <source src="video/1.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                    <source src="video/1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                    <source src="video/1.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    Тег video не поддерживается вашим браузером.

                                </video>
                            </li>
                            <li class="xs-col-6 sm-col-6 m-col-3 lm-col-3 lg-col-3 ">
                                <video  class=" xs-col-12 sm-col-12 m-col-6 lm-col-6 lg-col-6 " poster="images/teledom/poster-1.png " >
                                    <source src="video/1.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                    <source src="video/1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                    <source src="video/1.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    Тег video не поддерживается вашим браузером.
                                </video>
                            </li>
                            <li class="xs-col-6 sm-col-6 m-col-3 lm-col-3 lg-col-3 ">
                                <video  class=" xs-col-12 sm-col-12 m-col-6 lm-col-6 lg-col-6 " poster="images/teledom/poster-2.png ">
                                    <source src="video/1.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                    <source src="video/1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                    <source src="video/1.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    Тег video не поддерживается вашим браузером.
                                </video>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix">
                        <div class="video-list xs-col-12 sm-col-6 m-col-6 lm-col-6 lg-col-6">
                            <h3>Новые видео</h3>
                            <ul>
                                <li><a href="#">&nbspШампунь ежедневного пользования  (16:54)</a></li>
                                <li><a href="#">&nbspПРЕМЬЕРА! Ева Бушмина - Религия  (05:14)</a></li>
                                <li><a href="#">&nbspАнжелика Варум - Я Всегда С Тобой (Official Video)</a></li>
                            </ul>
                        </div >
                        <div class="video-list xs-col-12 sm-col-6 m-col-6 lm-col-6 lg-col-6">
                            <h3>Популярные</h3>
                            <ul>
                                <li><a href="#">&nbspШампунь ежедневного пользования  (16:54)</a></li>
                                <li><a href="#">&nbspПРЕМЬЕРА! Ева Бушмина - Религия  (05:14)</a></li>
                                <li><a href="#">&nbspАнжелика Варум - Я Всегда С Тобой (Official Video)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-----------------------------------TELEDOM----------------------------------------->




<!-------------------------------------LIFE------------------------------------------->
        <div class="life">
            <div class="container">
                <div class="director-co clearfix">
                     <img src="images/life/man.png" alt=""/>
                 </div>
                <p class="credo">
                    Цель мойе жизни -
                    делать людей счастливыми
                </p>

                <p class="main-text">
                    В бизнес компании Dr. Nona пришел на успех своей жены Ольги, которая доказала мне что даже находясь в декретном
                    отпуске и гуляя с маленьким ребенком на улице за один месяц можно заработать в два раза больше чем моя зарплата
                    в милиции. Позже я на этот бизнес посмотрел серьезнее и увидел себя в нем. Это дело для серьезных и амбициозных
                    людей, которые хотят изменить свою жизнь. 27 декабря 2007 года уволился из МВД и теперь сотрудничаю ...
                </p>
                <div>
                    <a href="#" class="more">
                        Узнайте подробнее&nbsp<i class="fa fa-caret-right"></i>
                    </a>
                </div>
                <div class="social">
                    <img src="images/social.png" alt=""/>
                </div>
            </div>
        </div>
<!------------------------------------LIFE-------------------------------------------->

<!--------------------------------------PARTNERS------------------------------------------->
        <div class="partners">
            <div class="container">
                <h2>
                    Мои партнеры по бизнесу
                </h2>
                <ul class="our-partners clearfix">
                    <li class="xs-col-6 sm-col-6 m-col-3 lg-col-3 ">
                        <img src="images/partners/diorneva.png" alt="">
                        <p>Диорнева Татьяна</p>
                        <p>Директор</p>
                        <p class="location"><i class="fa fa-map-marker"></i>&nbsp&nbsp&nbspМариуполь</p>
                        <a href="#"><img src="images/social-short.png" alt=""></a>
                    </li>

                    <li class="xs-col-6 sm-col-6 m-col-3 lg-col-3 ">
                        <img src="images/partners/procenko.png" alt="">
                        <p>Проценко Мария</p>
                        <p>Директор</p>
                        <p class="location"><i class="fa fa-map-marker"></i>&nbsp&nbsp&nbspДонецк</p>
                        <a href="#"><img src="images/social-short.png" alt=""></a>
                    </li>

                    <li class="xs-col-6 sm-col-6 m-col-3 lg-col-3 ">
                        <img src="images/partners/diorneva.png" alt="">
                        <p>Диорнева Татьяна</p>
                        <p>Директор</p>
                        <p class="location"><i class="fa fa-map-marker"></i>&nbsp&nbsp&nbspМариуполь</p>
                        <a href="#"><img src="images/social-short.png" alt=""></a>
                    </li>

                    <li class="xs-col-6 sm-col-6 m-col-3 lg-col-3 ">
                        <img src="images/partners/procenko.png" alt="">
                        <p>Проценко Мария</p>
                        <p>Директор</p>
                        <p class="location"><i class="fa fa-map-marker"></i>&nbsp&nbsp&nbspДонецк</p>
                        <a href="#"><img src="images/social-short.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
<!--------------------------------------PARTNERS------------------------------------------->

<!--------------------------------------------WELCOME-------------------------------------->
        <div class="welcome" id="welcome">
            <div class="container">
                <h2>Добро пожаловать в команду </h2>
                <form action="#" class="feedback">
                    <ul>
                        <li>
                            <input type="text" name="" placeholder="Ваше имя" class="input"/>
                        </li>
                        <li>
                            <input type="tel" name="" placeholder="Телефон" class="input"/>
                        </li>
                        <li>
                            <input type="email" name="" placeholder="E-mail адрес" class="input"/>
                        </li>
                        <li>
                            <input type="submit" name="" value="Присоединяйтесь "  class="submit"/>
                        </li>
                    </ul>

                </form>
                <div>
                    <a href="" class="main-text">
                        Узнайте подробнее почему выгодня сотрудничать с нами и быть в нашей команде&nbsp&nbsp<i class="fa fa-caret-right"></i>
                    </a>
                </div>
            </div>
        </div>
<!------------------------------------------WELCOME---------------------------------------->


    </main>
<!------------------------------------------MAIN-------------------------------------->

<!----------------------------------------FOOTER-------------------------------------->
<?php
include_once('inc/footer.html');
?>
<!----------------------------------------FOOTER-------------------------------------->






<!------------------------------------------ Scrolling ------------------------------->
<script>
    $(document).ready(function() {
        $('header nav a').click(function(event) {
            event.preventDefault();

            var target = $(this).attr('data-href');
            $('html, body').stop().animate({ scrollTop: $(target).offset().top}, 1000, function() {
            });

            return false;
        });
    });

</script>
<!------------------------------------------ Scrolling ------------------------------>
<script>
    var myVideo=document.getElementById("video1");

    function playPause() {
        if (myVideo.paused)
            myVideo.play();
        else
            myVideo.pause();
    }

</script>

<!------------------------------------------ FlexSlider ------------------------------>
<script defer src="js/jquery.flexslider.js"></script>

<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!------------------------------------------ FlexSlider ------------------------------>
</body>
</html>