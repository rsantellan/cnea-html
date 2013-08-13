
<form method="POST" action="<?php echo site_url("registros/createacreditacion");?>" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $obj->getId();?>" />
  <p>
        <label for="fecha">Fecha <span class="required">*</span></label>
        <?php echo form_error('fecha'); ?>
        <br /><input id="fecha" type="text" name="fecha"  value="<?php echo $obj->getFecha(); ?>"  />
  </p>
  <p>
        <label for="nombreapellido">Nombre y Apellido <span class="required">*</span></label>
        <?php echo form_error('nombreapellido'); ?>
        <br /><input id="nombreapellido" type="text" name="nombreapellido" maxlength="255" value="<?php echo $obj->getNombreapellido(); ?>"  />
  </p>

  <p>
	
        <?php echo form_error('formacion_primaria'); ?>
        
        <?php // Change the values/css classes to suit your needs ?>
        <br /><input type="checkbox" id="formacion_primaria" name="formacion_primaria" value="enter_value_here" class="" <?php echo set_checkbox('formacion_primaria', 'enter_value_here'); ?>> 
       	<label for="formacion_primaria">formacion primaria</label>
  </p> 
  
  <p>
	
        <?php echo form_error('formacion_secundaria'); ?>
        
        <?php // Change the values/css classes to suit your needs ?>
        <br /><input type="checkbox" id="formacion_secundaria" name="formacion_secundaria" value="enter_value_here" class="" <?php echo set_checkbox('formacion_secundaria', 'enter_value_here'); ?>> 
                   
	<label for="formacion_secundaria">formacion secundaria</label>
</p> 
<p>
	
        <?php echo form_error('formacionterciaria'); ?>
        
        <?php // Change the values/css classes to suit your needs ?>
        <br /><input type="checkbox" id="formacionterciaria" name="formacionterciaria" value="enter_value_here" class="" <?php echo set_checkbox('formacionterciaria', 'enter_value_here'); ?>> 
                   
	<label for="formacionterciaria">formacion terciaria</label>
</p> 
<p>
        <label for="documento">Documento <span class="required">*</span></label>
        <?php echo form_error('documento'); ?>
        <br /><input id="documento" type="text" name="documento" maxlength="255" value="<?php echo set_value('documento'); ?>"  />
</p>

<p>
        <label for="fechanacimiento">fecha nacimiento <span class="required">*</span></label>
        <?php echo form_error('fechanacimiento'); ?>
        <br /><input id="fechanacimiento" type="text" name="fechanacimiento"  value="<?php echo set_value('fechanacimiento'); ?>"  />
</p>

<p>
        <label for="direccionpostal">Direccion Postal <span class="required">*</span></label>
        <?php echo form_error('direccionpostal'); ?>
        <br /><input id="direccionpostal" type="text" name="direccionpostal" maxlength="255" value="<?php echo set_value('direccionpostal'); ?>"  />
</p>

<p>
        <label for="direccionelectronica">Direccion Electronica <span class="required">*</span></label>
        <?php echo form_error('direccionelectronica'); ?>
        <br /><input id="direccionelectronica" type="text" name="direccionelectronica" maxlength="255" value="<?php echo set_value('direccionelectronica'); ?>"  />
</p>

<p>
        <label for="telefonocontacto">Telefono Contacto <span class="required">*</span></label>
        <?php echo form_error('telefonocontacto'); ?>
        <br /><input id="telefonocontacto" type="text" name="telefonocontacto" maxlength="255" value="<?php echo set_value('telefonocontacto'); ?>"  />
</p>

<p>
        <label for="instituciondesempeno">Institucion desempeño <span class="required">*</span></label>
        <?php echo form_error('instituciondesempeno'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('instituciondesempeno', $options, set_value('instituciondesempeno'))?>
</p>                                             
                        
<p>
        <label for="laboratoriounidad">Laboratorio/Unidad <span class="required">*</span></label>
        <?php echo form_error('laboratoriounidad'); ?>
        <br /><input id="laboratoriounidad" type="text" name="laboratoriounidad" maxlength="255" value="<?php echo set_value('laboratoriounidad'); ?>"  />
</p>

<p>
        <label for="cargofuncioninstitucion">Cargo/Funcion en la institucion <span class="required">*</span></label>
        <?php echo form_error('cargofuncioninstitucion'); ?>
        <br /><input id="cargofuncioninstitucion" type="text" name="cargofuncioninstitucion" maxlength="255" value="<?php echo set_value('cargofuncioninstitucion'); ?>"  />
</p>

<p>
        <label for="cargahorariasemanal">Carga Horaria Semanal <span class="required">*</span></label>
        <?php echo form_error('cargahorariasemanal'); ?>
        <br /><input id="cargahorariasemanal" type="text" name="cargahorariasemanal"  value="<?php echo set_value('cargahorariasemanal'); ?>"  />
</p>

<p>
        <label for="nombresupervisor">nombre supervisor <span class="required">*</span></label>
        <?php echo form_error('nombresupervisor'); ?>
        <br /><input id="nombresupervisor" type="text" name="nombresupervisor" maxlength="255" value="<?php echo set_value('nombresupervisor'); ?>"  />
</p>

<p>
        <label for="especiestrabajadas">Especies que trabajadas <span class="required">*</span></label>
	<?php echo form_error('especiestrabajadas'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'especiestrabajadas', 'rows' => '5', 'cols' => '80', 'value' => set_value('especiestrabajadas') ) )?>
