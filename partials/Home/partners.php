<!-- Partners -->
<section class="pageHome__partners">
  <div class="container flex">
    <ul class="pageHome__partners__list">
      <?php if(have_rows('partners_list')): while (have_rows('partners_list')) : the_row(); ?>
      <li class="pageHome__partners__list__item">
        <?php 
          if ( $link = get_sub_field("link") ) {
              $link_url = esc_url($link["url"]);
              $link_title = esc_html($link["title"]);
              $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
              $img = get_sub_field("img");
              $img_url = esc_url($img["url"]); 

              echo <<<END
                  <a class="pageHome__partners__list__item__link" href="$link_url" target="$link_target">
                      <img class="pageHome__partners__list__item__link__img" src="$img_url" alt="$link_title" />
                  </a>
              END;
          }
          ?>
      </li>
      <?php endwhile; endif;  ?>
    </ul>
  </div>
</section>