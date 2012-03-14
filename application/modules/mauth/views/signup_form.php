<?php
// Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('mauth/signup', $attributes);
?>

<p>
  <label for="name">Nombre<span class="required">*</span></label>
<?php echo form_error('name'); ?>
  <br /><input id="name" type="text" name="name" maxlength="255" value="<?php echo set_value('name'); ?>"  />
</p>

<p>
  <label for="lastname">Apellido<span class="required">*</span></label>
<?php echo form_error('lastname'); ?>
  <br /><input id="last_name" type="text" name="lastname" maxlength="255" value="<?php echo set_value('lastname'); ?>"  />
</p>

<p>
  <label for="user">Usuario<span class="required">*</span></label>
<?php echo form_error('user'); ?>
  <br /><input id="user" type="text" name="user" maxlength="25" value="<?php echo set_value('user'); ?>"  />
</p>

<p>
  <label for="password">Contraseña<span class="required">*</span></label>
<?php echo form_error('password'); ?>
  <br /><input id="password" type="password" name="password" maxlength="255" value="<?php echo set_value('password'); ?>"  />
</p>

<p>
  <label for="confirm_password">Repita Contraseña<span class="required">*</span></label>
<?php echo form_error('confirm_password'); ?>
  <br /><input id="password" type="password" name="confirm_password" maxlength="255" value="<?php echo set_value('confirm_password'); ?>"  />
</p>

<p>
  <label for="email">Email<span class="required">*</span></label>
<?php echo form_error('email'); ?>
  <br /><input id="email" type="text" name="email" maxlength="255" value="<?php echo set_value('email'); ?>"  />
</p>

<p>
  <label for="mobile">Celular</label>
<?php echo form_error('mobile'); ?>
  <br /><input id="mobile" type="text" name="mobile" maxlength="255" value="<?php echo set_value('mobile'); ?>"  />
</p>


<p>
<?php echo form_submit('submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
