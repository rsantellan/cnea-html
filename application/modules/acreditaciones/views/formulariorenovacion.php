<div class="content_right img_instituciones">
  <h1><?php echo lang("personal_formulario_titulo"); ?></h1>
  
  <div class="clear"></div>
  <h5><?php echo lang("personal_formulario_subtitulo"); ?></h5>
  <?php if(strlen(validation_errors()) > 0): ?>
  <span class="msg_error"><?php echo lang("personal_formulario_subtitulo_errores"); ?></span>
  
  <?php endif;?>
  
  <?php
  $attributes = array('class' => 'infield_form', 'id' => 'renovacion_form');
  echo form_open_multipart('formulario-renovacion.html', $attributes); ?>    
    <h4><?php echo lang("personal_formulario_subtitulo_identificacion"); ?></h4>
    <div class="clear"></div>
    <p>
       <label class="fecha_infield hasinfieldlabel" for="fechasolicitud"><?php echo lang("personal_formulario_fecha"); ?></label> 
      <input class="<?php echo (form_error('fechasolicitud') != "")? "input_error" : "";?> fecha" type="input" name="fechasolicitud" maxlength="255" value="<?php echo $obj->getFechasolicitud(); ?>" placeholder='dd/mm/yyyy' />
    </p>
    <p>
      <label class="hasinfieldlabel" for="nombre"><?php echo lang("personal_formulario_nombre"); ?></label>
      <input class="<?php echo (form_error('nombre') != "")? "input_error" : "";?>" id="nombre" type="text" name="nombre"  value="<?php echo $obj->getNombre(); ?>"  />
    </p>
    <p>
      <label class="hasinfieldlabel" for="apellido"><?php echo lang("personal_formulario_apellido"); ?></label>
      <input class="<?php echo (form_error('apellido') != "")? "input_error" : "";?>" id="nombreapellido" type="text" name="apellido"  value="<?php echo $obj->getApellido(); ?>"  />
    </p>
    
    <p>
      <label class="hasinfieldlabel" for="ci"><?php echo lang("personal_formulario_documento"); ?></label>
      <input class="<?php echo (form_error('ci') != "")? "input_error" : "";?>" id="documento" type="text" name="ci" maxlength="255" value="<?php echo $obj->getCi(); ?>"  />
    </p>
    <p>
        <label class="hasinfieldlabel" for="email"><?php echo lang("personal_formulario_email"); ?></label>
        <input class="<?php echo (form_error('email') != "")? "input_error" : "";?>" id="email" type="text" name="email" maxlength="255" value="<?php echo $obj->getEmail(); ?>"  />
    </p>
    
    <p>
      <label class="hasinfieldlabel" for="institucion"><?php echo lang("personal_formulario_instituciondesempeno"); ?></label>
      <?php echo form_error('institucion'); ?>
      <?php
      $options = array();
      foreach($instituciones as $institucion){
        $options[$institucion->id] = $institucion->nombreinsititucion;
      }
      ?>
      <?php echo form_dropdown('institucion', $options, $obj->getInstitucion(), 'class="instituciondesempeno_select"') ?>
    </p>
    <div class="clear"></div>
    <p>
      <label class="hasinfieldlabel" for="laboratorio"><?php echo lang("personal_formulario_institucion_laboratorio_unidad"); ?></label>
      <input class="<?php echo (form_error('laboratorio') != "")? "input_error" : "";?>" id="laboratorio" type="text" name="laboratorio" maxlength="255" value="<?php echo $obj->getLaboratorio(); ?>"  />
    </p>  
    <p>
      <label  class="hasinfieldlabel" for="cargo"><?php echo lang("personal_formulario_institucion_cargo"); ?></label>
      <input class="<?php echo (form_error('cargo') != "")? "input_error" : "";?>" id="cargo" type="text" name="cargo" maxlength="255" value="<?php echo $obj->getCargo(); ?>"  />
    </p>
    <p>
      <label  class="hasinfieldlabel" for="cargahoraria"><?php echo lang("personal_formulario_institucion_carga_horaria_semanal"); ?></label>
      <input class="<?php echo (form_error('cargahoraria') != "")? "input_error" : "";?>" id="cargahoraria" type="text" name="cargahoraria"  value="<?php echo $obj->getCargahoraria(); ?>"  />
    </p>
    <p>
      <label  class="hasinfieldlabel" for="jefe"><?php echo lang("personal_formulario_institucion_nombre_supervisor"); ?></label>
      <input class="<?php echo (form_error('jefe') != "")? "input_error" : "";?>" id="jefe" type="text" name="jefe" maxlength="255" value="<?php echo $obj->getJefe(); ?>"  />
    </p>
    
    
    
    <p>
      <label class="fecha_infield hasinfieldlabel" for="fechaacreditacion">Fecha de acreditación:</label>
      <input class="<?php echo (form_error('fechaacreditacion') != "")? "input_error" : "";?> fecha" type="input" name="fechaacreditacion" maxlength="255" value="<?php echo $obj->getFechaacreditacion(); ?>" placeholder='dd/mm/yyyy' />
    </p>
     
    <p>
        <label class="hasinfieldlabel" for="numregistro">Número de registro</label>
        <input class="<?php echo (form_error('numregistro') != "")? "input_error" : "";?>" id="numregistro" type="text" name="numregistro" maxlength="255" value="<?php echo $obj->getNumregistro(); ?>"  />
    </p>
    <div class="clear"></div>
    <h2>Eventos</h2>
    <div id="eventos">
      <p>
        <label class="hasinfieldlabel" for="eventname_1">Nombre del evento</label>
        <input class="<?php echo (form_error('eventname_1') != "")? "input_error" : "";?>" type="text" name="eventname_1" maxlength="255" value="<?php echo $evento->getNombre(); ?>"  />
      </p>
      <p>
        <label class="fecha_infield hasinfieldlabel" for="fechaevento_1">Fecha del evento:</label>
      <input class="<?php echo (form_error('fechaevento_1') != "")? "input_error" : "";?> fecha" type="input" name="fechaevento_1" maxlength="255" value="<?php echo $evento->getFecha(); ?>" placeholder='dd/mm/yyyy' />
      </p>
      <p>
        <label class="hasinfieldlabel" for="lugarevento_1">Lugar del evento</label>
        <input class="<?php echo (form_error('lugarevento_1') != "")? "input_error" : "";?>" id="numregistro" type="text" name="lugarevento_1" maxlength="255" value="<?php echo $evento->getLugar(); ?>"  />
      </p>
      <a href="javascript:void" style="display:none" onclick="removeContainer(this)">Sacar</a>
    </div>
    <div id="eventos_container">
      <?php $counter = 2;?>
      <?php foreach($evento_list as $data): ?>
        <div id="">
          <p>
            <label class="hasinfieldlabel" for="eventname_<?php echo $counter;?>">Nombre del evento</label>
            <input class="<?php echo (form_error('eventname_'.$counter) != "")? "input_error" : "";?>" type="text" name="eventname_<?php echo $counter;?>" maxlength="255" value="<?php echo $data->getNombre(); ?>"  />
          </p>
          <p>
            <label class="fecha_infield hasinfieldlabel" for="fechaevento_<?php echo $counter;?>">Fecha del evento:</label>
          <input class="<?php echo (form_error('fechaevento_'.$counter) != "")? "input_error" : "";?> fecha" type="input" name="fechaevento_<?php echo $counter;?>" maxlength="255" value="<?php echo $data->getFecha(); ?>" placeholder='dd/mm/yyyy' />
          </p>
          <p>
            <label class="hasinfieldlabel" for="lugarevento_<?php echo $counter;?>">Lugar del evento</label>
            <input class="<?php echo (form_error('lugarevento_'.$counter) != "")? "input_error" : "";?>" id="numregistro" type="text" name="lugarevento_<?php echo $counter;?>" maxlength="255" value="<?php echo $data->getLugar(); ?>"  />
          </p>
          <a href="javascript:void" onclick="removeContainer(this)">Sacar</a>
        </div>
        <?php $counter++; ?>
      <?php endforeach; ?>
    </div>
    <input type="hidden" id="lasteventid" value="<?php echo $counter;?>" />
    <hr/>
    <a href='javascript:void(0)' onclick="agregaEvento()">Agregar</a>
    <br/>
    <hr/>
    <div class="clear"></div>
    
    <div class="clear"></div>
    <h2>Mencione el/los título/s de los protocolos de experimentación animal en los que Ud. haya estado involucrado en los últimos cinco años, aprobados por la CEUA de su Institución. Especifique su rol en los mismos.</h2>
    <div id="titulos">
      <p>
        <label class="hasinfieldlabel" for="titlename_1">Nombre del titulo</label>
        <input class="<?php echo (form_error('titlename_1') != "")? "input_error" : "";?>" type="text" name="titlename_1" maxlength="255" value="<?php echo $titles->getNombre(); ?>"  />
      </p>
      <p id="protocolos">
        <label class="" for="titledescription_1">Descripción</label>
        <textarea class="<?php echo (form_error('titledescription_1') != "")? "input_error" : "";?>" name="titledescription_1" rows="5" cols="80" ><?php echo $titles->getDescription();?></textarea>
      </p>
      <a href="javascript:void" style="display:none" onclick="removeContainer(this)">Sacar</a>
    </div>
    <div id="titulos_container">
      <?php $counterTitles = 2;?>
      <?php foreach($titles_list as $data): ?>
        <div id="titulos">
          <p>
            <label class="hasinfieldlabel" for="titlename_"<?php echo $counterTitles;?>>Nombre del titulo</label>
            <input class="<?php echo (form_error('titlename_'.$counterTitles) != "")? "input_error" : "";?>" type="text" name="titlename_<?php echo $counterTitles;?>" maxlength="255" value="<?php echo $data->getNombre(); ?>"  />
          </p>
          <p id="protocolos">
            <label class="" for="titledescription_<?php echo $counterTitles;?>">Descripción</label>
            <textarea class="<?php echo (form_error('titledescription_'.$counterTitles) != "")? "input_error" : "";?>" name="titledescription_<?php echo $counterTitles;?>" rows="5" cols="80" ><?php echo $data->getDescription();?></textarea>
          </p>
          <a href="javascript:void" onclick="removeContainer(this)">Sacar</a>
        </div>
        <?php $counterTitles++; ?>
      <?php endforeach; ?>
    </div>
    <input type="hidden" id="lasttitleid" value="<?php echo $counterTitles;?>" />
    <hr/>
    <a href='javascript:void(0)' onclick="agregaTitulo()">Agregar</a>
    <br/>
    <hr/>
    <div class="clear"></div>
    
    <p id="protocolos">
      <label class="" for="protocolos">En caso de protocolos de experimentación de investigación, mencione las publicaciones u otras formas de comunicación de resultados obtenidas con el uso de animales de experimentación en los últimos cinco años.</label>
      <textarea class="<?php echo (form_error('protocolos') != "")? "input_error" : "";?>" name="protocolosotros[]" rows="5" cols="80" ><?php echo $protocolosotros->getDescription();?></textarea>
      <a href="javascript:void" style="display:none" onclick="removeContainer(this)">Sacar</a>
    </p>
    <div id="protocolos_container">
      <?php foreach($protocolosotros_list as $data): ?>
        <p id="">
          <label class="" for="protocolos">En caso de protocolos de experimentación de investigación, mencione las publicaciones u otras formas de comunicación de resultados obtenidas con el uso de animales de experimentación en los últimos cinco años.</label>
          <textarea class="<?php echo (form_error('protocolos') != "")? "input_error" : "";?>" name="protocolosotros[]" rows="5" cols="80" ><?php echo $data->getDescription();?></textarea>
          <a href="javascript:void" onclick="removeContainer(this)">Sacar</a>
        </p>
      <?php endforeach; ?>
    </div>
    <hr/>
    <a href='javascript:void(0)' onclick="agregarProtocolo()">Agregar</a>
    <br/>
    <hr/>
    <div class="clear"></div>
    <p id="protocolosotrosfines">
      <label class="" for="protocolosotrosfines">En caso de protocolos de experimentación con otros fines (control de potencia, toxicidad, enseñanza, etc.), especifique en cuadro para completar.</label>
      <textarea class="<?php echo (form_error('protocolosotrosfines') != "")? "input_error" : "";?>" name="protocolosotrosfines[]" rows="5" cols="80" ><?php echo $protocolosotrosfines->getDescription();?></textarea>
      <a href="javascript:void" style="display:none" onclick="removeContainer(this)">Sacar</a>
    </p>
    <div id="protocolosotrosfines_container">
      <?php foreach($protocolosotrosfines_list as $data): ?>
      <p id="">
        <label class="" for="protocolosotrosfines">En caso de protocolos de experimentación con otros fines (control de potencia, toxicidad, enseñanza, etc.), especifique en cuadro para completar.</label>
        <textarea class="<?php echo (form_error('protocolosotrosfines') != "")? "input_error" : "";?>" name="protocolosotrosfines[]" rows="5" cols="80" ><?php echo $data->getDescription();?></textarea>
        <a href="javascript:void" style="display:none" onclick="removeContainer(this)">Sacar</a>
      </p>
      <?php endforeach; ?>
    </div>
    <hr/>
    <a href='javascript:void(0)' onclick="agregarProtocoloExperimental()">Agregar</a>
    
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

