<div class="content_right img_instituciones">
  <h1><?php echo lang("personal_formulario_titulo"); ?></h1>
  
  <div class="clear"></div>
  <h5><?php echo lang("personal_formulario_subtitulo"); ?></h5>
  <?php if(strlen(validation_errors()) > 0): ?>
  <span class="msg_error"><?php echo lang("personal_formulario_subtitulo_errores"); ?></span>
  
  <?php endif;?>
  
  <?php
  $attributes = array('class' => 'infield_form', 'id' => 'acreditacion_form');
  echo form_open_multipart('acreditaciones/formulario', $attributes); ?>    
    <h4><?php echo lang("personal_formulario_subtitulo_identificacion"); ?></h4>
    <div class="clear"></div>
    <p>
      <label class="fecha_infield hasinfieldlabel" for="fecha"><?php echo lang("personal_formulario_fecha"); ?></label>
      <input class="<?php echo (form_error('fecha') != "")? "input_error" : "";?>" id="fecha" type="input" name="fecha" maxlength="255" value="<?php echo $obj->getFecha(); ?>"  />
    </p>
    
    <p>
      <label class="hasinfieldlabel" for="nombre"><?php echo lang("personal_formulario_nombre"); ?></label>
      <input class="<?php echo (form_error('nombre') != "")? "input_error" : "";?>" id="nombre" type="text" name="nombre"  value="<?php echo $obj->getNombre(); ?>"  />
    </p>
    <p>
      <label class="hasinfieldlabel" for="nombreapellido"><?php echo lang("personal_formulario_apellido"); ?></label>
      <input class="<?php echo (form_error('nombreapellido') != "")? "input_error" : "";?>" id="nombreapellido" type="text" name="nombreapellido"  value="<?php echo $obj->getNombreapellido(); ?>"  />
    </p>
    
    
    <p>
      <h6><?php echo lang("personal_formulario_nivel_formacion"); ?><!--  --></h6>
      <?php echo form_error('formacion'); ?>
      
      <label for="formacion_primaria">formaci&oacute;n primaria</label>
        <input type="radio" class="radiobuttom"  id="formacion_primaria" name="formacion" value="primaria" class="" <?php echo ($obj->getFormacion() == "primaria")? "checked=\"checked\"" : "";?>  onclick="hideTitulo();"/> 
      
        <label for="formacion_secundaria">formaci&oacute;n secundaria</label>
        <input type="radio" class="radiobuttom"  id="formacion_secundaria" name="formacion" value="secundaria" class="" <?php echo ($obj->getFormacion() =="secundaria")? "checked=\"checked\""  : ""; ?>  onclick="hideTitulo();"/> 
      
      
        <label for="formacionterciaria">formaci&oacute;n terciaria</label>
        <input type="radio" class="radiobuttom"  id="formacionterciaria" name="formacion" value="terciaria" class="" <?php echo ($obj->getFormacion() == "terciaria")? "checked=\"checked\"" : ""; ?>  onclick="showTitulo();" /> 
    </p>
    <div class="clear"></div>
    <p class="hidden"  id="titulo_container">
      <label class="hasinfieldlabel" for="titulo"><?php echo lang("personal_formulario_formacion_titulo"); ?></label>
      <input class="<?php echo (form_error('titulo') != "")? "input_error" : "";?>" id="titulo" type="text" name="titulo" maxlength="255" value="<?php echo $obj->getTitulo(); ?>"  />
    </p>
    <div class="clear"></div>
    <p>
      <label class="hasinfieldlabel" for="documento"><?php echo lang("personal_formulario_documento"); ?></label>
      <input class="<?php echo (form_error('documento') != "")? "input_error" : "";?>" id="documento" type="text" name="documento" maxlength="255" value="<?php echo $obj->getDocumento(); ?>"  />
    </p>
    <p>
      <label class="fecha_infield hasinfieldlabel" for="fechanacimiento"><?php echo lang("personal_formulario_fechanacimiento"); ?></label>
      <input class="<?php echo (form_error('fechanacimiento') != "")? "input_error" : "";?>" id="fechanacimiento" type="input" name="fechanacimiento" maxlength="255" value="<?php echo $obj->getFechanacimiento(); ?>"  />
    </p>
    <p>
      <label class="hasinfieldlabel" for="direccionpostal"><?php echo lang("personal_formulario_postal"); ?></label>
      <input class="<?php echo (form_error('direccionpostal') != "")? "input_error" : "";?>" id="direccionpostal" type="text" name="direccionpostal" maxlength="255" value="<?php echo $obj->getDireccionpostal(); ?>"  />
    </p>    
    
    <p>
        <label class="hasinfieldlabel" for="direccionelectronica"><?php echo lang("personal_formulario_email"); ?></label>
        <input class="<?php echo (form_error('direccionelectronica') != "")? "input_error" : "";?>" id="direccionelectronica" type="text" name="direccionelectronica" maxlength="255" value="<?php echo $obj->getDireccionelectronica(); ?>"  />
    </p>  
    <p>
        <label class="hasinfieldlabel" for="telefonocontacto"><?php echo lang("personal_formulario_telefono"); ?></label>
        <input class="<?php echo (form_error('telefonocontacto') != "")? "input_error" : "";?>" id="telefonocontacto" type="text" name="telefonocontacto" maxlength="255" value="<?php echo $obj->getTelefonocontacto(); ?>"  />
    </p>
    <p>
      <label class="hasinfieldlabel" for="instituciondesempeno"><?php echo lang("personal_formulario_instituciondesempeno"); ?></label>
      <?php echo form_error('instituciondesempeno'); ?>

      <?php // Change the values in this array to populate your dropdown as required ?>
      <?php
      
      $options = array();
      foreach($instituciones as $institucion){
        $options[$institucion->id] = $institucion->nombreinsititucion;
      }
      ?>

      <?php echo form_dropdown('instituciondesempeno', $options, $obj->getInstituciondesempeno(), 'class="instituciondesempeno_select"') ?>
