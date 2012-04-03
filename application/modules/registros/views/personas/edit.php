<div class="grid_16">
  <h2>Editar Registro</h2>
  <?php echo form_error('name'); ?>
  <?php echo form_error('code'); ?>
  <?php echo form_error('email'); ?>
</div>

<?php if(!is_null($object)): ?>
<?php
  $this->load->view('registros/personas/form');
?>
<?php endif; ?>
<hr/>
<a href="<?php echo site_url('registros/index'); ?>"> Volver al indice </a>
