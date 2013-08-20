<div class="content_right img_instituciones">
  <h1><?php echo lang("personal_formulario_titulo"); ?></h1>
  
  <?php echo lang("personal_formulario_titulo_descarga");?>
  <div style="width:515px">
    <span><strong><?php echo lang("personal_formulario_texto_descarga"); ?></strong></span>

    <a href="<?php echo site_url("acreditaciones/descargarFormularioPersona");?>" class="descargar descargar_forms">descargar</a>
  </div>
  <div class="clear"></div>
  <h5><?php echo lang("personal_formulario_subtitulo"); ?></h5>
  <?php if(strlen(validation_errors()) > 0): ?>
  <span class="msg_error"><?php echo lang("personal_formulario_subtitulo_errores"); ?></span>
  
  <?php endif;?>
  <?php
  $attributes = array('class' => 'infield_form', 'id' => '');
  echo form_open_multipart('acreditaciones/formulario', $attributes); ?>    
    <h4><?php echo lang("personal_formulario_subtitulo_identificacion"); ?></h4>
    <div class="clear"></div>
    <p>
      <label class="fecha_infield" for="fecha"><?php echo lang("personal_formulario_fecha"); ?></label>
      <input class="<?php echo (form_error('fecha') != "")? "input_error" : "";?>" id="fecha" type="date" name="fecha" maxlength="255" value="<?php echo $obj->getFecha(); ?>"  />
    </p>
    
    <p>
      <label for="nombreapellido"><?php echo lang("personal_formulario_nombre"); ?></label>
      <input class="<?php echo (form_error('nombreapellido') != "")? "input_error" : "";?>" id="nombreapellido" type="text" name="nombreapellido"  value="<?php echo $obj->getNombreapellido(); ?>"  />
    </p>
    
    
    <p>
      <h6><?php echo lang("personal_formulario_nivel_formacion"); ?><!-- Nivel de formación --></h6>
      <?php echo form_error('formacion'); ?>
      
        <label for="formacion_primaria">formacion primaria</label>
        <input type="radio" class="radiobuttom"  id="formacion_primaria" name="formacion" value="primaria" class="" <?php echo ($obj->getFormacion() == "primaria")? "checked=\"checked\"" : "";?> /> 
      
        <label for="formacion_secundaria">formacion secundaria</label>
        <input type="radio" class="radiobuttom"  id="formacion_secundaria" name="formacion" value="secundaria" class="" <?php echo ($obj->getFormacion() =="secundaria")? "checked=\"checked\""  : ""; ?> /> 
      
      
        <label for="formacionterciaria">formacion terciaria</label>
        <input type="radio" class="radiobuttom"  id="formacionterciaria" name="formacion" value="terciaria" class="" <?php echo ($obj->getFormacion() == "terciaria")? "checked=\"checked\"" : ""; ?> /> 
      
    </p>
    <div class="clear"></div>
    <p>
      <label for="documento"><?php echo lang("personal_formulario_documento"); ?>Documento*</label>
      <input class="<?php echo (form_error('documento') != "")? "input_error" : "";?>" id="documento" type="text" name="documento" maxlength="255" value="<?php echo $obj->getDocumento(); ?>"  />
    </p>
    <p>
      <label class="fecha_infield" for="fechanacimiento"><?php echo lang("personal_formulario_fechanacimiento"); ?>fecha nacimiento *</label>
      <input class="<?php echo (form_error('fechanacimiento') != "")? "input_error" : "";?>" id="fechanacimiento" type="date" name="fechanacimiento" maxlength="255" value="<?php echo $obj->getFechanacimiento(); ?>"  />
    </p>
    <p>
      <label for="direccionpostal"><?php echo lang("personal_formulario_postal"); ?></label>
      <input class="<?php echo (form_error('direccionpostal') != "")? "input_error" : "";?>" id="postal" type="text" name="direccionpostal" maxlength="255" value="<?php echo $obj->getDireccionpostal(); ?>"  />
    </p>    
    
    <p>
        <label for="direccionelectronica"><?php echo lang("personal_formulario_email"); ?></label>
        <input class="<?php echo (form_error('direccionelectronica') != "")? "input_error" : "";?>" id="direccionelectronica" type="text" name="direccionelectronica" maxlength="255" value="<?php echo $obj->getDireccionelectronica(); ?>"  />
    </p>  
    <p>
        <label for="telefonocontacto"><?php echo lang("personal_formulario_telefono"); ?></label>
        <input class="<?php echo (form_error('telefonocontacto') != "")? "input_error" : "";?>" id="telefonocontacto" type="text" name="telefonocontacto" maxlength="255" value="<?php echo $obj->getTelefonocontacto(); ?>"  />
    </p>
    <p>
      <label for="instituciondesempeno">Institucion desempeño <span class="required">*</span></label>
      <?php echo form_error('instituciondesempeno'); ?>

      <?php // Change the values in this array to populate your dropdown as required ?>
      <?php
      
      $options = array();
      foreach($instituciones as $institucion){
        $options[$institucion->id] = $institucion->nombreinsititucion;
      }
      ?>

      <?php echo form_dropdown('instituciondesempeno', $options, $obj->getInstituciondesempeno()) ?>
