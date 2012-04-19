<div class="content_right img_novedades">
    <h1><?php echo lang("novedades_titulo"); ?></h1>
    <?php foreach($list as $novedad): ?>
      <div class="novedades_lisado">
          <h4><?php echo $novedad->getNombre();?></h4>
          <?php echo character_limiter($novedad->getDescripcion(), 350);?>
          <a href="<?php echo site_url("novedades/detalle/".$novedad->getId());?>" target="_blank"><?php echo lang("novedades_ver_mas"); ?></a>
      </div>
    <?php endforeach; ?>
    <div class="paginador">
      <?php echo $this->pagination->create_links(); ?>
    </div>
</div>
<!--CONTENT RIGHT-->

<?php 
//echo html_entity_decode("<p>En el segundo semestre de 2011, la CNEA realiz&oacute; un llamado a concurso para el dise&ntilde;o de su logotipo. Luego de un dif&iacute;cil proceso de selecci&oacute;n entre las 16 propuestas  recibidas, el tribunal integrado por las representantes de la CNEA Cecilia Scorza y Ana Silva, el representante del Departamento de Inform&aacute;tica de la DICYT Leonardo Latorre  y la especialista en dise&ntilde;o gr&aacute;fico Carolina Curbelo, pre-seleccion&oacute; dos propuestas finalistas en base a la adecuaci&oacute;n de la propuesta a la misi&oacute;n de la CNEA y a criterios est&eacute;ticos y de formato: los logotipos presentados bajo los seud&oacute;nimos &ldquo;Karra&rdquo; y &ldquo;Nicolai&rdquo; por Sebasti&aacute;n Santana y Nicol&aacute;s Barrios, respectivamente.  En la sesi&oacute;n del 13 de diciembre de 2011, la CNEA seleccion&oacute; el logotipo que hoy la representa y otorg&oacute; el premio de US$500 a su creador,  Sebastian Santana.</p>", ENT_COMPAT | 0, 'UTF-8');
?>