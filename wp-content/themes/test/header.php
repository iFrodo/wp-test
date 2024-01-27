<!DOCTYPE html>
<html lang="<?php language_attributes()?>">

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
    <title>Quiz-box</title>
</head>

<body class="main-body">
    <div class="wrapper wrapper__main">
        <section class="hero">
            <header class="header">
                <div class="container header__container">
                    <?php the_custom_logo()?>
                    <a href="http://test.loc/?page_id=8" class="logo header__logo">Quiz-box
                    </a>
                    <nav class="nav-bar header__nav-bar">
                        <ul class="menu">
                            <li class="menu__item">
                                <a class="menu__link active" href="./assets/quiz-box/main.html">Главная</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="http://test.loc/?page_id=12">Игры</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="http://test.loc/?page_id=14">Отзывы</a>
                            </li>
                        </ul>
                    </nav>
                    <address class="contacts header__contacts games__contacts">
                        <a href="<?php the_field('telefon') ?>" class="contacts__phone"><?php the_field('telefon') ?></a>
                        <p class="contacts__shedule">График работы
                        </p>
                        <ul class='submenu'>
                            <li class="submenu__work-time">пн-вс: 09:00 - 20:00</li>
                            <li class="submenu__lanch">Обед: 14:00-14:30</li>
                        </ul>
                    </address>
                </div>
            </header>