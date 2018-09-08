<?php
/**
 * Template Name: Testimonials page
 *
 * @package WordPress
 * @subpackage  Arcademia Theme
 * @since  Arcademia Theme 1.0
 */
get_header();
$heroImageSrc = get_header_image();
?>
<div class="home-hero">
 <img src="<?php echo($heroImageSrc)?>" alt="Acardemia Home Hero"/>
</div>
<div class="main-body-container ">
  <div class="title-box">
    <div class="title-box-inner">
      <div>
        <div class="title-box-sub">KIND</div>
        <div class="title-box-title">WORDS</div>
      </div>
    </div>
 </div>

</div>
<div class="main-body-container ">
  <div class="row testimonial-container">
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
    <div class="row no-margin featured-in-container testimonial-container">
      <div class="featured-in">Also Featured In</div>
      <div class="col-xs-0 col-sm-4 col-md-4 white-line-container no-padding">
            <div class="white-line"></div>
      </div>
    </div>
    <div class="features-container testimonial-container">
      <div class="row no-margin">
        <div class="col-md-3">
          <div>
            CANADIAN
          </div>
          <div>
            INTERIORS
          </div>
        </div>
        <div class="col-md-3">
          <div>
            STYLE AT
          </div>
          <div>
            HOME
          </div>

        </div>
      </div>
    </div>


  </div>

 <div class="main-body-container ">
    <?php 
      $left['link'] = "/contact";
      $left['label'] = 'CONTACT US';
      $right['link'] = "/profile";
      $right['label'] = 'OUR PROFILE';
      include(locate_template('template-parts/page-bottom-links.php'));
    ?>
  </div>
</div>


<?php get_footer(); wp_footer(); ?>
</body>
</html>