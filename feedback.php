<!DOCTYPE html>
<html lang="en">
<head>
    <title>IQ-Центр</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <?php require_once 'parts/styles.php' ?>
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/feedback.css">

</head>
<body>

<div class="container hero-feedback">
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

        <div class="feedback-title">Отзывы</div>

        <div class="feedback-links six columns offset-by-three">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="feedback eight columns">
            <div class="feedback-stub">
                <div class="card upper left"></div>
                <div class="card angled left"></div>
                <div class="card lower left"></div>
                <div class="card upper right"></div>
                <div class="card angled right"></div>
                <div class="card lower right"></div>
                <div class="card centered"></div>
            </div>
            <div class="feedback-cards">
                <div>Feedback 1</div>
                <div>Feedback 2</div>
                <div>Feedback 3</div>
                <div>Feedback 4</div>
                <div>Feedback 5</div>
                <div>Feedback 6</div>
                <div>Feedback 7</div>
            </div>
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
