<div class="project-block row col-md-12 col-sm-12 col-xs-12">
  <div class="project-block-image-container">
    <div class="img-bg-container no-padding">
      <div class="bg-img" style="background: url('<?php echo esc_url("/wp-content/uploads/2018/08/project-image-1.jpg"); ?>')" ></div>
    </div>
 </div>
  <div class="project-block-contents">
    <div class="project-block-inner">
      <div class="title"><?php echo($projectName); ?></div>
      <div class="project-detail-container">
        <div><?php echo($architect); ?></div>
        <div><?php echo($date); ?></div>
        <?php if(!empty($url)) { ?>
          <a href="<?php echo($url) ?>"><div class="gallery-link">GALLERY ></div></a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>