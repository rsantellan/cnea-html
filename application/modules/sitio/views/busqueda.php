<div class="content_right img_buscador">
  <h1>Buscador</h1>
  <h4>Novedades</h4>
  <?php foreach($novedades as $novedad): ?>
    <div class="novedades_lisado">
        <h4><?php echo $novedad->getNombre();?></h4>
        <?php echo character_limiter($novedad->getDescripcion(), 350);?>
        <a href="<?php echo site_url("novedades/detalle/".$novedad->getId());?>" target="_blank"><?php echo lang("novedades_ver_mas"); ?></a>
    </div>
  <?php endforeach; ?>
  <h4>Actas</h4>
  <?php foreach($actas as $acta): ?>
  <div class="actas">
      <?php echo $acta->getNombre();?> 
      <?php if($acta->hasAvatar()): ?>
        <a href="<?php echo site_url("acta/descargar/".$acta->getId());?>" class="float_right">descargar</a>
      <?php endif; ?>
  </div>
<?php endforeach; ?>
</div>