<!--      <label for="institucion"><?php echo lang("personal_formulario_institucion"); ?></label>
      <input class="<?php echo (form_error('institucion') != "")? "input_error" : "";?>" id="institucion" type="text" name="institucion" maxlength="255" value="<?php echo set_value('institucion'); ?>"  />-->
    </p>
    <div class="clear"></div>
    <p>
      <label for="laboratoriounidad"><?php echo lang("personal_formulario_institucion_laboratorio_unidad"); ?>Laboratorio/Unidad*</label>
      <input class="<?php echo (form_error('laboratoriounidad') != "")? "input_error" : "";?>" id="laboratoriounidad" type="text" name="laboratoriounidad" maxlength="255" value="<?php echo $obj->getLaboratoriounidad(); ?>"  />
    </p>
    <p>
      <label for="cargofuncioninstitucion"><?php echo lang("personal_formulario_institucion_cargo"); ?></label>
      <input class="<?php echo (form_error('cargofuncioninstitucion') != "")? "input_error" : "";?>" id="cargofuncioninstitucion" type="text" name="cargofuncioninstitucion" maxlength="255" value="<?php echo $obj->getCargofuncioninstitucion(); ?>"  />
    </p>
    <p>
      <label for="cargahorariasemanal"><?php echo lang("personal_formulario_institucion_carga_horaria_semanal"); ?>Carga Horaria Semanal*</label>
      <input class="<?php echo (form_error('cargahorariasemanal') != "")? "input_error" : "";?>" id="cargahorariasemanal" type="text" name="cargahorariasemanal"  value="<?php echo $obj->getCargahorariasemanal(); ?>"  />
    </p>
    <p>
      <label for="nombresupervisor"><?php echo lang("personal_formulario_institucion_nombre_supervisor"); ?>nombre supervisor*</label>
      <input class="<?php echo (form_error('nombresupervisor') != "")? "input_error" : "";?>" id="nombresupervisor" type="text" name="nombresupervisor" maxlength="255" value="<?php echo $obj->getNombresupervisor(); ?>"  />
    </p>
    <div class="clear"></div>
    <p class="especiestrabajadas">
      <label for="especiestrabajadas"><?php echo lang("personal_formulario_especies_que_trabaja"); ?>Especies trabajadas *</label>
      <?php echo form_textarea(array('class' => '', 'name' => 'especiestrabajadas', 'rows' => '5', 'cols' => '80', 'value' => $obj->getEspeciestrabajadas())) ?>
    </p>
    
    <p class="describatareas">
      <label for="describatareas"><?php echo lang("personal_formulario_describa_tareas"); ?>Describa las tareas</label>
      <?php echo form_textarea(array('class' => '','name' => 'describatareas', 'rows' => '5', 'cols' => '80', 'value' => $obj->getDescribatareas())) ?>
    </p>
    <p>
      <label for="pctinvestigacion"><?php echo lang("personal_formulario_pct_investigacion"); ?>% Investigacion</label>
      <input class="<?php echo (form_error('pctinvestigacion') != "")? "input_error" : "";?>" id="pctinvestigacion" type="text" name="pctinvestigacion"  value="<?php echo $obj->getPctinvestigacion();  ?>"  />
    </p>

    <p>
      <label for="pctmedicinaclinica"><?php echo lang("personal_formulario_pct_medicina_clinica"); ?>% Medicina Clinica</label>
      <input class="<?php echo (form_error('pctmedicinaclinica') != "")? "input_error" : "";?>" id="pctmedicinaclinica" type="text" name="pctmedicinaclinica"  value="<?php echo $obj->getPctmedicinaclinica(); ?>"  />
    </p>
    
    <p>
      <label for="pctcirugia"><?php echo lang("personal_formulario_pct_cirugia"); ?>% Cirugia</label>
      <input class="<?php echo (form_error('pctcirugia') != "")? "input_error" : "";?>" id="pctcirugia" type="text" name="pctcirugia"  value="<?php echo $obj->getPctcirugia(); ?>"  />
    </p>
    
    <p>
      <label for="pctmantenimientocolonias"><?php echo lang("personal_formulario_pct_mantenimiento_colonias"); ?>% Mantenimiento Colonias</label>
      <input class="<?php echo (form_error('pctmantenimientocolonias') != "")? "input_error" : "";?>" id="pctmantenimientocolonias" type="text" name="pctmantenimientocolonias"  value="<?php echo $obj->getPctmantenimientocolonias(); ?>"  />
    </p>
    <p>
      <label for="pctmanipulacion"><?php echo lang("personal_formulario_pct_manipulacion"); ?>% Manipulación</label>
      <input class="<?php echo (form_error('pctmanipulacion') != "")? "input_error" : "";?>" id="pctmanipulacion" type="text" name="pctmanipulacion"  value="<?php echo $obj->getPctmanipulacion(); ?>"  />
    </p>
    <p>
      <label for="pctdirprojectos"><?php echo lang("personal_formulario_pct_direccion_proyectos"); ?>% Dirección de Proyectos</label>
      <input class="<?php echo (form_error('pctdirprojectos') != "")? "input_error" : "";?>" id="pctdirprojectos" type="text" name="pctdirprojectos"  value="<?php echo $obj->getPctdirprojectos(); ?>"  />
    </p>
    <p>
      <label for="pctnecropsia"><?php echo lang("personal_formulario_pct_necropsia"); ?>% Necropsia</label>
      <input class="<?php echo (form_error('pctnecropsia') != "")? "input_error" : "";?>" id="pctnecropsia" type="text" name="pctnecropsia"  value="<?php echo $obj->getPctnecropsia(); ?>"  />
    </p>
    <p>
      <label for="pctdiaglaboratorio"><?php echo lang("personal_formulario_pct_diagnostico_laboratorio"); ?> % Diagnostico Laboratorio</label>
      <br /><input class="<?php echo (form_error('pctdiaglaboratorio') != "")? "input_error" : "";?>" id="pctdiaglaboratorio" type="text" name="pctdiaglaboratorio"  value="<?php echo $obj->getPctdiaglaboratorio(); ?>"  />
    </p>
    
    <p>
      <label for="pctceua"><?php echo lang("personal_formulario_pct_ceua"); ?> % CEUA</label>
      <input class="<?php echo (form_error('pctdiaglaboratorio') != "")? "input_error" : "";?>" id="pctceua" type="text" name="pctceua"  value="<?php echo $obj->getPctceua(); ?>"  />
    </p>
    
    <p>
      <label for="pcthistopatologia"><?php echo lang("personal_formulario_pct_histopatologia"); ?>% Histopatologia</label>
      <input class="<?php echo (form_error('pcthistopatologia') != "")? "input_error" : "";?>" id="pcthistopatologia" type="text" name="pcthistopatologia"  value="<?php echo $obj->getPcthistopatologia(); ?>"  />
    </p>
    
    <p>
      <label for="pctentedu"><?php echo lang("personal_formulario_pct_entrenamiento_educacion"); ?>% Entrenamiento / Educacion</label>
      <input class="<?php echo (form_error('pctentedu') != "")? "input_error" : "";?>" id="pctentedu" type="text" name="pctentedu"  value="<?php echo $obj->getPctentedu(); ?>"  />
    </p>
    
    <p>
      <label for="pctapoyoinvestigadores"><?php echo lang("personal_formulario_pct_apoyo_investigadores"); ?>% Apoyo Investigadores</label>
      <input class="<?php echo (form_error('pctapoyoinvestigadores') != "")? "input_error" : "";?>" id="pctapoyoinvestigadores" type="text" name="pctapoyoinvestigadores"  value="<?php echo $obj->getPctapoyoinvestigadores(); ?>"  />
    </p>
    
    <p>
      <label for="pctsupervision"><?php echo lang("personal_formulario_pct_supervision"); ?>% Supervision</label>
      <input class="<?php echo (form_error('pctsupervision') != "")? "input_error" : "";?>" id="pctsupervision" type="text" name="pctsupervision"  value="<?php echo $obj->getPctsupervision(); ?>"  />
    </p>
    
    <p>
      <label for="pctprodanimal"><?php echo lang("personal_formulario_pct_produccion_animal"); ?>% Produccion animal</label>
      <input class="<?php echo (form_error('pctprodanimal') != "")? "input_error" : "";?>" id="pctprodanimal" type="text" name="pctprodanimal"  value="<?php echo $obj->getPctprodanimal(); ?>"  />
    </p>
    
    <p>
      <label for="pctlegal"><?php echo lang("personal_formulario_pct_responsabilidad_legal"); ?>% Responsabilidad Legal</label>
      <input class="<?php echo (form_error('pctlegal') != "")? "input_error" : "";?>" id="pctlegal" type="text" name="pctlegal"  value="<?php echo $obj->getPctlegal(); ?>"  />
    </p>
    
    <p>
      <label for="pctotrasfunciones"><?php echo lang("personal_formulario_pct_otras_funciones"); ?>% Otras Funciones</label>
      <input class="<?php echo (form_error('pctotrasfunciones') != "")? "input_error" : "";?>" id="pctotrasfunciones" type="text" name="pctotrasfunciones"  value="<?php echo $obj->getPctotrasfunciones(); ?>"  />
    </p>
    
    <p>
      <label for="pctfuncnorel"><?php echo lang("personal_formulario_pct_funciones_no_relacionadas"); ?>% Funciones No Relacionadas</label>
      <?php echo form_error('pctfuncnorel'); ?>
      <input class="<?php echo (form_error('pctfuncnorel') != "")? "input_error" : "";?>" id="pctfuncnorel" type="text" name="pctfuncnorel"  value="<?php echo $obj->getPctfuncnorel(); ?>"  />
    </p>
    
    <p>
      <label for="pctobservaciones"><?php echo lang("personal_formulario_pct_observaciones"); ?>Observaciones de Porcentajes</label>
      <?php echo form_error('pctobservaciones'); ?>
      <?php echo form_textarea(array('class' => '', 'name' => 'pctobservaciones', 'rows' => '5', 'cols' => '80', 'value' => $obj->getPctobservaciones())) ?>
    </p>
    
    <div class="clear"></div>
    <p>
      <label for="realizocursos"><?php echo lang("personal_formulario_subtitulo_realizacion"); ?></label>
      <?php echo form_error('realizocursos'); ?>
      <div class="float_left" style="margin-right:20px;">
        <input onchange ='hideShowRealizacion(this)' name="realizocursos" type="radio" class="radiobuttom" value="1" 
		 <?php if($obj->getRealizocursos() === "1"):?>
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
      <label for="curso1">1</label>
      <input class="<?php echo (form_error('curso1') != "")? "input_error" : "";?>" id="curso1" type="text" name="curso1"  value="<?php echo $obj->getCurso1(); ?>"  />
    </p>
    
    <p class="realizacion_field <?php echo $extra_r_class; ?>">
      <label for="curso2">2</label>
      <input class="<?php echo (form_error('curso2') != "")? "input_error" : "";?>" id="curso2" type="text" name="curso2"  value="<?php echo $obj->getCurso2(); ?>"  />
    </p>
    
    <p class="realizacion_field <?php echo $extra_r_class; ?>">
      <label for="curso3">3</label>
      <input class="<?php echo (form_error('curso3') != "")? "input_error" : "";?>" id="curso3" type="text" name="curso3"  value="<?php echo $obj->getCurso3(); ?>"  />
    </p>
    
    <p class="realizacion_field <?php echo $extra_r_class; ?>">
      <label for="cursoobservacion"><?php echo lang("personal_formulario_curso_observaciones"); ?>Observaciones de cursos</label>
      <?php echo form_error('cursoobservacion'); ?>
      <br />
      <?php echo form_textarea(array('class' => ((form_error('observaciones_curso') != "")? "textarea_error" : ""),'name' => 'cursoobservacion', 'rows' => '5', 'cols' => '80', 'value' => $obj->getCursoobservacion())) ?>
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
      <label for="acrorganismo"><?php echo lang("personal_formulario_institucion_expidio"); ?></label>
      <input class="<?php echo (form_error('acrorganismo') != "")? "input_error" : "";?>" id="acrorganismo" type="text" name="acrorganismo"  value="<?php echo $obj->getAcrorganismo(); ?>"  />
    </p>
    <p class="acreditacion_field <?php echo $extra_r_class; ?>">
      <label for="acrcategoria"><?php echo lang("personal_formulario_categoria_adjudicada"); ?></label>
      <input class="<?php echo (form_error('acrcategoria') != "")? "input_error" : "";?>" id="acrcategoria" type="text" name="acrcategoria"  value="<?php echo $obj->getAcrcategoria(); ?>"  />
    </p>
    <p class="acreditacion_field <?php echo $extra_r_class; ?>">
      <label for="acrfecha"><?php echo lang("personal_formulario_fecha_vencimiento_acreditacion"); ?></label>
      <input class="<?php echo (form_error('acrfecha') != "")? "input_error" : "";?>" id="acrfecha" type="date" name="acrfecha"  value="<?php echo $obj->getAcrfecha(); ?>"  />
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
<!--    <input type="file" name="cursos_upload" id="cursos_upload" class="file" />-->
<!--    <input type="button" class="button button_short realizacion_field <?php echo $extra_r_class; ?>" value="adjuntar" />-->
    <div class="clear"></div>
    <a class="acreditacion_field" href="javascript:void(0)" onclick="return agregarFileInputAcreditaciones();" style="float:right"><?php echo lang("personal_formulario_agregar_mas"); ?></a>
    <div class="clear"></div>
      
  
