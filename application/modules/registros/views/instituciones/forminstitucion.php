<form method="POST" action="<?php echo site_url("registros/saveMinEdit");?>" onsubmit="return saveBasicForm(this, 'form_errores_institucion', '_', 'institucion_data_');">
  <input type="hidden" name="id" value="<?php echo $obj->getId();?>" />
  <p>
    <label for="nombreinsititucion">nombre insititucion <span class="required">*</span></label>
    <?php echo form_error('nombreinsititucion'); ?>
    <br /><input id="nombreinsititucion" type="text" name="nombreinsititucion" maxlength="255" value="<?php echo $obj->getNombreinsititucion() ?>"  />
  </p>
  <p>
    <label for="razonsocial">razon social <span class="required">*</span></label>
    <?php echo form_error('razonsocial'); ?>
    <br /><input id="razonsocial" type="text" name="razonsocial" maxlength="255" value="<?php echo  $obj->getRazonsocial(); ?>"  />
  </p>
  <p>
    <label for="rut">rut</label>
    <?php echo form_error('rut'); ?>
    <br /><input id="rut" type="text" name="rut" maxlength="255" value="<?php echo $obj->getRut(); ?>"  />
  </p>
  <p>
    <label for="naturaleza">naturaleza</label>
    <?php echo form_error('naturaleza'); ?>
    <select name="naturaleza" class="<?php echo (form_error('naturaleza') != "")? "input_error" : "";?>">
        <option value="publica" <?php echo ($obj->getNaturaleza() == "publica")? "selected=\"selected\"" : "";?>><?php echo lang("instituciones_formulario_publica"); ?></option>
        <option value="privada" <?php echo ($obj->getNaturaleza() == "privada")? "selected=\"selected\"" : "";?>><?php echo lang("instituciones_formulario_privada"); ?></option>
        <option value="mixta" <?php echo ($obj->getNaturaleza() == "mixta")? "selected=\"selected\"" : "";?>><?php echo lang("instituciones_formulario_mixta"); ?></option>
    </select>
  </p>
  <h6>Caracterización Institucional</h6>
  <p>
    <label for="primernivel">primer nivel <span class="required">*</span></label>
    <?php echo form_error('primernivel'); ?>
    <br /><input id="primernivel" type="text" name="primernivel" maxlength="255" value="<?php echo $obj->getPrimernivel(); ?>"  />
  </p>
  <p>
    <label for="segundonivel">segundo nivel <span class="required">*</span></label>
    <?php echo form_error('segundonivel'); ?>
    <br /><input id="segundonivel" type="text" name="segundonivel" maxlength="255" value="<?php echo $obj->getSegundonivel(); ?>"  />
  </p>
  <p>
    <label for="tercernivel">tercer nivel <span class="required">*</span></label>
    <?php echo form_error('tercernivel'); ?>
    <br /><input id="tercernivel" type="text" name="tercernivel" maxlength="255" value="<?php echo $obj->getTercernivel(); ?>"  />
  </p>
  <p>
    <label for="domicilioinstitucional">domicilio institucional <span class="required">*</span></label>
    <?php echo form_error('domicilioinstitucional'); ?>
    <br /><input id="domicilioinstitucional" type="text" name="domicilioinstitucional" maxlength="255" value="<?php echo $obj->getDomicilioinstitucional(); ?>"  />
  </p>
  <p>
    <label for="domiciliofiscal">domicilio fiscal</label>
    <?php echo form_error('domiciliofiscal'); ?>
    <br /><input id="domiciliofiscal" type="text" name="domiciliofiscal" maxlength="255" value="<?php echo $obj->getDomiciliofiscal(); ?>"  />
  </p>
  <p>
    <label for="tipoestablecimiento">tipo establecimiento <span class="required">*</span></label>
    <?php echo form_error('tipoestablecimiento'); ?>  
    <div style="width: 30%; float: left;">
      <label>Cria</label>
      <input type="radio" class="radiobuttom" name="tipoestablecimiento" value="cria" <?php echo ($obj->getTipoestablecimiento() == "cria" || $obj->getTipoestablecimiento() == "")? "checked=\"checked\"" : "";?> />
    </div>
    <div style="width: 30%; float: left;">
      <label><?php echo lang("instituciones_formulario_experimentacion"); ?></label>
      <input type="radio" class="radiobuttom" name="tipoestablecimiento" value="experimentación" <?php echo ($obj->getTipoestablecimiento() == "experimentación")? "checked=\"checked\"" : "";?> />
    </div>
    <div style="width: 30%; float: left;">
      <label><?php echo lang("instituciones_formulario_mixto"); ?></label>
      <input type="radio" class="radiobuttom" name="tipoestablecimiento" value="mixto" <?php echo ($obj->getTipoestablecimiento() == "mixto")? "checked=\"checked\"" : "";?> />
    </div>
  </p>
  <p>
    <label for="observacionescomite">observaciones comite</label>
    <?php echo form_error('observacionescomite'); ?>
    <br />
    <?php echo form_textarea( array( 'name' => 'observacionescomite', 'rows' => '5', 'cols' => '80', 'value' => $obj->getObservacionescomite() ) )?>
  </p>
  <p>
    <label for="nombrecontacto">nombre contacto <span class="required">*</span></label>
    <?php echo form_error('nombrecontacto'); ?>
    <br /><input id="nombrecontacto" type="text" name="nombrecontacto" maxlength="255" value="<?php echo $obj->getNombrecontacto(); ?>"  />
  </p>
  <p>
    <label for="mailcontacto">mail contacto</label>
    <?php echo form_error('mailcontacto'); ?>
    <br /><input id="mailcontacto" type="text" name="mailcontacto" maxlength="255" value="<?php echo $obj->getMailcontacto(); ?>"  />
  </p>
  <p>
    <label for="telcontacto">telefono contacto</label>
    <?php echo form_error('telcontacto'); ?>
    <br /><input id="telcontacto" type="text" name="telcontacto" maxlength="255" value="<?php echo $obj->getTelcontacto(); ?>"  />
  </p>
  <input type="submit" value="Guardar" />
</form>
<div id="form_errores_institucion">
  
</div>