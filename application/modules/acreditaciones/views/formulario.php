<div class="content_right img_instituciones">
  <h1><?php echo lang("personal_formulario_titulo"); ?></h1>
  
  <?php echo lang("personal_formulario_titulo_descarga");?>
  <div style="width:515px">
    <span><strong><?php echo lang("personal_formulario_texto_descarga"); ?></strong></span>

    <a href="<?php echo site_url("acreditaciones/descargarFormularioPersona");?>" class="descargar descargar_forms">descargar</a>
  </div>
  <div class="clear"></div>
<!--  <h5><?php //echo lang("personal_formulario_subtitulo"); ?></h5>
  <?php if(strlen(validation_errors()) > 0): ?>
  <span class="msg_error"><?php //echo lang("personal_formulario_subtitulo_errores"); ?></span>
  <?php endif;?>
  <?php
  $attributes = array('class' => 'infield_form', 'id' => '');
  //echo form_open_multipart('acreditaciones/formulario', $attributes); ?>    
    <h4><?php //echo lang("personal_formulario_subtitulo_identificacion"); ?></h4>
    <div class="clear"></div>
    <p>
      <label class="fecha_infield" for="fecha"><?php //echo lang("personal_formulario_fecha"); ?></label>
      <input class="<?php //echo (form_error('fecha') != "")? "input_error" : "";?>" id="fecha" type="date" name="fecha" maxlength="255" value="<?php //echo set_value('fecha'); ?>"  />
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
           'checked'     => $this->form_validation->set_radio('renovacion', 'Primera Vez', TRUE),
           'class'       => 'radiobuttom'
           );
      
      
      $data2 = array(
           'name'        => 'renovacion',
           'id'          => 'renovacion2',
           'value'       => 'Renovación',
           'checked'     => $this->form_validation->set_radio('renovacion', 'Renovación', FALSE),
           'class'       => 'radiobuttom'
           );
    ?>
    <div class="float_left" style="margin-right:20px;">
      <label><?php //echo lang("personal_formulario_primera_vez"); ?></label>
      <?php //echo form_radio($data);?>
    </div>
    <div class="float_left">
      <label><?php //echo lang("personal_formulario_renovacion"); ?></label>
      <?php //echo form_radio($data2);?>
    </div>
    <div class="clear"></div>
    <p>
      <label for="nombre"><?php //echo lang("personal_formulario_nombre"); ?></label>
      <input class="<?php //echo (form_error('nombre') != "")? "input_error" : "";?>" id="nombre" type="text" name="nombre"  value="<?php //echo set_value('nombre'); ?>"  />
    </p>
    <p>
      <label for="postal"><?php //echo lang("personal_formulario_postal"); ?></label>
      <input class="<?php //echo (form_error('postal') != "")? "input_error" : "";?>" id="postal" type="text" name="postal" maxlength="255" value="<?php //echo set_value('postal'); ?>"  />
    </p>    
    
    <p>
        <label for="email"><?php //echo lang("personal_formulario_email"); ?></label>
        <input class="<?php //echo (form_error('email') != "")? "input_error" : "";?>" id="email" type="text" name="email"  value="<?php //echo set_value('email'); ?>"  />
    </p>  
    <p>
        <label for="telefono"><?php //echo lang("personal_formulario_telefono"); ?></label>
        <input class="<?php //echo (form_error('telefono') != "")? "input_error" : "";?>" id="telefono" type="text" name="telefono" maxlength="255" value="<?php //echo set_value('telefono'); ?>"  />
    </p>
    <p>
      <label for="institucion"><?php //echo lang("personal_formulario_institucion"); ?></label>
      <input class="<?php //echo (form_error('institucion') != "")? "input_error" : "";?>" id="institucion" type="text" name="institucion" maxlength="255" value="<?php //echo set_value('institucion'); ?>"  />
    </p>
    <p>
      <label for="cargo"><?php //echo lang("personal_formulario_institucion_cargo"); ?></label>
      <input class="<?php //echo (form_error('cargo') != "")? "input_error" : "";?>" id="cargo" type="text" name="cargo" maxlength="255" value="<?php //echo set_value('cargo'); ?>"  />
    </p>
    
	<p class="observaciones_institucion_field">
	  <label for="observaciones_institucion_field"><?php //echo lang("personal_formulario_institucion_observaciones"); ?></label>
      <?php //echo form_textarea( array('class' => '', 'id' => 'observaciones_institucion_field', 'name' => 'observaciones_institucion_field', 'rows' => '5', 'cols' => '80', 'value' => set_value('observaciones_institucion_field') ) )?>
      
    </p>
	
    <label for="realizacion"><?php //echo lang("personal_formulario_subtitulo_realizacion"); ?></label>
    <?php 
      $rdata = array(
           'name'        => 'realizacion',
           'id'          => 'realizacion',
           'value'       => 'si',
           'checked'     => $this->form_validation->set_radio('realizacion', 'si', TRUE),
           'class'       => 'radiobuttom',
		   'onchange'    => 'hideShowRealizacion(this)'
           );
      
      
      $rdata2 = array(
           'name'        => 'realizacion',
           'id'          => 'realizacion2',
           'value'       => 'no',
           'checked'     => $this->form_validation->set_radio('realizacion', 'no',FALSE),
           'class'       => 'radiobuttom',
		   'onchange'    => 'hideShowRealizacion(this)'
           );
	  $extra_r_class = "";
	  if($this->form_validation->set_radio('realizacion', 'no',FALSE)) $extra_r_class = "hidden";
    ?>
    <div class="float_left" style="margin-right:20px;">
      <label>Si</label>
      <?php //echo form_radio($rdata);?>
    </div>
    <div class="float_left">
      <label>No</label>
      <?php //echo form_radio($rdata2);?>
    </div>
    <div class="clear"></div>
    <h5 class="realizacion_field <?php //echo $extra_r_class; ?>"><?php //echo lang("personal_formulario_subtitulo_cursos"); ?></h5>
    <p class="realizacion_field <?php //echo $extra_r_class; ?>">
        <label for="curso_1">1</label>
        <input class="<?php //echo (form_error('curso_1') != "")? "input_error" : "";?>" id="curso_1" type="text" name="curso_1" maxlength="255" value="<?php //echo set_value('curso_1'); ?>"  />
    </p>
    <p class="realizacion_field <?php //echo $extra_r_class; ?>">
        <label for="curso_2">2</label>
        <input class="<?php //echo (form_error('curso_2') != "")? "input_error" : "";?>" id="curso_2" type="text" name="curso_2" maxlength="255" value="<?php //echo set_value('curso_2'); ?>"  />
    </p>
    <p class="realizacion_field <?php //echo $extra_r_class; ?>">
        <label for="curso_3">3</label>
        <input class="<?php //echo (form_error('curso_3') != "")? "input_error" : "";?>" id="curso_3" type="text" name="curso_3" maxlength="255" value="<?php //echo set_value('curso_3'); ?>"  />
    </p>
    <p class="realizacion_field <?php //echo $extra_r_class; ?>">
      <label for="observaciones_curso"><?php //echo lang("personal_formulario_observaciones"); ?></label>
      <?php 
            $t_class = ""; 
            if(form_error('observaciones_curso') != "")
            {
              $t_class = "textarea_error";  
            }
          ?>
      <?php //echo form_textarea( array('class' => $t_class, 'id' => 'observaciones_curso', 'name' => 'observaciones_curso', 'rows' => '5', 'cols' => '80', 'value' => set_value('observaciones_curso') ) )?>
      
    </p>
    <span class="realizacion_field <?php //echo $extra_r_class; ?>"><?php //echo lang("personal_formulario_subtitulo_adjuntar_cursos"); ?></span>
    <?php //if(isset($errores['cursos_upload'])): ?>
		<?php //echo $errores['cursos_upload'];?>
	<?php //endif;?>
    <div class="container_cursos realizacion_field">
      <?php if(isset($errores["cursos_upload"])): ?>
      <span class="msg_error"><?php //echo $errores["cursos_upload"]; ?></span>
      <?php endif; ?>          
      <input type="file" name="cursos_upload" id="cursos_upload" class="file cursos_upload_personal" />
    </div>
    <div class="clear"></div>
    
        <?php
        $finish = false;
        $counter = 0;
        while(!$finish):
          if(isset($errores) && isset($errores['cursos_upload_'.$counter])):
