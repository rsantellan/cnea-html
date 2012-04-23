<div class="content_left">
  <h3>buscador</h3>
  <?php // Change the css classes to suit your needs    
    $attributes = array('class' => 'buscador_form', 'id' => '', "method" => "GET");
    echo form_open('sitio/buscar', $attributes); 
  ?>
  <p>
	<label for="t">búsqueda de contenido</label>
    <input id="t" type="text" name="t" value="" />
  </p>
  <input type="submit" class="search" value="" />
  <?php echo form_close(); ?>
  <h3>&uacute;ltimas novedades</h3>
  <div class="ultimas_novedades">
      <?php foreach($last_novedades as $novedad): ?>
          <?php echo $novedad->getNombre();?>
          <a href="<?php echo site_url("novedades/detalle/".$novedad->getId());?>"><?php echo lang("novedades_ver_mas"); ?></a>
          <div class="clear"></div>
          <hr />
      <?php endforeach; ?>
  </div>
</div><!--CONTENT LEFT-->