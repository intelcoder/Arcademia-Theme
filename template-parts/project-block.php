<div class="project-block row col-md-12 col-sm-12 col-xs-12">
  <div class="project-block-image-container">
    <div class="img-bg-container no-padding">
      <div class="bg-img" style="background: url('<?php echo($imgUrl); ?>')" ></div>
    </div>
 </div>
  <div class="project-block-contents">
    <div class="project-block-inner">
      <div class="title"><?php echo($projectName); ?></div>
      <div class="project-detail-container">
      <?php
        if(!empty($architect)) { 
         echo('<div>'.$architect.'</div>'); 
        }
         ?>
        <div><?php echo($date); ?></div>
          <a href="<?php echo $url; ?>"><div class="gallery-link">GALLERY <span>></span></div></a>
      </div>
    </div>
  </div>
</div>