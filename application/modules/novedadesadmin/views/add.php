<div class="grid_16">
  <h2>Agregar acta</h2>
  <?php echo form_error('nombre'); ?>
  <?php echo form_error('descripcion'); ?>
</div>
<?php
  $this->load->view('form');
?>

<hr/>

<a href="<?php echo site_url('novedadesadmin/index'); ?>"> Volver al indice </a>