<script type="text/javascript">
$(document).ready(function() {
   startDatepickers();
 });
 
 function removeContainer(element)
 {
   $(element).parent().remove()
 }
 
 function agregarProtocolo()
 {
   var clonedData = $('#protocolos').clone();
   clonedData.find('a').show();
   clonedData.attr('id', '');
   clonedData.find('input').each(function(index, element){
     $(element).val('');
   });
   $('#protocolos_container').append(clonedData);
 }
 
 function agregarProtocoloExperimental()
 {
   var clonedData = $('#protocolosotrosfines').clone();
   clonedData.find('a').show();
   clonedData.attr('id', '');
   clonedData.find('input').each(function(index, element){
     $(element).val('');
   });
   $('#protocolosotrosfines_container').append(clonedData);
 }
 
 function agregaEvento()
 {
   var nextId = parseInt($('#lasteventid').val());
   var clonedData = $('#eventos').clone();
   clonedData.find('a').show();
   clonedData.attr('id', '');
   clonedData.find('input').each(function(index, element){
     $(element).attr('name', $(element).attr('name').split('_')[0] + '_' + nextId);
     $(element).val('');
   });
   clonedData.find('input.fecha').removeClass('hasDatepicker').removeAttr('id');
   $('#eventos_container').append(clonedData);
   clonedData.find('input.fecha').datepicker({
      changeYear: true,
      yearRange: "-100:+0",
      dateFormat: "dd/mm/yy" 
    });
   $('#lasteventid').val(nextId + 1);
 }
 
 function agregaTitulo()
 {
   var nextId = parseInt($('#lasttitleid').val());
   var clonedData = $('#titulos').clone();
   clonedData.find('a').show();
   clonedData.attr('id', '');
   clonedData.find('input').each(function(index, element){
     $(element).attr('name', $(element).attr('name').split('_')[0] + '_' + nextId);
     $(element).val('');
   });
   $('#titulos_container').append(clonedData);
   $('#lasttitleid').val(nextId + 1);   
 }
 
 function startDatepickers()
 {
   $('.fecha').datepicker({
      changeYear: true,
      yearRange: "-100:+0",
      dateFormat: "dd/mm/yy" 
    });
 }

</script>  