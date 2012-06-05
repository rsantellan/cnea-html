<div class="content_right img_instituciones">
    <h1><?php echo lang("instituciones_formulario_titulo"); ?></h1>
    <?php echo lang("instituciones_formulario_titulo_descarga"); ?>
    <div style="width:515px">
      <span>
        <strong> 
        <?php echo lang('instituciones_formulario_descarga_texto'); ?>
        </strong>
      </span>
      <a href="<?php echo site_url("instituciones/descargarFormularioFirmasInstitucion");?>" class="descargar descargar_forms">descargar</a>
    </div>
    <div class="clear"></div>
    <h5><?php echo lang("instituciones_formulario_strong_text_1"); ?></h5>
    <?php if(strlen(validation_errors()) > 0 || (isset($errores) && count($errores) > 0)): ?>
    <span class="msg_error"><?php echo lang("instituciones_formulario_info_text_1"); ?></span>
    <?php endif; ?>
    <?php
        $attributes = array('class' => 'infield_form', 'id' => '');
        echo form_open_multipart('instituciones/formulario', $attributes); ?>
    <?php //echo form_open_multipart('instituciones/formulario', array('class' => 'infield_form', 'id' => '')); ?>
        <h4><?php echo lang("instituciones_formulario_subtitulo_1"); ?></h4>
        <p>
                <label for="NombreInsititucion"><?php echo lang("instituciones_formulario_nombre_institucion"); ?></label>
                <input class="<?php echo (form_error('NombreInsititucion') != "")? "input_error" : "";?>" id="NombreInsititucion" type="text" name="NombreInsititucion"  value="<?php echo set_value('NombreInsititucion'); ?>"  />
        </p>
        <p>
                <label for="RazonSocial"><?php echo lang("instituciones_formulario_razon_social"); ?></label>
                <input class="<?php echo (form_error('RazonSocial') != "")? "input_error" : "";?>" id="RazonSocial" type="text" name="RazonSocial"  value="<?php echo set_value('RazonSocial'); ?>"  />
        </p>
        <p>
                <label for="RUT"><?php echo lang("instituciones_formulario_rut"); ?></label>
                <input class="<?php echo (form_error('RUT') != "")? "input_error" : "";?>" id="RUT" type="text" name="RUT"  value="<?php echo set_value('RUT'); ?>"  />
        </p>
        <div class="select" style="-bottom:3px">
            <select name="Naturaleza" class="<?php echo (form_error('Naturaleza') != "")? "input_error" : "";?>">
                <option value="" <?php echo (set_value('Naturaleza') == "")? "selected=\"selected\"" : "";?>><?php echo lang("instituciones_formulario_naturaleza"); ?></option>
                <option value="publica" <?php echo (set_value('Naturaleza') == "publica")? "selected=\"selected\"" : "";?>><?php echo lang("instituciones_formulario_publica"); ?></option>
                <option value="privada" <?php echo (set_value('Naturaleza') == "privada")? "selected=\"selected\"" : "";?>><?php echo lang("instituciones_formulario_privada"); ?></option>
                <option value="mixta" <?php echo (set_value('Naturaleza') == "mixta")? "selected=\"selected\"" : "";?>><?php echo lang("instituciones_formulario_mixta"); ?></option>
            </select>
        </div>
        <span><?php echo lang("instituciones_formulario_info_text_2"); ?></span>
        <h5><?php echo lang("instituciones_formulario_strong_text_2"); ?></h5>
        <p>
                <label for="PrimerNivel"><?php echo lang("instituciones_formulario_1_nivel"); ?></label>
                <input class="<?php echo (form_error('PrimerNivel') != "")? "input_error" : "";?>" id="PrimerNivel" type="text" name="PrimerNivel"  value="<?php echo set_value('PrimerNivel'); ?>"  />
        </p>
        <p>
                <label for="SegundoNivel"><?php echo lang("instituciones_formulario_2_nivel"); ?></label>
                <input class="<?php echo (form_error('SegundoNivel') != "")? "input_error" : "";?>" id="SegundoNivel" type="text" name="SegundoNivel"  value="<?php echo set_value('SegundoNivel'); ?>"  />
        </p>
        <p>
                <label for="TercerNivel"><?php echo lang("instituciones_formulario_3_nivel"); ?></label>
                <input class="<?php echo (form_error('TercerNivel') != "")? "input_error" : "";?>" id="TercerNivel" type="text" name="TercerNivel"  value="<?php echo set_value('TercerNivel'); ?>"  />
        </p>
        <span><?php echo lang("instituciones_formulario_info_text_3"); ?></span>
        <p>
                <label for="DomicilioInstitucional"><?php echo lang("instituciones_formulario_domicilio_institucional"); ?></label>
                <input class="<?php echo (form_error('DomicilioInstitucional') != "")? "input_error" : "";?>" id="DomicilioInstitucional" type="text" name="DomicilioInstitucional"  value="<?php echo set_value('DomicilioInstitucional'); ?>"  />
        </p>
        <p>
                <label for="DomicilioFiscal"><?php echo lang("instituciones_formulario_domicilio_fiscal"); ?></label>
                <input class="<?php echo (form_error('DomicilioFiscal') != "")? "input_error" : "";?>" id="DomicilioFiscal" type="text" name="DomicilioFiscal"  value="<?php echo set_value('DomicilioFiscal'); ?>"  />
        </p>
        <h5><?php echo lang("instituciones_formulario_strong_text_3"); ?></h5>
        <p>
                <label for="Dicose"><?php echo lang("instituciones_formulario_dicose"); ?></label>
                <input class="<?php echo (form_error('Dicose') != "")? "input_error" : "";?>" id="Dicose" type="text" name="Dicose"  value="<?php echo set_value('Dicose'); ?>"  />
        </p>
        <p>
                <label for="UnidadesDependientes1"><?php echo lang("instituciones_formulario_1"); ?></label>
                <input class="<?php echo (form_error('UnidadesDependientes1') != "")? "input_error" : "";?>" id="UnidadesDependientes1" type="text" name="UnidadesDependientes1"  value="<?php echo set_value('UnidadesDependientes1'); ?>"  />
        </p>
        <p>
                <label for="UnidadesDependientes2"><?php echo lang("instituciones_formulario_2"); ?></label>
                <input class="<?php echo (form_error('UnidadesDependientes2') != "")? "input_error" : "";?>" id="UnidadesDependientes2" type="text" name="UnidadesDependientes2"  value="<?php echo set_value('UnidadesDependientes2'); ?>"  />
        </p>
        <p>
                <label for="UnidadesDependientes3"><?php echo lang("instituciones_formulario_3"); ?></label>
                <input class="<?php echo (form_error('UnidadesDependientes3') != "")? "input_error" : "";?>" id="UnidadesDependientes3" type="text" name="UnidadesDependientes3"  value="<?php echo set_value('UnidadesDependientes3'); ?>"  />
        </p>
        <p>
                <label for="UnidadesDependientes4"><?php echo lang("instituciones_formulario_4"); ?></label>
                <input class="<?php echo (form_error('UnidadesDependientes4') != "")? "input_error" : "";?>" id="UnidadesDependientes4" type="text" name="UnidadesDependientes4"  value="<?php echo set_value('UnidadesDependientes4'); ?>"  />
        </p>
        <h4><?php echo lang("instituciones_formulario_subtitulo_2"); ?></h4>
        <div class="float_left" style="margin-right:120px;">
                <label><?php echo lang("instituciones_formulario_cria"); ?></label>
                <input type="radio" class="radiobuttom" name="TipoEstablecimiento" value="cria" <?php echo (set_value('TipoEstablecimiento') == "cria" || set_value('TipoEstablecimiento') == "")? "checked=\"checked\"" : "";?> />
        </div>
        <div class="float_left">
                <label><?php echo lang("instituciones_formulario_experimentacion"); ?></label>
                <input type="radio" class="radiobuttom" name="TipoEstablecimiento" value="experimentación" <?php echo (set_value('TipoEstablecimiento') == "experimentación")? "checked=\"checked\"" : "";?> />
        </div>
        <div class="float_right">
                <label><?php echo lang("instituciones_formulario_mixto"); ?></label>
                <input type="radio" class="radiobuttom" name="TipoEstablecimiento" value="mixto" <?php echo (set_value('TipoEstablecimiento') == "mixto")? "checked=\"checked\"" : "";?> />
        </div>
        <div class="clear"></div>
        <h4><?php echo lang("instituciones_formulario_subtitulo_3"); ?></h4>
        <div id="especies">
                <?php
                $i = 1;
                while($i==1 || set_value('NombreEspecie_'.$i)!=""){
                ?>
                <div id="especies_<?php echo $i; ?>">
                        <p>
                                <label for="NombreEspecie_<?php echo $i; ?>"><?php echo lang("instituciones_formulario_nombre_especie"); ?></label>
                                <input class="input_short <?php echo (form_error('NombreEspecie_'.$i) != "")? "input_error" : "";?>" id="NombreEspecie_<?php echo $i; ?>" type="text" name="NombreEspecie_<?php echo $i; ?>"  value="<?php echo set_value('NombreEspecie_'.$i); ?>"  />
                        </p>
                        <div class="float_right">
                                <label style="margin:5px;"><?php echo lang("instituciones_formulario_uso"); ?></label>
                                <!--<input type="radio" class="radiobuttom" name="TipoEspecie_<?php echo $i; ?>" value="uso" <?php echo (set_value('TipoEspecie_'.$i) == "uso" || set_value('TipoEspecie_'.$i) == "")? "checked=\"checked\"" : "";?> />-->
                                <input type="checkbox" class="input_checkbox" name="TipoEspecie_1_<?php echo $i; ?>" value="uso" <?php echo (set_value('TipoEspecie_1_'.$i) == "uso")? "checked=\"checked\"" : "";?> />
                                <label style="margin:5px 5px 5px 15px;"><?php echo lang("instituciones_formulario_cria"); ?></label>
                                <!--<input type="radio" class="radiobuttom" name="TipoEspecie_<?php echo $i; ?>" value="cria" <?php echo (set_value('TipoEspecie_'.$i) == "cria")? "checked=\"checked\"" : "";?> />-->
                                <input type="checkbox" class="input_checkbox" name="TipoEspecie_2_<?php echo $i; ?>" value="cria" <?php echo (set_value('TipoEspecie_2_'.$i) == "cria")? "checked=\"checked\"" : "";?> />
                        </div>
                        <div class="clear"></div>
                        <p>
                                <!--<label for="ObservacionesEspecie_<?php echo $i; ?>">Observaciones</label>
                                <textarea class="<?php echo (form_error('ObservacionesEspecie_'.$i) != "")? "input_error" : "";?>" id="ObservacionesEspecie_<?php echo $i; ?>" name="ObservacionesEspecie_<?php echo $i; ?>" value="<?php echo set_value('ObservacionesEspecie_'.$i); ?>"></textarea>-->
                                <label for="<?php echo 'ObservacionesEspecie_'.$i ?>"><?php echo lang("instituciones_formulario_especies_observaciones"); ?></label>
                                <?php 
                                    $t_class = ""; 
                                    if(form_error('ObservacionesEspecie_'.$i) != ""){
                                        $t_class = "textarea_error";  
                                    }
                                ?>
                                <?php //echo form_textarea( array('class' => $t_class, 'id' => 'ObservacionesEspecie_'.$i, 'name' => 'ObservacionesEspecie_'.$i, 'rows' => '5', 'cols' => '80', 'value' => set_value('ObservacionesEspecie_'.$i) ) )?>
                                <textarea class="<?php echo $t_class; ?>" id="ObservacionesEspecie_<?php echo $i; ?>" name="ObservacionesEspecie_<?php echo $i; ?>"><?php echo set_value('ObservacionesEspecie_'.$i); ?></textarea>
                        </p>
                </div>
                <?php
                $i++;
                }
                ?>
        </div>
        <a href="javascript:agregarEscpecie();" style="float:right"><?php echo lang("instituciones_formulario_especies_mas"); ?></a><div class="clear"></div>
        <h4><?php echo lang("instituciones_formulario_subtitulo_4"); ?></h4>
        <h5><?php echo lang("instituciones_formulario_strong_text_4"); ?></h5>
        <h5><?php echo lang("instituciones_formulario_strong_text_5"); ?></h5>
        <div id="docentes">
                <?php
                $i = 1;
                while($i==1 || set_value('DocenteNombreApellido_'.$i)!=""){
                ?>
                <div id="docentes_<?php echo $i; ?>">
                        <p>
                                <label for="DocenteNombreApellido_<?php echo $i; ?>" ><?php echo lang("instituciones_formulario_docente_nombre_apellido"); ?></label>
                                <input class="<?php echo (form_error('DocenteNombreApellido_'.$i) != "")? "input_error" : "";?>" id="DocenteNombreApellido_<?php echo $i; ?>" type="text" name="DocenteNombreApellido_<?php echo $i; ?>"  value="<?php echo set_value('DocenteNombreApellido_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="DocenteProfesion_<?php echo $i; ?>" ><?php echo lang("instituciones_formulario_docente_profesion"); ?></label>
                                <input class="<?php echo (form_error('DocenteProfesion_'.$i) != "")? "input_error" : "";?>" id="DocenteProfesion_<?php echo $i; ?>" type="text" name="DocenteProfesion_<?php echo $i; ?>"  value="<?php echo set_value('DocenteProfesion_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="DocenteOcupacion_<?php echo $i; ?>" ><?php echo lang("instituciones_formulario_docente_ocupacion"); ?></label>
                                <input class="<?php echo (form_error('DocenteProfesion_'.$i) != "")? "input_error" : "";?>" id="DocenteOcupacion_<?php echo $i; ?>" type="text" name="DocenteOcupacion_<?php echo $i; ?>"  value="<?php echo set_value('DocenteOcupacion_'.$i); ?>"  />
                        </p>
                </div>
                <?php
                $i++;
                }
                ?>
        </div>
        <a href="javascript:agregarDoncente();" style="float:right"><?php echo lang("instituciones_formulario_docentes_mas"); ?></a><div class="clear"></div>
        <h5><?php echo lang("instituciones_formulario_strong_text_6"); ?></h5>
        <div id="veterinarios">
                <?php
                $i = 1;
                while($i==1 || set_value('VeterinarioNombreApellido_'.$i)!=""){
                ?>
                <div id="veterinarios_<?php echo $i; ?>">
                        <p>
                                <label for="VeterinarioNombreApellido_<?php echo $i; ?>" ><?php echo lang("instituciones_formulario_veterinario_nombre_apellido"); ?></label>
                                <input class="<?php echo (form_error('VeterinarioNombreApellido_'.$i) != "")? "input_error" : "";?>" id="VeterinarioNombreApellido_<?php echo $i; ?>" type="text" name="VeterinarioNombreApellido_<?php echo $i; ?>"  value="<?php echo set_value('VeterinarioNombreApellido_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="VeterinarioProfesion_<?php echo $i; ?>" ><?php echo lang("instituciones_formulario_veterinario_profesion"); ?></label>
                                <input class="<?php echo (form_error('VeterinarioProfesion_'.$i) != "")? "input_error" : "";?>" id="VeterinarioProfesion_<?php echo $i; ?>" type="text" name="VeterinarioProfesion_<?php echo $i; ?>"  value="<?php echo set_value('VeterinarioProfesion_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="VeterinarioOcupacion_<?php echo $i; ?>" ><?php echo lang("instituciones_formulario_veterinario_ocupacion"); ?></label>
                                <input class="<?php echo (form_error('VeterinarioProfesion_'.$i) != "")? "input_error" : "";?>" id="VeterinarioOcupacion_<?php echo $i; ?>" type="text" name="VeterinarioOcupacion_<?php echo $i; ?>"  value="<?php echo set_value('VeterinarioOcupacion_'.$i); ?>"  />
                        </p>
                </div>
                <?php
                $i++;
                }
                ?>
        </div>
        <a href="javascript:agregarVeterinario();" style="float:right"><?php echo lang("instituciones_formulario_veterinarios_mas"); ?></a><div class="clear"></div>
        <h5><?php echo lang("instituciones_formulario_strong_text_7"); ?></h5>
        <div id="sociedades">
                <?php
                $i = 1;
                while($i==1 || set_value('SociedadNombreApellido_'.$i)!=""){
                ?>
                <div id="sociedades_<?php echo $i; ?>">
                        <p>
                                <label for="SociedadNombreApellido_<?php echo $i; ?>" ><?php echo lang("instituciones_formulario_sociedades_nombre_apellido"); ?></label>
                                <input class="<?php echo (form_error('SociedadNombreApellido_'.$i) != "")? "input_error" : "";?>" id="SociedadNombreApellido_<?php echo $i; ?>" type="text" name="SociedadNombreApellido_<?php echo $i; ?>"  value="<?php echo set_value('SociedadNombreApellido_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="SociedadProfesion_1" ><?php echo lang("instituciones_formulario_sociedades_profesion"); ?></label>
                                <input class="<?php echo (form_error('SociedadProfesion_'.$i) != "")? "input_error" : "";?>" id="SociedadProfesion_<?php echo $i; ?>" type="text" name="SociedadProfesion_<?php echo $i; ?>"  value="<?php echo set_value('SociedadProfesion_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="SociedadOcupacion_1" ><?php echo lang("instituciones_formulario_sociedades_ocupacion"); ?></label>
                                <input class="<?php echo (form_error('SociedadProfesion_'.$i) != "")? "input_error" : "";?>" id="SociedadOcupacion_<?php echo $i; ?>" type="text" name="SociedadOcupacion_<?php echo $i; ?>"  value="<?php echo set_value('SociedadOcupacion_'.$i); ?>"  />
                        </p>
                </div>
                <?php
                $i++;
                }
                ?>
        </div>
        <a href="javascript:agregarSociedad();" style="margin-bottom:10px; float:right;"><?php echo lang("instituciones_formulario_sociedades_mas"); ?></a><div class="clear"></div>
        <p>
                <!--<label for="ObservacionesComite">Observaciones</label>
                <textarea class="<?php echo (form_error('ObservacionesComite') != "")? "input_error" : "";?>" id="ObservacionesComite" name="ObservacionesComite" value="<?php echo set_value('ObservacionesComite'); ?>"></textarea>-->
                <label for="<?php echo 'ObservacionesComite' ?>"><?php echo lang("instituciones_formulario_sociedad_civil_observaciones"); ?></label>
                <?php 
                    $t_class = ""; 
                    if(form_error('ObservacionesComite') != ""){
                        $t_class = "textarea_error";  
                    }
                ?>
                <?php //echo form_textarea( array('class' => $t_class, 'id' => 'ObservacionesComite', 'name' => 'ObservacionesComite', 'rows' => '5', 'cols' => '80', 'value' => set_value('ObservacionesComite') ) )?>
                <textarea class="<?php echo $t_class; ?>" id="ObservacionesComite" name="ObservacionesComite"><?php echo set_value('ObservacionesComite'); ?></textarea>
        </p>
        <span><?php echo lang("instituciones_formulario_info_text_4"); ?></span>
        <p>Indique fecha de constitución del CEUA y adjunte copia de la resolución de su institución*.</p>
        <!--<input type="file" name="copia_resolucion_institucion" id="copia_resolucion_institucion" class="file" />
        <input type="button" class="button button_short realizacion_field <?php echo $extra_r_class; ?>" value="adjuntar" />
        <div class="clear"></div>-->
        <div class="container">
          <?php if(isset($errores["copia_resolucion_institucion"])): ?>
          <span class="msg_error"><?php echo $errores["copia_resolucion_institucion"]; ?></span>
          <?php endif; ?>          
          <input type="file" name="copia_resolucion_institucion" id="copia_resolucion_institucion" class="file copia_resolucion_institucion" />
        </div>
        <div class="clear"></div>
        <?php
        $finish = false;
        $counter = 0;
        while(!$finish):
          if(isset($errores) && isset($errores['copia_resolucion_institucion_'.$counter])):
