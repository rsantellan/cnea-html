<form method="POST" action="<?php echo site_url("registros/saveUnidadDependiente");?>" onsubmit="return saveBasicForm(this, 'form_errores_unidades_dependientes', 'unidaddependiente_', '');">
  <input type="hidden" name="id" value="<?php echo $obj->getId();?>" />
  <input type="hidden" name="institucion_id" value="<?php echo $obj->getIntitucion_id();?>" />
  <p>
      <label for="nombre">nombre</label>
      <?php echo form_error('nombre'); ?>
      <br /><input id="nombre" type="text" name="nombre" maxlength="255" value="<?php echo $obj->getNombre(); ?>"  />
  </p>
  <p>
    <input type="submit" value="Guardar" />
  </p>
</form>

<div id="form_errores_unidades_dependientes">
  
</div>