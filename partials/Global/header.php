<!-- Header -->
<header class="header">

    <!-- Header top -->
    <?php get_template_part('partials/Global/header-top'); ?>

    <div class="header__bottom">
        <div class="container flex">

            <!-- Header bottom -->
            <div class="header__bottom__logo">
                <a class="header__bottom__logo__link" href="">
                    <img class="header__bottom__logo__link__img"
                        src="<?php echo get_template_directory_uri(); ?>/img/logos/ultra.png" alt="" />
                </a>
            </div>

            <!-- Navigation -->
            <div class="header__bottom__navigation">
                <?php
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

                <!-- Header top -->
                <?php get_template_part('partials/Global/header-top'); ?>

                <!-- Menu Ícone -->
                <div class="header__bottom__toogle">
                    <svg class="header__bottom__toogle__menu" width="22" height="19" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <path stroke="#00458c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M1 1h20M1 9.5h20M1 18h20">
                        </path>
                    </svg>

                    <svg class="header__bottom__toogle__close" width="14" height="14" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="header__navigation__mobileClose js-click" role="img">
                        <path d="m1 1 12 12M13 1 1 13" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Header JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>