<form method="POST" action="<?php echo site_url("renovaciones/save"); ?>" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $obj->getId(); ?>" />
  <div class="grid_5">
    <p>
      <label for="nombre">Nombre<span class="required">*</span></label>
      <?php echo form_error('nombre'); ?>
      <br /><input id="nombre" type="text" name="nombre" maxlength="255" value="<?php echo $obj->getNombre(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="apellido">Apellido <span class="required">*</span></label>
      <?php echo form_error('apellido'); ?>
      <br /><input id="apellido" type="text" name="apellido" maxlength="255" value="<?php echo $obj->getApellido(); ?>"  />
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_5">
    <p>
      <label for="ci">Documento <span class="required">*</span></label>
      <?php echo form_error('ci'); ?>
      <br /><input id="documento" type="text" name="ci" maxlength="255" value="<?php echo $obj->getCi(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="email">Direccion Electronica <span class="required">*</span></label>
      <?php echo form_error('email'); ?>
      <br /><input id="direccionelectronica" type="text" name="email" maxlength="255" value="<?php echo $obj->getEmail(); ?>"  />
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_5">
    <p>
      <label for="institucion">Institucion desempeño <span class="required">*</span></label>
      <?php echo form_error('institucion'); ?>

      <?php // Change the values in this array to populate your dropdown as required ?>
      <?php
      
      $options = array();
      foreach($instituciones as $institucion){
        $options[$institucion->id] = $institucion->nombreinsititucion;
      }
      ?>
      <br /><?php echo form_dropdown('institucion', $options, $obj->getInstitucion()) ?>
    </p>                                             
  </div>
  <div class="grid_5">
    <p>
      <label for="laboratorio">Laboratorio/Unidad</label>
      <?php echo form_error('laboratorio'); ?>
      <br /><input id="laboratoriounidad" type="text" name="laboratorio" maxlength="255" value="<?php echo $obj->getLaboratorio(); ?>"  />
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_5">
    <p>
      <label for="cargo">Cargo/Funcion en la institucion</label>
      <?php echo form_error('cargo'); ?>
      <br /><input id="cargofuncioninstitucion" type="text" name="cargo" maxlength="255" value="<?php echo $obj->getCargo(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="cargahoraria">Carga Horaria Semanal</label>
      <?php echo form_error('cargahoraria'); ?>
      <br /><input id="cargahorariasemanal" type="text" name="cargahoraria"  value="<?php echo $obj->getCargahoraria(); ?>"  />
    </p>
  </div>
  <div class="clear"></div>
   <div class="grid_5">
    <p>
      <label for="jefe">nombre supervisor</label>
      <?php echo form_error('jefe'); ?>
      <br /><input id="nombresupervisor" type="text" name="jefe" maxlength="255" value="<?php echo $obj->getJefe(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="fechaacreditacion">Fecha de acreditacion <span class="required">*</span></label>
      <?php echo form_error('fechaacreditacion'); ?>
      <br />
      <input class="fecha" type="input" name="fechaacreditacion"  value="<?php echo $obj->getFechaacreditacion(); ?>"  />
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_5">
    <p>
      <label for="fechasolicitud">Fecha de solicitud <span class="required">*</span></label>
      <?php echo form_error('fechasolicitud'); ?>
      <br />
      <input class="fecha" type="input" name="fechasolicitud"  value="<?php echo $obj->getFechasolicitud(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="numregistro">Numero de registro<span class="required">*</span></label>
      <?php echo form_error('numregistro'); ?>
      <br />
      <input type="input" name="numregistro"  value="<?php echo $obj->getNumregistro(); ?>"  />
    </p>
  </div>
  <div class="clear"></div>
  <div class="clear"></div>
  <div class="grid_16">
    <p>
      <h4>Seleccione la categoria</h4>
    <div style="width: 23%; float: left;">
      <label style="float:left" for="categoriaa">Categoria A</label>
      <input style="float:left; width: 20px; margin-top: 7px" name="categoriaA" type="checkbox" value="1" class="" <?php echo ($obj->getCategoriaA() == 1)? "checked=\"checked\"" : ""; ?>> 
    </div>
    <div style="width: 23%; float: left;">
      <label style="float:left" for="categoriab">Categoria B</label>
      <input style="float:left; width: 20px; margin-top: 7px" name="categoriaB" type="checkbox" value="1" class="" <?php echo ($obj->getCategoriaB() == 1)? "checked=\"checked\"" : ""; ?>> 
    </div>   
    <div style="width: 23%; float: left;">
      <label style="float:left" for="categoria_c1">Categoria C1</label>
      <input style="float:left; width: 20px; margin-top: 7px" name="categoriaC1" type="checkbox" value="1" class="" <?php echo ($obj->getCategoriaC1() == 1)? "checked=\"checked\"" : ""; ?>> 
    </div>
    <div style="width: 23%; float: left;">
      <label style="float:left" for="categoria_c2">Categoria C2</label>
      <input style="float:left; width: 20px; margin-top: 7px" name="categoriaC2" type="checkbox" value="1" class="" <?php echo ($obj->getCategoriaC2() == 1)? "checked=\"checked\"" : ""; ?>> 
    </div>
    </p>
  </div>
  <div class="clear"></div>
  
  <div class="grid_8">
  <p>
    <?php echo form_submit('submit', 'Guardar'); ?>
  </p>
  </div>
</form>

  
  
<script type="text/javascript">
$(document).ready(function() {
   $('.fecha').datepicker({
      changeYear: true,
      yearRange: "-100:+0",
      dateFormat: "dd/mm/yy" 
    });
 });

</script>  

<style>
input.radiobuttom {
float: left;
width: 15px !important;
height: 15px !important;
}
</style>