<!--      <label for="institucion"><?php echo lang("personal_formulario_institucion"); ?></label>
      <input class="<?php echo (form_error('institucion') != "")? "input_error" : "";?>" id="institucion" type="text" name="institucion" maxlength="255" value="<?php echo set_value('institucion'); ?>"  />-->
    </p>
    <div class="clear"></div>
        <?php echo lang("personal_formulario_instituciondesempeno_texto"); ?>
      <div class="clear"></div>
    <div class="clear"></div>
    <p>
      <label  class="hasinfieldlabel" for="laboratoriounidad"><?php echo lang("personal_formulario_institucion_laboratorio_unidad"); ?></label>
      <input class="<?php echo (form_error('laboratoriounidad') != "")? "input_error" : "";?>" id="laboratoriounidad" type="text" name="laboratoriounidad" maxlength="255" value="<?php echo $obj->getLaboratoriounidad(); ?>"  />
    </p>
    <p>
      <label  class="hasinfieldlabel" for="cargofuncioninstitucion"><?php echo lang("personal_formulario_institucion_cargo"); ?></label>
      <input class="<?php echo (form_error('cargofuncioninstitucion') != "")? "input_error" : "";?>" id="cargofuncioninstitucion" type="text" name="cargofuncioninstitucion" maxlength="255" value="<?php echo $obj->getCargofuncioninstitucion(); ?>"  />
    </p>
    <p>
      <label  class="hasinfieldlabel" for="cargahorariasemanal"><?php echo lang("personal_formulario_institucion_carga_horaria_semanal"); ?></label>
      <input class="<?php echo (form_error('cargahorariasemanal') != "")? "input_error" : "";?>" id="cargahorariasemanal" type="text" name="cargahorariasemanal"  value="<?php echo $obj->getCargahorariasemanal(); ?>"  />
    </p>
    <p>
      <label  class="hasinfieldlabel" for="nombresupervisor"><?php echo lang("personal_formulario_institucion_nombre_supervisor"); ?></label>
      <input class="<?php echo (form_error('nombresupervisor') != "")? "input_error" : "";?>" id="nombresupervisor" type="text" name="nombresupervisor" maxlength="255" value="<?php echo $obj->getNombresupervisor(); ?>"  />
    </p>
    <div class="clear"></div>
    <p>
      <label class="hasinfieldlabel" for="especiestrabajadas"><?php echo lang("personal_formulario_especies_que_trabaja"); ?></label>
      <textarea class="<?php echo (form_error('especiestrabajadas') != "")? "input_error" : "";?>" id="especiestrabajadas" name="especiestrabajadas" rows="5" cols="80" ><?php echo $obj->getEspeciestrabajadas(); ?></textarea>
    </p>
    
    <p class="describatareas">
      <label  class="hasinfieldlabel" for="describatareas"><?php echo lang("personal_formulario_describa_tareas"); ?></label>
      <textarea class="<?php echo (form_error('describatareas') != "")? "input_error" : "";?>" id="describatareas" name="describatareas" rows="5" cols="80" ><?php echo $obj->getDescribatareas(); ?></textarea>
    </p>
    <div class="clear"></div>
    <p>
      <label for="realizocursos"><?php echo lang("personal_formulario_subtitulo_realizacion"); ?></label>
      <?php echo form_error('realizocursos'); ?>
      <div class="float_left" style="margin-right:20px;">
        <input onchange ='hideShowRealizacion(this)' name="realizocursos" type="radio" class="radiobuttom" value="1" 
		 <?php if($obj->getRealizocursos() == "1" || $obj->getRealizocursos() == 1):?>
		   checked='checked'
		 <?php endif; ?> 
		  />
        <label for="realizocursos" class="">Si</label>
      </div>
      <div class="float_left">
        <input onchange ='hideShowRealizacion(this)' name="realizocursos" type="radio" class="radiobuttom" value="0"
		  <?php if((int)$obj->getRealizocursos() == 0):?>
		   checked='checked'
		 <?php endif; ?> />
        <label for="realizocursos" class="">No</label>
      </div>
    </p>
    <?php
      $extra_r_class = "";
      if($obj->getRealizocursos() == "0" || $obj->getRealizocursos() == 0) $extra_r_class = "hidden";
    ?>
    <div class="clear"></div>
    <h5 class="realizacion_field <?php echo $extra_r_class; ?>"><?php echo lang("personal_formulario_subtitulo_cursos"); ?></h5>
    
    <p class="realizacion_field <?php echo $extra_r_class; ?>">
      <label class="hasinfieldlabel" for="curso1">1</label>
      <input class="<?php echo (form_error('curso1') != "")? "input_error" : "";?>" id="curso1" type="text" name="curso1"  value="<?php echo $obj->getCurso1(); ?>"  />
    </p>
    
    <p class="realizacion_field <?php echo $extra_r_class; ?>">
      <label class="hasinfieldlabel" for="curso2">2</label>
      <input class="<?php echo (form_error('curso2') != "")? "input_error" : "";?>" id="curso2" type="text" name="curso2"  value="<?php echo $obj->getCurso2(); ?>"  />
    </p>
    
    <p class="realizacion_field <?php echo $extra_r_class; ?>">
      <label class="hasinfieldlabel" for="curso3">3</label>
      <input class="<?php echo (form_error('curso3') != "")? "input_error" : "";?>" id="curso3" type="text" name="curso3"  value="<?php echo $obj->getCurso3(); ?>"  />
    </p>
    
    <p class="realizacion_field <?php echo $extra_r_class; ?>">
      <label class="hasinfieldlabel" for="cursoobservacion"><?php echo lang("personal_formulario_curso_observaciones"); ?></label>
      <textarea class="<?php echo ((form_error('observaciones_curso') != "")? "textarea_error" : "");?>" id="cursoobservacion" name="cursoobservacion" rows="5" cols="80" ><?php echo $obj->getCursoobservacion(); ?></textarea>
      <?php echo form_error('cursoobservacion'); ?>
    </p>

    <div class="clear"></div>
  <span class="realizacion_field <?php echo $extra_r_class; ?>"><?php echo lang("personal_formulario_subtitulo_adjuntar_cursos"); ?></span>
    <?php if(isset($errores['cursos_upload'])): ?>
		<?php echo $errores['cursos_upload'];?>
	<?php endif;?>
    <div class="container_cursos realizacion_field <?php echo $extra_r_class; ?>">
      <?php if(isset($errores["cursos_upload"])): ?>
      <span class="msg_error"><?php echo $errores["cursos_upload"]; ?></span>
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
		  $counter++;
          else:
            $finish = true;
            
          endif;
          
        endwhile;
        ?>    
