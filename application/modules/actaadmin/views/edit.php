<div class="grid_16">
  <h2>Editar acta</h2>
  <?php echo form_error('nombre'); ?>
  <?php
   if($this->session->flashdata('salvado') == "ok"):
  ?>
  	<p id="salvado_ok" class="success">Acta salvada</p>
  	
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
<h4>
  Tags
  <a class="fancy_link" href="<?php echo site_url('tags/index');?>">
    <img src="<?php echo base_url().'assets/upload/images/add.png'?>" />
  </a>
</h4>    


<?php echo modules::run('tags/viewActas', array('id' => $object->getId()));?>

<hr/>

<h4>Archivos</h4>

<?php echo modules::run('upload/view', array('id' => $object->getId(), 'classname'=> $object->getObjectClass()));?>
<?php endif; ?>
<hr/>
<a href="<?php echo site_url('actaadmin/index'); ?>"> Volver al indice </a>
