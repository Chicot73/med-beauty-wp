  <footer class="footer">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__office">
          <div class="footer__logo">
            <?php the_custom_logo(); ?>
          </div>
          <address class="footer__address"><?php the_field('footer-address'); ?></address>
          <p class="footer__hours"><?php the_field('footer-hours'); ?></p>
          <p class="footer__copyright"><?php the_field('footer-c'); ?></p>
        </div>
        <div class="footer__links">
          <div class="footer__navigation">
            <?php if (get_field('footer-link-1')) : ?>
              <a class="footer__item" href="<?= get_field('footer-link-1')['url'] ?>">
                <h2><?= get_field('footer-link-1')['title'] ?></h2>
              </a>
            <?php endif; ?>
            <?php if (get_field('footer-link-2')) : ?>
              <a class="footer__item" href="<?= get_field('footer-link-2')['url'] ?>">
                <h2><?= get_field('footer-link-2')['title'] ?></h2>
              </a>
            <?php endif; ?>
            <?php if (get_field('footer-link-3')) : ?>
              <a class="footer__item" href="<?= get_field('footer-link-3')['url'] ?>">
                <h2><?= get_field('footer-link-3')['title'] ?></h2>
              </a>
            <?php endif; ?>
            <?php if (get_field('footer-link-4')) : ?>
              <a class="footer__item" href="<?= get_field('footer-link-4')['url'] ?>">
                <h2><?= get_field('footer-link-4')['title'] ?></h2>
              </a>
            <?php endif; ?>
          </div>
          <div class="footer__politics">
            <?php if (get_field('footer-politic')) : ?>
              <a class="footer__item" href="<?= get_field('footer-politic')['url'] ?>">
                <h2><?= get_field('footer-politic')['title'] ?></h2>
              </a>
            <?php endif; ?>
            <?php if (get_field('footer-conditions')) : ?>
              <a class="footer__item" href="<?= get_field('footer-conditions')['url'] ?>">
                <h2><?= get_field('footer-conditions')['title'] ?></h2>
              </a>
            <?php endif; ?>
            <?php if (get_field('footer-сookies')) : ?>
              <a class="footer__item" href="<?= get_field('footer-сookies')['url'] ?>">
                <h2><?= get_field('footer-сookies')['title'] ?></h2>
              </a>
            <?php endif; ?>
            <?php if (get_field('footer-av')) : ?>
              <a class="footer__item" href="<?= get_field('footer-av')['url'] ?>">
                <h2><?= get_field('footer-av')['title'] ?></h2>
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="footer__programm">
          <p class="footer__progtxt"><?php the_field('footer-ask'); ?></p>
          <p class="maintext footer__text"><?php the_field('footer-desc'); ?></p>
          <div class="footer__call">
            <button class="footer__btn button__sub" type="button" onclick="moreFn()">Связаться</button>
            <div class="footer__socials">
              <a class="footer__logos-soc" href="<?php the_field('footer-link1'); ?>">
                <img src="<?php the_field('footer-link1-img'); ?>" alt="facebook logo">
              </a>
              <a class="footer__logos-soc" href="<?php the_field('footer-link2'); ?>">
                <img src="<?php the_field('footer-link2-img'); ?>" alt="instagram logo">
              </a>
              <a class="footer__logos-soc" href="<?php the_field('footer-link3'); ?>">
                <img src="<?php the_field('footer-link3-img'); ?>" alt="youtube logo"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>