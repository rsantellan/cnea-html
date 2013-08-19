<div class="content_right img_personas">
  <h1><?php echo lang("personal_registro_titulo"); ?></h1>
  
    <?php foreach($acreditaciones as $acreditacion):?>
      
      <div class="registradas">
          Nombre: <?php echo $acreditacion->nombreapellido;?> | <a href="mailto:<?php echo $acreditacion->direccionelectronica;?>"><?php echo $acreditacion->direccionelectronica;?></a><br />
      </div>
    <?php   
    endforeach;  
    ?>  
</div>
<!--CONTENT RIGHT-->