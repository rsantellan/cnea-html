<div class="content_right img_buscador">
  <h1><?php echo lang("buscador_titulo"); ?></h1>
  <h4><?php echo lang("buscador_palabra_buscada"); ?> "<?php echo $word;?>"</h4>
  <?php if(count($novedades)>0):?>
  <h4><?php echo lang("buscador_titulo_novedad"); ?></h4>
  <?php endif; ?>
  <?php foreach($novedades as $novedad): ?>
    <div class="novedades_lisado">
        <h4><?php echo $novedad->getNombre();?></h4>
        <?php echo character_limiter($novedad->getDescripcion(), 350);?>
        <a href="<?php echo site_url("novedades/detalle/".$novedad->getId());?>" target="_blank"><?php echo lang("novedades_ver_mas"); ?></a>
    </div>
  <?php endforeach; ?>
  <?php if(count($actas)>0):?>
  <h4><?php echo lang("buscador_titulo_actas"); ?></h4>
  <?php endif; ?>
  <?php foreach($actas as $acta): ?>
  <div class="actas">
      <?php echo $acta->getNombre();?> 
      <?php if($acta->hasAvatar()): ?>
        <a href="<?php echo site_url("acta/descargar/".$acta->getId());?>" class="float_right">descargar</a>
      <?php endif; ?>
  </div>
<?php endforeach; ?>
  <?php if(count($novedades) == 0 && count($actas) == 0):?>
  <h4><?php echo lang("buscador_sin_resultados"); ?></h4>
  <?php endif; ?>
  
</div>