<?php

foreach($albums as $album):
?>

<div id="album_<?php echo $album["id"];?>">
  <h6>Album: <?php echo $album["name"];?>
    <a class="fancy_link iframe" href="<?php echo site_url('upload/index/'.$album["id"]);?>">
      <img src="<?php echo base_url().'assets/upload/images/add.png'?>" />
    </a>
  </h6>
  <ul class="img_thumb_ul">
  <?php foreach($album["images"] as $image): ?>
    
    <li id="file_container_<?php echo $image->id;?>" class="img_thumb_li">
      <div class="img_thumb_container">
        <div class="img_edit">
          <a href="<?php echo site_url('upload/editFile/'.$image->id);?>" class="fancy_link">
            Editar
          </a>
        </div>
        <?php 
          $id = $image->id; 
          $type = $image->type;
        ?>
        <img src="<?php echo base_url().thumbnail_image($image->path , 150, 150); ?>" />
        <div class="img_delete">
          <a onclick="return deleteFile('<?php echo site_url('upload/deleteFile/'.$image->id);?>', <?php echo $image->id;?>)" href="javascript:void(0)" class="">
            <img src="<?php echo base_url().'assets/upload/images/delete.png'?>" />
          </a>
        </div>
      </div>
    </li>
    
  <?php endforeach; ?>
  </ul>
  <div class="clear"></div>
  <div>
    <a class="fancy_link iframe" href="<?php echo site_url("upload/sort/".$album["id"]);?>">
      Ordenar
    </a>
  </div>
</div>
<?php endforeach; ?>

<input type="hidden" value="<?php echo site_url("upload/viewAlbum/".$album["id"]);?>" />
<?php
foreach($albums as $album):
  echo $album['completo'];
endforeach;
?>