<!--    
    Esto no esta funcionando
    <input type="file" name="cursos_upload" id="cursos_upload" class="file hidden" />
    <input type="button" class="button button_short realizacion_field <?php echo $extra_r_class; ?>" value="adjuntar" />
	-->
    <div class="clear"></div>
    <a class="realizacion_field" href="javascript:void(0)" onclick="return agregarFileInputCursos();" style="float:right"><?php echo lang("personal_formulario_agregar_mas"); ?></a>
    <div class="clear"></div>
    
    <p>
      <label for="acrpersonales"><?php echo lang("personal_formulario_subtitulo_acreditacion"); ?></label>
      <div class="float_left" style="margin-right:20px;">
        <input class="radiobuttom" onchange="hideShowAcreditacion(this)" id="acrpersonales" name="acrpersonales" type="radio" class="" value="1" <?php echo ($obj->getAcrpersonales() == "1")? "checked=\"checked\"" : ""; ?> />
        <label for="acrpersonales" class="">Si</label>
      </div>
      <div class="float_left">
        <input class="radiobuttom" onchange="hideShowAcreditacion(this)" id="acrpersonales" name="acrpersonales" type="radio" class="" value="0" <?php echo ($obj->getAcrpersonales() == "0")? "checked=\"checked\"" : ""; ?> />
        <label for="acrpersonales" class="">No</label>
      </div>
    </p>
    <?php $extra_r_class = ""; 
    if($obj->getAcrpersonales() == "0") $extra_r_class = "hidden";
    ?>
    <div class="clear"></div>
    <h5 class="acreditacion_field <?php echo $extra_r_class; ?>"><?php echo lang("personal_formulario_subtitulo_tiene_acreditacion"); ?></h5>
    <p class="acreditacion_field <?php echo $extra_r_class; ?>">
      <label class="hasinfieldlabel"  for="acrorganismo"><?php echo lang("personal_formulario_institucion_expidio"); ?></label>
      <input class="<?php echo (form_error('acrorganismo') != "")? "input_error" : "";?>" id="acrorganismo" type="text" name="acrorganismo"  value="<?php echo $obj->getAcrorganismo(); ?>"  />
    </p>
    <p class="acreditacion_field <?php echo $extra_r_class; ?>">
      <label class="hasinfieldlabel"  for="acrcategoria"><?php echo lang("personal_formulario_categoria_adjudicada"); ?></label>
      <input class="<?php echo (form_error('acrcategoria') != "")? "input_error" : "";?>" id="acrcategoria" type="text" name="acrcategoria"  value="<?php echo $obj->getAcrcategoria(); ?>"  />
    </p>
    <p class="acreditacion_field <?php echo $extra_r_class; ?>">
      <label class="hasinfieldlabel"  for="acrfecha"><?php echo lang("personal_formulario_fecha_vencimiento_acreditacion"); ?></label>
      <input class="<?php echo (form_error('acrfecha') != "")? "input_error" : "";?>" id="acrfecha" type="input" name="acrfecha"  value="<?php echo $obj->getAcrfecha(); ?>"  />
    </p>
    
    <span class="acreditacion_field <?php echo $extra_r_class; ?>"><?php echo lang("personal_formulario_adjuntar_acreditacion"); ?></span>
    
    <div class="container_acreditaciones acreditacion_field">
      <?php if(isset($errores["acreditacion_upload"])): ?>
      <span class="msg_error"><?php echo $errores["acreditacion_upload"]; ?></span>
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
            <span class="msg_error"><?php echo $errores['acreditacion_upload_'.$counter]; ?></span>
            <input type="file" name="acreditacion_upload_<?php echo $counter;?>" id="acreditacion_upload_<?php echo $counter;?>" class="file cursos_upload_personal" />
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
    <div class="clear"></div>
    <a class="acreditacion_field" href="javascript:void(0)" onclick="return agregarFileInputAcreditaciones();" style="float:right"><?php echo lang("personal_formulario_agregar_mas"); ?></a>
    <div class="clear"></div>
      
    <span class="acreditacion_field <?php echo $extra_r_class; ?>"><?php echo lang("personal_formulario_adjuntar_acreditacion"); ?></span>
    
    <div class="clear"></div>
    
    
    <h5><?php echo lang("personal_formulario_subtitulo_categoria_aspirada"); ?><a href="<?php echo site_url("acreditaciones/bases");?>" target="_blank"><?php echo lang("personal_formulario_subtitulo_ver_bases"); ?></a></h5>
    <p>
      <div style="width: 23%; float: left;">
        <label for="categoriaa">Categor&iacute;a A</label>
      <input name="categoriaA" type="checkbox" value="1" class="radiobuttom" <?php echo ($obj->getCategoriaA() == 1)? "checked=\"checked\"" : ""; ?>> 
    </div>
    <div style="width: 23%; float: left;">
      <label for="categoriab">Categor&iacute;a B</label>
      <input name="categoriaB" type="checkbox" value="1" class="radiobuttom" <?php echo ($obj->getCategoriaB() == 1)? "checked=\"checked\"" : ""; ?>> 
    </div>   
    <div style="width: 23%; float: left;">
      <label for="categoria_c1">Categor&iacute;a C1*</label>
      <input name="categoriaC1" type="checkbox" value="1" class="radiobuttom" <?php echo ($obj->getCategoriaC1() == 1)? "checked=\"checked\"" : ""; ?>> 
    </div>
    <div style="width: 24%; float: left;">
      <label for="categoria_c2">Categor&iacute;a C2**</label>
      <input name="categoriaC2" type="checkbox" value="1" class="radiobuttom" <?php echo ($obj->getCategoriaC2() == 1)? "checked=\"checked\"" : ""; ?>> 
    </div>
    </p>
    <div class="clear"></div>
	
    <?php echo lang("personal_formulario_texto_categoria"); ?>
    
	<div class="clear"></div>
    
	<div class="container_categoria">
      <?php if(isset($errores["categoria_upload"])): ?>
      <span class="msg_error"><?php echo $errores["categoria_upload"]; ?></span>
      <?php endif; ?>          
      <input type="file" name="categoria_upload" id="categoria_upload" class="file acreditacion_upload_personal" />
    </div>
    <div class="clear"></div>
    
        <?php
        $finish = false;
        $counter = 0;
        while(!$finish):
          if(isset($errores) && isset($errores['categoria_upload_'.$counter])):
		?>
        <div class="container_categoria">
            <span class="msg_error"><?php echo $errores['categoria_upload_'.$counter]; ?></span>
            <input type="file" name="categoria_upload_<?php echo $counter;?>" id="categoria_upload_<?php echo $counter;?>" class="file cursos_upload_personal" />
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
    <div class="clear"></div>
    <a class="" href="javascript:void(0)" onclick="return agregarFileInputCategoria();" style="float:right"><?php echo lang("personal_formulario_agregar_mas"); ?></a>

	
    <div class="clear"></div>
    
    <?php echo lang("personal_formulario_texto_firma_institucion"); ?>
    <?php if(isset($errores['firma_institucion_upload'])): ?>
		<span class="upload_error"><?php echo $errores['firma_institucion_upload'];?></span>
	<?php endif;?>
    <input type="file" name="firma_institucion_upload" id="firma_institucion_upload" class="file"/>
    <a href="<?php echo site_url("acreditaciones/descargarFormularioEmpresa");?>" class="descargar descargar_forms">descargar</a>
    <div class="clear"></div>
    
    
    <?php if(isset($errores["captcha"])): ?>
      <span class="msg_error"><?php echo $errores['captcha'];?></span>
    <?php endif; ?>
    <?php echo $captchaImage;  // this will show the captcha image?>
    <input type="text" name="word"  />
    <div class="clear"></div>
    <input type="submit" class="button button_large" value="enviar formulario" />
  <?php echo form_close(); ?>
  
  <div class="clear"></div>

  <div style="width:515px">
  </div>  
    
  <div class="clear"></div>
  <?php echo lang("personal_formulario_texto_consultas"); ?>
</div><!--CONTENT RIGHT-->