<!--  
    <input type="file" name="acreditacion_upload" id="acreditacion_upload" class="file" /> 
    <input type="button" class="button button_short acreditacion_field <?php echo $extra_r_class; ?>" value="adjuntar" />
    
	-->
	<div class="clear"></div>
    
    <div class="clear"></div>
    
    
    <h5><?php echo lang("personal_formulario_subtitulo_categoria_aspirada"); ?><a href="<?php echo site_url("acreditaciones/bases");?>" target="_blank"><?php echo lang("personal_formulario_subtitulo_ver_bases"); ?></a></h5>
    <p>
      <div style="width: 23%; float: left;">
      <label for="categoriaa">Categoria A</label>
      <input name="categoria" type="radio" value="A" class="radiobuttom" <?php echo ($obj->getCategoria() == "A")? "checked=\"checked\"" : ""; ?>> 
    </div>
    <div style="width: 23%; float: left;">
      <label for="categoriab">Categoria B</label>
      <input name="categoria" type="radio" value="B" class="radiobuttom" <?php echo ($obj->getCategoria() == "B")? "checked=\"checked\"" : ""; ?>> 
    </div>   
    <div style="width: 23%; float: left;">
      <label for="categoria_c1">Categoria C1</label>
      <input name="categoria" type="radio" value="C1" class="radiobuttom" <?php echo ($obj->getCategoria() == "C1")? "checked=\"checked\"" : ""; ?>> 
    </div>
    <div style="width: 23%; float: left;">
      <label for="categoria_c2">Categoria C2</label>
      <input name="categoria" type="radio" value="C2" class="radiobuttom" <?php echo ($obj->getCategoria() == "C2")? "checked=\"checked\"" : ""; ?>> 
    </div>
    </p>
    <div class="clear"></div>
    <?php echo lang("personal_formulario_texto_categoria"); ?>
    
    <?php echo lang("personal_formulario_texto_firma_persona"); ?>
    
