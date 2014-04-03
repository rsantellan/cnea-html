<div class="content_right img_personas">
  <h1><?php echo lang("personal_registro_titulo"); ?></h1>
  
    <?php foreach($acreditaciones as $acreditacion):?>
      
      <div class="registradas">
          Nombre: <?php echo $acreditacion->nombreapellido;?> | <a href="mailto:<?php echo $acreditacion->direccionelectronica;?>"><?php echo $acreditacion->direccionelectronica;?></a>
          <br />
          Categoria:
          <?php 
          $catIndex = 0;
          if($acreditacion->categoriaA == 1)
          {
            echo "A";
            $catIndex++;
          }
          if($acreditacion->categoriaB == 1)
          {
            if($catIndex > 0) echo ", ";
            echo "B";
            $catIndex++;
          }
          if($acreditacion->categoriaC1 == 1)
          {
            if($catIndex > 0) echo ", ";
            echo "C1";
            $catIndex++;
          }
          if($acreditacion->categoriaC2 == 1)
          {
            if($catIndex > 0) echo ", ";
            echo "C2";
            $catIndex++;
          }
        ?>
          |
          Vencimiento: <?php echo 	date("d/m/Y",strtotime($acreditacion->fechavencimiento));?>
      </div>
    <?php   
    endforeach;  
    ?>  
</div>
<!--CONTENT RIGHT-->