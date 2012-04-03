<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('registros/savePersona', $attributes); ?>

<input id="id" type="hidden" name="id"  value="<?php echo $object->getId() ?>"  />



<div class="grid_5">
  <p>
    <label for="name">Nombre <small>Requerido</small></label>
    <input type="text" name="name" maxlength="255" value="<?php echo $object->getNombre() ?>" />
  </p>
</div>
<div class="grid_5">
  <p>
    <label for="code">Codigo <small>Requerido</small></label>
    <input type="text" name="code" maxlength="255" value="<?php echo $object->getCode() ?>" />
  </p>
</div>
<div class="clear"></div>
<div class="grid_5">
  <p>
    <label for="email">Email</label>
    <input type="text" name="email" maxlength="255" value="<?php echo $object->getEmail() ?>" />
  </p>
</div>
<div class="grid_16">
  <p class="submit">
    <?php echo form_submit( 'submit', 'Submit'); ?>
  </p>
</div>
<?php echo form_close(); ?>