?>
        <div class="container">
            <span class="msg_error"><?php echo $errores['copia_resolucion_institucion_'.$counter]; ?></span>
            <input type="file" name="copia_resolucion_institucion_<?php echo $counter;?>" id="copia_resolucion_institucion_<?php echo $counter;?>" class="file copia_resolucion_institucion" />
            <div class="clear"></div>
            <a href="javascript:void(0)" onclick="return eliminarFileInputConstitucion(this);" style="float:right">Sacar</a><div class="clear"></div>
        </div>
<?php        
              
          else:
            $finish = true;
            
          endif;
          $counter++;
        endwhile;
        ?>
        
        <a href="javascript:void(0)" onclick="return agregarFileInputConstitucion();" style="float:right"><?php echo lang("instituciones_formulario_especies_mas"); ?></a><div class="clear"></div>
<!--        <button class="adjuntar"><?php echo lang("instituciones_formulario_copia_resolucion_institucion_adjuntar"); ?></button>-->
        <div class="clear"></div>
            
        <h5><?php echo lang("instituciones_formulario_strong_text_8"); ?></h5>
        <p>
                <label for="NombreContacto"><?php echo lang("instituciones_formulario_persona_contacto_nombre_completo"); ?></label>
                <input class="<?php echo (form_error('NombreContacto') != "")? "input_error" : "";?>" id="NombreContacto" type="text" name="NombreContacto"  value="<?php echo set_value('NombreContacto'); ?>"  />
        </p>
        <p>
                <label for="MailContacto"><?php echo lang("instituciones_formulario_persona_contacto_email"); ?></label>
                <input class="<?php echo (form_error('MailContacto') != "")? "input_error" : "";?>" id="MailContacto" type="text" name="MailContacto"  value="<?php echo set_value('MailContacto'); ?>"  />
        </p>
        <p>
                <label for="TelContacto"><?php echo lang("instituciones_formulario_persona_contacto_telefono"); ?></label>
                <input class="<?php echo (form_error('TelContacto') != "")? "input_error" : "";?>" id="TelContacto" type="text" name="TelContacto"  value="<?php echo set_value('TelContacto'); ?>"  />
        </p>
        <h5><?php echo lang("instituciones_formulario_strong_text_9"); ?></h5>
        <span><?php echo lang("instituciones_formulario_info_text_5"); ?></span>
        <?php if(isset($errores["responsable_institucional"])): ?>
        <span class="msg_error"><?php echo $errores["responsable_institucional"]; ?></span>
        <?php endif; ?>
        <input type="file" name="responsable_institucional" id="responsable_institucional" class="file" />
<!--        <button class="adjuntar"><?php echo lang("instituciones_formulario_responsable_institucional_adjuntar"); ?></button>-->
        <a href="<?php echo site_url("instituciones/descargarFormularioInstitucion");?>" class="descargar descargar_forms"><?php echo lang("instituciones_formulario_responsable_institucional_descargar"); ?></a>
        <div class="clear"></div>
        <input type="submit" class="button button_large" value="enviar formulario" />
    <?php echo form_close(); ?>
    <div class="clear"></div>
    <div class="clear"></div>
    <p><?php echo lang("instituciones_formulario_consultas"); ?></p>
</div><!--CONTENT RIGHT-->
