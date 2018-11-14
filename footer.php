<?php
/**
 * Created by PhpStorm.
 * User: seong
 * Date: 2018-08-08
 * Time: 오후 9:06
 */
  $args = array('post_type' => 'locations');
  $query = new WP_Query($args);
  $location = $query -> posts[0];
  function inline_svg($name) {
    $file = get_template_directory();
    $file .= "/static/svgs/" . $name . ".svg";
    include($file);
  }
?>

 <div class="footer main-body-container row no-margin">
   <div class="col-xs-12 col-sm-4 col-md-4 location">
      <div class="footer-office"><?php echo($location -> post_title )?></div>
      <?php include(locate_template('template-parts/address.php')); ?>
   </div>
   <div class="logos-container col-xs-12 col-sm-4 col-md-4 center-md center-sm middle-md middle-sm">
     <div class="facebook-svg"><?php inline_svg('facebook') ?></div>
     <a href="https://www.instagram.com/arcademiagroupinc/"><div class="instagram-svg"><?php inline_svg('instagram') ?></div></a>
   </div>
   <div class="footer-menu col-xs-12 col-sm-4 col-md-4 end-sm end-md no-padding">
    <?php wp_nav_menu();?>
   </div>
   <div class="full-width reserve">© Arcademia Group Inc. 2018. All rights reserved.</div>
 </div>

