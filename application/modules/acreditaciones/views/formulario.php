<div class="content_right img_instituciones">
  <h1><?php echo lang("personal_formulario_titulo"); ?></h1>
  <h5><?php echo lang("personal_formulario_subtitulo"); ?></h5>
  <span class="msg_error"><?php echo lang("personal_formulario_subtitulo_errores"); ?></span>
  <?php
  $attributes = array('class' => 'infield_form', 'id' => '');
  echo form_open_multipart('acreditaciones/formulario', $attributes); ?>    
    <h4><?php echo lang("personal_formulario_subtitulo_identificacion"); ?></h4>
    <div class="clear"></div>
    <p>
      <label class="fecha_infield" for="fecha">Fecha*</label><br />
      <input class="<?php echo (form_error('fecha') != "")? "input_error" : "";?>" id="fecha" type="date" name="fecha" maxlength="255" value="<?php echo set_value('fecha'); ?>"  />
    </p>
    
    <?php 
      $selected_value = $this->form_validation->set_radio('renovacion', 'Primera Vez') == "" && $this->form_validation->set_radio('renovacion', 'Renovación') == "";;
      
      $checked = true;
      $checked2 = false;
      if(!$selected_value)
      {
        $checked = $this->form_validation->set_radio('renovacion', 'Primera Vez');
        $checked2 = $this->form_validation->set_radio('renovacion', 'Renovación');
      }
      $data = array(
           'name'        => 'renovacion',
           'id'          => 'renovacion',
           'value'       => 'Primera Vez',
           'checked'     => $checked,
           'class'       => 'radiobuttom'
           );
      
      
      $data2 = array(
           'name'        => 'renovacion',
           'id'          => 'renovacion2',
           'value'       => 'Renovación',
           'checked'     => $checked2,
           'class'       => 'radiobuttom'
           );
    ?>
    <div class="float_left" style="margin-right:20px;">
      <label>Primera Vez</label>
      <?php echo form_radio($data);?>
    </div>
    <div class="float_left">
      <label>Renovación</label>
      <?php echo form_radio($data2);?>
    </div>
    <div class="clear"></div>
    <p>
      <label for="nombre">Nombre y apellidos completos*</label>
      <input class="<?php echo (form_error('nombre') != "")? "input_error" : "";?>" id="nombre" type="text" name="nombre"  value="<?php echo set_value('nombre'); ?>"  />
    </p>
    <p>
      <label for="postal">Dirección postal*</label>
      <input class="<?php echo (form_error('postal') != "")? "input_error" : "";?>" id="postal" type="text" name="postal" maxlength="255" value="<?php echo set_value('postal'); ?>"  />
    </p>    
    
    <p>
        <label for="email">Dirección electrónica*</label>
        <input class="<?php echo (form_error('email') != "")? "input_error" : "";?>" id="email" type="text" name="email"  value="<?php echo set_value('email'); ?>"  />
    </p>  
    <p>
        <label for="telefono">Teléfonos de contacto*</label>
        <input class="<?php echo (form_error('telefono') != "")? "input_error" : "";?>" id="telefono" type="text" name="telefono" maxlength="255" value="<?php echo set_value('telefono'); ?>"  />
    </p>
    <p>
      <label for="institucion">Institución en la que se desempeña*</label>
      <input class="<?php echo (form_error('institucion') != "")? "input_error" : "";?>" id="institucion" type="text" name="institucion" maxlength="255" value="<?php echo set_value('institucion'); ?>"  />
    </p>
    <p>
      <label for="cargo">Cargo / función en dicha institución*</label>
      <input class="<?php echo (form_error('cargo') != "")? "input_error" : "";?>" id="cargo" type="text" name="cargo" maxlength="255" value="<?php echo set_value('cargo'); ?>"  />
    </p>
    
    <label for="realizacion"><?php echo lang("personal_formulario_subtitulo_realizacion"); ?></label>
    <div class="float_left" style="margin-right:20px;">
      <label>Si</label>
      <input class="radiobuttom" id="realizacion" name="realizacion" type="radio" value="si" <?php echo $this->form_validation->set_radio('realizacion', 'si'); ?> />
    </div>
    <div class="float_left">
      <label>No</label>
      <input class="radiobuttom" id="realizacion" name="realizacion" type="radio" value="no" <?php echo $this->form_validation->set_radio('realizacion', 'no'); ?> />
    </div>
    <div class="clear"></div>
    <h5><?php echo lang("personal_formulario_subtitulo_cursos"); ?></h5>
    <p>
        <label for="curso_1">1</label>
        <input class="<?php echo (form_error('curso_1') != "")? "input_error" : "";?>" id="curso_1" type="text" name="curso_1" maxlength="255" value="<?php echo set_value('curso_1'); ?>"  />
    </p>
    <p>
        <label for="curso_2">2</label>
        <input class="<?php echo (form_error('curso_2') != "")? "input_error" : "";?>" id="curso_2" type="text" name="curso_2" maxlength="255" value="<?php echo set_value('curso_2'); ?>"  />
    </p>
    <p>
        <label for="curso_3">3</label>
        <input class="<?php echo (form_error('curso_3') != "")? "input_error" : "";?>" id="curso_3" type="text" name="curso_3" maxlength="255" value="<?php echo set_value('curso_3'); ?>"  />
    </p>
    <p>
      <label for="observaciones_curso">Observaciones</label>
      <?php 
            $t_class = ""; 
            if(form_error('observaciones_curso') != "")
            {
              $t_class = "textarea_error";  
            }
          ?>
      <?php echo form_textarea( array('class' => $t_class, 'id' => 'observaciones_curso', 'name' => 'observaciones_curso', 'rows' => '5', 'cols' => '80', 'value' => set_value('observaciones_curso') ) )?>
      
    </p>
    <span><?php echo lang("personal_formulario_subtitulo_adjuntar_cursos"); ?></span>
    
    <input type="button" class="button button_short" value="adjuntar" />
    <div class="clear"></div>
    
    <label><?php echo lang("personal_formulario_subtitulo_acreditacion"); ?></label>
    
    <div class="float_left" style="margin-right:20px;">
      <label>Si</label>
      <input id="acreditacion" name="acreditacion" type="radio" class="radiobuttom" value="si" <?php echo $this->form_validation->set_radio('acreditacion', 'si'); ?> />
    </div>
    <div class="float_left">
      <label>No</label>
      <input id="acreditacion" name="acreditacion" type="radio" class="radiobuttom" value="no" <?php echo $this->form_validation->set_radio('acreditacion', 'no'); ?> />
    </div>
    <div class="clear"></div>
    <h5><?php echo lang("personal_formulario_subtitulo_tiene_acreditacion"); ?></h5>
    <p>
        <label for="acreditacion_institucion">institución que la expidió</label>
        <input class="<?php echo (form_error('acreditacion_institucion') != "")? "input_error" : "";?>" id="acreditacion_institucion" type="text" name="acreditacion_institucion" maxlength="255" value="<?php echo set_value('acreditacion_institucion'); ?>"  />
    </p>    
    <p>
        <label for="acreditacion_categoria">categoría que le fue adjudicada</label>
        <input class="<?php echo (form_error('acreditacion_categoria') != "")? "input_error" : "";?>" id="acreditacion_categoria" type="text" name="acreditacion_categoria" maxlength="255" value="<?php echo set_value('acreditacion_categoria'); ?>"  />
    </p>
    <p>
        <label for="acreditacion_fecha">fecha de vencimiento de dicha acreditación</label>
        <input class="<?php echo (form_error('acreditacion_fecha') != "")? "input_error" : "";?>" id="acreditacion_fecha" type="date" name="acreditacion_fecha" maxlength="255" value="<?php echo set_value('acreditacion_fecha'); ?>"  />
    </p>
    <span>Adjuntar certificado de acreditación</span>
    <input type="button" class="button button_short" value="adjuntar" />
    <div class="clear"></div>
    
    <h5><?php echo lang("personal_formulario_subtitulo_categoria_aspirada"); ?><a href="<?php echo site_url("acreditaciones/bases");?>" target="_blank"><?php echo lang("personal_formulario_subtitulo_ver_bases"); ?></a></h5>
    <p>
      <label for="categoria_a">A</label>
      <input id="categoria_a" type="text" name="categoria_a" maxlength="255" value="<?php echo set_value('categoria_a'); ?>"  />
    </p>
    <p>
        <label for="categoria_b">B</label>
        <input id="categoria_b" type="text" name="categoria_b" maxlength="255" value="<?php echo set_value('categoria_b'); ?>"  />
    </p>
    <p>
        <label for="categoria_c1">C1(*)</label>
        <input id="categoria_c1" type="text" name="categoria_c1" maxlength="255" value="<?php echo set_value('categoria_c1'); ?>"  />
    </p>
    <p>
        <label for="categoria_c2">C2(**)</label>
        <input id="categoria_c2" type="text" name="categoria_c2" maxlength="255" value="<?php echo set_value('categoria_c2'); ?>"  />
    </p>
    <?php echo lang("personal_formulario_texto_categoria"); ?>
    
    <h5>Firma del Interesado*</h5>
    <span>Descargar hoja de firma, escanearla y adjuntarla luego de estar firmada</span>
    <input type="button" class="button button_short_descargar" value="descargar" />
    <input type="button" class="button button_short" value="adjuntar" />
    <div class="clear"></div>
    <h5>Firma de un integrante del CEUA de su Institución*</h5>
    <span>Descargar hoja de firma, escanearla y adjuntarla luego de estar firmada</span>
    <input type="button" class="button button_short_descargar" value="descargar" />
    <input type="button" class="button button_short" value="adjuntar" />
    <div class="clear"></div>
    <input type="submit" class="button button_large" value="enviar formulario" />
    <script>
      $(":date").dateinput();
    </script>  
  <?php echo form_close(); ?>
  <div class="clear"></div>
  <p>Por Consultas: <a href="mailto:secretaria@cnea.org.uy">secretaria@cnea.org.uy</a></p>
</div><!--CONTENT RIGHT-->