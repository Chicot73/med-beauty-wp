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
          <div class="footer__politics"><a class="footer__item" href="#">
              <h2>Политика конфиденциальности</h2>
            </a><a class="footer__item" href="#">
              <h2>Условия использования</h2>
            </a><a class="footer__item" href="#">
              <h2>Политика использования файлов Cookies </h2>
            </a><a class="footer__item" href="#">
              <h2>Политика доступности</h2>
            </a></div>
        </div>
        <div class="footer__programm">
          <p class="footer__progtxt">Хочешь стать нашим партнером?</p>
          <p class="maintext footer__text">Оставьте заявку, и мы свяжемся с вами для уточнения деталей</p>
          <div class="footer__call"> <button class="footer__btn button__sub" type="submit">Связаться</button>
            <div class="footer__socials"> <a class="footer__logos-soc" href="#">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="facebook logo">
                </picture>
              </a><a class="footer__logos-soc" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="instagram logo"></a><a
                class="footer__logos-soc" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/youtube.svg" alt="youtube logo"></a></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
 
  <?php wp_footer(); ?>
</body>

</html>