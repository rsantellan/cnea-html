<div class="content_right img_personas">
  <h1><?php echo lang("personal_registro_titulo"); ?></h1>
  <div >
    <?php echo $errores;?>
  </div>
  <form action="<?php echo site_url('acreditaciones/verregistros');?>" method="POST">
    <h5><?php echo lang("personal_registro_elija_institucion"); ?></h5>
    <select name="institucion" name="institucion">
      <?php foreach($instituciones as $institucion): ?>
        <?php if($institucion->isactive == 1): ?>
          <option value="<?php echo $institucion->id; ?>"><?php echo $institucion->nombreinsititucion; ?></option>
        <?php endif; ?>
      <?php  endforeach; ?>
    </select>
    <label><?php echo lang("personal_registro_password"); ?></label>
    <input type="password" value="" name="password" />
    <input type="submit" value="<?php echo lang("personal_registro_buscar"); ?>" />
  </form>
</div>
<!--CONTENT RIGHT-->