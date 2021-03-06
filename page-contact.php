<?php
/**
 * Template Name: Contact page
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
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.289581207223!2d-79.5951020845013!3d43.683742779120216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3990b737b27b%3A0x1808172ed020fbeb!2s215+Carlingview+Dr+%23305%2C+Etobicoke%2C+ON+M9W+5E8!5e0!3m2!1sen!2sca!4v1542673823465"
       
          frameborder="0"
          style="border:0"
          allowfullscreen>
        </iframe>
      </div>
      <div class="col-md-6">
        <div class="section-title office-name"><?php echo(get_the_title())?></div>
        <div class="address-container">
          <div class=""><?php echo($meta['address'][0]) ?></div>
          <div><?php echo($meta['city'][0]) ?>, <?php echo($meta['provinceprovince'][0]) ?></div>
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
          <div class="email">
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
      <div class="credits">
      <?php echo get_theme_mod('contact_photography_credits') ?>
      </div>
    </div>
  </div>
</div>
<?php 
  $left['link'] = "/profile";
  $left['label'] = 'OUR PROFILE';
  $right['link'] = "/projects";
  $right['label'] = 'OUR PROJECTs';
  include(locate_template('template-parts/page-bottom-links.php'));
?>

<?php get_footer(); wp_footer(); ?>
</body>
</html>