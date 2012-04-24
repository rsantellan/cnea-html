<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('interesesadmin/save', $attributes); ?>

<input id="id" type="hidden" name="id"  value="<?php echo $object->getId() ?>"  />
<input id="objClass" type="hidden" name="objClass"  value="<?php echo $object->getObjectClass() ?>"  />


<div class="grid_5">
  <p>
    <label for="nombre">Nombre <small>Requerido</small></label>
    <input type="text" name="nombre" maxlength="255" value="<?php echo $object->getNombre() ?>" />
  </p>
</div>
<div class="grid_5">
  <p>
    <label for="link">Link <small>Requerido</small></label>
    <input type="text" name="link" maxlength="255" value="<?php echo $object->getLink() ?>" />
  </p>
</div>
<div class="grid_16">
  <p class="submit">
    <?php echo form_submit( 'submit', 'Guardar'); ?>
  </p>
</div>
<?php echo form_close(); ?>
