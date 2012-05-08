<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CNEA | Comisi&oacute;n Nacional de Experimentaci&oacute;n Animal</title>
</head>
<body>
	<table cellpadding="0" cellspacing="0" style="width:800px; margin:25px;">
    	<tr>
        	<td style="width:800px"><img src="<?php echo base_url();?>assets/images/logo.jpg" /></td>
        </tr>
        <tr>
        	<td style="height:30px; padding:15px 0; font-size:18px; font-weight:bold;text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535;">
              <?php echo lang("instituciones_formulario_titulo"); ?>
            </td>
        </tr>
        <tr>
            <td style="padding-bottom:10px; font-size:13px; font-weight:bold;text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#AB1917;">
              <?php echo lang("instituciones_formulario_subtitulo_1"); ?>
            </td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_nombre_institucion"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $NombreInsititucion;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_razon_social"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $RazonSocial;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_rut"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $RUT;?></span></td>
       </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_naturaleza"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $Naturaleza;?></span></td>
       </tr>
       <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Caracterización Institucional</td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_1_nivel"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $PrimerNivel;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_2_nivel"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $SegundoNivel;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_3_nivel"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $TercerNivel;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_domicilio_institucional"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $DomicilioInstitucional;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_domicilio_fiscal"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $DomicilioFiscal;?></span></td>
        </tr>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Unidades dependientes en otra ubicación con animales de experimentación (indicar nombre, dirección y DICOSE de cada una)</td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_dicose"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $Dicose;?></span></td>
        </tr>
        <?php
          for($i=0; $i<count($UnidadesDependientes); $i++):
        ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $UnidadesDependientes[$i];?></span></td>
        </tr>
        <?php endfor; ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left"><span style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"></span></td>
        </tr>
        <tr>
            <td style="padding-bottom:10px; font-size:13px; font-weight:bold;text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#AB1917;">
              <?php echo lang("instituciones_formulario_subtitulo_2"); ?>
            </td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $TipoEstablecimiento;?></span></td>
        </tr>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Caracterización Institucional</td>
        </tr>
        <tr>
            <td style="padding-bottom:10px; font-size:13px; font-weight:bold;text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#AB1917;">
              <?php echo lang("instituciones_formulario_subtitulo_3"); ?>
            </td>
        </tr>
        <?php
          for($i=0; $i<count($Especie); $i++):
        ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_nombre_especie"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $Especie[$i]['nombre'];?> (<?php if(!empty($Especie[$i]['tipo_especie_1'])) echo $Especie[$i]['tipo_especie_1'];?><?php if(!empty($Especie[$i]['tipo_especie_1']) && !empty($Especie[$i]['tipo_especie_2'])) echo ' , ';?><?php if(!empty($Especie[$i]['tipo_especie_2'])) echo $Especie[$i]['tipo_especie_2'];?>)</span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_especies_observaciones"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $Especie[$i]['observaciones'];?></span></td>
        </tr>
        <?php endfor; ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left"><span style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"></span></td>
        </tr>
        <tr>
            <td style="padding-bottom:10px; font-size:13px; font-weight:bold;text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#AB1917;">
              <?php echo lang("instituciones_formulario_subtitulo_4"); ?>
            </td>
        </tr>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;"><?php echo lang("instituciones_formulario_strong_text_4"); ?></td>
        </tr>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;"><?php echo lang("instituciones_formulario_strong_text_5"); ?></td>
        </tr>
        <?php
          for($i=0; $i<count($ComiteDocente); $i++):
        ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_docente_nombre_apellido"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteDocente[$i]['nombre'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_docente_profesion"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteDocente[$i]['profesion'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_docente_profesion"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteDocente[$i]['ocupacion'];?></span></td>
        </tr>
        <?php endfor; ?>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Veterinario</td>
        </tr>
        <?php
          for($i=0; $i<count($ComiteVeterinario); $i++):
        ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_veterinario_nombre_apellido"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteVeterinario[$i]['nombre'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_veterinario_profesion"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteVeterinario[$i]['profesion'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_veterinario_ocupacion"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteVeterinario[$i]['ocupacion'];?></span></td>
        </tr>
        <?php endfor; ?>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Sociedad Civil</td>
        </tr>
        <?php
          for($i=0; $i<count($ComiteSociedad); $i++):
        ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_sociedades_nombre_apellido"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteSociedad[$i]['nombre'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_sociedades_profesion"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteSociedad[$i]['profesion'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_sociedades_ocupacion"); ?> <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteSociedad[$i]['ocupacion'];?></span></td>
        </tr>
        <?php endfor; ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_sociedad_civil_observaciones"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ObservacionesComite;?></span></td>
        </tr>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Persona de contacto de la Institución</td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_persona_contacto_nombre_completo"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $NombreContacto;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_persona_contacto_email"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $MailContacto;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              <?php echo lang("instituciones_formulario_persona_contacto_telefono"); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $TelContacto;?></span></td>
       </tr>
    </table>
</body>
</html>
