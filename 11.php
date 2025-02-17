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
          <source srcset="img/cross.svg" type="image/webp">
          <img src="img/cross.svg" alt="закрыть дополнительное меню">
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
  <?php get_header(); ?>
  <main>
    <article class="hero">
      <div class="container">
        <h1 class="hero__title1">Медицинское и косметологическое оборудование</h1>
        <div class="hero__module01 hero__module">
          <h2 class="hero__title-big">Медицинское<br>и косметологическое оборудование</h2>
          <p class="hero__desc">Индивидуальные решения <span>для&nbsp;вашего бизнеса.</span><br>Международно признанный
            лидер
          </p>
        </div>
        <div class="hero__module02 hero__module">
          <h2 class="hero__title-inc">Инновационные технологии</h2>
          <p class="hero__desc">для косметологических клиник,<br>врачей и домашнего пользования</p>
        </div>
        <div class="hero__module03 hero__module">
          <h2 class="hero__title-inc hero__title-inc--3">Комплексное решение для проектирования</h2>
          <p class="hero__desc">и запуска вашего бизнеса, адаптированное под ваши цели и возможности</p>
        </div>
        <div class="hero__module04 hero__module">
          <h2 class="hero__title-inc">Оборудование. Академия</h2>
          <p class="hero__desc">Индивидуальные решения для вашего бизнеса</p>
        </div>
        <picture>
          <source srcset="<?php bloginfo('template_url'); ?>/assets/img/card_product_big.webp" type="image/webp">
          <img class="hero__bigobj" src="<?php bloginfo('template_url'); ?>/assets/img/card_product_big.png" alt="косметологическое оборудование">
        </picture>
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
              <button class="slider__form button__sub" type="button">Подробнее</button>
            </div>
            <div class="slider__note">
              <p>Надежное и сертифицированное оборудование, созданное для ценителей красоты</p>
            </div>
          </div>
          <div class="slider__part2">
            <?php
              global $post;

              $myposts = get_posts([
                'numberposts' => -1,
                'offset'      => 1,
                'category'    => 1
              ]);

              if( $myposts ){
                foreach( $myposts as $post ){
                  setup_postdata( $post );
                  ?>
                    <div class="swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide slider__slide">
                          <div class="slider__image">
                            <div class="slider__turget">
                              <?php the_post_thumbnail(344, 576); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                }
              }

              wp_reset_postdata(); // Сбрасываем $post
            ?>







            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide slider__slide">
                  <div class="txts">
                    <h3>Косметологическое оборудование</h3>
                    <p>Многофункциональные аппараты для омоложения, лифтинга и&nbsp;коррекции эстетических недостатков
                      лица и&nbsp;тела
                    </p>
                  </div>
                  <div class="slider__image">
                    <div class="slider__border1"></div>
                    <div class="slider__border2"></div>
                    <div class="slider__border3"></div>
                    <div class="slider__border4"></div>
                    <div class="slider__turget">
                      <picture>
                        <source srcset="img/card_product1.webp" type="image/webp">
                        <img src="img/card_product1.png" alt="product1" loading="lazy">
                      </picture>
                    </div>
                  </div>
                  <p>Современное оборудование, созданное для профессионалов индустрии красоты. Аппараты, которые
                    помогают проводить эффективные процедуры для ухода за кожей, омоложения, коррекции фигуры и решения
                    эстетических задач. Удобство использования, надежность и инновационные технологии для повышения
                    качества услуг и роста вашего бизнеса.
                  </p>
                </div>
                <div class="swiper-slide slider__slide">
                  <div class="txts">
                    <h3>Медицинское оборудование</h3>
                    <p>Процедуры профессионального уровня у вас дома</p>
                  </div>
                  <div class="slider__image">
                    <div class="slider__border1"></div>
                    <div class="slider__border2"></div>
                    <div class="slider__border3"></div>
                    <div class="slider__border4"></div>
                    <div class="slider__turget slider__turget-1">
                      <picture>
                        <source srcset="img/card_product2.webp" type="image/webp"><img src="img/card_product2.png"
                          alt="product2" loading="lazy">
                      </picture>
                    </div>
                  </div>
                  <p>Оборудование медицинского уровня для работы в клиниках и специализированных кабинетах. Аппараты,
                    отвечающие строгим стандартам качества, обеспечивают высокую точность, безопасность и эффективность
                    процедур. Поддержите свою практику с помощью технологий, которым доверяют профессионалы.
                  </p>
                </div>
                <div class="swiper-slide slider__slide">
                  <div class="txts">
                    <h3>Бьюти девайсы</h3>
                    <p>Процедуры профессионального уровня у вас дома</p>
                  </div>
                  <div class="slider__image">
                    <div class="slider__border1"></div>
                    <div class="slider__border2"></div>
                    <div class="slider__border3"></div>
                    <div class="slider__border4"></div>
                    <div class="slider__turget slider__turget-2">
                      <picture>
                        <source srcset="img/card_product3.webp" type="image/webp">
                        <img src="img/card_product3.png" alt="product3" loading="lazy">
                      </picture>
                    </div>
                  </div>
                  <p>Аппараты для тех, кто ценит профессиональный уход в домашних условиях. Инновационные устройства,
                    которые просты в использовании и обеспечивают высокую эффективность процедур. Создайте свой личный
                    бьюти-центр с надежным оборудованием для здоровья и красоты.
                  </p>
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="slider__btn-next">
                <picture>
                  <source srcset="img/arrow.svg" type="image/webp">
                  <img src="img/arrow.svg" alt="вправо">
                </picture>
              </div>
              <div class="slider__btn-prev">
                <picture>
                  <source srcset="img/arrow.svg" type="image/webp">
                  <img src="img/arrow.svg" alt="влево">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
    <article class="test-drive" id="testdrive">
      <div class="container">
        <div class="test-drive__wrapper">
          <div class="test-drive__part1">
            <h2 class="title">Test Drive</h2>
            <p>Протестируйте оборудование в действии перед покупкой. Мы предоставляем возможность оценить эффективность
              и удобство наших аппаратов в нашем учебном центре. </p>
            <p>Наши эксперты расскажут о преимуществах, подберут для вас самый оптимальный вариант по цене и
              направлениях технологий.
            </p>
            <ul>
              <li>Оценка в реальных условиях</li>
              <li>Сравнить различные аппараты и технологии</li>
              <li>Консультация эксперта для подбора технологии конкретно под ваш бизнес</li>
              <li>Оценить возможность субсидирования вашего проекта</li>
            </ul>
            <button class="test-drive__toform button__sub" type="button">Подробнее</button>
          </div>
        </div>
      </div>
    </article>
    <article class="decisions" id="decisions">
      <div class="container">
        <div class="decisions__wrapper">
          <div class="decisions__part1">
            <h2 class="title" id="t2">Готовые<br>решения</h2>
            <p class="maintext">Med Beauty оказывает широкий спектр услуг для создания и оснащения косметологических
              кабинетов, студий и клиник красоты. Мы разрабатываем индивидуальные решения, учитывая особенности вашего
              бизнеса, пространства и бюджета: от небольшого домашнего кабинета, студии эпиляции или коррекции фигуры до
              сети многопрофильных клиник красоты.
            </p>
            <p class="maintext">Ассортиментная матрица оказываемых услуг включает более ста пятидесяти процедурНаш
              консалтинг способствует бьюти бизнесам в определении точек роста, оптимизации процессов, повышении
              эффективности и внедрении статегии роста.
            </p> <button class="decisions__toform button__sub" type="button">Подробнее</button>
          </div>
          <div class="decisions__part2">
            <p class="decisions__subtitle">Формула реализации проекта:</p>
            <ul class="decisions__list">
              <li>Первичная консультация</li>
              <li>Аудит проекта и выбор направления</li>
              <li>Заключение договора и оплата</li>
              <li>Разработка стратегии и&nbsp;прохождение обучения</li>
              <li>Ввод оборудования в&nbsp;эксплуатацию и техническое сопровождение</li>
            </ul>
          </div>
        </div>
      </div>
    </article>
    <article class="learning" id="learning">
      <div class="container">
        <div class="learning__border">
          <div class="learning__wrapper">
            <h2 class="learning__title title" id="learn_h2">Академия<br>Med Beauty</h2>
            <p class="maintext learning__textbox" id="learn_p">Обучение работе с&nbsp;оборудованием
              для&nbsp;косметологов и врачей по авторским курсам. Профессиональные программы с&nbsp;выдачей
              международного диплома, дающего право на профессиональную страховку в Израиле
            </p>
          </div>
          <div class="learning__staffgroup">
            <div class="learning__module" id="learn_module01">
              <h3 class="learning__title-inc">Новичкам в&nbsp;индустрии красоты</h3>
              <p class="learning__desc">которые хотят получить фундаментальные знания и&nbsp;практические навыки работы
                с&nbsp;оборудованием
              </p>
              <div class="learning__foto-item">
                <picture>
                  <source srcset="img/learning_1.webp" type="image/webp">
                  <img class="learning__staff" src="img/learning_1.png" alt="Персонал 1" loading="lazy">
                </picture>
                <div class="arrow" id="a1">
                  <picture>
                    <source srcset="img/learnarr_1.svg" type="image/webp">
                    <img src="img/learnarr_1.svg" alt="">
                  </picture>
                </div>
              </div>
            </div>
            <div class="learning__module" id="learn_module02">
              <h3 class="learning__title-inc">Опытным косметологам и&nbsp;врачам</h3>
              <p class="learning__desc">желающим расширить спектр предоставляемых услуг, освоить современные технологии
                и повысить квалификацию
              </p>
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
              <h3 class="learning__title-inc">Владельцам клиник<br>и салонов красоты</h3>
              <p class="learning__desc">cтремящимся внедрить новые процедуры, освоить передовые методики и улучшить
                качество услуг
              </p>
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
              <h3 class="learning__title-inc">Бизнес инвесторам</h3>
              <p class="learning__desc">Вы узнаете, как выбирать оборудование, оценивать рентабельность, масштабировать
                успешный бизнес при минимальных вложениях
              </p>
              <div class="learning__foto-item">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/learning_4.webp" type="image/webp">
                  <img class="learning__staff" src="<?php bloginfo('template_url'); ?>/assets/img/learning_4.png" alt="Персонал 4" loading="lazy">
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
    <article class="trust" id="trust">
      <div class="container">
        <section class="map">
          <h2 class="map__title title" id="zagmap">Клиники и салоны по всему миру
            <span>выбирают оборудование Med&nbsp;Beauty</span>
          </h2>
          <p class="maintext map__textbox" id="podzagmap">Врачи и клиники по всему миру доверяют оборудованию медбьюти
          </p>
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/map.webp" type="image/webp">
            <img class="map__image" src="<?php bloginfo('template_url'); ?>/assets/img/map.png" alt="Карта клиник" loading="lazy">
          </picture>
          <div class="map__footer">
            <p class="maintext map__textbox-2">Наше косметологическое оборудование используется в ведущих клиниках и у
              экспертов индустрии. Доверие профессионалов, отзывы клиентов и международные стандарты подтверждают его
              качество, безопасность и эффективность
            </p>
            <button class="map__toform button__sub" type="button">О нас</button>
          </div>
        </section>
        <section class="whywe">
          <h2 class="whywe__title title" id="why_title">Почему я должен выбрать<br>ваше оборудование</h2>
          <div class="whywe__wrapper">
            <div class="whywe__block">
              <div class="whywe__wrap">
                <h3>Доказанная эффективность</h3>
                <p>В отличии от аналогов, результаты нашего оборудования подтверждены клинически</p>
              </div>
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/icon_1.svg" type="image/webp">
                <img class="whywe__image" src="<?php bloginfo('template_url'); ?>/assets/img/icon_1.svg" alt="">
              </picture>
            </div>
            <div class="whywe__block">
              <div class="whywe__wrap">
                <h3>Поддержка</h3>
                <p>Обучение, техническое сопровождение и маркетинговые рекомендации</p>
              </div>
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/icon_2.svg" type="image/webp">
                <img class="whywe__image" src="<?php bloginfo('template_url'); ?>/assets/img/icon_2.svg" alt="">
              </picture>
            </div>
            <div class="whywe__block">
              <div class="whywe__wrap">
                <h3>Окупаемость</h3>
                <p>Стремительная прибыль благодаря эффективности и надежности оборудования</p>
              </div>
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/icon_3.svg" type="image/webp">
                <img class="whywe__image" src="<?php bloginfo('template_url'); ?>/assets/img/icon_3.svg" alt="">
              </picture>
            </div>
            <div class="whywe__block">
              <div class="whywe__wrap">
                <h3>Безопасность и Долговечность</h3>
                <p>Международно подтвержденные сертификаты &lpar;CE, FDA&rpar; и соответственно высокие стандарты на
                  производстве нивелируют большинство возможных рисков</p>
              </div>
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/icon_4.svg" type="image/webp"><img class="whywe__image" src="<?php bloginfo('template_url'); ?>/assets/img/icon_4.svg" alt="">
              </picture>
            </div>
            <div class="whywe__block">
              <div class="whywe__wrap">
                <h3>Инновации и Универсальность</h3>
                <p>Уникальные технологии открывают широкий спектр возможностей с целью расширения и интеграции
                  нескольких услуг на одном оборудовании
                </p>
              </div>
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/icon_5.svg" type="image/webp">
                <img class="whywe__image" src="<?php bloginfo('template_url'); ?>/assets/img/icon_5.svg" alt="">
              </picture>
            </div>
            <div class="whywe__block">
              <div class="whywe__wrap">
                <h3>Уникальные авторские методики</h3>
                <p>Наше оборудование снабжено эксклюзивными протоколами от ведущих специалистов</p>
              </div>
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/icon_6.svg" type="image/webp">
                <img class="whywe__image" src="<?php bloginfo('template_url'); ?>/assets/img/icon_6.svg" alt="">
              </picture>
            </div>
            <div class="whywe__block">
              <div class="whywe__wrap">
                <h3>Энергоэффективность</h3>
                <p>Оборудование потребляет меньше электроэнергии при сохранении высокой мощности, снижая
                  эксплуатационные расходы
                </p>
              </div>
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/icon_7.svg" type="image/webp">
                <img class="whywe__image" src="<?php bloginfo('template_url'); ?>/assets/img/icon_7.svg" alt="">
              </picture>
            </div>
            <div class="whywe__block">
              <div class="whywe__wrap">
                <h3>Репутация</h3>
                <p>Оборудование уже успешно используется в известных клиниках</p>
              </div>
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/icon_8.svg" type="image/webp">
                <img class="whywe__image" src="<?php bloginfo('template_url'); ?>/assets/img/icon_8.svg" alt="">
              </picture>
            </div>
          </div>
        </section>
      </div>
    </article>
    <article class="questions" id="questions">
      <div class="container">
        <div class="questions__wrapper">
          <div class="questions__part1">
            <h2 class="questions__title title">Частые вопросы</h2>
            <p class="maintext questions__textbox">Остались вопросы? Задайте их нам!</p>
            <button class="questions__toform button__sub" type="button" onclick="moreFn()">Подробнее</button>
          </div>
          <div class="questions__part2">
            <div class="questions__block">
              <div class="questions__texts">
                <h3>Какая гарантия предоставляется на оборудование, и как организовано техническое обслуживание?</h3>
                <p>Срок гарантии на оборудование начинается от 12 месяцев. По истечении гарантийного срока мы
                  предоставляем услуги постгарантийного обслуживания
                </p>
              </div>
              <button class="questions__toform" type="button">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">
                </picture>
              </button>
            </div>
            <div class="questions__block">
              <div class="questions__texts">
                <h3>Обязательно ли обладать медицинским образованием, чтобы открыть клинику или кабинет?</h3>
                <p>Срок гарантии на оборудование начинается от 12 месяцев. По истечении гарантийного срока мы
                  предоставляем услуги постгарантийного обслуживания
                </p>
              </div>
              <button class="questions__toform" type="button">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">
                </picture>
              </button>
            </div>
            <div class="questions__block">
              <div class="questions__texts">
                <h3>Действительно ли оборудование помогает достигать заявленных результатов &lpar;например, снижение
                  объемов, лифтинг&rpar;?
                </h3>
                <p>Срок гарантии на оборудование начинается от 12 месяцев. По истечении гарантийного срока мы
                  предоставляем услуги постгарантийного обслуживания
                </p>
              </div> <button class="questions__toform" type="button">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">
                </picture>
              </button>
            </div>
            <div class="questions__block">
              <div class="questions__texts">
                <h3>Какое обучение я получу для работы с этим оборудованием и не возникнут ли сложности у новичка?</h3>
                <p>Срок гарантии на оборудование начинается от 12 месяцев. По истечении гарантийного срока мы
                  предоставляем услуги постгарантийного обслуживания
                </p>
              </div> <button class="questions__toform" type="button">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">
                </picture>
              </button>
            </div>
            <div class="questions__block">
              <div class="questions__texts">
                <h3>Как быстро я смогу окупить инвестиции в оборудование?</h3>
                <p>Срок гарантии на оборудование начинается от 12 месяцев. По истечении гарантийного срока мы
                  предоставляем услуги постгарантийного обслуживания
                </p>
              </div>
              <button class="questions__toform" type="button">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">
                </picture>
              </button>
            </div>
            <div class="questions__block">
              <div class="questions__texts">
                <h3>Есть ли у вас программы лизинга или рассрочки для приобретения оборудования?</h3>
                <p>Срок гарантии на оборудование начинается от 12 месяцев. По истечении гарантийного срока мы
                  предоставляем услуги постгарантийного обслуживания
                </p>
              </div> <button class="questions__toform" type="button">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">
                </picture>
              </button>
            </div>
            <div class="questions__block">
              <div class="questions__texts">
                <h3>Могу ли я увидеть оборудование в работе до покупки, например во время мастер-класса или
                  демонстрации?
                </h3>
                <p>Срок гарантии на оборудование начинается от 12 месяцев. По истечении гарантийного срока мы
                  предоставляем услуги постгарантийного обслуживания
                </p>
              </div> <button class="questions__toform" type="button">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">
                </picture>
              </button>
            </div>
            <div class="questions__block">
              <div class="questions__texts">
                <h3>Вы помогаете с продвижением услуг, предоставляете рекламные материалы или консультации?</h3>
                <p>Срок гарантии на оборудование начинается от 12 месяцев. По истечении гарантийного срока мы
                  предоставляем услуги постгарантийного обслуживания</p>
              </div>
              <button class="questions__toform" type="button">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">
                </picture>
              </button>
            </div>
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
                  <source srcset="img/form_call.svg" type="image/webp"><img src="img/form_call.svg" alt="name">
                </picture>
              </div>
              <input class="form__input" type="text" name="name_f" id="name-f" placeholder="Ваше имя">
            </label>
            <label id="label2-f" for="phone-f">
              <div class="form__imglab">
                <picture>
                  <source srcset="img/form_pers.svg" type="image/webp">
                  <img src="img/form_pers.svg" alt="name">
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
            <h2 class="video__title title" id="more_video">Видео о&nbsp;нашей компании</h2>
            <p class="maintext16 video__textbox">Стремительная прибыль благодаря эффективности и надежности оборудования
            </p>
            <a class="video__link" href="#" id="mark" data-video="m35sHBpUXBQ">
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/youtube.webp" type="image/webp">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/youtube.jpg" alt="Ролик компании Med Beauty" loading="lazy">
              </picture>
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
  <footer class="footer">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__office">
          <div class="footer__logo">
            <?php the_custom_logo(); ?>
          </div>
          <address class="footer__address">Израиль, Реховотул. Моти Кинд 2</address>
          <p class="footer__hours">вск-чтв: 10:00 - 19:00. Пт: 10:00 - 17:00</p>
          <p class="footer__copyright">2025 MedBeauty LTD. All rights reserved.</p>
        </div>
        <div class="footer__links">
          <div class="footer__navigation"><a class="footer__item" href="#">
              <h2>Каталог</h2>
            </a><a class="footer__item" href="#">
              <h2>Обучение </h2>
            </a><a class="footer__item" href="#">
              <h2>Консалтинг </h2>
            </a><a class="footer__item" href="#">
              <h2>Контакты</h2>
            </a></div>
          <div class="footer__politics">
            <a class="footer__item" href="#">
              <h2>Политика конфиденциальности</h2>
            </a>
            <a class="footer__item" href="#">
              <h2>Условия использования</h2>
            </a>
            <a class="footer__item" href="#">
              <h2>Политика использования файлов Cookies</h2>
            </a>
            <a class="footer__item" href="#">
              <h2>Политика доступности</h2>
            </a>
          </div>
        </div>
        <div class="footer__programm">
          <p class="footer__progtxt">Хочешь стать нашим партнером?</p>
          <p class="maintext footer__text">Оставьте заявку, и мы свяжемся с вами для уточнения деталей</p>
          <div class="footer__call">
            <button class="footer__btn button__sub" type="submit">Связаться</button>
            <div class="footer__socials">
              <a class="footer__logos-soc" href="#">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" type="image/webp">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="facebook logo">
                </picture>
              </a>
              <a class="footer__logos-soc" href="#">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="instagram logo">
              </a>
              <a class="footer__logos-soc" href="#">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/youtube.svg" alt="youtube logo"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script defer src="js/main.js"></script>
  <script src="js/inputmask.min.js"></script>
</body>

</html>