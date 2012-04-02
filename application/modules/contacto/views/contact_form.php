<div class="content_right img_contacto">
    <h1>Contacto</h1>
    <p>Para ponerse en contacto con nosotros, por favor completar el siguiente formulario. <br />Los campos con asterico(*) son requeridos.</p>
    <?php
    $attributes = array('class' => 'infield_form', 'id' => '');
    echo form_open('contacto', $attributes); ?>    
    
        <p>
          <label for="nombre">Nombre y Apellido *</label><br />
          <input class="<?php echo (form_error('nombre') != "")? "input_error" : "";?>" id="nombre" type="text" name="nombre" maxlength="255" value="<?php echo set_value('nombre'); ?>"  />
        </p>        
        <p>
          <label for="institucion">Institución</label><br />
          <input id="institucion" type="text" name="institucion" maxlength="255" value="<?php echo set_value('institucion'); ?>"  />
        </p>           
        <p>
          <label for="telefono">Teléfono</label><br />
          <input id="telefono" type="text" name="telefono" maxlength="255" value="<?php echo set_value('telefono'); ?>"  />
        </p>
        <p>
          <label for="celular">Celular</label><br />
          <input id="celular" type="text" name="celular" maxlength="255" value="<?php echo set_value('celular'); ?>"  />
        </p>        
        <p>
          <label for="email">Correo Electrónico *</label><br />
          <input class="<?php echo (form_error('email') != "")? "input_error" : "";?>" id="email" type="text" name="email" maxlength="255" value="<?php echo set_value('email'); ?>"  />
        </p>
        <p>
          <label for="comentario">Consulta</label><br />
          <?php 
            $t_class = ""; 
            if(form_error('email') != "")
            {
              $t_class = "textarea_error";  
            }
          ?>
          <?php echo form_textarea( array('class' => $t_class, 'id' => 'comentario', 'name' => 'comentario', 'rows' => '5', 'cols' => '80', 'value' => set_value('comentario') ) )?>
        </p>
        <?php echo form_submit( 'submit', 'enviar formulario', 'class="button button_large"'); ?>
    <?php echo form_close(); ?>
    <div class="clear"></div>
    <p><a href="#" style="float:right">Descargar formulario de denunacias</a></p>
</div><!--CONTENT RIGHT-->