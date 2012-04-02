<div class="content_right img_doc">
    <h1><?php echo lang("actas.titulo"); ?></h1>
    <?php foreach($list as $acta): ?>
      <div class="actas">
          <?php echo $acta->getNombre();?> 
          <?php if($acta->hasAvatar()): ?>
            <a href="<?php echo site_url("acta/descargar/".$acta->getId());?>" class="float_right">descargar</a>
          <?php endif; ?>
      </div>
    <?php endforeach; ?>
    <div class="paginador">
      <?php echo $this->pagination->create_links(); ?>
    </div>
</div>
<!--CONTENT RIGHT-->