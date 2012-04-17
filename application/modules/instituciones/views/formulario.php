<div class="content_right img_instituciones">
    <h1>formulario para el registro nacional de instituciones</h1>
    <h5>Los campos con asterisco (*) son requeridos para enviar la solicitud</h5>
    <?php echo form_open_multipart('instituciones/formulario', array('class' => 'infield_form', 'id' => '')); ?>
        <h4>1- IDENTIFICACIÓN INSTITUCIONAL</h4>
        <input type="text" name="NombreInsititucion" value="Nombre de la Institución*" />
        <input type="text" name="RazonSocial" value="Razón Social" />
        <input type="text" name="RUT" value="RUT" />
        <div class="select" style="margin-bottom:3px">
            <select name="Naturaleza">
                <option value="" selected="selected">Naturaleza*</option>
                <option>Pública</option>
                <option>Privada</option>
                <option>Mixta</option>
            </select>
        </div>
        <span>Seleccionar uno de los tres tipos de naturaleza</span>
        <h5>Caracterización Institucional*</h5>
        <input type="text" name="PrimerNivel" value="1º NIVEL* (por ejemplo UdelR) " />
        <input type="text" name="SegundoNivel" value="2º NIVEL* (por ejemplo Facultad de Ciencias Sociales) " />
        <input type="text" name="TercerNivel" value="3º NIVEL* (por ejemplo Departamento de Economía) " />
        <span>En el primer nivel ingrese la denominación más general de la institución para luego avanzar en el grado de especificación. Por ejemplo 1º UDELAR - 2º Facultad de Ciencias Sociales - 3º Departamento de Economía.</span>
        <input type="text" name="DomicilioInstitucional" value="Domicilio Institucional*" />
        <input type="text" name="DomicilioFiscal" value="Domicilio Fiscal (si corresponde)" />
        <h5>Unidades dependientes en otra ubicación con animales de experimentación (indicar nombre, dirección y DICOSE de cada una)</h5>
        <input type="text" name="Dicose" value="DICOSE (si corresponde)" />
        <input type="text" name="UnidadesDependientes1" value="1" />
        <input type="text" name="UnidadesDependientes2" value="2" />
        <input type="text" name="UnidadesDependientes3" value="3" />
        <input type="text" name="UnidadesDependientes4" value="4" />
        <h4>2- TIPO DE ESTABLECIMIENTO*</h4>
        <div class="float_left" style="margin-right:120px;"><label>Cría</label><input type="radio" class="radiobuttom" name="TipoEstablecimiento" value="Cria" checked="checked" /></div>
        <div class="float_left"><label>Experimientación</label><input type="radio" class="radiobuttom" name="TipoEstablecimiento" value="Experimentación" /></div>
        <div class="float_right"><label>Mixto</label><input type="radio" class="radiobuttom" name="TipoEstablecimiento" value="Mixto"/></div>
        <div class="clear"></div>
        <h4>3- ESPECIES CRIADAS Y/O UTILIZADAS* (si es necesario, agregue más filas)</h4>
        <input type="text" name="NombreEspecie_1" class="input_short" value="Nombre de Especie" /><div class="float_right"><label style="margin:5px;">USO</label><input type="checkbox" class="input_checkbox" /><label style="margin:5px 5px 5px 15px;">CRÍA</label><input type="checkbox" class="input_checkbox" /></div>
        <div class="clear"></div>
        <textarea name="ObservacionesEspecie_1">Observaciones</textarea>
        <input type="text" name="NombreEspecie_2" class="input_short" value="Nombre de Especie" /><div class="float_right"><label style="margin:5px;">USO</label><input type="checkbox" class="input_checkbox" /><label style="margin:5px 5px 5px 15px;">CRÍA</label><input type="checkbox" class="input_checkbox" /></div>
        <div class="clear"></div>
        <textarea name="ObservacionesEspecie_2">Observaciones</textarea>
        <input type="text" name="NombreEspecie_3" class="input_short" value="Nombre de Especie" /><div class="float_right"><label style="margin:5px;">USO</label><input type="checkbox" class="input_checkbox" /><label style="margin:5px 5px 5px 15px;">CRÍA</label><input type="checkbox" class="input_checkbox" /></div>
        <div class="clear"></div>
        <textarea name="ObservacionesEspecie_3">Observaciones</textarea>
        <a href="#" style="float:right">Agregar más</a><div class="clear"></div>
        <h4>4- COMITÉ DE ÉTICA EN EL USO DE ANIMALES (CEUA)*</h4>
        <h5>Indique su integración</h5>
        <h5>Docente / Investigador</h5>
        <input type="text" name="NombreApellido_1" value="Nombre y Apellido" class="input_comite_name" /><input type="text" name="Profesion_1" value="Profesión" class="input_comite_short" /><input type="text" name="Ocupacion_1" value="Ocupación" class="input_comite_short" />
        <a href="#" style="float:right">Agregar más</a><div class="clear"></div>
        <h5>Veterinario</h5>
        <input type="text" name="NombreApellido_2" value="Nombre y Apellido" class="input_comite_name" /><input type="text" name="Profesion_2" value="Profesión" class="input_comite_short" /><input type="text" name="Ocupacion_2" value="Ocupación" class="input_comite_short" />
        <a href="#" style="float:right">Agregar más</a><div class="clear"></div>
        <h5>Sociedad Civil</h5>
        <input type="text" name="NombreApellido_3" value="Nombre y Apellido" class="input_comite_name" /><input type="text" name="Profesion_3" value="Profesión" class="input_comite_short" /><input type="text" name="Ocupacion_3" value="Ocupación" class="input_comite_short" />
        <a href="#" style="margin-bottom:10px; float:right;">Agregar más</a><div class="clear"></div>
        <textarea name="ObservacionesComite">Observaciones</textarea>
        <span>-	Si su Institución no tiene constituido un CEUA, deberá crearla. Su integración esta especificada en el Artículo 10 de la Ley Nº 18.611- “La Comisión de Ética en el Uso de Animales estará integrada al menos por: un médico veterinario, un docente o investigador, un representante de la comunidad local…”</span>
        <p>Indique fecha de constitución del CEUA y adjunte copia de la resolución de su institución*.</p>
        <input type="file" name="copia_resolucion_institucion" class="file">
        <button>Adjuntar</button>
        <div class="clear"></div>
        <h5>Persona de contacto de la Institución</h5>
        <input type="text" name="NombreContacto" value="Nombre completo*" />
        <input type="text" name="MailContacto" value="E-mail*" />
        <input type="text" name="TelContacto" value="Teléfono de contacto*" />
        <h5>Responsable Institucional</h5>
        <span>Descargar hoja de firma, escanearla y adjuntarla luego de estar firmada*</span>
        <input type="file" name="responsable_institucional" class="file">
        <button>Adjuntar</button>
        <a href="#" class="descargar descargar_forms">descargar</a>
        <div class="clear"></div>
        <input type="submit" class="button button_large" value="enviar formulario" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('button').bind('click', function() {
        $('input[type="file"]').trigger('click');
    });
    $('input[type="file"]').bind('change', function() {
        $('#submit-btn').trigger('click');
    });
});
</script>
    </form>
    <div class="clear"></div>
    <p>Por Consultas: <a href="mailto:secretaria@cnea.org.uy">secretaria@cnea.org.uy</a></p>
</div><!--CONTENT RIGHT-->