?>
        <div class="container_cursos realizacion_field">
            <span class="msg_error"><?php echo $errores['cursos_upload_'.$counter]; ?></span>
            <input type="file" name="cursos_upload_<?php echo $counter;?>" id="cursos_upload_<?php echo $counter;?>" class="file cursos_upload_personal" />
            <div class="clear"></div>
            <a href="javascript:void(0)" onclick="return eliminarFileInput(this);" style="float:right">Sacar</a><div class="clear"></div>
        </div>
<?php        
              
          else:
            $finish = true;
            
          endif;
          $counter++;
        endwhile;
        ?>    
    <input type="file" name="cursos_upload" id="cursos_upload" class="file" />
    <input type="button" class="button button_short realizacion_field <?php //echo $extra_r_class; ?>" value="adjuntar" />
    <div class="clear"></div>
    <a class="realizacion_field" href="javascript:void(0)" onclick="return agregarFileInputCursos();" style="float:right"><?php //echo lang("personal_formulario_agregar_mas"); ?></a>
    <div class="clear"></div>
    <label><?php //echo lang("personal_formulario_subtitulo_acreditacion"); ?></label>
	  <?php 
      $adata = array(
           'name'        => 'acreditacion',
           'id'          => 'acreditacion',
           'value'       => 'si',
           'checked'     => $this->form_validation->set_radio('acreditacion', 'si', TRUE),
           'class'       => 'radiobuttom',
		   'onchange'    => 'hideShowAcreditacion(this)'
           );
      
      
      $adata2 = array(
           'name'        => 'acreditacion',
           'id'          => 'acreditacion2',
           'value'       => 'no',
           'checked'     => $this->form_validation->set_radio('acreditacion', 'no',FALSE),
           'class'       => 'radiobuttom',
		   'onchange'    => 'hideShowAcreditacion(this)'
           );
	  $extra_r_class = "";
	  if($this->form_validation->set_radio('acreditacion', 'no',FALSE)) $extra_r_class = "hidden";
    ?>
	
	
    <div class="float_left" style="margin-right:20px;">
      <label>Si</label>
      <?php //echo form_radio($adata);?>
    </div>
    <div class="float_left">
      <label>No</label>
      <?php //echo form_radio($adata2);?>
    </div>
    <div class="clear"></div>
    <h5 class="acreditacion_field <?php //echo $extra_r_class; ?>"><?php //echo lang("personal_formulario_subtitulo_tiene_acreditacion"); ?></h5>
    <p class="acreditacion_field <?php //echo $extra_r_class; ?>">
        <label for="acreditacion_institucion"><?php //echo lang("personal_formulario_institucion_expidio"); ?></label>
        <input class="<?php //echo (form_error('acreditacion_institucion') != "")? "input_error" : "";?>" id="acreditacion_institucion" type="text" name="acreditacion_institucion" maxlength="255" value="<?php //echo set_value('acreditacion_institucion'); ?>"  />
    </p>    
    <p class="acreditacion_field <?php //echo $extra_r_class; ?>">
        <label for="acreditacion_categoria"><?php //echo lang("personal_formulario_categoria_adjudicada"); ?></label>
        <input class="<?php //echo (form_error('acreditacion_categoria') != "")? "input_error" : "";?>" id="acreditacion_categoria" type="text" name="acreditacion_categoria" maxlength="255" value="<?php //echo set_value('acreditacion_categoria'); ?>"  />
    </p>
    <p class="acreditacion_field <?php //echo $extra_r_class; ?>">
        <label for="acreditacion_fecha"><?php //echo lang("personal_formulario_fecha_vencimiento_acreditacion"); ?></label>
        <input class="<?php //echo (form_error('acreditacion_fecha') != "")? "input_error" : "";?>" id="acreditacion_fecha" type="date" name="acreditacion_fecha" maxlength="255" value="<?php //echo set_value('acreditacion_fecha'); ?>"  />
    </p>
    <span class="acreditacion_field <?php //echo $extra_r_class; ?>"><?php //echo lang("personal_formulario_adjuntar_acreditacion"); ?></span>
  
    <div class="container_acreditaciones acreditacion_field">
      <?php if(isset($errores["acreditacion_upload"])): ?>
      <span class="msg_error"><?php //echo $errores["acreditacion_upload"]; ?></span>
      <?php endif; ?>          
      <input type="file" name="acreditacion_upload" id="acreditacion_upload" class="file acreditacion_upload_personal" />
    </div>
    <div class="clear"></div>
    
        <?php
        $finish = false;
        $counter = 0;
        while(!$finish):
          if(isset($errores) && isset($errores['acreditacion_upload_'.$counter])):
