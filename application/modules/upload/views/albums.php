<?php

foreach($albums as $album):
?>
<div id="album_<?php echo $album["id"];?>">
  <h6><?php echo $album["name"];?></h6>
  <a class="fancy_link iframe" href="<?php echo site_url('upload/index/'.$album["id"]);?>">
  upload
  </a>
  <?php foreach($album["images"] as $image): ?>

  <?php endforeach; ?>
</div>
<?php endforeach; ?>

