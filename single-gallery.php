
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/tiny-slider.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/min/tiny-slider.js"></script>
<?php
/**
 * template for displaying single gallery posts
 *
 * @package WordPress
 * @subpackage  Arcademia Theme
 * @since  Arcademia Theme 1.0
 */

  get_header();
  $heroImageSrc = get_theme_mod( 'contact_hero_image' );
  $imageAlt = "Acardemia Project Hero";
  $subTitle = get_theme_mod('gallery_hero_box_subtitle');
  $title = get_theme_mod('gallery_hero_box_title');
  $str = $_SERVER['REQUEST_URI'];
  preg_match('/\/gallery\/(?P<id>\d+)/', $str, $matches);
  $images =  (get_post_meta( $matches['id'])['project_images'][0]);
  if($_GET['project']) {
    $project = get_post($_GET['project']);
    $project_title = $project->post_title;
  }
?>
 <?php include(locate_template('template-parts/hero.php')); ?>
 <div class="main-body-container gallery-page">
 
 <?php
    include(locate_template('template-parts/hero-text-box.php'));
   ?>

   <?php
   /* Start the Loop */
   while ( have_posts() ) : the_post();
   include(locate_template('template-parts/content-gallery.php'));
endwhile;
    ?>
</div>
<?php 
  $left['link'] = "/testimonials";
  $left['label'] = 'TESTIMONIALS';
  $right['link'] = "/contact";
  $right['label'] = 'CONTACT US';
  include(locate_template('template-parts/page-bottom-links.php'));
?>

 <?php get_footer(); wp_footer(); ?>
 <script type="text/javascript">
  var slider = tns({
    container: '.gallery-slider',
    items: 1,
    slideBy: 'page',
    touch: true,
    nav: false,
    lazyloadSelector: 'tns-item',
    autoHeight: true,
    arrowKeys: true,
    prevButton: document.querySelector('.prev-button'),
    nextButton: document.querySelector('.next-button'),
  });
  </script>
</body>
</html>


