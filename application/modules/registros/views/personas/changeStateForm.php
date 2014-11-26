<div style="width: 250px; text-align: center;">
  <h3>Cambiar estado</h3>
  <form action="<?php echo site_url('registros/doChangeEstado');?>" method="POST" onsubmit="return doChangeFormState(this);">
    <label for="estado">Estado:</label>
    <select id="estado" name="estado">
      <?php foreach($estados as $key => $text): ?>
      <option value="<?php echo $key;?>" <?php echo ($key == $acreditacion->getEstado()) ? 'selected="selected"' : ''; ?>><?php echo $text;?></option>
      <?php endforeach; ?>
    </select>
    <div class="clear"></div>
    <textarea name="emailcontent" columns="10" rows="10">
      Le informamos que el estado de su acreditación cambio a: {{status}}
    </textarea>
    <input type="hidden" name="id" value="<?php echo $acreditacion->getId();?>"/>
    <div class="clear"></div>
    <input type="submit" value="Cambiar estado" />
  </form>
  <div id="messagescontainer" style="color:greenyellow">

  </div>
</div>