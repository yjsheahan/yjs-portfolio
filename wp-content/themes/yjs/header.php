<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YJS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Raleway:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site min-vh-100">

<!--   <header class="w-100 bg-blue flex justify-between pa5-l pa4">
    <h4 class="text-white">Yasmin Jones Sheahan</h4>

    <ul id="header-links" class="flex pl0">
      <li>
        <a href="#">Contact</a>
      </li>
      <li>
        <a href="https://github.com/yjsheahan">Github</a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/yasminjs/">LinkedIn</a>
      </li>
    </ul>
  </header> -->
