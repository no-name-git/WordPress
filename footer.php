<footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <?php the_custom_logo(); ?>
        <div class="social footer__social">
          <a class="social__link" href="<?php the_field('link_instagram'); ?>">
            <svg class="test" width="26" height="26">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#instagram"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field('link_telegram'); ?>">
            <svg width="25" height="19">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#telegram"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field('link_whatsapp'); ?>">
            <svg width="26" height="26">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#whatsapp"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field('link_fucebook'); ?>">
            <svg width="14" height="25">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#facebook"></use>
            </svg>
          </a>
        </div>

        <a class="footer__copy" href="#">
          Политика конфиденциальности
        </a>
      </div>
    </div>
  </footer>
    <?php wp_footer(); ?>
</body>

</html>