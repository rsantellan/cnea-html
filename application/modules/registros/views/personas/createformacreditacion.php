
<form method="POST" action="<?php echo site_url("registros/createacreditacion"); ?>" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $obj->getId(); ?>" />
  <div class="grid_5">
    <p>
      <label for="fecha">Fecha <span class="required">*</span></label>
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
  <div class="grid_10">
    <p>
    <h6>Nivel de formación</h6>
    <?php echo form_error('formacion_primaria'); ?>
    <?php echo form_error('formacion_secundaria'); ?>
    <?php echo form_error('formacionterciaria'); ?>
    <div style="width: 30%; float: left;">
      <label for="formacion_primaria">formacion primaria</label>
      <input type="radio" class="radiobuttom"  id="formacion_primaria" name="formacion" value="primaria" class="" <?php echo ($obj->getFormacion() == "primaria")? "checked=\"checked\"" : "";?> /> 
    </div>
    <div style="width: 30%; float: left;">
      <label for="formacion_secundaria">formacion secundaria</label>
      <input type="radio" class="radiobuttom"  id="formacion_secundaria" name="formacion" value="secundaria" class="" <?php echo ($obj->getFormacion() =="secundaria")? "checked=\"checked\""  : ""; ?> /> 
    </div>
    <div style="width: 30%; float: left;">
      <label for="formacionterciaria">formacion terciaria</label>
      <input type="radio" class="radiobuttom"  id="formacionterciaria" name="formacion" value="terciaria" class="" <?php echo ($obj->getFormacion() == "terciaria")? "checked=\"checked\"" : ""; ?> /> 
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
      $options = array(
          '' => 'Please Select',
          'example_value1' => 'example option 1'
      );
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
  <div class="grid_4 customlabel">
    <p>
      <label for="pctinvestigacion">% Investigacion</label>
      <?php echo form_error('pctinvestigacion'); ?>
      <br /><input id="pctinvestigacion" type="text" name="pctinvestigacion"  value="<?php echo $obj->getPctinvestigacion();  ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctmedicinaclinica">% Medicina Clinica</label>
      <?php echo form_error('pctmedicinaclinica'); ?>
      <br /><input id="pctmedicinaclinica" type="text" name="pctmedicinaclinica"  value="<?php echo $obj->getPctmedicinaclinica(); ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctcirugia">% Cirugia</label>
      <?php echo form_error('pctcirugia'); ?>
      <br /><input id="pctcirugia" type="text" name="pctcirugia"  value="<?php echo $obj->getPctcirugia(); ?>"  />
    </p>
  </div>

  <div class="grid_4 customlabel">
    <p>
      <label for="pctmantenimientocolonias">% Mantenimiento Colonias</label>
      <?php echo form_error('pctmantenimientocolonias'); ?>
      <br /><input id="pctmantenimientocolonias" type="text" name="pctmantenimientocolonias"  value="<?php echo $obj->getPctmantenimientocolonias(); ?>"  />
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctmanipulacion">% Manipulación</label>
      <?php echo form_error('pctmanipulacion'); ?>
      <br /><input id="pctmanipulacion" type="text" name="pctmanipulacion"  value="<?php echo $obj->getPctmanipulacion(); ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctdirprojectos">% Dirección de Projectos</label>
      <?php echo form_error('pctdirprojectos'); ?>
      <br /><input id="pctdirprojectos" type="text" name="pctdirprojectos"  value="<?php echo $obj->getPctdirprojectos(); ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctnecropsia">% Necropsia</label>
      <?php echo form_error('pctnecropsia'); ?>
      <br /><input id="pctnecropsia" type="text" name="pctnecropsia"  value="<?php echo $obj->getPctnecropsia(); ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctdiaglaboratorio">% Diagnostico Laboratorio</label>
      <?php echo form_error('pctdiaglaboratorio'); ?>
      <br /><input id="pctdiaglaboratorio" type="text" name="pctdiaglaboratorio"  value="<?php echo $obj->getPctdiaglaboratorio(); ?>"  />
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctceua">% CEUA</label>
      <?php echo form_error('pctceua'); ?>
      <br /><input id="pctceua" type="text" name="pctceua"  value="<?php echo $obj->getPctceua(); ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pcthistopatologia">% Histopatologia</label>
      <?php echo form_error('pcthistopatologia'); ?>
      <br /><input id="pcthistopatologia" type="text" name="pcthistopatologia"  value="<?php echo $obj->getPcthistopatologia(); ?>"  />
    </p>
  </div>

  <div class="grid_4 customlabel">
    <p>
      <label for="pctentedu">% Entrenamiento / Educacion</label>
      <?php echo form_error('pctentedu'); ?>
      <br /><input id="pctentedu" type="text" name="pctentedu"  value="<?php echo $obj->getPctentedu(); ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctapoyoinvestigadores">% Apoyo Investigadores</label>
      <?php echo form_error('pctapoyoinvestigadores'); ?>
      <br /><input id="pctapoyoinvestigadores" type="text" name="pctapoyoinvestigadores"  value="<?php echo $obj->getPctapoyoinvestigadores(); ?>"  />
    </p>
    <div class="clear"></div>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctsupervision">% Supervision</label>
      <?php echo form_error('pctsupervision'); ?>
      <br /><input id="pctsupervision" type="text" name="pctsupervision"  value="<?php echo $obj->getPctsupervision(); ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctprodanimal">% Produccion animal</label>
      <?php echo form_error('pctprodanimal'); ?>
      <br /><input id="pctprodanimal" type="text" name="pctprodanimal"  value="<?php echo $obj->getPctprodanimal(); ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctlegal">% Responsabilidad Legal</label>
      <?php echo form_error('pctlegal'); ?>
      <br /><input id="pctlegal" type="text" name="pctlegal"  value="<?php echo $obj->getPctlegal(); ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctotrasfunciones">% Otras Funciones</label>
      <?php echo form_error('pctotrasfunciones'); ?>
      <br /><input id="pctotrasfunciones" type="text" name="pctotrasfunciones"  value="<?php echo $obj->getPctotrasfunciones(); ?>"  />
    </p>
  </div>
  <div class="grid_4 customlabel">
    <p>
      <label for="pctfuncnorel">% Funciones No Relacionadas</label>
      <?php echo form_error('pctfuncnorel'); ?>
      <br /><input id="pctfuncnorel" type="text" name="pctfuncnorel"  value="<?php echo $obj->getPctfuncnorel(); ?>"  />
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_6">
    <p>
      <label for="pctobservaciones">Observaciones de Porcentajes</label>
      <?php echo form_error('pctobservaciones'); ?>
      <br />
      <?php echo form_textarea(array('name' => 'pctobservaciones', 'rows' => '5', 'cols' => '80', 'value' => $obj->getPctobservaciones())) ?>
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_5">
    <p>
      <label for="realizocursos">Realizo Cursos <span class="required">*</span></label>
      <?php echo form_error('realizocursos'); ?>
      <br />
    <div style="width: 30%; float: left;">
      <input  name="realizocursos" type="radio" class="" value="1" <?php echo ($obj->getRealizocursos() == "1")? "checked=\"checked\"" : ""; ?> />
      <label for="realizocursos" class="">Si</label>
    </div>
    <div style="width: 30%; float: left;">
      <input name="realizocursos" type="radio" class="" value="0" <?php echo ($obj->getRealizocursos() == "0")? "checked=\"checked\"" : ""; ?> />
      <label for="realizocursos" class="">No</label>
    </div>
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_5">
    <p>
      <label for="acrpersonales">Acreditaciones Personales <span class="required">*</span></label>
      <?php echo form_error('acrpersonales'); ?>
      <br />
      
    <div style="width: 30%; float: left;">
      <input id="acrpersonales" name="acrpersonales" type="radio" class="" value="1" <?php echo ($obj->getAcrpersonales() == "1")? "checked=\"checked\"" : ""; ?> />
      <label for="acrpersonales" class="">Si</label>
    </div>
    <div style="width: 30%; float: left;">
      <input id="acrpersonales" name="acrpersonales" type="radio" class="" value="0" <?php echo ($obj->getAcrpersonales() == "0")? "checked=\"checked\"" : ""; ?> />
      <label for="acrpersonales" class="">No</label>
    </div>
    </p>
  </div>
  <div class="clear"></div>
  <div class="grid_10">
    <p>
      <h4>Seleccione la categoria</h4>
    <div style="width: 23%; float: left;">
      <label for="categoriaa">Categoria A</label>
      <input name="categoria" type="radio" value="A" class="" <?php echo ($obj->getCategoria() == "A")? "checked=\"checked\"" : ""; ?>> 
    </div>
    <div style="width: 23%; float: left;">
      <label for="categoriab">Categoria B</label>
      <input name="categoria" type="radio" value="B" class="" <?php echo ($obj->getCategoria() == "B")? "checked=\"checked\"" : ""; ?>> 
    </div>   
    <div style="width: 23%; float: left;">
      <label for="categoria_c1">Categoria C1</label>
      <input name="categoria" type="radio" value="C1" class="" <?php echo ($obj->getCategoria() == "C1")? "checked=\"checked\"" : ""; ?>> 
    </div>
    <div style="width: 23%; float: left;">
      <label for="categoria_c2">Categoria C2</label>
      <input name="categoria" type="radio" value="C2" class="" <?php echo ($obj->getCategoria() == "C2")? "checked=\"checked\"" : ""; ?>> 
    </div>
    </p>
  </div>
  <div class="clear"></div>
  <p>
    <label for="cvfile">CvFile</label>
    <?php echo form_error('cvfile'); ?>
    <br /><input id="cvfile" type="text" name="cvfile" maxlength="255" value="<?php echo set_value('cvfile'); ?>"  />
  </p>

  <p>
    <label for="cvpath">CvPath</label>
    <?php echo form_error('cvpath'); ?>
    <br /><input id="cvpath" type="text" name="cvpath" maxlength="255" value="<?php echo set_value('cvpath'); ?>"  />
  </p>

  <p>
    <span class="required">*</span>
    <?php echo form_error('isactive'); ?>

    <?php // Change the values/css classes to suit your needs  ?>
    <br /><input type="checkbox" id="isactive" name="isactive" value="enter_value_here" class="" <?php echo set_checkbox('isactive', 'enter_value_here'); ?>> 

    <label for="isactive">isactive</label>
  </p> 
  <p>
    <label for="fechavencimiento">Fecha de Vencimiento <span class="required">*</span></label>
    <?php echo form_error('fechavencimiento'); ?>
    <br /><input id="fechavencimiento" type="text" name="fechavencimiento"  value="<?php echo set_value('fechavencimiento'); ?>"  />
  </p>


  <p>
    <?php echo form_submit('submit', 'Submit'); ?>
  </p>

  <?php echo form_close(); ?>

  
  
<script type="text/javascript">
$(document).ready(function() {
   $('#fecha').datepicker();
   $('#fechanacimiento').datepicker();
   $('#fechavencimiento').datepicker();
 });

</script>  