<?php
/*
Template Name: Мой шаблон страницы
Template Post Type: post, page, product
*/
?>

<body class="main-body">
    <div class="wrapper wrapper__main">
        <section class="hero">
            <?php get_header(); ?>
            <div class="hero__content container">
                <?php
                global $post;

                $myposts = get_posts('numberposts=1&category=5');
              
                if (!empty($myposts)) {
                    $post = $myposts[0];
                ?>
                  
                    <h1 class="hero__title"><?php the_field('main_title',58) ?></h1>
                    <p class="hero__text"><?php the_field('main_description') ?></p>
                    <button class="hero__button btn"><?php the_field('main_btn') ?></button>
                <?php
                }
                ?>
            </div>
        </section>
        <section class="week-news">
            <div class="container">
                <h2 class="week-news__main-title">Новинки недели
                    <img class='week-news__ico' src="<?php bloginfo('template_url') ?>/assets/quiz-box/img/svg/Group.svg" alt="">
                </h2>
                <ul class="week-news__list">

                    <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => 3,
                        'category'    => 2,

                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                    ?>


                            <li class="week-news__item">
                                <div class="week-news__header">
                                    <?php the_post_thumbnail(array(362, 144), array('class' => 'week-news__img week-news_object-position')); ?>

                                </div>
                                <div class="week-news__content">
                                    <h3 class="week-news__title"><?php the_title() ?></h3>
                                    <ul class="week-news__features">
                                        <li class="week-news__features-item">
                                            <img src="<?php bloginfo('template_url') ?>/assets/quiz-box/img/svg/clock.svg" alt="" class="week-news__features-ico">
                                            <div class="week-news__features-text"><?php the_field('game_duration') ?></div>
                                        </li>
                                        <li class="week-news__features-item">
                                            <img src="<?php bloginfo('template_url') ?>/assets/quiz-box/img/svg/qa.svg" alt="" class="week-news__features-ico">
                                            <div class="week-news__features-text"><?php the_field('question_quantity') ?></div>
                                        </li>
                                    </ul>
                                    <div class="week-news__desc">
                                        <?php the_field('game_discription') ?>
                                    </div>
                                    <button class="week-news__button btn btn--theme-bordered"><?php the_field('btn_innerText') ?></button>
                                </div>
                            </li>
                    <?php
                        }
                    }
                    wp_reset_postdata(); // Сбрасываем $post
                    ?>










                </ul>
            </div>
        </section>



        <section class="last-games">
            <div class="container">
                <h2 class="last-games__main-title">Прошедшие игры</h2>
                <ul class="last-games__list">
                    <?php
                    global $post;

                    $myposts = get_posts('numberposts=2&category=4');
                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                    ?>
                            <li class="last-games__item">
                                <a class="last-games__card" href="#">
                                    <img class="last-games__img" src="<?php bloginfo('template_url') ?>/assets/quiz-box/img/Mask Group.png" alt="1">
                                    <div class="last-games__content__box">
                                        <date class="last-games__date">1 января</date>
                                        <h3 class="last-games__title"><?php the_field('past-games_title') ?></h3>
                                        <p class="last-games__desc">
                                            Успевайте забронировать даты. Пока еще есть места на декабрь. Удачи и всех благ!
                                        </p>
                                    </div>
                                </a>
                            </li>
                    <?php
                        }
                    }
                    wp_reset_postdata(); // Сбрасываем $post
                    ?>

                </ul>
                <div class="nav-menu">
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
            </div>
        </section>

        <?php
        global $post;

        $myposts = get_posts('numberposts=1&category=3');
        if (!empty($myposts)) {
            $post = $myposts[0];
        ?>
            <section class="about">
                <div class="container about__container">
                    <div class="about__img-box">

                        <img src="<?php bloginfo('template_url') ?>/assets/quiz-box/img/kviz_pliz__nizhnii_novgorod_1_qg_large 1.png" alt="about__decor" class="about__img">
                    </div>
                    <div class="about__desc">
                        <?php print_r(the_field('about-title')) ?>
                        <h2 class="about__title"><?php the_field('about_title'); ?></h2>
                        <p class="about__text">
                            <?php the_field('about_text'); ?>
                        </p>
                        <button class="about__button btn btn--theme-bordered"><?php the_field('about_btn'); ?></button>
                    </div>
                </div>
            </section>
        <?php
        }
        ?>


        <?php get_footer(); ?>
    </div>
</body>