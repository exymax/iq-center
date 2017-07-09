<!DOCTYPE html>
<html lang="en">
<head>
    <title>IQ-Центр</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <?php require_once 'parts/styles.php' ?>
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/gallery.css">

</head>
<body>

<div class="container hero-gallery">
    <div class="row">
        <div class="header u-full-width">
            <img src="images/logo.png" class="header-logo">
            <div class="header-info">
                <span class="title">IQ-Центр</span> <br>
                <span class="title-definition">Подготовка к экзаменам</span>
            </div>
            <ul class="u-pull-right navigation">
                <li><a href="index.php">Главная</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="service.php">Услуги</a></li>
                <li><a href="profession.php">Выбор профессии</a></li>
                <li><a href="pricing.php">Стоимость</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
        </div>

        <div class="gallery-title">Фотогалерея</div>

        <div class="gallery-container ten columns offset-by-one">
            <div>Photo 1</div>
            <div>Photo 2</div>
            <div>Photo 3</div>
            <div>Photo 4</div>
            <div>Photo 5</div>
            <div>Photo 6</div>
            <div>Photo 7</div>
        </div>
    </div>
</div>
<div class="container hero-service-mail">
    <div class="row">
        <div class="ten columns offset-by-one">
            <div class="mail-container">
                <h4 class="title">ХОТИТЕ ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ<br>ИЛИ ОСТАЛИСЬ НЕРЕШЁННЫЕ ВОПРОСЫ?</h4>
                <span class="description">Оставьте заявку и мы с Вами свяжемся в течение суток!</span>
                <div class="row">
                    <form action="mail.php" class="form-send eight columns offset-by-two">
                        <div class="one-half column">
                            <input placeholder="ИМЯ" type="text" name="name" class="text-field twelve column">
                            <input placeholder="E-MAIL" type="email" name="email" class="text-field twelve column">
                        </div>
                        <div class="one-half column">
                            <input placeholder="ТЕЛЕФОН" type="tel" name="telephone" class="text-field twelve column">
                            <input placeholder="ПОДРОБНОСТИ" type="text" name="details" class="text-field twelve column">
                        </div>
                        <button class="form-submit button yellow background u-pull-right">ОТПРАВИТЬ ЗАЯВКУ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require_once 'parts/bottom.php';
    require_once 'parts/scripts.php';
?>
</body>
</html>