</p>
<p>
        <label for="describatareas">Describa las tareas</label>
	<?php echo form_error('describatareas'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'describatareas', 'rows' => '5', 'cols' => '80', 'value' => set_value('describatareas') ) )?>
</p>
<p>
        <label for="pctinvestigacion">Porcentaje Investigacion</label>
        <?php echo form_error('pctinvestigacion'); ?>
        <br /><input id="pctinvestigacion" type="text" name="pctinvestigacion"  value="<?php echo set_value('pctinvestigacion'); ?>"  />
</p>

<p>
        <label for="pctmedicinaclinica">Porcentaje Medicina Clinica</label>
        <?php echo form_error('pctmedicinaclinica'); ?>
        <br /><input id="pctmedicinaclinica" type="text" name="pctmedicinaclinica"  value="<?php echo set_value('pctmedicinaclinica'); ?>"  />
</p>

<p>
        <label for="pctcirugia">Porcentaje Cirugia</label>
        <?php echo form_error('pctcirugia'); ?>
        <br /><input id="pctcirugia" type="text" name="pctcirugia"  value="<?php echo set_value('pctcirugia'); ?>"  />
</p>

<p>
        <label for="pctmantenimientocolonias">Porcentaje Mantenimiento Colonias</label>
        <?php echo form_error('pctmantenimientocolonias'); ?>
        <br /><input id="pctmantenimientocolonias" type="text" name="pctmantenimientocolonias"  value="<?php echo set_value('pctmantenimientocolonias'); ?>"  />
</p>

<p>
        <label for="pctmanipulacion">Porcentaje Manipulación</label>
        <?php echo form_error('pctmanipulacion'); ?>
        <br /><input id="pctmanipulacion" type="text" name="pctmanipulacion"  value="<?php echo set_value('pctmanipulacion'); ?>"  />
</p>

<p>
        <label for="pctdirprojectos">Porcentaje Dirección de Projectos</label>
        <?php echo form_error('pctdirprojectos'); ?>
        <br /><input id="pctdirprojectos" type="text" name="pctdirprojectos"  value="<?php echo set_value('pctdirprojectos'); ?>"  />
</p>

<p>
        <label for="pctnecropsia">Porcentaje Necropsia</label>
        <?php echo form_error('pctnecropsia'); ?>
        <br /><input id="pctnecropsia" type="text" name="pctnecropsia"  value="<?php echo set_value('pctnecropsia'); ?>"  />
</p>

<p>
        <label for="pctdiaglaboratorio">Porcentaje Diagnostico Laboratorio</label>
        <?php echo form_error('pctdiaglaboratorio'); ?>
        <br /><input id="pctdiaglaboratorio" type="text" name="pctdiaglaboratorio"  value="<?php echo set_value('pctdiaglaboratorio'); ?>"  />
</p>

<p>
        <label for="pctceua">Porcentaje CEUA</label>
        <?php echo form_error('pctceua'); ?>
        <br /><input id="pctceua" type="text" name="pctceua"  value="<?php echo set_value('pctceua'); ?>"  />
</p>

<p>
        <label for="pcthistopatologia">Porcentaje Histopatologia</label>
        <?php echo form_error('pcthistopatologia'); ?>
        <br /><input id="pcthistopatologia" type="text" name="pcthistopatologia"  value="<?php echo set_value('pcthistopatologia'); ?>"  />
</p>

<p>
        <label for="pctentedu">Porcentaje Entrenamiento/Educacion</label>
        <?php echo form_error('pctentedu'); ?>
        <br /><input id="pctentedu" type="text" name="pctentedu"  value="<?php echo set_value('pctentedu'); ?>"  />
</p>

<p>
        <label for="pctapoyoinvestigadores">Porcentaje Apoyo Investigadores</label>
        <?php echo form_error('pctapoyoinvestigadores'); ?>
        <br /><input id="pctapoyoinvestigadores" type="text" name="pctapoyoinvestigadores"  value="<?php echo set_value('pctapoyoinvestigadores'); ?>"  />
</p>

<p>
        <label for="pctsupervision">Porcentaje Supervision</label>
        <?php echo form_error('pctsupervision'); ?>
        <br /><input id="pctsupervision" type="text" name="pctsupervision"  value="<?php echo set_value('pctsupervision'); ?>"  />
