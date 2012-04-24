<div class="grid_16">
  <h2>Editar <?php echo $texto;?></h2>
  <?php echo form_error('nombre'); ?>
  <?php echo form_error('link'); ?>
  <?php
   if($this->session->flashdata('salvado') == "ok"):
  ?>
  	<p id="salvado_ok" class="success"><?php echo $texto;?> salvado</p>
  	
  	<script type="text/javascript">
 		$(document).ready(function() {
 			$("#salvado_ok").fadeOut(3000);
 		});
 	</script>
  <?php endif; ?>
</div>
<?php
  $this->load->view('form');
?>

<hr/>
<a href="<?php echo site_url('interesesadmin/index'); ?>"> Volver al indice </a>
