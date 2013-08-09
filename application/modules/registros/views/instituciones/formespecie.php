<form method="POST" action="<?php echo site_url("registros/saveEspecie");?>" onsubmit="return saveBasicForm(this, 'form_errores_especies', 'especie_', 'listado_especies');">
  <input type="hidden" name="id" value="<?php echo $obj->getId();?>" />
  <input type="hidden" name="institucion_id" value="<?php echo $obj->getIntitucion_id();?>" />
  <p>
      <label for="nombre">nombre <span class="required">*</span></label>
      <?php echo form_error('nombre'); ?>
      <br /><input id="nombre" type="text" name="nombre" maxlength="255" value="<?php echo $obj->getNombre(); ?>"  />
  </p>
  <p>
      <label for="observacion">Observación</label>
      <?php echo form_error('observacion'); ?>
      <br />
      <textarea name="observacion" rows="10" cols="20"><?php echo $obj->getObservacion(); ?></textarea>
  </p>
  <p>
        <label for="uso">uso</label>
        <?php echo form_error('uso'); ?>
        <input type="checkbox" class="input_checkbox" name="uso" value="1" <?php echo ($obj->getEsUso() == 1 || $obj->getEsUso() == "1")? "checked=\"checked\"" : "";?> />
        <label for="cria">cria</label>
        <?php echo form_error('cria'); ?>
        <input type="checkbox" class="input_checkbox" name="cria" value="1" <?php echo ($obj->getEsCria() == 1 || $obj->getEsCria() == "1")? "checked=\"checked\"" : "";?> />
  </p>
  <p>
    <input type="submit" value="Guardar" />
  </p>
</form>

<div id="form_errores_especies">
  
</div>