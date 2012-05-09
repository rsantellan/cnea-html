<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('registros/savePersona', $attributes); ?>

<input id="id" type="hidden" name="id"  value="<?php echo $object->getId() ?>"  />



<div class="grid_5">
  <p>
    <label for="name">Nombre Institución <small>Requerido</small></label>
    <input id="institucion" type="text" name="name" maxlength="255" value="<?php echo $object->getNombre() ?>" />
  </p>
</div>
<div class="grid_5">
  <p>
    <label for="code">Nombre Persona<small>Requerido</small></label>
    <input type="text" name="code" maxlength="255" value="<?php echo $object->getCode() ?>" />
  </p>
</div>
<div class="clear"></div>
<div class="grid_5">
  <p>
    <label for="email">Email</label>
    <input type="text" name="email" maxlength="255" value="<?php echo $object->getEmail() ?>" />
  </p>
</div>
<div class="grid_16">
  <p class="submit">
    <?php echo form_submit( 'submit', 'Guardar'); ?>
  </p>
</div>
<?php echo form_close(); ?>


<?php 
$script = "";
// create script string to append to content. First create the value array in JavaScript.
$script = $script . "\n" . '<script type="text/javascript"> '. "\nvar lcValues = new Array(";
$counter = 0;
foreach ($list as $name){
	if ($counter < (count($list)-1)){
		$script = $script . "'".$name->name. "'" . ',';
	}
	else {
		$script = $script. "'" . $name->name. "'" . ");\n";
	}
	$counter++;
}

$script .= "</script>";
echo $script;
?>

