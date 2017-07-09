<!DOCTYPE html>
<html lang="en">
<head>
    <title>IQ-Центр</title>
    <?php require_once 'parts/styles.php' ?>
    <link rel="stylesheet" href="css/about.css">
</head>
<body>

<div class="container hero-about">
    <div class="fader"></div>
    <div class="row">
        <div class="header u-full-width">
            <img src="images/logo.png" class="header-logo">
            <div class="header-info">
                <span class="title">IQ-Центр</span> <br>
                <span class="title-definition">Подготовка к экзаменам</span>
            </div>
            <ul class="u-pull-right navigation">
                <li><a href="index.php">Главная</a></li>
                <li class="active"><a href="about.php">О нас</a></li>
                <li><a href="service.php">Услуги</a></li>
                <li><a href="profession.php">Выбор профессии</a></li>
                <li><a href="pricing.php">Стоимость</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
        </div>

        <div class="info ten columns offset-by-one">
            <div class="info-heading">
                <span class="title">
                    "IQ-Центр" – вместе к знаниям! <br>
                    Учись, стремись, будь впереди!
                    Твое будущее начинается уже сегодня!
                </span>
            </div>
            <div class="description-meta five columns">
                <p class="content">
                    Знания во все времена ценились на вес золота. Хочешь приобрести знания и поступить в престижный вуз?!
                    Команда «IQ-Центр» поможет тебе освоить школьные предметы и подготовиться к поступлению!
                    Современные методики, опытные репетиторы, качественная подготовка – залог отличных оценок, успешной сдачи экзаменов и ЦТ!
                    Преподаватели «IQ-Центр» используют самые современные подходы в обучении, лучшие современные и авторские методики.
                    В нашем центре работают только высококвалифицированные педагоги, которые имеют большой опыт преподавания и высокие результаты при подготовке к экзаменам.
                </p>
            </div>
        </div>
        <div class="link-to-form transition"></div>
        <div class="additional-info yellow background">
            <span class="title">
                Обучение проводится в мини-группах.
            </span>
            <p class="description">
                Это оптимальный и результативный метод обучения, который помогает школьнику лучше воспринимать и усваивать информацию, а репетитору – найти индивидуальный подход к каждому ребенку.
            </p>
            <div class="angled-block"></div>
        </div>
        <div class="logo-block yellow background">
            <div class="wrapper">
                <img src="images/logo.png">
                <span class="title">Кроме этого, обучение в мини-группах является <br> антикризисным предложением:</span>
                <br>
                <span class="description">
                    Позволяет существенно сэкономить деньги, но в тоже время получить высокий результат!
                </span>
            </div>
        </div>
    </div>
</div>
<div class="container hero-about-description">
    <div class="row">
        <div class="text-wrapper eight columns offset-by-two">
            <div class="one-third column">
                Успешные показатели работы центра позволяют нам увеличивать количество желающих пройти обучение и подготовки к экзаменам.
            </div>
            <div class="one-third column">
                Приглашаем тебя пополнить ряды учащихся и пройти курсы подготовки в репетиторском «IQ-центре» в Минске!
            </div>
            <div class="one-third column">
                Начни свой путь к успеху и будущей карьере уже сегодня!
            </div>
        </div>
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
