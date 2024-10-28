<?php 
/*=============== Funções Para Limpar o Header ===============*/
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


/*---------------------------------------------------------------------------------------------*/

/*=============== Importação do CSS dentro da function - (Sem uso do Href='/style' no header) ===============*/
function head_css() {
  wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'head_css');


/*---------------------------------------------------------------------------------------------*/

/*=============== Register Menu  ===============*/
add_theme_support('menus');

/*=============== Menu  ===============*/
function register_my_menu() {
  register_nav_menu('menu-primary', __('Primary Menu'));
}
add_action('init', 'register_my_menu');

// Função de remove o ID das nav
function remove_menu_id($nav_menu, $args) {
  $nav_menu = preg_replace('/ id="[^"]+"/', '', $nav_menu); 
  return $nav_menu;
}
add_filter('wp_nav_menu', 'remove_menu_id', 10, 2);

/*---------------------------------------------------------------------------------------------*/

/*=============== INCLUDES  ===============*/
function includeDir($path) {
  foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $file) {
      if ($file->isFile() && $file->getExtension() === 'php') {
          require_once $file->getPathname();
      }
  }
}

includeDir(__DIR__.'/includes/');

/*=============== MODE DESENVOLVEDOR  ===============*/
function developmentMode($string) {
  if( get_field("option") ) : 
      if( have_rows("option") ): while( have_rows("option") ) : the_row();
          the_sub_field($string);
      endwhile; endif;
  endif;
}

?>