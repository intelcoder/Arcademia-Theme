<div class="project-block row col-md-12 col-sm-12 col-xs-12">
  <div class="project-block-image-container">
    <div class="img-bg-container no-padding">
   <?php  $img = get_the_post_thumbnail_url($post->ID, 'full'); ?>
      <div class="bg-img" style="background: url('<?php echo($img); ?>')" ></div>
    </div>
 </div>
  <div class="project-block-contents">
    <div class="project-block-inner">
      <div class="title"><?php the_title(); ?></div>
      <div class="project-detail-container">
        <div><?php the_content(); ?></div>
        
      </div>
    </div>
  </div>
</div>