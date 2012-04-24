<div class="grid_16">
  <h2>Editar novedad</h2>
  <?php echo form_error('nombre'); ?>
  <?php echo form_error('descripcion'); ?>
  <?php
   if($this->session->flashdata('salvado') == "ok"):
  ?>
  	<p id="salvado_ok" class="success">Novedad salvada</p>
  	
  	<script type="text/javascript">
 		$(document).ready(function() {
 			$("#salvado_ok").fadeOut(3000);
 		});
 	</script>
  <?php endif; ?>  
</div>



<?php if(!is_null($object)): ?>
<?php
  $this->load->view('form');
?>

<hr/>

<hr/>
<h4>
  Tags
  <a class="fancy_link" href="<?php echo site_url('tags/index');?>">
    <img src="<?php echo base_url().'assets/upload/images/add.png'?>" />
  </a>
</h4>    


<?php echo modules::run('tags/viewNovedades', array('id' => $object->getId()));?>

<hr/>

<h4>Imagenes</h4>

<?php echo modules::run('upload/view', array('id' => $object->getId(), 'classname'=> $object->getObjectClass()));?>

<?php endif; ?>
<hr/>
<a href="<?php echo site_url('novedadesadmin/index'); ?>"> Volver al indice </a>
