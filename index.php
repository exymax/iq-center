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
                    </li>
                    <li class="second transition">
                        <span class="title">Невысокая стоимость</span>
                    </li>
                    <li class="third transition">
                        <span class="title">Мини-группы</span>
                    </li>
                    <li class="fourth transition">
                        <span class="title">Удобное расписание</span>
                    </li>
                    <li class="fifth transition">
                        <span class="title">Пробный урок</span>
                    </li>
                    <li class="sixth transition">
                        <span class="title">Удобство и комфорт</span>
                    </li>
                </ul>
            </div>
            <div class="one-half column tabContent advantages-info">
                <div class="tabItem active first">
                    <img src="images/logo.png">
                    <span class="title">Высококвалифицированные педагоги</span>
                    <p class="description">Наш опыт – ваши высокие результаты!
                        Преподаватели «IQ-центр» имеют огромный опыт работы и готовы сделать обучение максимально комфортным и результативным!</p>
                </div>
                <div class="tabItem second">
                    <img src="images/logo.png">
                    <span class="title">Невысокая стоимость</span>
                    <p class="description">В «IQ-центр»  - антикризисное предложение!
                        Мы специально снизили цены, чтобы возможность получить глубокие знания была у всех, независимо от уровня достатка.</p>
                </div>
                <div class="tabItem third">
                    <img src="images/logo.png">
                    <span class="title">Мини-группы</span>
                    <p class="description">Занятия проходят в группах до 6 человек. Согласно многочисленным исследованиям, это наиболее эффективная форма проведения занятий. Она позволяет не только получить знания, но закрепить их при работе в парах.</p>
                </div>
                <div class="tabItem fourth">
                    <img src="images/logo.png">
                    <span class="title">Удобное расписание</span>
                    <p class="description">Сегодня подготовка к занятиям отнимает огромное количество времени у школьников. В «IQ-центр» ценят каждую минуту свои учеников. Мы обязательно составим расписание занятий вместе с вами с учетом ваших пожеланий!</p>
                </div>
                <div class="tabItem fifth">
                    <img src="images/logo.png">
                    <span class="title">Пробный урок</span>
                    <p class="description">Всегда важно найти «своего» учителя. Приходите на бесплатный пробный урок и убедитесь сами в профессионализме наших преподавателей!</p>
                </div>
                <div class="tabItem sixth">
                    <img src="images/logo.png">
                    <span class="title">Удобство и комфорт</span>
                    <p class="description">Мы ценим удобство каждого нашего ученика, поэтому много внимания уделяем комфортным условиям обучения. Светлые просторные аудитории, оборудованные всем необходимым для результативного обучения – в «IQ-центр» созданы все условия для получения знаний!</p>
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
