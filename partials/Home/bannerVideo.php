<!-- Banner -->
<section class="pageHome__banners">
  <article class="pageHome__banners__banner">
    <!-- Banner -->
    <div class="pageHome__banners__banner__list">
      <?php if(have_rows('banner_group')): while (have_rows('banner_group')) : the_row(); ?>
      <div class="pageHome__banners__banner__list__item">
        <img src="<?php the_sub_field('banner'); ?>" alt="" />
        <div class="pageHome__banners__banner__list__item__editor"><?php the_sub_field('editor'); ?></div>
      </div>
      <?php endwhile; endif; ?>
    </div>

    <!-- Manual Navigation -->
    <div class="pageHome__banners__banner__navManual"></div>
  </article>
</section>

<!-- Header JS -->
<script defer src="<?php echo get_template_directory_uri(); ?>/js/banner.js"></script>