<div class="content_right img_enlaces">
    <h1><?php echo lang("intereses_enlaces_titulo"); ?></h1>
    <?php foreach($list as $interes): ?>
      <div class="enlaces">
          <a href="<?php echo $interes->link;?>" target="_blank"><?php echo $interes->nombre;?></a>
      </div>
    <?php endforeach; ?>
</div>
<!--CONTENT RIGHT-->