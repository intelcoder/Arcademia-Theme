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
  <div class="hero-image-container">
    <img src="<?php echo($heroImageSrc)?>" alt="Acardemia Home Hero"/>
  </div>
  <div class="home-hero-content-container">
      <div class="hero-content">
        <div class="years-upper-text">celebrating</div>
        <div class="years">30 YEARS</div>
        <div>
          <div></div>
          <div class="year-period">1988-<?php echo(date('Y'));   ?></div>
        </div>
      </div>
  </div>
</div>
<div class="main-body-container">
  <div class="profile-project-container row no-margin">
    <div class="row full-width  no-margin">
      <div class="col-sm-6 col-md-6 first-md first-sm no-padding">
        <img class="profile-image" src="<?php echo esc_url( get_theme_mod( 'home_profile_image' ) ); ?>"/>
      </div>
      <div class="col-sm-6 col-md-6 first-xs no-padding profile-project-col">
        <div class="profile-box">
            <div class="profile-box-inner">
              <div>
                <?php echo get_theme_mod('homepage_heading') ?>
                <div class="link-btn ">
                  <a href="contact"><?php echo get_theme_mod('home_profile_button_text') ?> <span>></span></a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="profile-project-container row no-margin">
    <div class="row full-width no-margin">
      <div class="col-sm-6 col-md-6 first-md first-sm no-padding bg-primary-grey profile-project-col">
        <div class="project-box">
            <div class="project-box-inner">
              <div>
                <?php echo get_theme_mod('home_project_box_text_setting') ?>
                <div class="link-btn-project">
                  <a href="/projects">OUR PROJECT <span>></span></a>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 no-padding ">
        <img class="profile-image" src="<?php echo esc_url( get_theme_mod( 'home_project_image_setting' ) ); ?>"/>
      </div>
    </div>
  </div>
  <div class="row full-width review-container">
    <?php
        $args = array('post_type' => 'reviews');
        $query = new WP_Query($args);
        while($query -> have_posts()) : $query -> the_post();
        $reviewMeta = get_post_meta( get_the_ID() );
    
      ?>
      <div class="col-sm-4 col-md-4 review-block">
        <div class="review"><?php echo($reviewMeta['review'][0]); ?></div>
        <div class="review-writer">- <?php echo($reviewMeta['reviewer'][0]); ?></div>
      </div>
    <?php endwhile; ?>
  </div>
  <?php 
    $left['link'] = "/testimonials";
    $left['label'] = 'MORE TESTIMONIALS';
    $right['link'] = "/contact";
    $right['label'] = 'CONTACT US';
    include(locate_template('template-parts/page-bottom-links.php'));
  ?>
</div>


 

<?php get_footer(); wp_footer(); ?>
</body>
</html>
