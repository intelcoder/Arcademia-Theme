<?php
/**
 * Template Name: Testimonials page
 *
 * @package WordPress
 * @subpackage  Arcademia Theme
 * @since  Arcademia Theme 1.0
 */
  get_header();
  $heroImageSrc = get_theme_mod('testimonial_hero_image');
  $imageAlt = "Acardemia Testimonials Hero";
  $subTitle = get_theme_mod('tesitmonial_hero_box_subtitle');
  $title = get_theme_mod('testimonial_hero_box_title');

 
  
?>
<?php include(locate_template('template-parts/hero.php')); ?>
<div class="main-body-container ">
<?php
    include(locate_template('template-parts/hero-text-box.php'));
   ?>


</div>
<div class="main-body-container ">
  <div class="row testimonial-page">
    <div class="testimonial-container">
      <?php
        $args = array('post_type' => 'testimonials');
        $query = new WP_Query($args);
        while($query -> have_posts()) : $query -> the_post();
        $meta = get_post_meta( get_the_ID() );
      ?>
        <div class="col-sm-12 col-md-12 no-padding testimonial">
          <div class="content"><?php echo($meta['testimonial'][0]); ?></div>
          <div class="testimonial-writer">- <?php echo($meta['testimonial_writer'][0]); ?></div>
        </div>
      <?php endwhile; ?>
    </div>
    </div>
   
    <div class="testimonial-page">
      <div class="row featured-in-container  ">
        <div class="featured-in">Featured In</div>
        <div class="white-line-container no-padding">
            <div class="white-line"></div>
        </div>
      </div>
      <div class="features-container">
        <div class="row no-margin featured-link">
        <?php
          $args = array('post_type' => 'prev_works');
          $query = new WP_Query($args);
          while($query -> have_posts()) : $query -> the_post();
          $exploded_title = explode( ' ', strtoupper(get_the_title($post)));
          $meta = get_post_meta( get_the_ID());
          $file_url = wp_get_attachment_url($meta['pdf'][0])
     
          ?>
           <a href=<?php echo($file_url) ?> class="col-md-3 ">
            <div>
              <?php echo($exploded_title[0]) ?>
            </div>
            <div>
              <?php echo($exploded_title[1]) ?>
            </div>
          </a>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>

</div>
<?php 
  $left['link'] = "/contact";
  $left['label'] = 'CONTACT US';
  $right['link'] = "/profile";
  $right['label'] = 'OUR PROFILE';
  include(locate_template('template-parts/page-bottom-links.php'));
?>

<?php get_footer(); wp_footer(); ?>
</body>
</html>