<?php require_once "__partials/header.php";?>
<div class="pic" style="background-image: url(img/office.jpg")">
    <div class="container">
        <div class="pic_caption">
            <p>
                Все лучшие туры и круизы в одной компании
            </p>
            <p>
                Квалифицированная консультация
            </p>
            <p>
                Работаем по выходным
            </p>
            <p>
                Удобно добираться
            </p>
        </div>
    </div>
</div>
<div class="container del">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <h2>Контакты:</h2>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <h2>Свяжитесь с нами:</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Имя">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="tel" placeholder="Телефон">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3784.482080016922!2d68.74788677070093!3d38.51832302410571!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b5d05b70c7c8ff%3A0xefdeb7052b4a9898!2z0JDQsdGD0LvSm9C-0YHQuNC8INCk0LjRgNC00LDQstGB06MsINCU0YPRiNCw0L3QsdC1LCDQotCw0LTQttC40LrQuNGB0YLQsNC9!5e0!3m2!1sru!2sru!4v1466148278985" class="map"></iframe>
<?php
require_once "__partials/order.php";
require_once "__partials/footer.php";
?>