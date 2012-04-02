<div class="content_right img_doc">
    <h1><?php echo lang("intereses.documentos.titulo"); ?></h1>
    <?php foreach($list as $interes): ?>
      <div class="enlaces">
          <a href="<?php echo $interes->link;?>" target="_blank"><?php echo $interes->nombre;?></a>
      </div>
    <?php endforeach; ?>
</div>
<!--CONTENT RIGHT-->