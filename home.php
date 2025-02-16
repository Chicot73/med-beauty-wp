<?php
/*
Template Name: home
*/
?>

  <?php get_header(); ?>
  <main>
    <article class="hero">
      <div class="container">
        <h1 class="hero__title1">Медицинское и косметологическое оборудование</h1>
        <div class="hero__module01 hero__module">
          <h2 class="hero__title-big"><?php the_field('hero-title'); ?></h2>
          <p class="hero__desc"><?php the_field('hero-desc-1'); ?></p>
        </div>
        <div class="hero__module02 hero__module">
          <h2 class="hero__title-inc"><?php the_field('hero-title-2'); ?></h2>
          <p class="hero__desc"><?php the_field('hero-desc-2'); ?></p>
        </div>
        <div class="hero__module03 hero__module">
          <h2 class="hero__title-inc hero__title-inc--3"><?php the_field('hero-title-3'); ?></h2>
          <p class="hero__desc"><?php the_field('hero-desc-3'); ?></p>
        </div>
        <div class="hero__module04 hero__module">
          <h2 class="hero__title-inc"><?php the_field('hero-title-4'); ?></h2>
          <p class="hero__desc"><?php the_field('hero-desc-4'); ?></p>
        </div>
        <img class="hero__bigobj" src="<?php the_field('hero-bigobj'); ?>" alt="косметологическое оборудование">
        <img class="hero__fog" src="<?php bloginfo('template_url'); ?>/assets/img/fog.png" alt="">
        <img class="hero__blur" src="<?php bloginfo('template_url'); ?>/assets/img/blur-m.png" alt="">
        <div class="hero__alert">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/cookies.svg" type="image/webp">
            <img class="hero__alert-img" src="<?php bloginfo('template_url'); ?>/assets/img/cookies.svg" alt="Политика cookies">
          </picture>
          <p class="hero__alert-text">Этот веб-сайт использует такие технологии, как файлы cookie, для обеспечения
            основных функций сайта, а также для аналитики, персонализации и целевой рекламы. Для получения
            дополнительной информации перейдите по следующей ссылке: <a href="#">Политика конфиденциальности</a>
          </p>
          <div class="hero__alert-yn">
            <button class="button__unsub" id="unsub" type="button">Отклонить</button>
            <button class="button__sub" id="sub" type="button">Принять</button>
          </div>
        </div>
      </div>
    </article>
    <article class="slider">
      <div class="container">
        <div class="slider__wrapper">
          <div class="slider__part1">
            <div class="slider__txt">
              <h2 class="slider__zag">Инн<br>ова<br>ции</h2>
              <p class="slider__podz">доступные каждому</p>
              <button class="slider__form button__sub" type="button" onclick="moreFn()">Подробнее</button>
            </div>
            <div class="slider__note">
              <p><?php the_field('slider-desc'); ?></p>
            </div>
          </div>
          <div class="slider__part2">
            <div class="swiper">
              <div class="swiper-wrapper">
                <?php
                  if (have_rows('slide')) {
                    while (have_rows('slide')) : the_row();
                ?>
                  <div class="swiper-slide slider__slide">
                    <div class="txts">
                      <h3>
                        <?php the_sub_field('slide-title')?>
                      </h3>
                      <p>
                        <?php the_sub_field('slide-subtitle')?>
                      </p>
                    </div>
                    <div class="slider__image">
                      <div class="slider__border1"></div>
                      <div class="slider__border2"></div>
                      <div class="slider__border3"></div>
                      <div class="slider__border4"></div>
                      <div class="slider__turget">
                        <?php if( get_sub_field('slide-foto') ): ?>
                          <img src="<?php the_sub_field('slide-foto'); ?>" />
                        <?php endif; ?>
                      </div>
                    </div>
                    <p>
                      <?php the_sub_field('slide-subscr')?>
                    </p>
                  </div>     
                <?php
                  endwhile;
                  }
                ?>
              </div>
              <div class="swiper-pagination"></div>
              <div class="slider__btn-next">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="вправо">
                </picture>
              </div>
              <div class="slider__btn-prev">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="влево">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
    <div id="testdrive"></div><br><br><br><br>
    <article class="test-drive">
      <div class="container">
        <div class="test-drive__wrapper">
          <div class="test-drive__part1">
            <h2 class="title"><?php the_field('testdrive-title'); ?></h2>
            <p><?php the_field('testdrive-intro'); ?></p>
            <p><?php the_field('testdrive-desc'); ?></p>
            <ul>
              <?php
                if (have_rows('testdrive-loop')) {
                  while (have_rows('testdrive-loop')) : the_row();
              ?>
              <?php if( get_sub_field('testdrive-loop-i') ): ?>
                <li><?php the_sub_field('testdrive-loop-i')?></li>
              <?php endif; ?>
              <?php
                endwhile;
                }
              ?>
            </ul>
            <button class="test-drive__toform button__sub" id="decisions" type="button" onclick="moreFn()">Подробнее</button>
          </div>
        </div>
      </div>
    </article>
    <article class="decisions">
      <div class="container">
        <div class="decisions__wrapper">
          <div class="decisions__part1">
            <h2 class="title" id="t2"><?php the_field('decisions-title'); ?></h2>
            <p class="maintext"><?php the_field('decisions-p'); ?></p>
            <p class="maintext"><?php the_field('decisions-p-2'); ?></p>
            <button class="decisions__toform button__sub" type="button" onclick="moreFn()">Подробнее</button>
          </div>
          <div class="decisions__part2">
            <p class="decisions__subtitle"><?php the_field('decisions-loop-title'); ?></p>
            <ul class="decisions__list">
              <?php
                if (have_rows('decisions-loop')) {
                  while (have_rows('decisions-loop')) : the_row();
              ?>
              <?php if( get_sub_field('decisions-loop-i') ): ?>
                <li><?php the_sub_field('decisions-loop-i')?></li>
              <?php endif; ?>
              <?php
                endwhile;
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </article>
    <article class="learning">
      <div class="container">
        <div class="learning__border">
          <div class="learning__wrapper">
            <h2 class="learning__title title" id="learn_h2"><?php the_field('learning-title'); ?></h2>
            <p class="maintext learning__textbox" id="learn_p"><?php the_field('learning-p'); ?></p>
          </div>
          <div class="learning__staffgroup">
            <div class="learning__module" id="learn_module01">
              <h3 class="learning__title-inc"><?php the_field('learning-module-1-title'); ?></h3>
              <p class="learning__desc"><?php the_field('learning-module-1-p'); ?></p>
              <div class="learning__foto-item">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/learning_1.webp" type="image/webp">
                  <img class="learning__staff" src="<?php bloginfo('template_url'); ?>/assets/img/learning_1.png" alt="Персонал 1" loading="lazy">
                </picture>
                <div class="arrow" id="a1">
                  <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/learnarr_1.svg" type="image/webp">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/learnarr_1.svg" alt="">
                  </picture>
                </div>
              </div>
            </div>
            <div class="learning__module" id="learn_module02">
              <h3 class="learning__title-inc"><?php the_field('learning-module-2-title'); ?></h3>
              <p class="learning__desc"><?php the_field('learning-module-2-p'); ?></p>
              <div class="learning__foto-item">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/learning_2.webp" type="image/webp">
                  <img class="learning__staff" src="<?php bloginfo('template_url'); ?>/assets/img/learning_2.png" alt="Персонал 2" loading="lazy">
                </picture>
                <div class="arrow" id="a2">
                  <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/learnarr_2.svg" type="image/webp">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/learnarr_2.svg" alt="">
                  </picture>
                </div>
              </div>
            </div>
            <div class="learning__module" id="learn_module03">
              <h3 class="learning__title-inc"><?php the_field('learning-module-3-title'); ?></h3>
              <p class="learning__desc"><?php the_field('learning-module-3-p'); ?></p>
              <div class="learning__foto-item">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/learning_3.webp" type="image/webp">
                  <img class="learning__staff" src="<?php bloginfo('template_url'); ?>/assets/img/learning_3.png" alt="Персонал 3" loading="lazy">
                </picture>
                <div class="arrow" id="a3">
                  <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/learnarr_3.svg" type="image/webp">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/learnarr_3.svg" alt="">
                  </picture>
                </div>
              </div>
            </div>
            <div class="learning__module" id="learn_module04">
              <h3 class="learning__title-inc"><?php the_field('learning-module-4-title'); ?></h3>
              <p class="learning__desc"><?php the_field('learning-module-4-p'); ?></p>
              <div class="learning__foto-item">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/learning_4.webp" type="image/webp">
                  <img class="learning__staff" id="trust" src="<?php bloginfo('template_url'); ?>/assets/img/learning_4.png" alt="Персонал 4" loading="lazy">
                </picture>
                <div class="arrow" id="a4">
                  <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/learnarr_4.svg" type="image/webp">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/learnarr_4.svg" alt="">
                  </picture>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
    <article class="trust">
      <div class="container">
        <section class="map">
          <h2 class="map__title title" id="zagmap"><?php the_field('map-title'); ?></h2>
          <p class="maintext map__textbox" id="podzagmap"><?php the_field('map-text'); ?></p>
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/map.webp" type="image/webp">
            <img class="map__image" src="<?php bloginfo('template_url'); ?>/assets/img/map.png" alt="Карта клиник" loading="lazy">
          </picture>
          <div class="map__footer">
            <p class="maintext map__textbox-2"><?php the_field('map-p'); ?></p>
            <?php if (get_field('aboutus')) : ?>
              <a class="map__toform button__sub" href="<?= get_field('map-link')['url'] ?>"><?= get_field('map-link')   ['title'] ?></a>
            <?php endif; ?>
          </div>
        </section>
        <section class="whywe">
          <h2 class="whywe__title title" id="why_title"><?php the_field('whywe-title'); ?></h2>
          <div class="whywe__wrapper">
            <?php
              if (have_rows('whywe-loop')) {
              while (have_rows('whywe-loop')) : the_row();
            ?>
            <div class="whywe__block">
              <div class="whywe__wrap">
                <h3><?php the_sub_field('whywe-loop-title')?></h3>
                <p><?php the_sub_field('whywe-loop-p')?></p>
              </div>
              <?php if( get_sub_field('whywe-loop-img') ): ?>
                <img class="whywe__image" src="<?php the_sub_field('whywe-loop-img')?>" alt="">
              <?php endif; ?>
            </div>
            <?php
              endwhile;
              }
            ?>
          </div>
        </section>
      </div>
    </article>
    <article class="questions">
      <div class="container">
        <div class="questions__wrapper">
          <div class="questions__part1">
            <h2 class="questions__title title"><?php the_field('faq-title'); ?></h2>
            <p class="maintext questions__textbox"><?php the_field('faq-desc'); ?></p>
            <button class="questions__toform button__sub" type="button" onclick="moreFn()">Подробнее</button>
          </div>
          <div class="questions__part2">
            <?php
              if (have_rows('faq-loop')) {
              while (have_rows('faq-loop')) : the_row();
            ?>
            <div class="questions__block">
              <div class="questions__texts">
                <h3><?php the_sub_field('faq-loop-ask')?></h3>
                <p><?php the_sub_field('faq-loop-answer')?></p>
              </div>
              <button class="questions__toform" type="button">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">
                </picture>
              </button>
            </div>
            <?php
              endwhile;
              }
            ?>
          </div>
        </div>
      </div>
    </article>
    <article class="more">
      <div class="container">
        <div class="more__wrapper">
          <form class="more__form form" id="form-down" action="#" method="POST">
            <h2 class="form__title" id="more_form">Остались вопросы?</h2>
            <label id="label1-f" for="name-f">
              <div class="form__imglab">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/form_call.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/form_call.svg" alt="name">
                </picture>
              </div>
              <input class="form__input" type="text" name="name_f" id="name-f" placeholder="Ваше имя">
            </label>
            <label id="label2-f" for="phone-f">
              <div class="form__imglab">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/form_pers.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/form_pers.svg" alt="name">
                </picture>
              </div>
              <input class="form__input tel-selector" type="tel" name="phone_f" id="phone-f" placeholder="Ваш телефон">
            </label>
            <label for="question-f">
              <textarea class="form__input" name="question_f" id="question-f" placeholder="Здесь будет Ваш вопрос"
                maxlength="1500">
              </textarea>
            </label>
            <input class="form__check" type="checkbox" name="agree_f" id="agree-f"
              value="Я даю согласие на обработку моих персональных данных">
            <label class="form__check-label" for="agree-f">Я даю согласие на обработку персольных данных в соответствии
              с политикой конфиденциальности и условием пользования
            </label>
            <p class="form__confirm" id="warning-f">Пожалуйста дайте свое согласие на обработку персональных данных</p>
            <button class="form__btn button__sub" type="submit">Связаться</button>
          </form>
          <aside class="video more__video">
            <h2 class="video__title title" id="more_video"><?php the_field('video-title'); ?></h2>
            <p class="maintext16 video__textbox"><?php the_field('video-desc'); ?></h2></p>
            <a class="video__link" href="#" id="mark" data-video="<?php the_field('video-link'); ?>">
              <img src="<?php the_field('video-image'); ?>" alt="Ролик компании Med Beauty" >
              <div class="video__btn">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/video_btn.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/video_btn.svg" alt="Старт видео">
                </picture>
              </div>
            </a>
          </aside>
        </div>
      </div>
    </article>
    <article class="screen" id="vframe1">
      <div class="screen__wrapper" id="player"></div>
      <button class="screen__cross" id="vcross1">
        <picture>
          <source srcset="<?php bloginfo('template_url'); ?>/assets/img/cross.svg" type="image/webp">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/cross.svg" alt="закрыть видео" loading="lazy">
        </picture>
      </button>
    </article>
    <div class="cover"></div>
  </main>
  <?php get_footer(); ?>