<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php the_field('global_favicon', 'option') ?>" />
  <title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>

  <!-- Inicio WordPress Header-->
  <?php wp_head();?>
  <!-- Final WordPress Header-->
</head>

<body <?php body_class(); ?>>
  <main class="main">

  <?php 
    get_template_part('partials/Global/header');
  ?>