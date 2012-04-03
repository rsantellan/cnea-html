<div class="grid_16">
  <h2>Agregar Registro</h2>
  <?php echo form_error('name'); ?>
  <?php echo form_error('code'); ?>
  <?php echo form_error('email'); ?>
</div>
<?php
  $this->load->view('registros/personas/form');
?>

<hr/>

<a href="<?php echo site_url('registros/index'); ?>"> Volver al indice </a>
