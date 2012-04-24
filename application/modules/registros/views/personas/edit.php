<div class="grid_16">
  <h2>Editar Registro</h2>
  <?php echo form_error('name'); ?>
  <?php echo form_error('code'); ?>
  <?php echo form_error('email'); ?>
  <?php
   if($this->session->flashdata('salvado') == "ok"):
  ?>
  	<p id="salvado_ok" class="success">Registro salvado</p>
  	
  	<script type="text/javascript">
 		$(document).ready(function() {
 			$("#salvado_ok").fadeOut(3000);
 		});
 	</script>
  <?php endif; ?>  
</div>

<?php if(!is_null($object)): ?>
<?php
  $this->load->view('registros/personas/form');
?>
<?php endif; ?>
<hr/>
<a href="<?php echo site_url('registros/index'); ?>"> Volver al indice </a>
