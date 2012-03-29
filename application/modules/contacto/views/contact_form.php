<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('contacto', $attributes); ?>

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

<?php echo form_close(); ?>