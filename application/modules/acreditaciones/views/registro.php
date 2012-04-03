<div class="content_right img_personas">
    <h1><?php echo lang("personal.registro.titulo"); ?></h1>
	<?php if(count($list) == 0): ?>
	  <?php echo lang("personal.registro.contenido_vacio"); ?>
	<?php else: ?>
	  <h2><?php echo lang("personal.registro.contenido_vacio"); ?></h2>
	<?php foreach($list as $registro): ?>
		<div class="registradas">
			<strong>1) Fundación IRAUy</strong><br />
			código: 001/11 | <a href="http://www.irauy.org.uy" target="_blank">www.irauy.org.uy</a>
		</div>
	<?php endforeach; ?>
	<?php endif; ?>
    
</div>
<!--CONTENT RIGHT-->