<div class="content_right img_personas">
    <h1><?php echo lang("personal_registro_titulo"); ?></h1>
	<?php if(count($listado) == 0): ?>
	  <?php echo lang("personal_registro_contenido_vacio"); ?>
	<?php else: ?>
	  <h2><?php echo lang("personal_registro_subtitulo"); ?></h2>
    <?php $counter = (1 * (int) $page) + 1; ?>
      
    <?php foreach($listado as $nombre => $instituto):?>
      
      <div class="registradas">
        <strong><?php echo $counter;?>) <?php echo $nombre;?></strong><br />
        <?php foreach($instituto as $persona): ?>
          Nombre: <?php echo $persona->code;?> <!--| Cargo: Técino -->| <a href="mailto:<?php echo $persona->email;?>"><?php echo $persona->email;?></a><br />
        <?php
        endforeach;
        ?>
      </div>
      <?php $counter++; ?>
    <?php   
    endforeach;  
    ?>  
    <div class="paginador">
      <?php echo $this->pagination->create_links(); ?>
    </div>
	<?php endif; ?>
    
</div>
<!--CONTENT RIGHT-->