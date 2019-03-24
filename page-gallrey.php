
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/tiny-slider.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/min/tiny-slider.js"></script>
<?php
/**
 * Template Name: Gallery page
 *
 * @package WordPress
 * @subpackage  Arcademia Theme
 * @since  Arcademia Theme 1.0
 */

  get_header();
  $heroImageSrc = get_theme_mod( 'contact_hero_image' );
  $imageAlt = "Acardemia Project Hero";
  $subTitle = get_theme_mod('contact_hero_box_subtitle');
  $title = get_theme_mod('contact_hero_box_title');
  $str = $_SERVER['REQUEST_URI'];
  preg_match('/\/gallery\/(?P<id>\d+)/', $str, $matches);
  $images =  (get_post_meta( $matches['id'])['project_images'][0]);
  if($_GET['project']) {
    $project = get_post($_GET['project']);
    $project_title = $project->post_title;
  }
$args = array(
'post_type' => 'gallery',
'posts_per_page' => -1,
'post_status' => 'publish'
);
$loop = new Wp_Query($args);
 ?>
 <?php include(locate_template('template-parts/hero.php')); ?>
 <div class="main-body-container gallery-page">
 <?php
    include(locate_template('template-parts/hero-text-box.php'))
   ?>
   <?php if($loop->have_posts()) :  ?>
  <div class='gallery-slider-container'>
   <?php while($loop->have_posts()) : $loop->the_post(); 
   $img = get_the_post_thumbnail_url($post->ID, 'full'); 
   ?>
  <div class="project_name"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class='gallery-slider'>
      <?php 
      
         
          if(!empty($img)) {
          echo('<div class="slider-img-container"><img src="'.$img.'" alt="'.get_the_title().'"></div>');
        }
      ?>
    </div>
	<?php endwhile; ?>
    <div class="prev-button">
      <svg
       enable-background="new 0 0 15 26"
       height="26px"
       id="Layer_1"
       version="1.1"
       viewBox="0 0 15 26"
       width="15px" xml:space="preserve"
       xmlns="http://www.w3.org/2000/svg"
       xmlns:xlink="http://www.w3.org/1999/xlink"
      >
        <polygon fill="white" points="2.019,0.58 -0.035,2.634 10.646,13.316 -0.035,23.997 2.019,26.052 14.755,13.316 "/>
      </svg>
    </div>
    <div class="next-button"> <svg
       enable-background="new 0 0 15 26"
       height="26px"
       id="Layer_1"
       version="1.1"
       viewBox="0 0 15 26"
       width="15px" xml:space="preserve"
       xmlns="http://www.w3.org/2000/svg"
       xmlns:xlink="http://www.w3.org/1999/xlink"
      >
        <polygon fill="white" points="2.019,0.58 -0.035,2.634 10.646,13.316 -0.035,23.997 2.019,26.052 14.755,13.316 "/>
      </svg>
    </div>
  </div>
  <?php endif; ?>
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


