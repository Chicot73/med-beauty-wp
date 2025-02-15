<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Med Beauty</title>
  <meta name="description"
    content="Медицинское и косметологическое оборудование. Индивидуальные решения для вашего бизнеса">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__cover"></div>
    <div class="header__burger">
      <div class="header__burger-wrap">
        <div class="header__logo-burger">
          <?php the_custom_logo(); ?>
        </div>
        <nav id="header_links">
          <a class="header__burger-item" id="testdrive-item" onclick="TestDriveFn()">Test-drive</a>
          <a class="header__burger-item" href="#">О нас </a>
          <a class="header__burger-item" href="#">Оборудование</a>
          <a class="header__burger-item" href="#">Академия</a>
          <a class="header__burger-item" href="#">Консалтинг</a>
          <a class="header__burger-item" id="questions-item" onclick="questionsFn()">FAQ</a>
          <a class="header__burger-item" href="#">Контакты</a>
        </nav>
        <button class="header__form-btn button__sub" type="button">Связаться</button>
      </div>
      <button class="header__cross" type="button">
        <picture>
          <source srcset="<?php bloginfo('template_url'); ?>/assets/img/cross.svg" type="image/webp">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/cross.svg" alt="закрыть дополнительное меню">
        </picture>
      </button>
    </div>
    <form class="header__form form" id="form" action="#" method="POST">
      <h2 class="form__title">Остались вопросы?</h2>
      <label id="label1" for="name">
        <div class="form__imglab">
          <picture>
            <source srcset="img/form_call.svg" type="image/webp">
            <img src="img/form_call.svg" alt="name">
          </picture>
        </div>
        <input class="form__input" type="text" name="name" id="name" placeholder="Ваше имя" maxlength="35">
      </label>
      <label id="label2" for="phone">
        <div class="form__imglab">
          <picture>
            <source srcset="img/form_pers.svg" type="image/webp">
            <img src="img/form_pers.svg" alt="name">
          </picture>
        </div>
        <input class="form__input tel-selector" type="tel" name="phone" id="phone" placeholder="Ваш телефон">
      </label>
      <label for="question">
        <textarea class="form__input" name="question" id="question" placeholder="Здесь будет Ваш вопрос"
          maxlength="1500">
        </textarea>
      </label>
      <input class="form__check" type="checkbox" name="agree" id="agree"
        value="Я даю согласие на обработку моих персональных данных">
      <label class="form__check-label" for="agree">Я даю согласие на обработку персольных данных в соответствии с
        политикой конфиденциальности и условием пользования
      </label>
      <p class="form__confirm" id="warning">Пожалуйста дайте свое согласие на обработку персональных данных
      </p>
      <button class="form__btn button__sub" type="submit">Связаться</button>
    </form>
    <div class="container">
      <div class="header__top">
        <div class="header__logo">
          <?php the_custom_logo(); ?>
        </div>
        <div class="header__between"></div>
        <div class="header__wrapper">
          <nav class="header__menu">
            <a class="header__menu-item" id="testdrive-item" onclick="TestDriveFn()">Test-drive
            </a>
            <a class="header__menu-item" id="decisions-item" onclick="decisionsFn()">Решения
            </a>
            <a class="header__menu-item" id="learning-item" onclick="learningFn()">Обучение
            </a>
            <a class="header__menu-item" id="trust-item" onclick="trustFn()">Доверие
            </a>
            <a class="header__menu-item" id="questions-item" onclick="questionsFn()">FAQ
            </a>
            <button class="header__chose-lang" type="button"><span>RU</span>
              <span>
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrdown.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrdown.svg" alt="стрелка вниз">
                </picture>
              </span>
              <div class="header__randome">
                <p class="header__randome-it" onclick="listener(event)">HE</p>
                <p class="header__randome-it" onclick="listener(event)">AR</p>
                <p class="header__randome-it" onclick="listener(event)">EN</p>
              </div>
            </button>
          </nav> <button class="header__burger-btn" type="button">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/burger.svg" type="image/webp">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/burger.svg" alt="дополнительное меню">
            </picture>
          </button>
        </div>
      </div>
    </div>
  </header>