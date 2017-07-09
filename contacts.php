<!DOCTYPE html>
<html lang="en">
<head>
    <title>IQ-Центр</title>
    <?php require_once 'parts/styles.php' ?>
    <link rel="stylesheet" href="css/contacts.css">

</head>
<body>

<div class="container hero-contacts">
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
                <li class="active"><a href="contacts.php">Контакты</a></li>
            </ul>
        </div>

        <div class="info eight columns offset-by-two">
            <div class="info">
                <div class="contacts-title twelve columns">
                    Photoshop version of Lorem Ipsum Proin
                </div>
                <span class="contacts-description twelve columns">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae sem lorem.
                </span>
                <div class="three columns">
                    <div class="contacts-item">
                        <span class="title">IQ-CENTER</span>
                        <div class="description">
                            Lorem ipsum dolor sit amet, lorem ipsum folor sit amet
                        </div>
                    </div>
                    <div class="contacts-item">
                        <span class="title">ЮРИДИЧЕСКИЙ АДРЕС</span>
                        <div class="description">
                            Беларусь, Минск. Ул. Мележа 1, офис 412, индекс 440564
                        </div>
                    </div>
                </div>
                <div class="three columns">
                    <div class="contacts-item">
                        <span class="title">КОНТАКТЫ</span>
                        <a href="#">(+375 29) 000 00 00</a>
                        <a href="#">(+375 17) 000 00 00</a>
                    </div>
                    <div class="contacts-item">
                        <span class="title">ИЩИТЕ НАС В СЕТЯХ</span>
                        <div class="description social-links">
                            <div class="twelve columns">
                                <div class="one-third column"><a target="_blank" href="https://vk.com"><img src="images/social/vk.png"></a></div>
                                <div class="one-third column"><a target="_blank" href="https://facebook.com"><img src="images/social/facebook.png"></a></div>
                                <div class="one-third column"><a target="_blank" href="https://twitter.com"><img src="images/social/twitter.png"></a></div>
                            </div>
                            <div class="twelve columns">
                                <div class="one-third column"><a target="_blank" href="https://vk.com"><img src="images/social/google-plus.png"></a></div>
                                <div class="one-third column"><a target="_blank" href="https://vk.com"><img src="images/social/linkedin.png"></a></div>
                                <div class="one-third column"><a target="_blank" href="https://vk.com"><img src="images/social/skype.png"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="five columns">
                    <span class="feedback-title twelve columns">ОБРАТНАЯ СВЯЗЬ</span>
                    <form action="mail.php" class="form-send twelve columns">
                        <div class="twelve columns">
                            <input placeholder="ИМЯ" type="text" name="name" class="text-field twelve column">
                            <input placeholder="ТЕЛЕФОН" type="tel" name="telephone" class="text-field twelve column">
                            <input placeholder="E-MAIL" type="email" name="email" class="text-field twelve column">
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
