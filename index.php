<?php require_once "__partials/header.php"?>

    <div class="carousel slide hidden-xs hidden-xs" id="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel" data-slide-to="0"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/airplane.jpg" alt="slide">
                <div class="carousel-caption" style="

    position: absolute;
    width: 600px;
    height: 500px;
    left: 120px;
    top: 70px;
    /* background-color: rgba(0,0,0,0.5); */
    border-radius: 50px;

">
                    <h1 class="order-now" style="color: #1b55c0;">Заказ Авиабилетов</h1>
                    <p class="order-now-p fst-p" style="margin-left: 50px; color: #a94442;">
                        Наши специалисты быстро подберут
                    </p>
                    <p class="order-now-p" style="margin-left: 200px; color: #a94442;">
                        Вам наиболее выгодный вариант
                    </p>
                    <p class="order-now-p" style="margin-left: 50px; font-size: 22px">
                        Мы сэкономим ваше время и деньги
                    </p>
                    <p>
                        <button class="btn btn-success order-now-btn" data-toggle="modal" data-target="#sign-in">
                            <i class="fa fa-plane"></i><span> Заказать сейчас</span>
                        </button>
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="img/dubai-m.jpg" alt="slide">
                <div class="carousel-caption">
                    <h3>Подобрать тур</h3>
                    <p>
                        <button class="btn btn-primary">
                            <span> Подробнее</span>
                        </button>
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="img/valley-m.jpg" alt="slide">
                <div class="carousel-caption slogan">
                    <h3>Найди свой идеальный отдых</h3>
                    <h4 class="logo">c R-Travel</h4>
                </div>
            </div>
        </div>
    </div>


<div class="container">
    <h2 class="text-center h2_main">Горящие туры</h2>
        <div class="row masonry" data-columns>

            <div class="item">
                <div class="thumbnail">
                    <img src="img/valley.jpg" alt="" class="img-responsive">
                    <div class="caption">
                        <h3>Название</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at eius error odio sit sunt tempore? Ab, accusamus alias consequatur culpa dicta esse eum, excepturi, exercitationem nemo optio possimus vel!</p>
                        <a href="#" class="btn btn-success">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="thumbnail">
                    <img src="img/paris.jpg" alt="" class="img-responsive">
                    <div class="caption">
                        <h3>Название</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at eius error odio sit sunt tempore? Ab, accusamus alias consequatur culpa dicta esse eum, excepturi, exercitationem nemo optio possimus vel!</p>
                        <a href="#" class="btn btn-success">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="thumbnail">
                    <img src="img/canyon.jpg" alt="" class="img-responsive">
                    <div class="caption">
                        <h3>Название</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at eius error odio sit sunt tempore? Ab, accusamus alias consequatur culpa dicta esse eum, excepturi, exercitationem nemo optio possimus vel!</p>
                        <a href="#" class="btn btn-success">Подробнее</a>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="container">
    <h1 class="text-center h2_main">Популярные виды отдыха</h1>
    <h4 class="text-center main-description">
        Мы предлагаем большой выбор туров от эконом класса до индивидуальных <br>
        туров люкс класса. Найдите ваш идеальный отдых с нами.
    </h4>
        <div class="row popular-tours">
            <div class="element">
                <img src="img/1.jpg" alt="Семейный отдых" class="element_img">
                <div class="part">
                    <h3 style="color: #fff;">Семейный отдых</h3>
                </div>
            </div>
            <div class="element">
                <img src="img/2.jpg" alt="Семейный отдых" class="element_img">
                <div class="part">
                    <h3 style="color: #fff;">Свадебные путешествия</h3>
                </div>
            </div>
            <div class="element">
                <img src="img/3.jpg" alt="Семейный отдых" class="element_img">
                <div class="part">
                    <h3 style="color: #fff;">Экзотика</h3>
                </div>
            </div>
            <div class="element">
                <img src="img/4.jpg" alt="Семейный отдых" class="element_img">
                <div class="part">
                    <h3 style="color: #fff;">Luxury</h3>
                </div>
            </div>
            <div class="element">
                <img src="img/5.jpg" alt="Семейный отдых" class="element_img">
                <div class="part">
                    <h3 style="color: #fff;">Круизы</h3>
                </div>
            </div>
            <div class="element">
                <img src="img/6.jpg" alt="Семейный отдых" class="element_img">
                <div class="part">
                    <h3 style="color: #fff;">Горнолыжные туры</h3>
                </div>
            </div>
        </div>

    </div>

<div class="container del">
    <h1 class="text-center h2_main">Сегодня наши туристы выбирают</h1>
    <h4 class="text-center main-description">
        Отдохнуть без забот в проверенном месте или открыть для себя что-то <br>
        новое и необычное. Время выбрать себе отдых по душе.
    </h4>
</div>

<?php
require_once "__partials/order.php";
require_once "__partials/footer.php";
?>

<script>
    $('.carousel').carousel({
        interval: 10000
    })
</script>
<script>
    var element = $(".element");
    for(var i=0; i<=element.length; i++){

        $(".element").hover(function() {
            $(".element_img:hover").css("margin-top", "-50px")
            $(".element_img:hover").css("transition", "1s");
            $(".part:hover").css("transition", "1s");
        }, function () {

            $(".element_img").css("margin-top", "0px")
        });
    }
</script>


