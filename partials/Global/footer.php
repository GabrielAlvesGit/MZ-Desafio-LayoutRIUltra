<!-- Footer -->
<footer class="footer">
  <div class="container flex">
    <article class="footer__top">
      <div class="footer__top__icons">
        <ul class="footer__top__icons__list">
          <?php if(have_rows('icons_list', 'option')): while (have_rows('icons_list', 'option')) : the_row(); ?>
          <li class="footer__top__icons__list__item">
            <img class="footer__top__icons__list__item__img" src="<?php the_sub_field('icon', 'option'); ?>" alt="" />
          </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>

      <div class="footer__top__socialMedia">
        <?php if( have_rows('redes_sociais_repetidor', 'option') ) : ?>
        <ul class="footer__top__socialMedia__list">
          <?php while ( have_rows('redes_sociais_repetidor', 'option') ) : the_row(); ?>
          <li class="footer__top__socialMedia__list__item">
            <a class="footer__top__socialMedia__list__item__link"
              href="<?php the_sub_field('redes_sociais_link', 'option'); ?>" target="_blank">
              <img class="footer__top__socialMedia__list__item__link__img"
                src="<?php bloginfo('template_directory'); ?>/img/social-media/<?php the_sub_field('redes_sociais_icone', 'option'); ?>.png"
                alt="<?php the_sub_field('redes_sociais_icone', 'option'); ?>">
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </div>
    </article>

    <article class="footer__bottom">
      <div class="footer__bottom__copy">
        <div class="footer__bottom__copy__editor">
          <?php if(have_rows('editor_group', 'option')): while (have_rows('editor_group', 'option')) : the_row(); ?>
          <?php the_sub_field('editor', 'option'); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>

      <div class="footer__bottom__powered">
        <a href="#" target="_blank">Powered by <b>MZ</b></a>
      </div>
    </article>
  </div>
</footer>