<?php
  $args = array('post_type' => 'locations');
  $query = new WP_Query($args);
  $location = $query ->posts[0];
  $meta = get_post_meta( $location -> ID );

?>

<div class="address">
  <div><?php echo($meta['address'][0]) ?></div>
  <div><?php echo($meta['city'][0]) ?>, <?php echo($meta['provinceprovince'][0]) ?> <?php echo($meta['postal_code'][0]) ?></div>
  <div><?php echo($meta['phone'][0]) ?></div>
</div>