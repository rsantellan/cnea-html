<div class="content_right">
  <h1><?php echo $novedad->getNombre();?></h1>
  <div class="novedades_completo">
      <?php echo html_entity_decode($novedad->getDescripcion(), ENT_COMPAT | 0, 'UTF-8');?>
      <?php foreach($images as $image): ?>
    <div style="text-align: center;">
      <?php
        $width = 435;
        $height = 435;
        $extension = substr(strrchr($image->path, '.'), 1);
        if($extension == "pdf"):
        ?>
        <img alt="<?php echo $image->name;?>" src="<?php echo base_url().thumbnail_image($image->path , 145, 145, 1); ?>" />
        <a href="<?php echo site_url('novedades/archivo/'.$image->id); ?>">Descargar</a>
    <?php
        else:
       ?>
        <img alt="<?php echo $image->name;?>" src="<?php echo base_url().thumbnail_image($image->path , $width, $height, 1); ?>" />
<!--        <img alt="<?php //echo $image->name;?>" src="<?php //echo base_url().thumbnail_image($image->path , $width, $height, 2); ?>" />
        <img alt="<?php //echo $image->name;?>" src="<?php //echo base_url().thumbnail_image($image->path , $width, $height, 3); ?>" />
        <img alt="<?php //echo $image->name;?>" src="<?php //echo base_url().thumbnail_image($image->path , $width, $height, 4); ?>" />      -->
    
    <?php
        endif;
      ?>
    </div>
      <?php endforeach; ?>
  </div>
</div><!--CONTENT RIGHT-->
