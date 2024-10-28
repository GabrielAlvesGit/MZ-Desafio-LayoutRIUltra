<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <?php 
    $sizes = [16, 32, 48, 96, 144, 180];
    $favicon_group = get_field('favicon_group', 'option');

    if ($favicon_group) {
        foreach ($sizes as $size) {
            $favicon_url = isset($favicon_group["favicon_$size"]) ? esc_url($favicon_group["favicon_$size"]) : '';
            if ($favicon_url) {
                echo "<link rel='icon' type='image/png' sizes='{$size}x{$size}' href='$favicon_url'>";
            }
        }
    }
  ?>
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