<div class="content_right img_novedades">
    <h1><?php echo lang("novedades.titulo"); ?></h1>
    <?php foreach($list as $novedad): ?>
      <div class="novedades_lisado">
          <h4><?php echo $novedad->getNombre();?></h4>
          <?php echo character_limiter($novedad->getDescripcion(), 350);?>
          <a href="<?php echo site_url("novedades/detalle/".$novedad->getId());?>" target="_blank"><?php echo lang("novedades.ver_mas"); ?></a>
      </div>
    <?php endforeach; ?>
    <div class="paginador">
      <?php echo $this->pagination->create_links(); ?>
    </div>
</div>
<!--CONTENT RIGHT-->