<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('novedadesadmin/save', $attributes); ?>

<input id="id" type="hidden" name="id"  value="<?php echo $object->getId() ?>"  />



<div class="grid_5">
  <p>
    <label for="nombre">Nombre <small>Requerido</small></label>
    <input type="text" name="nombre" maxlength="255" value="<?php echo $object->getNombre() ?>" />
  </p>
</div>
<div class="grid_16">
  <p>
      <label>Descripcion <small>Requerido</small></label>
      <?php echo form_textarea( array( 'name' => 'descripcion', 'rows' => '5', 'cols' => '80', 'value' => html_entity_decode($object->getDescripcion())) )?>
  </p>
</div>
<div class="grid_16">
  <p class="submit">
    <?php echo form_submit( 'submit', 'Submit'); ?>
  </p>
</div>
<?php echo form_close(); ?>
