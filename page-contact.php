<?php
/**
 * Template Name: Contact page
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
  <div class="title-box">
    <div class="title-box-inner">
      <div>
        <div class="title-box-sub">Where To</div>
        <div class="title-box-title">Find us</div>
      </div>
    </div>
  </div>
  
  <div class="contact-page">
  <?php
          $args = array('post_type' => 'locations');
          $query = new WP_Query($args);
          while($query -> have_posts()) : $query -> the_post();
          $meta = get_post_meta( get_the_ID() );
        ?>
    <div class="location-block row no-margin">
      <div class="col-md-6">

      </div>
      <div class="col-md-6">
        <div class="section-title"><?php echo(get_the_title())?></div>
        <div class="address-container">
          <div class=""><?php echo($meta['address'][0]) ?></div>
          <div><?php echo($meta['city'][0]) ?>, <?php echo($meta['province'][0]) ?></div>
          <div><?php echo($meta['postal_code'][0]) ?></div>
        </div>
        <div>
          <div>
            <span class="contact-heading">T</span>
            <span><?php echo($meta['phone'][0]) ?></span>
          </div>
          <div>
            <span class="contact-heading">F</span>
            <span><?php echo($meta['fax'][0]) ?></span>
          </div>
          <div>
            <span class="contact-heading">E</span>
            <span><?php echo($meta['email'][0]) ?></span>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <div>
      <form class="contact-inputs row no-margin">
        <div class="col-xs-12 col-sm-12 col-md-12 no-padding">
          <input type="text" placeholder="NANME" />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 no-padding">
          <input type="email" placeholder="EMAIL" />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 no-padding">
          <textarea type="textarea" rows="20" placeholder="MESSAGE"></textarea>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 no-padding send-button-container">
          <button class="send-button">SEND<div>></div></button>
        </div>
      </form>
    </div>
    <div>
      <div class="section-title">PHOTOGRAPHY CREDITS</div>

    </div>
  </div>
  <?php 
    $left['link'] = "/profile";
    $left['label'] = 'OUR PROFILE';
    $right['link'] = "/projects";
    $right['label'] = 'OUR PROJECTs';
    include(locate_template('template-parts/page-bottom-links.php'));
  ?>
 
</div>

  <?php get_footer(); wp_footer(); ?>
</body>
</html>