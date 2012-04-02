<div class="grid_16">
  <h2>Editar <?php echo $texto;?></h2>
  <?php echo form_error('nombre'); ?>
</div>
<?php
  $this->load->view('form');
?>

<hr/>
<a href="<?php echo site_url('interesesadmin/index'); ?>"> Volver al indice </a>
