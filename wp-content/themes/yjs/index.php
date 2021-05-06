<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YJS
 */

get_header();
?>

	<main id="primary" class="site-main min-vh-100 flex flex-column justify-center items-center">
    <section id="index-grid" class="flex flex-column justify-center items-center">
      <a id="ig" class="text-pink" style="text-transform: lowercase !important;" href="https://www.instagram.com/yasminjonessheahan/"><p>@yasminjonessheahan</p></a>
      <a href="https://www.pilateswithyasmin.com/" class="text-black mv4"><h4 class="tc">Pilates</h4></a>
      <div class="flex justify-center items-center">
        <div id="line" class="bg-black">
        </div>
      </div>

      <a href="http://localhost:8888/portfolio/" class="text-black flex justify-center mv4"><h4 class="tc">WordPress Development<br>and Web Design</h4></a>
    </section>
	</main><!-- #main -->

<?php

get_footer();