?>
        <div class="container_acreditaciones acreditacion_field">
            <span class="msg_error"><?php //echo $errores['acreditacion_upload_'.$counter]; ?></span>
            <input type="file" name="acreditacion_upload_<?php //echo $counter;?>" id="acreditacion_upload_<?php //echo $counter;?>" class="file cursos_upload_personal" />
            <div class="clear"></div>
            <a href="javascript:void(0)" onclick="return eliminarFileInput(this);" style="float:right">Sacar</a><div class="clear"></div>
        </div>
<?php        
              
          else:
            $finish = true;
            
          endif;
          $counter++;
        endwhile;
        ?>    
    <input type="file" name="cursos_upload" id="cursos_upload" class="file" />
    <input type="button" class="button button_short realizacion_field <?php //echo $extra_r_class; ?>" value="adjuntar" />
    <div class="clear"></div>
    <a class="acreditacion_field" href="javascript:void(0)" onclick="return agregarFileInputAcreditaciones();" style="float:right"><?php //echo lang("personal_formulario_agregar_mas"); ?></a>
    <div class="clear"></div>
      
  
  
    <input type="file" name="acreditacion_upload" id="acreditacion_upload" class="file" /> 
    <input type="button" class="button button_short acreditacion_field <?php //echo $extra_r_class; ?>" value="adjuntar" />
    <div class="clear"></div>
    
    
    
    
    <h5><?php //echo lang("personal_formulario_subtitulo_categoria_aspirada"); ?><a href="<?php //echo site_url("acreditaciones/bases");?>" target="_blank"><?php //echo lang("personal_formulario_subtitulo_ver_bases"); ?></a></h5>
    <p>
      <label for="categoria_a">A</label>
      <input id="categoria_a" type="text" name="categoria_a" maxlength="255" value="<?php //echo set_value('categoria_a'); ?>"  />
    </p>
    <p>
        <label for="categoria_b">B</label>
        <input id="categoria_b" type="text" name="categoria_b" maxlength="255" value="<?php //echo set_value('categoria_b'); ?>"  />
    </p>
    <p>
        <label for="categoria_c1">C1(*)</label>
        <input id="categoria_c1" type="text" name="categoria_c1" maxlength="255" value="<?php //echo set_value('categoria_c1'); ?>"  />
    </p>
    <p>
        <label for="categoria_c2">C2(**)</label>
        <input id="categoria_c2" type="text" name="categoria_c2" maxlength="255" value="<?php //echo set_value('categoria_c2'); ?>"  />
    </p>
    <?php //echo lang("personal_formulario_texto_categoria"); ?>
    
    <?php //echo lang("personal_formulario_texto_firma_persona"); ?>
    
    <input type="button" class="button button_short_descargar" value="descargar" />
    <?php //if(isset($errores['firma_persona_upload'])): ?>
		<?php //echo $errores['firma_persona_upload'];?>
	<?php //endif;?>
    
    <input type="file" name="firma_persona_upload" id="firma_persona_upload" class="file" />
    <button class="adjuntar">Adjuntar</button>
    <a href="<?php //echo site_url("acreditaciones/descargarFormularioPersona");?>" class="descargar descargar_forms">descargar</a>
    
    <div class="clear"></div>
    
    <?php //echo lang("personal_formulario_texto_firma_institucion"); ?>
    <input type="button" class="button button_short_descargar" value="descargar" />
    <?php if(isset($errores['firma_institucion_upload'])): ?>
		<span class="upload_error"><?php //echo $errores['firma_institucion_upload'];?></span>
	<?php endif;?>
    <input type="file" name="firma_institucion_upload" id="firma_institucion_upload" class="file"/>
    <input type="button" class="button button_short" value="adjuntar" />
    <button class="adjuntar">Adjuntar</button>
    <a href="<?php //echo site_url("acreditaciones/descargarFormularioEmpresa");?>" class="descargar descargar_forms">descargar</a>
    <div class="clear"></div>
    <input type="submit" class="button button_large" value="enviar formulario" />
  <?php //echo form_close(); ?>
  
  <div class="clear"></div>

  <div style="width:515px">
  </div>  
    -->
  <div class="clear"></div>
  <?php echo lang("personal_formulario_texto_consultas"); ?>
</div><!--CONTENT RIGHT-->
