<?php
/**
 * Template Name: Home page
 *
 * @package WordPress
 * @subpackage  Arcademia Theme
 * @since  Arcademia Theme 1.0
 */

  get_header();
  $heroImageSrc = get_theme_mod( 'profile_hero_image' );
  $imageAlt = "Acardemia Profile Hero"; 
  $subTitle = get_theme_mod('profile_hero_box_subtitle');
  $profileProjectImg =  get_theme_mod('profile_project_image');
  $title = get_theme_mod('profile_hero_box_title');
?>
<div id="profile-page">
  <?php include(locate_template('template-parts/hero.php')); ?>
  <div  class="main-body-container">
    <?php include(locate_template('template-parts/hero-text-box.php')); ?>
    <div class="row profile-page-container">
      <div class=" col-md-6 profile-text">
        <?php echo get_theme_mod('top_right_text') ?>
        </div>
      <div class=" col-md-6 profile-text">
        <div class="profile">
          <div><strong><?php echo get_theme_mod('principal_name') ?></strong> PRINCIPAL</div>
          <div><?php echo get_theme_mod('principal_from') ?></div>
        </div>
        <?php echo get_theme_mod('top_left_text') ?>
      </div>
    </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 profile-bg-section no-padding">
        <div class="bg-img bright-filter" style="background: url('<?php echo $profileProjectImg ?>')" ></div>
        <div class="bg-text"><?php echo get_theme_mod('profile_middle_bg_text') ?></div>
      </div>
    <div class="main-body-container ">
      <div class="row profile-page-container profile-page-container-bottom">
        <div class="col-md-6 profile-text">
          <?php echo get_theme_mod('top_right_text') ?>
        </div>
        <div class="col-md-6 profile-text">
          <?php echo get_theme_mod('top_left_text') ?>
        </div>
      </div>
      </div>
    
  </div>
<?php 
  $right['link'] = "/testimonials";
  $right['label'] = 'TESTIMONIALS';
  $left['link'] = "/contact";
  $left['label'] = 'CONTACT US';
  include(locate_template('template-parts/page-bottom-links.php'));
?>
</div>
  <?php get_footer(); wp_footer(); ?>
</body>
</html>