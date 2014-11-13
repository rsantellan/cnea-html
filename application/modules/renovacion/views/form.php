<?php
// Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('renovacion', $attributes);
?>

<p>
  <label for="nombre">nombre <span class="required">*</span></label>
<?php echo form_error('nombre'); ?>
  <br /><input id="nombre" type="text" name="nombre" maxlength="255" value="<?php echo set_value('nombre'); ?>"  />
</p>

<p>
  <label for="apellido">apellido <span class="required">*</span></label>
<?php echo form_error('apellido'); ?>
  <br /><input id="apellido" type="text" name="apellido" maxlength="255" value="<?php echo set_value('apellido'); ?>"  />
</p>

<p>
  <label for="ci">ci <span class="required">*</span></label>
<?php echo form_error('ci'); ?>
  <br /><input id="ci" type="text" name="ci" maxlength="255" value="<?php echo set_value('ci'); ?>"  />
</p>

<p>
  <label for="email">email <span class="required">*</span></label>
<?php echo form_error('email'); ?>
  <br /><input id="email" type="text" name="email" maxlength="255" value="<?php echo set_value('email'); ?>"  />
</p>

<p>
  <label for="institucion">institucion <span class="required">*</span></label>
  <?php echo form_error('institucion'); ?>

  <?php // Change the values in this array to populate your dropdown as required ?>
  <?php
  $options = array(
      '' => 'Please Select',
      'example_value1' => 'example option 1'
  );
  ?>

  <br /><?php echo form_dropdown('institucion', $options, set_value('institucion')) ?>
</p>                                             

<p>
  <label for="laboratorio">laboratorio/unidad</label>
<?php echo form_error('laboratorio'); ?>
  <br /><input id="laboratorio" type="text" name="laboratorio" maxlength="255" value="<?php echo set_value('laboratorio'); ?>"  />
</p>

<p>
  <label for="cargo">cargo</label>
<?php echo form_error('cargo'); ?>
  <br /><input id="cargo" type="text" name="cargo" maxlength="255" value="<?php echo set_value('cargo'); ?>"  />
</p>

<p>
  <label for="cargahoraria">cargahoraria</label>
<?php echo form_error('cargahoraria'); ?>
  <br /><input id="cargahoraria" type="text" name="cargahoraria"  value="<?php echo set_value('cargahoraria'); ?>"  />
</p>

<p>
  <label for="jefe">jefe</label>
<?php echo form_error('jefe'); ?>
  <br /><input id="jefe" type="text" name="jefe" maxlength="255" value="<?php echo set_value('jefe'); ?>"  />
</p>

<p>
  <span class="required">*</span>
<?php echo form_error('categoria'); ?>

<?php // Change the values/css classes to suit your needs  ?>
  <br /><input type="checkbox" id="categoria" name="categoria" value="enter_value_here" class="" <?php echo set_checkbox('categoria', 'enter_value_here'); ?>> 

  <label for="categoria">categoria</label>
</p> 
<p>
  <label for="fechaacreditacion">fechaacreditacion <span class="required">*</span></label>
<?php echo form_error('fechaacreditacion'); ?>
  <br /><input id="fechaacreditacion" type="text" name="fechaacreditacion"  value="<?php echo set_value('fechaacreditacion'); ?>"  />
</p>

<p>
  <label for="fechasolicitud">fechasolicitud <span class="required">*</span></label>
<?php echo form_error('fechasolicitud'); ?>
  <br /><input id="fechasolicitud" type="text" name="fechasolicitud"  value="<?php echo set_value('fechasolicitud'); ?>"  />
</p>

<p>
  <label for="numregistro">numregistro <span class="required">*</span></label>
<?php echo form_error('numregistro'); ?>
  <br /><input id="numregistro" type="text" name="numregistro" maxlength="255" value="<?php echo set_value('numregistro'); ?>"  />
</p>

<p>
  <label for="protocolos">protocolos</label>
<?php echo form_error('protocolos'); ?>
  <br />

  <?php echo form_textarea(array('name' => 'protocolos', 'rows' => '5', 'cols' => '80', 'value' => set_value('protocolos'))) ?>
</p>
<p>
  <label for="protocoloinvestigacion">protocoloinvestigacion</label>
<?php echo form_error('protocoloinvestigacion'); ?>
  <br />

  <?php echo form_textarea(array('name' => 'protocoloinvestigacion', 'rows' => '5', 'cols' => '80', 'value' => set_value('protocoloinvestigacion'))) ?>
</p>
<p>
  <label for="protocolootros">protocolootros</label>
<?php echo form_error('protocolootros'); ?>
  <br />

  <?php echo form_textarea(array('name' => 'protocolootros', 'rows' => '5', 'cols' => '80', 'value' => set_value('protocolootros'))) ?>
</p>

<p>
<?php echo form_submit('submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
