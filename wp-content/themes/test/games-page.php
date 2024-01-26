<?php
/*
Template Name: Страница квизов
Template Post Type: post, page, product
*/
?>

<?php get_header()?>

<body>
    <div class=" wrapper wrapper-games">
        <section class="top-line">
            <div class="top-line__content container">
                <h1 class="top-line__title">Игры</h1>
                <div class="breadcrumps">
                    <ul class="breadcrumps__list">
                        <li><a href="./index.html" class="breadcrumps__item first-item">Главная</a></li>
                        <li><a href="./games.html" class="breadcrumps__item">Услуги</a></li>
                    </ul>
                </div>

            </div>
        </section>
        <section class="games">
            <div class="container">
                <ul class="games__list">
                    <li class="games__item">
                        <div class="games__header">
                            <img src="./img/music-quiz1.png" alt="" class="games__img ">
                        </div>
                        <div class="games__content">
                            <h3 class="games__title">Музыкальная игра</h3>

                            <p class="games__desc">
                                Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько
                                абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору
                                отточить навык публичных выступлений в домашних условиях. При создании генератора мы
                                использовали небезизвестный универсальный код речей.
                            </p>
                            <button class="games__button btn ">Подробнее</button>
                        </div>
                    </li>
                    <li class="games__item">
                        <div class="games__header">
                            <img src="./img/bacto90.png" alt="" class="games__img">
                        </div>
                        <div class="games__content">
                            <h3 class="games__title">Назад в 90-е</h3>
                            <p class="games__desc">
                                Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько
                                абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору
                                отточить навык публичных выступлений в домашних условиях. При создании генератора мы
                                использовали небезизвестный универсальный код речей.
                            </p>
                            <button class="games__button btn ">Подробнее</button>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="nav-menu nav-menu--theme-games nav-menu--theme-dark">
                <p class="nav-menu__info">Страница 1 из 7</p>
                <ul class="nav-menu__list">
                    <li class="nav-menu__item"><a class='nav-menu__link' href="1">1</a></li>
                    <li class="nav-menu__item"><a class='nav-menu__link' href="2">2</a></li>
                    <li class="nav-menu__item"><a class='nav-menu__link' href="3">3</a></li>
                    <li class="nav-menu__item"><a class='nav-menu__link' href="4">4</a></li>
                    <li class="nav-menu__item"><a class='nav-menu__link' href="5">5</a></li>
                    <li class="nav-menu__item"><a class='nav-menu__link' href="6">6</a></li>
                    <li class="nav-menu__item"><a class='nav-menu__link' href="7">7</a></li>
                </ul>
            </div>
        </section>
        <section class="partners">
            <div class="container partners__container">
                <h2 class="partners__title">Партнеры</h2>

                <ul class="partners__list">
                    <li class="partners__item">

                        <a href="" class="partners__link">
                            <img src="./img/partners-logos/pobeda.png" alt="pobeda" class="partners__logo">
                        </a>
                    </li>
                    <li class="partners__item">
                        <a href="" class="partners__link">
                            <img src="./img/partners-logos/s7-airlines.png" alt="s7-airlines" class="partners__logo">
                        </a>
                    </li>
                    <li class="partners__item">
                        <a href="" class="partners__link">
                            <img src="./img/partners-logos/quiz-please.svg" alt="quiz-please" class="partners__logo">
                        </a>
                    </li>
                    <li class="partners__item">
                        <a href="" class="partners__link">
                            <img src="./img/partners-logos/liga-quiz.svg" alt="liga-quiz" class="partners__logo">
                        </a>
                    </li>
                    <li class="partners__item">
                        <a href="" class="partners__link">
                            <img src="./img/partners-logos/quest-room.png" alt="quest-room" class="partners__logo">
                        </a>
                    </li>
                    <li class="partners__item">
                        <a href="" class="partners__link partners__link--pegasus ">
                            <img src="./img/partners-logos/pegasus.png" class="partners__logo">
                        </a>
                    </li>
                    <li class="partners__item">
                        <a href="" class="partners__link">
                            <img src="./img/partners-logos/airbaltic.png" alt="airbaltic" class="partners__logo">
                        </a>
                    </li>
                    <li class="partners__item">
                        <a href="" class="partners__link">
                            <img src="./img/partners-logos/pegas.png" alt="pegas" class="partners__logo">
                        </a>
                    </li>
                </ul>

            </div>
        </section>
<?php get_footer(); ?>

    </div>
</body>

</html>