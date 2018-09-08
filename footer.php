<?php
/**
 * Created by PhpStorm.
 * User: seong
 * Date: 2018-08-08
 * Time: 오후 9:06
 */
  $args = array('post_type' => 'locations');
  $query = new WP_Query($args);
  $location = $query ->posts[0];
  $meta = get_post_meta( get_the_ID() );
?>

 <div class="footer main-body-container row no-margin no-padding">
   <div class="col-xs-12 col-sm-4 col-md-4">
    <div class="footer-office"><?php echo(get_the_title())?></div>
    <div class="address">
      <div><?php echo($meta['address'][0]) ?></div>
      <div><?php echo($meta['city'][0]) ?>, <?php echo($meta['postal_code'][0]) ?></div>
      <div><?php echo($meta['phone'][0]) ?></div>
    </div>
   </div>
   <div class="logos-container col-xs-12 col-sm-4 col-md-4 center-md center-sm middle-md middle-sm">
     logo shit
   </div>
   <div class="col-xs-12 col-sm-4 col-md-4 end-sm end-md no-padding">
   <?php wp_nav_menu();?>

   </div>
   <div class="full-width reserve">© Arcademia Group Inc. 2018. All rights reserved.</div>
 </div>

