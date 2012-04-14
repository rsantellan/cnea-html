<div class="content_right img_instituciones">
  <h1><?php echo lang("instituciones_formulario_titulo"); ?></h1>
  <h5><?php echo lang("instituciones_formulario_subtitulo"); ?></h5>
  <span class="msg_error"><?php echo lang("instituciones_formulario_subtitulo_errores"); ?></span>
  <?php
    echo form_open_multipart('acreditaciones/formulario', array('class' => 'infield_form', 'id' => '')); ?>    
    <h4><?php echo lang("instituciones_formulario_subtitulo_identificacion"); ?></h4>
    <div class="clear"></div>
    <p>
      <label class="nombre_institucion_infield" for="nombre_institucion">Nombre de la Institución*</label>
      <input class="<?php echo (form_error('nombre_institucion') != "")? "input_error" : "";?>" id="nombre_institucion" type="text" name="nombre_institucion"  value="<?php echo set_value('nombre_institucion'); ?>"  />
    </p>
    <p>
      <label class="razon_social_infield" for="razon_social">Razón Social</label>
      <input class="<?php echo (form_error('razon_social') != "")? "input_error" : "";?>" id="razon_social" type="text" name="razon_social"  value="<?php echo set_value('razon_social'); ?>"  />
    </p>
    <p>
      <label class="rut_infield" for="rut">RUT</label>
      <input class="<?php echo (form_error('rut') != "")? "input_error" : "";?>" id="rut" type="text" name="rut"  value="<?php echo set_value('rut'); ?>"  />
    </p>
    <p>
      <label class="naturaleza_infield" for="naturaleza">Naturaleza*</label>
      <input class="<?php echo (form_error('naturaleza') != "")? "input_error" : "";?>" id="naturaleza" type="text" name="naturaleza"  value="<?php echo set_value('naturaleza'); ?>"  />
      <span>Seleccionar uno de los tres tipos de naturaleza</span>
    </p>
    <h5 class="acreditacion_field">Caracterizaci&oacute;n Institucional*</h5>
    <p>
      <label class="1_nivel_infield" for="1_nivel">1º NIVEL* (por ejemplo UdelR)</label>
      <input class="<?php echo (form_error('1_nivel') != "")? "input_error" : "";?>" id="1_nivel" type="text" name="1_nivel"  value="<?php echo set_value('1_nivel'); ?>"  />
    </p>
    <p>
      <label class="2_nivel_infield" for="2_nivel">2º NIVEL* (por ejemplo Facultad de Ciencias Sociales)</label>
      <input class="<?php echo (form_error('2_nivel') != "")? "input_error" : "";?>" id="2_nivel" type="text" name="2_nivel"  value="<?php echo set_value('2_nivel'); ?>"  />
    </p>
    <p>
      <label class="3_nivel_infield" for="3_nivel">3º NIVEL* (por ejemplo Departamento de Economía)</label>
      <input class="<?php echo (form_error('3_nivel') != "")? "input_error" : "";?>" id="3_nivel" type="text" name="3_nivel"  value="<?php echo set_value('3_nivel'); ?>"  />
      <span>En el primer nivel ingrese la denominaci&oacute;n m&aacute;s general de la instituci&oacute;n para luego avanzar en el grado de especificaci&oacute;n. Por ejemplo 1º UDELAR - 2º Facultad de Ciencias Sociales - 3º Departamento de Econom&iacute;a.</span>
    </p>
    <p>
      <label class="domicilio_institucional_infield" for="2_nivel">Domicilio Institucional*</label>
      <input class="<?php echo (form_error('domicilio_institucional') != "")? "input_error" : "";?>" id="domicilio_institucional" type="text" name="domicilio_institucional"  value="<?php echo set_value('domicilio_institucional'); ?>"  />
    </p>
    <p>
      <label class="domicilio_fiscal_infield" for="domicilio_fiscal">Domicilio Fiscal (si corresponde)</label>
      <input class="<?php echo (form_error('domicilio_fiscal') != "")? "input_error" : "";?>" id="domicilio_fiscal" type="text" name="domicilio_fiscal"  value="<?php echo set_value('domicilio_fiscal'); ?>"  />
    </p>
    <h5 class="acreditacion_field">Unidades dependientes en otra ubicaci&oacute;n con animales de experimentaci&oacute;n (indicar nombre, dirección y DICOSE de cada una)</h5>
    <p>
      <label class="dicose_infield" for="dicose">DICOSE (si corresponde)</label>
      <input class="<?php echo (form_error('dicose') != "")? "input_error" : "";?>" id="dicose" type="text" name="dicose"  value="<?php echo set_value('dicose'); ?>"  />
    </p>
    <p>
      <label class="1_dicose_infield" for="1_dicose">1</label>
      <input class="<?php echo (form_error('1_dicose') != "")? "input_error" : "";?>" id="1_dicose" type="text" name="1_dicose"  value="<?php echo set_value('1_dicose'); ?>"  />
    </p>
    <p>
      <label class="2_dicose_infield" for="2_dicose">2</label>
      <input class="<?php echo (form_error('2_dicose') != "")? "input_error" : "";?>" id="2_dicose" type="text" name="2_dicose"  value="<?php echo set_value('2_dicose'); ?>"  />
    </p>
    <p>
      <label class="3_dicose_infield" for="3_dicose">3</label>
      <input class="<?php echo (form_error('3_dicose') != "")? "input_error" : "";?>" id="3_dicose" type="text" name="3_dicose"  value="<?php echo set_value('3_dicose'); ?>"  />
    </p>
    <p>
      <label class="4_dicose_infield" for="4_dicose">4</label>
      <input class="<?php echo (form_error('4_dicose') != "")? "input_error" : "";?>" id="4_dicose" type="text" name="4_dicose"  value="<?php echo set_value('4_dicose'); ?>"  />
    </p>
</div><!--CONTENT RIGHT-->