<div class="grid_16">
  <h2>Editar Registro</h2>
  <?php echo form_error('name'); ?>
  <?php echo form_error('code'); ?>
  <?php echo form_error('url'); ?>
</div>

<?php if(!is_null($object)): ?>
<?php
  $this->load->view('registros/instituciones/form');
?>
<?php endif; ?>
<hr/>
<a href="<?php echo site_url('registros/instituciones'); ?>"> Volver al indice </a>
