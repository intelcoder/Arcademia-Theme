<div class='gallery-slider-container'>
  <div class="project_name"><?php the_title(); ?></div>
  <div class='gallery-slider'>
 
  <?php
    $images = acf_photo_gallery('gallery_images', $post->ID);
    if( count($images) ):

        foreach($images as $image):
            $id = $image['id']; // The attachment id of the media
            $title = $image['title']; //The title
            $full_image_url= $image['full_image_url']; //Full size image url
           
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
           
?>
<div class="slider-img-container">
    <div class="thumbnail">
        <?php if( !empty($thumbnail_image_url) ){ ?>
            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
       <?php } ?>
    </div>
</div>
<?php endforeach; endif; ?>
     
  </div>
    <div class="prev-button">
      <svg
       enable-background="new 0 0 15 26"
       height="26px"
       id="Layer_1"
       version="1.1"
       viewBox="0 0 15 26"
       width="15px" xml:space="preserve"
       xmlns="http://www.w3.org/2000/svg"
       xmlns:xlink="http://www.w3.org/1999/xlink"
      >
        <polygon fill="white" points="2.019,0.58 -0.035,2.634 10.646,13.316 -0.035,23.997 2.019,26.052 14.755,13.316 "/>
      </svg>
    </div>
    <div class="next-button"> <svg
       enable-background="new 0 0 15 26"
       height="26px"
       id="Layer_1"
       version="1.1"
       viewBox="0 0 15 26"
       width="15px" xml:space="preserve"
       xmlns="http://www.w3.org/2000/svg"
       xmlns:xlink="http://www.w3.org/1999/xlink"
      >
        <polygon fill="white" points="2.019,0.58 -0.035,2.634 10.646,13.316 -0.035,23.997 2.019,26.052 14.755,13.316 "/>
      </svg>
    </div>

  </div>