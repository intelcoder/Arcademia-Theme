<?php
/**
 * Template Name: Projects page
 *
 * @package WordPress
 * @subpackage  Arcademia Theme
 * @since  Arcademia Theme 1.0
 */
  get_header();
  $heroImageSrc = get_theme_mod( 'project_hero_image' );
  $imageAlt = "Acardemia Project Hero";
  $subTitle = get_theme_mod('project_hero_box_subtitle');
  $title = get_theme_mod('project_hero_box_title');
?>
<?php include(locate_template('template-parts/hero.php')); ?>
<div class="main-body-container ">
  <?php include(locate_template('template-parts/hero-text-box.php')); ?>
</div>
<div class="main-body-container">
  <div class="row project-blocks-container ">
    <?php
        $args = array('post_type' => 'projects');
        $query = new WP_Query($args);
        while($query -> have_posts()) : $query -> the_post();
        $meta = get_post_meta( get_the_ID() );
        $projectName = get_the_title();
        $architect = $meta['architect'][0];
        $date = $meta['date'][0];

        include(locate_template('template-parts/project-block.php'));
      ?>

    <?php endwhile; ?>
  </div>
</div>

<?php 
  $left['link'] = "/testimonials";
  $left['label'] = 'TESTIMONIALS';
  $right['link'] = "/contact";
  $right['label'] = 'CONTACT US';
  include(locate_template('template-parts/page-bottom-links.php'));
?>



  <?php get_footer(); wp_footer(); ?>
</body>
</html>