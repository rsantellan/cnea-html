<div class="grid_16">
  <h2>Editar acta</h2>
  <?php echo form_error('nombre'); ?>
</div>
<?php if(!is_null($object)): ?>
<?php
  $this->load->view('form');
?>

<hr/>
<h4>Imagenes</h4>

<?php echo modules::run('upload/view', array('id' => $object->getId(), 'classname'=> $object->getObjectClass()));?>
<?php endif; ?>
<hr/>
<a href="<?php echo site_url('actaadmin/index'); ?>"> Volver al indice </a>
