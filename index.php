<!DOCTYPE html>
<html lang="en">
<head>
    <title>IQ-Центр</title>
    <?php require_once 'parts/styles.php' ?>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="container hero-intro">
    <div class="fader"></div>
    <div class="row">
        <div class="header u-full-width">
            <img src="images/logo.png" class="header-logo">
            <div class="header-info">
                <span class="title">IQ-Центр</span> <br>
                <span class="title-definition">Подготовка к экзаменам</span>
            </div>
            <ul class="u-pull-right navigation">
                <li class="active"><a href="#">Главная</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="service.php">Услуги</a></li>
                <li><a href="profession.php">Выбор профессии</a></li>
                <li><a href="pricing.php">Стоимость</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
        </div>

        <div class="info">
            <div class="info-heading">
                <img src="images/logo.png" class="info-logo">
                <span class="title yellow color">IQ-Центр</span>
                <br>
                <span class="description">Сделай ставку на знания и получи высокий результат!</span>
            </div>
            <span class="description-meta">
                Эффективные методики обучения и подготовки к ЦТ, преподаватели высшей категории, занятия в мини-группах, бесплатное пробное занятие - в IQ-центре все работает на ВАШ результат!
            </span>
            <div class="buttons">
                <div class="button yellow background enroll transition">ЗАПИСЬ НА ОБУЧЕНИЕ</div>
                <div class="button trial transition">ПРОБНОЕ ЗАНЯТИЕ</div>
            </div>
        </div>
    </div>
    <div class="link-to-form transition"></div>
</div>
<div class="container hero-advantages">
    <h3 class="title">ПРЕИМУЩЕСТВА НАШЕГО ЦЕНТРА</h3>
    <div class="row">
        <div class="ten columns offset-by-one tab">
            <div class="one-half column tabHeader advantages">
                <ul>
                    <li class="active first transition">
                        <span class="title">Высококвалифицированные педагоги</span>
                        <br>
                        <span class="description">Опыт и результаты!</span>
                    </li>
                    <li class="second transition">
                        <span class="title">Невысокая стоимость</span>
                        <br>
                        <span class="description">Антикризисное предложение!</span>
                    </li>
                    <li class="third transition">
                        <span class="title">Мини-группы</span>
                        <br>
                        <span class="description">Эффективно и доступно!</span>
                    </li>
                    <li class="fourth transition">
                        <span class="title">Удобное расписание</span>
                        <br>
                        <span class="description">Составим вместе с Вами!</span>
                    </li>
                    <li class="fifth transition">
                        <span class="title">Пробный урок</span>
                        <br>
                        <span class="description">Убедись во всем сам!</span>
                    </li>
                    <li class="sixth transition">
                        <span class="title">Удобство и комфорт</span>
                        <br>
                        <span class="description">Мы ценим каждого нашего ученика!</span>
                    </li>
                </ul>
            </div>
            <div class="one-half column tabContent advantages-info">
                <div class="tabItem active first">
                    <img src="images/logo.png">
                    <span class="title">Высококвалифицированные педагоги</span>
                    <p class="description">Опыт и результаты!</p>
                </div>
                <div class="tabItem second">
                    <img src="images/logo.png">
                    <span class="title">Невысокая стоимость</span>
                    <p class="description">Антикризисное предложение!</p>
                </div>
                <div class="tabItem third">
                    <img src="images/logo.png">
                    <span class="title">Мини-группы</span>
                    <p class="description">Эффективно и доступно!</p>
                </div>
                <div class="tabItem fourth">
                    <img src="images/logo.png">
                    <span class="title">Удобное расписание</span>
                    <p class="description">Составим вместе с Вами!</p>
                </div>
                <div class="tabItem fifth">
                    <img src="images/logo.png">
                    <span class="title">Пробный урок</span>
                    <p class="description">Убедись во всем сам!</p>
                </div>
                <div class="tabItem sixth">
                    <img src="images/logo.png">
                    <span class="title">Удобство и комфорт</span>
                    <p class="description">Мы ценим каждого нашего ученика!</p>
                </div>
            </div>
            <div class="trapezoid"></div>
        </div>
    </div>
</div>
<div class="container hero-mail">
    <h4>ХОТИТЕ ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ ИЛИ ОСТАЛИСЬ НЕРЕШЁННЫЕ ВОПРОСЫ?</h4>
    <span>Оставьте заявку и мы с Вами свяжемся в течение суток!</span>
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
<?php
    require_once 'parts/bottom.php';
    require_once 'parts/scripts.php';
?>
</body>
</html>
