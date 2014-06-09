<h3>Cambiar estado</h3>
<form action="<?php echo site_url('registros/doChangeEstado');?>" method="POST" onsubmit="return doChangeFormState(this);">
  <label for="estado">Estado:</label>
  <select id="estado" name="estado">
	<?php foreach($estados as $key => $text): ?>
	<option value="<?php echo $key;?>" <?php echo ($key == $acreditacion->getEstado()) ? 'selected="selected"' : ''; ?>><?php echo $text;?></option>
	<?php endforeach; ?>
  </select>
  <input type="hidden" name="id" value="<?php echo $acreditacion->getId();?>"/>
  <input type="submit" value="Cambiar estado" />
</form>
<div id="messagescontainer" style="color:greenyellow">
  
</div>