<div class="content_right img_instituciones">
    <h1>formulario para el registro nacional de instituciones</h1>
    <h5>Los campos con asterisco (*) son requeridos para enviar la solicitud</h5>
    <span class="msg_error">Por favor completar los campos marcados en rojo</span>
    <?php
        $attributes = array('class' => 'infield_form', 'id' => '');
        echo form_open_multipart('instituciones/formulario', $attributes); ?>
    <?php //echo form_open_multipart('instituciones/formulario', array('class' => 'infield_form', 'id' => '')); ?>
        <h4>1- IDENTIFICACIÓN INSTITUCIONAL</h4>
        <p>
                <label for="NombreInsititucion">Nombre de la Institución*</label>
                <input class="<?php echo (form_error('NombreInsititucion') != "")? "input_error" : "";?>" id="NombreInsititucion" type="text" name="NombreInsititucion"  value="<?php echo set_value('NombreInsititucion'); ?>"  />
        </p>
        <p>
                <label for="RazonSocial">Razón Social</label>
                <input class="<?php echo (form_error('RazonSocial') != "")? "input_error" : "";?>" id="RazonSocial" type="text" name="RazonSocial"  value="<?php echo set_value('RazonSocial'); ?>"  />
        </p>
        <p>
                <label for="RUT">RUT</label>
                <input class="<?php echo (form_error('RUT') != "")? "input_error" : "";?>" id="RUT" type="text" name="RUT"  value="<?php echo set_value('RUT'); ?>"  />
        </p>
        <div class="select" style="margin-bottom:3px">
            <select name="Naturaleza">
                <option value="" <?php echo (set_value('Naturaleza') == "")? "selected=\"selected\"" : "";?>>Naturaleza*</option>
                <option value="publica" <?php echo (set_value('Naturaleza') == "publica")? "selected=\"selected\"" : "";?>>Pública</option>
                <option value="privada" <?php echo (set_value('Naturaleza') == "privada")? "selected=\"selected\"" : "";?>>Privada</option>
                <option value="mixta" <?php echo (set_value('Naturaleza') == "mixta")? "selected=\"selected\"" : "";?>>Mixta</option>
            </select>
        </div>
        <span>Seleccionar uno de los tres tipos de naturaleza</span>
        <h5>Caracterización Institucional*</h5>
        <p>
                <label for="PrimerNivel">1º NIVEL* (por ejemplo UdelR)</label>
                <input class="<?php echo (form_error('PrimerNivel') != "")? "input_error" : "";?>" id="PrimerNivel" type="text" name="PrimerNivel"  value="<?php echo set_value('PrimerNivel'); ?>"  />
        </p>
        <p>
                <label for="SegundoNivel">2º NIVEL* (por ejemplo Facultad de Ciencias Sociales)</label>
                <input class="<?php echo (form_error('SegundoNivel') != "")? "input_error" : "";?>" id="SegundoNivel" type="text" name="SegundoNivel"  value="<?php echo set_value('SegundoNivel'); ?>"  />
        </p>
        <p>
                <label for="TercerNivel">3º NIVEL* (por ejemplo Departamento de Economía)</label>
                <input class="<?php echo (form_error('TercerNivel') != "")? "input_error" : "";?>" id="TercerNivel" type="text" name="TercerNivel"  value="<?php echo set_value('TercerNivel'); ?>"  />
        </p>
        <span>En el primer nivel ingrese la denominación más general de la institución para luego avanzar en el grado de especificación. Por ejemplo 1º UDELAR - 2º Facultad de Ciencias Sociales - 3º Departamento de Economía.</span>
        <p>
                <label for="DomicilioInstitucional">Domicilio Institucional*</label>
                <input class="<?php echo (form_error('DomicilioInstitucional') != "")? "input_error" : "";?>" id="DomicilioInstitucional" type="text" name="DomicilioInstitucional"  value="<?php echo set_value('DomicilioInstitucional'); ?>"  />
        </p>
        <p>
                <label for="DomicilioFiscal">Domicilio Fiscal (si corresponde)</label>
                <input class="<?php echo (form_error('DomicilioFiscal') != "")? "input_error" : "";?>" id="DomicilioFiscal" type="text" name="DomicilioFiscal"  value="<?php echo set_value('DomicilioFiscal'); ?>"  />
        </p>
        <h5>Unidades dependientes en otra ubicación con animales de experimentación (indicar nombre, dirección y DICOSE de cada una)</h5>
        <p>
                <label for="Dicose">DICOSE (si corresponde)</label>
                <input class="<?php echo (form_error('Dicose') != "")? "input_error" : "";?>" id="Dicose" type="text" name="Dicose"  value="<?php echo set_value('Dicose'); ?>"  />
        </p>
        <p>
                <label for="UnidadesDependientes1">1</label>
                <input class="<?php echo (form_error('UnidadesDependientes1') != "")? "input_error" : "";?>" id="UnidadesDependientes1" type="text" name="UnidadesDependientes1"  value="<?php echo set_value('UnidadesDependientes1'); ?>"  />
        </p>
        <p>
                <label for="UnidadesDependientes2">2</label>
                <input class="<?php echo (form_error('UnidadesDependientes2') != "")? "input_error" : "";?>" id="UnidadesDependientes2" type="text" name="UnidadesDependientes2"  value="<?php echo set_value('UnidadesDependientes2'); ?>"  />
        </p>
        <p>
                <label for="UnidadesDependientes3">3</label>
                <input class="<?php echo (form_error('UnidadesDependientes3') != "")? "input_error" : "";?>" id="UnidadesDependientes3" type="text" name="UnidadesDependientes3"  value="<?php echo set_value('UnidadesDependientes3'); ?>"  />
        </p>
        <p>
                <label for="UnidadesDependientes4">4</label>
                <input class="<?php echo (form_error('UnidadesDependientes4') != "")? "input_error" : "";?>" id="UnidadesDependientes4" type="text" name="UnidadesDependientes4"  value="<?php echo set_value('UnidadesDependientes4'); ?>"  />
        </p>
        <h4>2- TIPO DE ESTABLECIMIENTO*</h4>
        <div class="float_left" style="margin-right:120px;">
                <label>Cría</label>
                <input type="radio" class="radiobuttom" name="TipoEstablecimiento" value="cria" <?php echo (set_value('TipoEstablecimiento') == "cria" || set_value('TipoEstablecimiento') == "")? "checked=\"checked\"" : "";?> />
        </div>
        <div class="float_left">
                <label>Experimientación</label>
                <input type="radio" class="radiobuttom" name="TipoEstablecimiento" value="experimentación" <?php echo (set_value('TipoEstablecimiento') == "experimentación")? "checked=\"checked\"" : "";?> />
        </div>
        <div class="float_right">
                <label>Mixto</label>
                <input type="radio" class="radiobuttom" name="TipoEstablecimiento" value="mixto" <?php echo (set_value('TipoEstablecimiento') == "mixto")? "checked=\"checked\"" : "";?> />
        </div>
        <div class="clear"></div>
        <h4>3- ESPECIES CRIADAS Y/O UTILIZADAS* (si es necesario, agregue más filas)</h4>
        <div id="especies">
                <?php
                $i = 1;
                while($i==1 || set_value('NombreEspecie_'.$i)!=""){
                ?>
                <div id="especies_<?php echo $i; ?>">
                        <p>
                                <label for="NombreEspecie_<?php echo $i; ?>">Nombre de Especie</label>
                                <input class="input_short <?php echo (form_error('NombreEspecie_'.$i) != "")? "input_error" : "";?>" id="NombreEspecie_<?php echo $i; ?>" type="text" name="NombreEspecie_<?php echo $i; ?>"  value="<?php echo set_value('NombreEspecie_'.$i); ?>"  />
                        </p>
                        <div class="float_right">
                                <label style="margin:5px;">USO</label>
                                <input type="radio" class="radiobuttom" name="TipoEspecie_<?php echo $i; ?>" value="uso" <?php echo (set_value('TipoEspecie_'.$i) == "uso" || set_value('TipoEspecie_'.$i) == "")? "checked=\"checked\"" : "";?> />
                                <label style="margin:5px 5px 5px 15px;">CRÍA</label>
                                <input type="radio" class="radiobuttom" name="TipoEspecie_<?php echo $i; ?>" value="cria" <?php echo (set_value('TipoEspecie_'.$i) == "cria")? "checked=\"checked\"" : "";?> />
                        </div>
                        <div class="clear"></div>
                        <p>
                                <!--<label for="ObservacionesEspecie_<?php echo $i; ?>">Observaciones</label>
                                <textarea class="<?php echo (form_error('ObservacionesEspecie_'.$i) != "")? "input_error" : "";?>" id="ObservacionesEspecie_<?php echo $i; ?>" name="ObservacionesEspecie_<?php echo $i; ?>" value="<?php echo set_value('ObservacionesEspecie_'.$i); ?>"></textarea>-->
                                <label for="<?php echo 'ObservacionesEspecie_'.$i ?>">Observaciones</label>
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
        <a href="javascript:agregarEscpecie();" style="float:right">Agregar más</a><div class="clear"></div>
        <h4>4- COMITÉ DE ÉTICA EN EL USO DE ANIMALES (CEUA)*</h4>
        <h5>Indique su integración</h5>
        <h5>Docente / Investigador</h5>
        <div id="docentes">
                <?php
                $i = 1;
                while($i==1 || set_value('DocenteNombreApellido_'.$i)!=""){
                ?>
                <div id="docentes_<?php echo $i; ?>">
                        <p>
                                <label for="DocenteNombreApellido_<?php echo $i; ?>" >Nombre y Apellido</label>
                                <input class="<?php echo (form_error('DocenteNombreApellido_'.$i) != "")? "input_error" : "";?>" id="DocenteNombreApellido_<?php echo $i; ?>" type="text" name="DocenteNombreApellido_<?php echo $i; ?>"  value="<?php echo set_value('DocenteNombreApellido_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="DocenteProfesion_<?php echo $i; ?>" >Profesión</label>
                                <input class="<?php echo (form_error('DocenteProfesion_'.$i) != "")? "input_error" : "";?>" id="DocenteProfesion_<?php echo $i; ?>" type="text" name="DocenteProfesion_<?php echo $i; ?>"  value="<?php echo set_value('DocenteProfesion_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="DocenteOcupacion_<?php echo $i; ?>" >Ocupación</label>
                                <input class="<?php echo (form_error('DocenteProfesion_'.$i) != "")? "input_error" : "";?>" id="DocenteOcupacion_<?php echo $i; ?>" type="text" name="DocenteOcupacion_<?php echo $i; ?>"  value="<?php echo set_value('DocenteOcupacion_'.$i); ?>"  />
                        </p>
                </div>
                <?php
                $i++;
                }
                ?>
        </div>
        <a href="javascript:agregarDoncente();" style="float:right">Agregar más</a><div class="clear"></div>
        <h5>Veterinario</h5>
        <div id="veterinarios">
                <?php
                $i = 1;
                while($i==1 || set_value('VeterinarioNombreApellido_'.$i)!=""){
                ?>
                <div id="veterinarios_<?php echo $i; ?>">
                        <p>
                                <label for="VeterinarioNombreApellido_<?php echo $i; ?>" >Nombre y Apellido</label>
                                <input class="<?php echo (form_error('VeterinarioNombreApellido_'.$i) != "")? "input_error" : "";?>" id="VeterinarioNombreApellido_<?php echo $i; ?>" type="text" name="VeterinarioNombreApellido_<?php echo $i; ?>"  value="<?php echo set_value('VeterinarioNombreApellido_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="VeterinarioProfesion_<?php echo $i; ?>" >Profesión</label>
                                <input class="<?php echo (form_error('VeterinarioProfesion_'.$i) != "")? "input_error" : "";?>" id="VeterinarioProfesion_<?php echo $i; ?>" type="text" name="VeterinarioProfesion_<?php echo $i; ?>"  value="<?php echo set_value('VeterinarioProfesion_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="VeterinarioOcupacion_<?php echo $i; ?>" >Ocupación</label>
                                <input class="<?php echo (form_error('VeterinarioProfesion_'.$i) != "")? "input_error" : "";?>" id="VeterinarioOcupacion_<?php echo $i; ?>" type="text" name="VeterinarioOcupacion_<?php echo $i; ?>"  value="<?php echo set_value('VeterinarioOcupacion_'.$i); ?>"  />
                        </p>
                </div>
                <?php
                $i++;
                }
                ?>
        </div>
        <a href="javascript:agregarVeterinario();" style="float:right">Agregar más</a><div class="clear"></div>
        <h5>Sociedad Civil</h5>
        <div id="sociedades">
                <?php
                $i = 1;
                while($i==1 || set_value('SociedadNombreApellido_'.$i)!=""){
                ?>
                <div id="sociedades_<?php echo $i; ?>">
                        <p>
                                <label for="SociedadNombreApellido_<?php echo $i; ?>" >Nombre y Apellido</label>
                                <input class="<?php echo (form_error('SociedadNombreApellido_'.$i) != "")? "input_error" : "";?>" id="SociedadNombreApellido_<?php echo $i; ?>" type="text" name="SociedadNombreApellido_<?php echo $i; ?>"  value="<?php echo set_value('SociedadNombreApellido_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="SociedadProfesion_1" >Profesión</label>
                                <input class="<?php echo (form_error('SociedadProfesion_'.$i) != "")? "input_error" : "";?>" id="SociedadProfesion_<?php echo $i; ?>" type="text" name="SociedadProfesion_<?php echo $i; ?>"  value="<?php echo set_value('SociedadProfesion_'.$i); ?>"  />
                        </p>
                        <p>
                                <label for="SociedadOcupacion_1" >Ocupación</label>
                                <input class="<?php echo (form_error('SociedadProfesion_'.$i) != "")? "input_error" : "";?>" id="SociedadOcupacion_<?php echo $i; ?>" type="text" name="SociedadOcupacion_<?php echo $i; ?>"  value="<?php echo set_value('SociedadOcupacion_'.$i); ?>"  />
                        </p>
                </div>
                <?php
                $i++;
                }
                ?>
        </div>
        <a href="javascript:agregarSociedad();" style="margin-bottom:10px; float:right;">Agregar más</a><div class="clear"></div>
        <p>
                <!--<label for="ObservacionesComite">Observaciones</label>
                <textarea class="<?php echo (form_error('ObservacionesComite') != "")? "input_error" : "";?>" id="ObservacionesComite" name="ObservacionesComite" value="<?php echo set_value('ObservacionesComite'); ?>"></textarea>-->
                <label for="<?php echo 'ObservacionesComite' ?>">Observaciones</label>
                <?php 
                    $t_class = ""; 
                    if(form_error('ObservacionesComite') != ""){
                        $t_class = "textarea_error";  
                    }
                ?>
                <?php //echo form_textarea( array('class' => $t_class, 'id' => 'ObservacionesComite', 'name' => 'ObservacionesComite', 'rows' => '5', 'cols' => '80', 'value' => set_value('ObservacionesComite') ) )?>
                <textarea class="<?php echo $t_class; ?>" id="ObservacionesComite" name="ObservacionesComite"><?php echo set_value('ObservacionesComite'); ?></textarea>
        </p>
        <span>-	Si su Institución no tiene constituido un CEUA, deberá crearla. Su integración esta especificada en el Artículo 10 de la Ley Nº 18.611- “La Comisión de Ética en el Uso de Animales estará integrada al menos por: un médico veterinario, un docente o investigador, un representante de la comunidad local…”</span>
        <p>Indique fecha de constitución del CEUA y adjunte copia de la resolución de su institución*.</p>
        <!--<input type="file" name="copia_resolucion_institucion" id="copia_resolucion_institucion" class="file" />
        <input type="button" class="button button_short realizacion_field <?php echo $extra_r_class; ?>" value="adjuntar" />
        <div class="clear"></div>-->
        <input type="file" name="copia_resolucion_institucion" id="copia_resolucion_institucion" class="file" />
        <button class="adjuntar">Adjuntar</button>
        <div class="clear"></div>
            
        <h5>Persona de contacto de la Institución</h5>
        <p>
                <label for="NombreContacto">Nombre completo*</label>
                <input class="<?php echo (form_error('NombreContacto') != "")? "input_error" : "";?>" id="NombreContacto" type="text" name="NombreContacto"  value="<?php echo set_value('NombreContacto'); ?>"  />
        </p>
        <p>
                <label for="MailContacto">E-mail*</label>
                <input class="<?php echo (form_error('MailContacto') != "")? "input_error" : "";?>" id="MailContacto" type="text" name="MailContacto"  value="<?php echo set_value('MailContacto'); ?>"  />
        </p>
        <p>
                <label for="TelContacto">Teléfono de contacto*</label>
                <input class="<?php echo (form_error('TelContacto') != "")? "input_error" : "";?>" id="TelContacto" type="text" name="TelContacto"  value="<?php echo set_value('TelContacto'); ?>"  />
        </p>
        <h5>Responsable Institucional</h5>
        <span>Descargar hoja de firma, escanearla y adjuntarla luego de estar firmada*</span>
        <!--<input type="file" name="responsable_institucional" class="file">
        <button>Adjuntar</button>
        <div class="clear"></div>-->
        <input type="file" name="responsable_institucional" id="responsable_institucional" class="file" />
        <button class="adjuntar">Adjuntar</button>
        <a href="<?php echo site_url("instituciones/descargarFormularioInstitucion");?>" class="descargar descargar_forms">descargar</a>
        <div class="clear"></div>
        <input type="submit" class="button button_large" value="enviar formulario" />
    <?php echo form_close(); ?>
    <div class="clear"></div>
    <p>Por Consultas: <a href="mailto:secretaria@cnea.org.uy">secretaria@cnea.org.uy</a></p>
</div><!--CONTENT RIGHT-->