<!--    <input type="button" class="button button_short_descargar" value="descargar" />-->
    <?php if(isset($errores['firma_persona_upload'])): ?>
		<span class="upload_error"><?php echo $errores['firma_persona_upload'];?></span>
	<?php endif;?>
    <?php 
//var_dump(isset($errores['firma_persona_upload']));
//var_dump($errores);?>
    <input type="file" name="firma_persona_upload" id="firma_persona_upload" class="file" />
<!--    <button class="adjuntar">Adjuntar</button>-->
<!--	<div class="clear"></div>-->
    <a href="<?php echo site_url("acreditaciones/descargarFormularioPersona");?>" class="descargar descargar_forms">descargar</a>
    
    <div class="clear"></div>
    
    <?php echo lang("personal_formulario_texto_firma_institucion"); ?>
<!--    <input type="button" class="button button_short_descargar" value="descargar" />-->
    <?php if(isset($errores['firma_institucion_upload'])): ?>
		<span class="upload_error"><?php echo $errores['firma_institucion_upload'];?></span>
	<?php endif;?>
    <input type="file" name="firma_institucion_upload" id="firma_institucion_upload" class="file"/>
<!--    <input type="button" class="button button_short" value="adjuntar" />-->
<!--    <button class="adjuntar">Adjuntar</button>-->
    <a href="<?php echo site_url("acreditaciones/descargarFormularioEmpresa");?>" class="descargar descargar_forms">descargar</a>
    <div class="clear"></div>
    <input type="submit" class="button button_large" value="enviar formulario" />
  <?php echo form_close(); ?>
  
  <div class="clear"></div>

  <div style="width:515px">
  </div>  
    
  <div class="clear"></div>
  <?php echo lang("personal_formulario_texto_consultas"); ?>
</div><!--CONTENT RIGHT-->
