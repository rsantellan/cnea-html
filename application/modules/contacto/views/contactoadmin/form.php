<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('contacto/contactoadmin/saveContacto', $attributes); ?>

<input id="id" type="hidden" name="id"  value="<?php echo $object->getId() ?>"  />



<div class="grid_5">
  <p>
    <label for="direccion">Direcci&oacute;n <small>Requerido</small></label>
    <input type="text" name="direccion" maxlength="255" value="<?php echo $object->getDireccion() ?>" />
  </p>
</div>
<div class="grid_5">
  <p>
    <label for="tipo">Tipo <small>Requerido</small></label>
    <input type="text" name="tipo" maxlength="255" value="<?php echo $object->getTipo() ?>" />
  </p>
</div>
<div class="grid_5">
  <p>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" maxlength="255" value="<?php echo $object->getNombre() ?>" />
  </p>
</div>
<div class="grid_5">
  <p>
    <label for="funcion">Funci&oacute;n</label>
    <input type="text" name="funcion" maxlength="255" value="<?php echo $object->getFuncion() ?>" />
  </p>
</div>
<div class="grid_16">
  <p class="submit">
    <?php echo form_submit( 'submit', 'Submit'); ?>
  </p>
</div>
<?php echo form_close(); ?>