</p>

<p>
        <label for="pctprodanimal">Porcentaje Produccion animal</label>
        <?php echo form_error('pctprodanimal'); ?>
        <br /><input id="pctprodanimal" type="text" name="pctprodanimal"  value="<?php echo set_value('pctprodanimal'); ?>"  />
</p>

<p>
        <label for="pctlegal">Porcentaje Responsabilidad Legal</label>
        <?php echo form_error('pctlegal'); ?>
        <br /><input id="pctlegal" type="text" name="pctlegal"  value="<?php echo set_value('pctlegal'); ?>"  />
</p>

<p>
        <label for="pctotrasfunciones">Porcentaje Otras Funciones</label>
        <?php echo form_error('pctotrasfunciones'); ?>
        <br /><input id="pctotrasfunciones" type="text" name="pctotrasfunciones"  value="<?php echo set_value('pctotrasfunciones'); ?>"  />
</p>

<p>
        <label for="pctfuncnorel">Porcentaje Funciones No Relacionadas</label>
        <?php echo form_error('pctfuncnorel'); ?>
        <br /><input id="pctfuncnorel" type="text" name="pctfuncnorel"  value="<?php echo set_value('pctfuncnorel'); ?>"  />
</p>

<p>
        <label for="pctobservaciones">Observaciones de Porcentajes</label>
	<?php echo form_error('pctobservaciones'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'pctobservaciones', 'rows' => '5', 'cols' => '80', 'value' => set_value('pctobservaciones') ) )?>
</p>
<p>
        <label for="realizocursos">Realizo Cursos <span class="required">*</span></label>
        <?php echo form_error('realizocursos'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="realizocursos" name="realizocursos" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('realizocursos', 'option1'); ?> />
        		<label for="realizocursos" class="">Radio option 1</label>

        		<input id="realizocursos" name="realizocursos" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('realizocursos', 'option2'); ?> />
        		<label for="realizocursos" class="">Radio option 2</label>
</p>


<p>
        <label for="acrpersonales">Acreditaciones Personales <span class="required">*</span></label>
        <?php echo form_error('acrpersonales'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="acrpersonales" name="acrpersonales" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('acrpersonales', 'option1'); ?> />
        		<label for="acrpersonales" class="">Radio option 1</label>

        		<input id="acrpersonales" name="acrpersonales" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('acrpersonales', 'option2'); ?> />
        		<label for="acrpersonales" class="">Radio option 2</label>
</p>


<p>
	 <span class="required">*</span>
        <?php echo form_error('categoriaa'); ?>
        
        <?php // Change the values/css classes to suit your needs ?>
        <br /><input type="checkbox" id="categoriaa" name="categoriaa" value="enter_value_here" class="" <?php echo set_checkbox('categoriaa', 'enter_value_here'); ?>> 
                   
	<label for="categoriaa">Categoria A</label>
</p> 
<p>
	 <span class="required">*</span>
        <?php echo form_error('categoriab'); ?>
        
        <?php // Change the values/css classes to suit your needs ?>
        <br /><input type="checkbox" id="categoriab" name="categoriab" value="enter_value_here" class="" <?php echo set_checkbox('categoriab', 'enter_value_here'); ?>> 
                   
	<label for="categoriab">Categoria B</label>
</p> 
<p>
	 <span class="required">*</span>
        <?php echo form_error('categoria_c1'); ?>
        
        <?php // Change the values/css classes to suit your needs ?>
        <br /><input type="checkbox" id="categoria_c1" name="categoria_c1" value="enter_value_here" class="" <?php echo set_checkbox('categoria_c1', 'enter_value_here'); ?>> 
                   
	<label for="categoria_c1">Categoria C1</label>
</p> 
<p>
	 <span class="required">*</span>
        <?php echo form_error('categoria_c2'); ?>
        
        <?php // Change the values/css classes to suit your needs ?>
        <br /><input type="checkbox" id="categoria_c2" name="categoria_c2" value="enter_value_here" class="" <?php echo set_checkbox('categoria_c2', 'enter_value_here'); ?>> 
                   
	<label for="categoria_c2">Categoria C2</label>
</p> 
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
        
        <?php // Change the values/css classes to suit your needs ?>
        <br /><input type="checkbox" id="isactive" name="isactive" value="enter_value_here" class="" <?php echo set_checkbox('isactive', 'enter_value_here'); ?>> 
                   
	<label for="isactive">isactive</label>
</p> 
<p>
        <label for="fechavencimiento">Fecha de Vencimiento <span class="required">*</span></label>
        <?php echo form_error('fechavencimiento'); ?>
        <br /><input id="fechavencimiento" type="text" name="fechavencimiento"  value="<?php echo set_value('fechavencimiento'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>