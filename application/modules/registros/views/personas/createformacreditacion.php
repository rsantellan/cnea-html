
<form method="POST" action="<?php echo site_url("registros/createacreditacion"); ?>" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $obj->getId(); ?>" />
  <div class="grid_5">
    <p>
      <label for="fecha">Fecha de solicitud <span class="required">*</span></label>
      <?php echo form_error('fecha'); ?>
      <br />
      <input id="fecha" type="input" name="fecha"  value="<?php echo $obj->getFecha(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="nombreapellido">Nombre y Apellido <span class="required">*</span></label>
      <?php echo form_error('nombreapellido'); ?>
      <br /><input id="nombreapellido" type="text" name="nombreapellido" maxlength="255" value="<?php echo $obj->getNombreapellido(); ?>"  />
    </p>
  </div>
  <div class="grid_14">
    <p>
    <h6>Nivel de formación</h6>
    <?php echo form_error('formacion_primaria'); ?>
    <?php echo form_error('formacion_secundaria'); ?>
    <?php echo form_error('formacionterciaria'); ?>
    <div style="width: 32%; float: left;">
      <label for="formacion_primaria" style="float:left">formacion primaria</label>
      <input style="margin: 5px 0 0 7px;" type="radio" class="radiobuttom"  id="formacion_primaria" name="formacion" value="primaria" class="" <?php echo ($obj->getFormacion() == "primaria")? "checked=\"checked\"" : "";?> /> 
    </div>
    <div style="width: 36%; float: left;">
      <label for="formacion_secundaria" style="float:left">formacion secundaria</label>
      <input style="margin: 5px 0 0 7px;" type="radio" class="radiobuttom"  id="formacion_secundaria" name="formacion" value="secundaria" class="" <?php echo ($obj->getFormacion() =="secundaria")? "checked=\"checked\""  : ""; ?> /> 
    </div>
    <div style="width: 32%; float: left;">
      <label for="formacionterciaria" style="float:left">formacion terciaria</label>
      <input style="margin: 5px 0 0 7px;" type="radio" class="radiobuttom"  id="formacionterciaria" name="formacion" value="terciaria" class="" <?php echo ($obj->getFormacion() == "terciaria")? "checked=\"checked\"" : ""; ?> /> 
    </div>
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_5">
    <p>
      <label for="documento">Documento <span class="required">*</span></label>
      <?php echo form_error('documento'); ?>
      <br /><input id="documento" type="text" name="documento" maxlength="255" value="<?php echo $obj->getDocumento(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="fechanacimiento">fecha nacimiento <span class="required">*</span></label>
      <?php echo form_error('fechanacimiento'); ?>
      <br /><input id="fechanacimiento" type="text" name="fechanacimiento"  value="<?php echo $obj->getFechanacimiento(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="direccionpostal">Direccion Postal <span class="required">*</span></label>
      <?php echo form_error('direccionpostal'); ?>
      <br /><input id="direccionpostal" type="text" name="direccionpostal" maxlength="255" value="<?php echo $obj->getDireccionpostal(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="direccionelectronica">Direccion Electronica <span class="required">*</span></label>
      <?php echo form_error('direccionelectronica'); ?>
      <br /><input id="direccionelectronica" type="text" name="direccionelectronica" maxlength="255" value="<?php echo $obj->getDireccionelectronica(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="telefonocontacto">Telefono Contacto <span class="required">*</span></label>
      <?php echo form_error('telefonocontacto'); ?>
      <br /><input id="telefonocontacto" type="text" name="telefonocontacto" maxlength="255" value="<?php echo $obj->getTelefonocontacto(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="instituciondesempeno">Institucion desempeño <span class="required">*</span></label>
      <?php echo form_error('instituciondesempeno'); ?>

      <?php // Change the values in this array to populate your dropdown as required ?>
      <?php
      
      $options = array();
      foreach($instituciones as $institucion){
        $options[$institucion->id] = $institucion->nombreinsititucion;
      }
      ?>

      <br /><?php echo form_dropdown('instituciondesempeno', $options, $obj->getInstituciondesempeno()) ?>
    </p>                                             
  </div>
  <div class="grid_5">
    <p>
      <label for="laboratoriounidad">Laboratorio/Unidad <span class="required">*</span></label>
      <?php echo form_error('laboratoriounidad'); ?>
      <br /><input id="laboratoriounidad" type="text" name="laboratoriounidad" maxlength="255" value="<?php echo $obj->getLaboratoriounidad(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="cargofuncioninstitucion">Cargo/Funcion en la institucion <span class="required">*</span></label>
      <?php echo form_error('cargofuncioninstitucion'); ?>
      <br /><input id="cargofuncioninstitucion" type="text" name="cargofuncioninstitucion" maxlength="255" value="<?php echo $obj->getCargofuncioninstitucion(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="cargahorariasemanal">Carga Horaria Semanal <span class="required">*</span></label>
      <?php echo form_error('cargahorariasemanal'); ?>
      <br /><input id="cargahorariasemanal" type="text" name="cargahorariasemanal"  value="<?php echo $obj->getCargahorariasemanal(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
    <p>
      <label for="nombresupervisor">nombre supervisor <span class="required">*</span></label>
      <?php echo form_error('nombresupervisor'); ?>
      <br /><input id="nombresupervisor" type="text" name="nombresupervisor" maxlength="255" value="<?php echo $obj->getNombresupervisor(); ?>"  />
    </p>
  </div>
  <div class="grid_8">
    <p>
      <label for="especiestrabajadas">Especies que trabajadas <span class="required">*</span></label>
      <?php echo form_error('especiestrabajadas'); ?>
      <br />
      <?php echo form_textarea(array('name' => 'especiestrabajadas', 'rows' => '5', 'cols' => '80', 'value' => $obj->getEspeciestrabajadas())) ?>
    </p>
  </div>
  <div class="grid_8">
    <p>
      <label for="describatareas">Describa las tareas</label>
      <?php echo form_error('describatareas'); ?>
      <br />

      <?php echo form_textarea(array('name' => 'describatareas', 'rows' => '5', 'cols' => '80', 'value' => $obj->getDescribatareas())) ?>
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_5">
    <p>
      <label for="realizocursos">Realizo Cursos <span class="required">*</span></label>
      <?php echo form_error('realizocursos'); ?>
      <br />
    <div style="width: 20%; float: left; margin-right: 30px;">
      <input style="width:20px; margin-top: 6px;" name="realizocursos" type="radio" class="" value="1" <?php echo ($obj->getRealizocursos() == "1")? "checked=\"checked\"" : ""; ?> />
      <label style="float: left;"  for="realizocursos" class="">Si</label>
    </div>
    <div style="width: 20%; float: left; margin-right: 30px;">
      <input style="width:20px; margin-top: 6px;" name="realizocursos" type="radio" class="" value="0" <?php echo ($obj->getRealizocursos() == "0")? "checked=\"checked\"" : ""; ?> />
      <label style="float: left;"  for="realizocursos" class="">No</label>
    </div>
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_5">
	<p>
      <label for="curso1">Curso 1</label>
      <?php echo form_error('curso1'); ?>
      <br /><input id="curso1" type="text" name="curso1"  value="<?php echo $obj->getCurso1(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
	<p>
      <label for="curso2">Curso 2</label>
      <?php echo form_error('curso2'); ?>
      <br /><input id="curso2" type="text" name="curso2"  value="<?php echo $obj->getCurso2(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
	<p>
      <label for="curso3">Curso 3</label>
      <?php echo form_error('curso3'); ?>
      <br /><input id="curso3" type="text" name="curso3"  value="<?php echo $obj->getCurso3(); ?>"  />
    </p>
  </div>
  <div class="grid_6">
    <p>
      <label for="cursoobservacion">Observaciones de cursos</label>
      <?php echo form_error('cursoobservacion'); ?>
      <br />
      <?php echo form_textarea(array('name' => 'cursoobservacion', 'rows' => '5', 'cols' => '80', 'value' => $obj->getCursoobservacion())) ?>
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_5">
    <p>
      <label for="acrpersonales">Acreditaciones Personales <span class="required">*</span></label>
      <?php echo form_error('acrpersonales'); ?>
      <br />
      
    <div style="width: 20%; float: left; margin-right: 30px;">
      <input style="width:20px; margin-top: 6px;" id="acrpersonales" name="acrpersonales" type="radio" class="" value="1" <?php echo ($obj->getAcrpersonales() == "1")? "checked=\"checked\"" : ""; ?> />
      <label style="float: left;" for="acrpersonales" class="">Si</label>
    </div>
    <div style="width: 20%; float: left; margin-right: 30px;">
      <input style="width:20px; margin-top: 6px;" id="acrpersonales" name="acrpersonales" type="radio" class="" value="0" <?php echo ($obj->getAcrpersonales() == "0")? "checked=\"checked\"" : ""; ?> />
      <label style="float: left;"  for="acrpersonales" class="">No</label>
    </div>
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_7">
	<p>
      <label for="acrorganismo">Organismo / Institución que la expidió:</label>
      <?php echo form_error('acrorganismo'); ?>
      <br /><input id="acrorganismo" type="text" name="acrorganismo"  value="<?php echo $obj->getAcrorganismo(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
	<p>
      <label for="acrcategoria">Categoría adjudicada:</label>
      <?php echo form_error('acrcategoria'); ?>
      <br /><input id="acrcategoria" type="text" name="acrcategoria"  value="<?php echo $obj->getAcrcategoria(); ?>"  />
    </p>
  </div>
  <div class="grid_5">
	<p>
      <label for="acrfecha">Fecha de vencimiento:</label>
      <?php echo form_error('acrfecha'); ?>
      <br /><input id="acrfecha" type="text" name="acrfecha"  value="<?php echo $obj->getAcrfecha(); ?>"  />
    </p>
  </div>
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
  <div class="grid_5">
    <p>
      <label for="fechavencimiento">Fecha de Vencimiento <span class="required">*</span></label>
      <?php echo form_error('fechavencimiento'); ?>
      <br /><input id="fechavencimiento" type="text" name="fechavencimiento"  value="<?php echo $obj->getFechavencimiento(); ?>"  />
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_8">
  <p>
    <?php echo form_submit('submit', 'Submit'); ?>
  </p>
  </div>
  <?php echo form_close(); ?>

  
  
<script type="text/javascript">
$(document).ready(function() {
   $('#fecha').datepicker({
      changeYear: true,
      yearRange: "-100:+0"
    });
   $('#fechanacimiento').datepicker({
      changeYear: true,
      yearRange: "-100:+0"
    });
   $('#fechavencimiento').datepicker({
      changeYear: true,
      yearRange: "-100:+10"
    });
   $('#acrfecha').datepicker({
      changeYear: true,
      yearRange: "-100:+10"
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
