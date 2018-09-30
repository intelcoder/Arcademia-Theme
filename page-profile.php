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
$imageAlt = "Acardemia Profile Hero" 
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
          <div>ANDREA ZUCCARINI PRINCIPAL</div>
          <div>Ryerson B.Tech Arc Sci.</div>
        </div>
        <?php echo get_theme_mod('top_left_text') ?>
      </div>
    </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 profile-bg-section no-padding">
        <div class="bg-img" style="background: url('<?php echo esc_url("/wp-content/uploads/2018/08/project-image-1.jpg"); ?>')" ></div>
        <div class="bg-text"><?php echo get_theme_mod('profile_middle_bg_text') ?></div>
      </div>
    <div class="main-body-container ">
      <div class="row profile-page-container profile-page-container-bottom">
        <div class="col-md-6 profile-text">Principal Andrea Zuccarini and his team have 
          established a reputation for creating highly 
          distinctive homes of the utmost quality and 
          craftsmanship by committing the time and 
          resources necessary to making each home a 
          success. Arcademia Group will manage every aspect of the project from pre-construction 
          consulting to move in stage, creating an 
          enjoyable home building experience. </div>
        <div class="col-md-6 profile-text">
            Principal Andrea Zuccarini and his team have 
        established a reputation for creating highly 
        distinctive homes of the utmost quality and 
        craftsmanship by committing the time and 
        resources necessary to making each home a 
        success. Arcademia Group will manage every aspect of the project from pre-construction 
        consulting to move in stage, creating an 
        enjoyable home building experience. 
        </div>
      </div>
      </div>
      <?php 
        $left['link'] = "/testimonials";
        $left['label'] = 'TESTIMONIALS';
        $right['link'] = "/contact";
        $right['label'] = 'CONTACT US';
        include(locate_template('template-parts/page-bottom-links.php'));
      ?>
  </div>
</div>
  <?php get_footer(); wp_footer(); ?>
</body>
</html>