<form method="POST" action="<?php echo site_url("registros/saveDocenteInvestigador");?>" onsubmit="return saveBasicForm(this, 'form_errores_docente_investigador', 'doceinve_', 'listado_docentes_investigadores');">
  <input type="hidden" name="id" value="<?php echo $obj->getId();?>" />
  <input type="hidden" name="institucion_id" value="<?php echo $obj->getIntitucion_id();?>" />
  <p>
      <label for="nombre">nombre <span class="required">*</span></label>
      <?php echo form_error('nombre'); ?>
      <br /><input id="nombre" type="text" name="nombre" maxlength="255" value="<?php echo $obj->getNombre(); ?>"  />
  </p>
  <p>
      <label for="profesion">profesion <span class="required">*</span></label>
      <?php echo form_error('profesion'); ?>
      <br /><input id="profesion" type="text" name="profesion"  value="<?php echo $obj->getProfesion(); ?>"  />
  </p>
  <p>
        <label for="ocupacion">ocupacion <span class="required">*</span></label>
        <?php echo form_error('ocupacion'); ?>
        <br /><input id="ocupacion" type="text" name="ocupacion" maxlength="255" value="<?php echo $obj->getOcupacion(); ?>"  />
  </p>
  <p>
    <input type="submit" value="Guardar" />
  </p>
</form>

<div id="form_errores_docente_investigador">
  
</div>