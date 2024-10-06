<!-- Header -->
 <header class="header">

  <!-- Header top -->
  <?php get_template_part('partials/Global/header-top'); ?>

  <div class="header__bottom">
    <div class="container flex">

    <!-- Header bottom -->
     <div class="header__bottom__logo">
      <a class="header__bottom__logo__link" href="">
        <img class="header__bottom__logo__link__img" src="<?php echo get_template_directory_uri(); ?>/img/logos/ultra.png" alt="" />
      </a>
     </div>

     <!-- Navigation -->
      <div class="header__bottom__navigation">
      <?php
            // Função para adicionar o ícone de busca ao menu
            function add_search_icon_to_menu($items, $args) {
              if ($args->theme_location == 'menu-primary') {
                $items .= '<li class="search">
                  <svg class="js-search-open" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33333 2C4.38781 2 2 4.38781 2 7.33333C2 10.2789 4.38781 12.6667 7.33333 12.6667C8.5658 12.6667 9.70067 12.2486 10.6037 11.5466L12.1953 13.1381C12.4556 13.3984 12.8777 13.3984 13.1381 13.1381C13.3984 12.8777 13.3984 12.4556 13.1381 12.1953L11.5466 10.6037C12.2486 9.70067 12.6667 8.5658 12.6667 7.33333C12.6667 4.38781 10.2789 2 7.33333 2ZM3.33333 7.33333C3.33333 5.12419 5.12419 3.33333 7.33333 3.33333C9.54247 3.33333 11.3333 5.12419 11.3333 7.33333C11.3333 9.54247 9.54247 11.3333 7.33333 11.3333C5.12419 11.3333 3.33333 9.54247 3.33333 7.33333Z" fill="#004718"></path>
                  </svg>
                </li>';
              }
              return $items;
            }
            
            add_filter('wp_nav_menu_items', 'add_search_icon_to_menu', 10, 2);

            $args = array(
              'menu' => 'primary',
              'theme_location' => 'menu-primary',
              'menu_class' => 'menu-primary-list',
              'container' => 'nav',
              'container_class' => 'menu-primary',
              'add_li_class'  => 'your-class-name1 your-class-name-2'
            );

            wp_nav_menu($args);
            ?>
      </div>
    </div>
  </div>
 </header>