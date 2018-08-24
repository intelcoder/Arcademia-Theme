<?php
/**
 * Template Name: Home page
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
<div class="main-body-container">
  <div class="profile-project-container row no-margin">
    <div class="row full-width  no-margin">
      <div class="col-sm-6 col-md-6 no-padding">
        <img class="profile-image" src="<?php echo esc_url( get_theme_mod( 'home_profile_image_setting' ) ); ?>"/>
      </div>
      <div class="col-sm-6 col-md-6 no-padding profile-project-col">
        <div class="profile-box">
            <div class="profile-box-inner">
              <div>
                <?php echo get_theme_mod('home_profile_box_text_setting') ?>
                <div class="link-btn ">
                  <a>OUR PROFILE <span>></span></a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="profile-project-container row no-margin">
    <div class="row full-width no-margin">
      <div class="col-sm-6 col-md-6 no-padding bg-primary-grey profile-project-col">
        <div class="project-box">
            <div class="project-box-inner">
              <div>
                <?php echo get_theme_mod('home_profile_box_text_setting') ?>
                <div class="link-btn-project">
                  <a>OUR PROJECT <span>></span></a>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 no-padding first-xs last-sm">
        <img class="profile-image" src="<?php echo esc_url( get_theme_mod( 'home_project_image_setting' ) ); ?>"/>
      </div>
    </div>
  </div>
  <div class="row full-width review-container">
    <?php
        $args = array('post_type' => 'reviews');
        $query = new WP_Query($args);
        while($query -> have_posts()) : $query -> the_post();
        $meta = get_post_meta( get_the_ID() );
    
      ?>
      <div class="col-sm-4 col-md-4 review-block">
        <div><?php echo($meta['review'][0]); ?></div>
        <div class="review-write">- <?php echo($meta['reviewer'][0]); ?></div>
      </div>
    <?php endwhile; ?>
  </div>
  <div class="testi-contact-container">
    <div class="testi-contact-container-inner row no-margin">
      <div class="row no-margin ">
        <div class="col-xs-6 col-sm-4 col-md-4 testimonial-link-container">
          <a href="/testimonials">MORE TESTIMONIALS <span>></span></a>
        </div>
        <div class="col-xs-0 col-sm-4 col-md-4 white-line-container">
          <div class="white-line"></div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 contact-link-container">
          <a href="/contact">CONTACT US <span>></span></a>
        </div>
      </div>
    </div>
  </div>
</div>


 

<?php get_footer(); wp_footer(); ?>
</body>
</html>
