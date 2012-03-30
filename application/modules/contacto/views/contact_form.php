<div class="content_right img_contacto">
    <h1>Contacto</h1>
    <p>Para ponerse en contacto con nosotros, por favor completar el siguiente formulario. <br />Los campos con asterico(*) son requeridos.</p>
    <?php
    $attributes = array('class' => 'infield_form', 'id' => '');
    echo form_open('contacto', $attributes); ?>    
    
        <p>
          <label for="nombre">Nombre y Apellido *</label><br />
          <input id="nombre" type="text" name="nombre" maxlength="255" value="<?php echo set_value('nombre'); ?>"  />
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
          <input id="email" type="text" name="email" maxlength="255" value="<?php echo set_value('email'); ?>"  />
        </p>
        <p>
          <label for="comentario">Consulta</label><br />
          <?php echo form_textarea( array('id' => 'comentario', 'name' => 'comentario', 'rows' => '5', 'cols' => '80', 'value' => set_value('comentario') ) )?>
        </p>
        <?php echo form_submit( 'submit', 'enviar formulario', 'class="button button_large"'); ?>
<!--
        <input type="text" name="NombreApellido" value="Nombre y Apellido *" />
        <input type="text" name="Institucion" value="Institución" />
        <input type="text" name="Telefono" value="Teléfono" />
        <input type="text" name="Celular" value="Celular" />
        <input type="text" name="Email" value="Correo Electrónico *" />
        <textarea name="Consulta">Consulta</textarea>
        <input type="submit" class="button button_large" value="enviar formulario" />
-->
    <?php echo form_close(); ?>
    <div class="clear"></div>
    <p><a href="#" style="float:right">Descargar formulario de denunacias</a></p>
</div><!--CONTENT RIGHT-->

<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
//echo form_open('contacto', $attributes); ?>
<?php 
var_dump(form_error('nombre'));
?>
<p>
        <label for="nombre">nombre <span class="required">*</span></label>
        <?php echo form_error('nombre'); ?>
        <br /><input id="nombre" type="text" name="nombre" maxlength="255" value="<?php echo set_value('nombre'); ?>"  />
</p>

<p>
        <label for="email">email <span class="required">*</span></label>
        <?php echo form_error('email'); ?>
        <br /><input id="email" type="text" name="email" maxlength="255" value="<?php echo set_value('email'); ?>"  />
</p>

<p>
        <label for="telefono">telefono</label>
        <?php echo form_error('telefono'); ?>
        <br /><input id="telefono" type="text" name="telefono" maxlength="255" value="<?php echo set_value('telefono'); ?>"  />
</p>

<p>
        <label for="comentario">comentario <span class="required">*</span></label>
	<?php echo form_error('comentario'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'comentario', 'rows' => '5', 'cols' => '80', 'value' => set_value('comentario') ) )?>
</p>

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php //echo form_close(); ?>