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
$imageAlt = "Acardemia Contact Hero" 
 ?>
<?php include(locate_template('template-parts/hero.php')); ?>
<div class="main-body-container">
  <?php
    include(locate_template('template-parts/hero-text-box.php'))
   ?>

  <div class="contact-page">
  <?php
          $args = array('post_type' => 'locations');
          $query = new WP_Query($args);
          while($query -> have_posts()) : $query -> the_post();
          $meta = get_post_meta( get_the_ID() );
        ?>
    <div class="location-block row no-margin">
      <div class="col-md-6 google-map">
        <img src="https://maps.googleapis.com/maps/api/staticmap?center=215+carlingview+drive&zoom=13&size=352x339&maptype=roadmap&markers=43.683742,-79.5929134" />
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
            <span class="contact-heading">T&nbsp</span>
            <span><?php echo($meta['phone'][0]) ?></span>
          </div>
          <div>
            <span class="contact-heading">F&nbsp</span>
            <span><?php echo($meta['fax'][0]) ?></span>
          </div>
          <div>
            <span class="contact-heading">E&nbsp</span>
            <span><a href="mailto:<?php echo($meta['email'][0]) ?>"><?php echo($meta['email'][0]) ?></a></span>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    
  <div class="manager-contacts">
    <?php 
        $args = array('post_type' => 'manager_contact');
        $query = new WP_Query($args);
        while($query -> have_posts()) : $query -> the_post();
        $meta = get_post_meta( get_the_ID() );
    ?>
      <div class="manager-contact">
        <div>
          <div class="row manager-title">
            <div><?php echo $meta['name'][0]?></div>
            <div class="dash">-</div>
            <div class="job-extention">
              <div><?php echo $meta['job_title'][0]?></div>
              <div class="small-extension"> X <?php echo $meta['extention'][0]?></div>
            </div>
          </div>
        </div>
        <div>
          <div class="row manager-contact-info">
            <div class="large-extension">X <?php echo $meta['extention'][0]?></div>
            <div class="dash">-</div>
            <div style="overflow: hidden">
              <a href="mailto:<?php echo($meta['email'][0]) ?>"><?php echo $meta['email'][0]?></a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
    <div>
      <form class="contact-inputs row no-margin">
        <div class="col-xs-12 col-sm-12 col-md-12 no-padding">
          <input type="text" placeholder="NAME" />
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
    <div class="credit-container">
      <div class="section-title">PHOTOGRAPHY CREDITS</div>
      <div></div>
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