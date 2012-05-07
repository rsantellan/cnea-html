<div class="content_right img_instituciones">
    <h1><?php echo lang("instituciones_registro_titulo"); ?></h1>
		<!--<h2><?php echo lang("instituciones_registro_subtitulo"); ?></h2>-->
	<?php if(count($list) == 0): ?>
	  <?php echo lang("instituciones_registro_contenido_vacio"); ?>
	<?php else: ?>
	  <h2><?php echo lang("instituciones_registro_subtitulo"); ?></h2>
    <?php $counter = (1 * (int) $page) + 1; ?>
	<?php foreach($list as $registro): ?>
		<div class="registradas">
			<strong><?php echo $counter;?>) <?php echo $registro->getNombre();?></strong><br />
			código: <?php echo $registro->getCode();?> | <a href="<?php echo prep_url($registro->getUrl());?>" target="_blank"><?php echo $registro->getUrl();?></a>
		</div>
      <?php $counter++; ?>
	<?php endforeach; ?>
    <div class="paginador">
      <?php echo $this->pagination->create_links(); ?>
    </div>
	<?php endif; ?>
    
</div>
<!--CONTENT RIGHT-->
