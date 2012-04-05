<div class="grid_16">
  <h2>Editar Contacto</h2>
  <?php echo form_error('direccion'); ?>
  <?php echo form_error('tipo'); ?>
  <?php echo form_error('nombre'); ?>
  <?php echo form_error('funcion'); ?>
</div>

<?php if(!is_null($object)): ?>
<?php
  $this->load->view('contacto/contactoadmin/form');
?>
<?php endif; ?>
<hr/>
<a href="<?php echo site_url('contacto/contactoadmin/index'); ?>"> Volver al indice </a>
