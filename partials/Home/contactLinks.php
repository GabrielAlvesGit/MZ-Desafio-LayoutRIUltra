<!-- Links de Contato -->
<section class="pageHome__contactLinks">
  <div class="container  flex">
    <ul class="pageHome__contactLinks__list">
      <?php if(have_rows('contactLinks_list')): while (have_rows('contactLinks_list')) : the_row(); ?>
      <li class="pageHome__contactLinks__list__item">
        <?php 
            if ( $link = get_sub_field("link") ) {
                $link_url = esc_url($link["url"]);
                $link_title = esc_html($link["title"]);
                $link_target = esc_attr($link["target"] ? $link["target"] : "_self");

                echo <<<END

              <a class="pageHome__contactLinks__list__item__link" href="$link_url" target="$link_target">
                $link_title
              </a>

              END;
              }
           ?>
      </li>
      <?php endwhile; endif; ?>
    </ul>
  </div>
</section>