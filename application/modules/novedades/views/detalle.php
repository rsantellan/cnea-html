<div class="content_right">
  <h1><?php echo $novedad->getNombre();?></h1>
  <div class="novedades_completo">
      <?php echo html_entity_decode($novedad->getDescripcion());?>
      <?php foreach($images as $image): ?>
      <?php
        $width = 435;
        $height = 104;
      ?>
        <img alt="<?php echo $image->name;?>" src="<?php echo base_url().thumbnail_image($image->path , $width, $height, 1); ?>" />
<!--        <img alt="<?php //echo $image->name;?>" src="<?php //echo base_url().thumbnail_image($image->path , $width, $height, 2); ?>" />
        <img alt="<?php //echo $image->name;?>" src="<?php //echo base_url().thumbnail_image($image->path , $width, $height, 3); ?>" />
        <img alt="<?php //echo $image->name;?>" src="<?php //echo base_url().thumbnail_image($image->path , $width, $height, 4); ?>" />      -->
      <?php endforeach; ?>
  </div>
</div><!--CONTENT RIGHT-->