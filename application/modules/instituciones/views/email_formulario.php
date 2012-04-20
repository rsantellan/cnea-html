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
              formulario para el registro nacional de instituciones
            </td>
        </tr>
        <tr>
            <td style="padding-bottom:10px; font-size:13px; font-weight:bold;text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#AB1917;">
              1- IDENTIFICACIÓN INSTITUCIONAL
            </td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Nombre de la Institución:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $NombreInsititucion;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Razón Social:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $RazonSocial;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              RUT:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $RUT;?></span></td>
       </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Naturaleza:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $Naturaleza;?></span></td>
       </tr>
       <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Caracterización Institucional</td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              1º NIVEL* (por ejemplo UdelR):<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $PrimerNivel;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              2º NIVEL* (por ejemplo Facultad de Ciencias Sociales):<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $SegundoNivel;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              3º NIVEL* (por ejemplo Departamento de Economía):<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $TercerNivel;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Domicilio Institucional:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $DomicilioInstitucional;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Domicilio Fiscal (si corresponde):<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $DomicilioFiscal;?></span></td>
        </tr>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Unidades dependientes en otra ubicación con animales de experimentación (indicar nombre, dirección y DICOSE de cada una)</td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              DICOSE (si corresponde):<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $Dicose;?></span></td>
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
              2- TIPO DE ESTABLECIMIENTO
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
              3- ESPECIES CRIADAS Y/O UTILIZADAS* (si es necesario, agregue más filas)
            </td>
        </tr>
        <?php
          for($i=0; $i<count($Especie); $i++):
        ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Nombre de Especie <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $Especie[$i]['nombre'];?> (<?php echo $Especie[$i]['tipo_especie'];?>)</span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Observaciones <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $Especie[$i]['observaciones'];?></span></td>
        </tr>
        <?php endfor; ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left"><span style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"></span></td>
        </tr>
        <tr>
            <td style="padding-bottom:10px; font-size:13px; font-weight:bold;text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#AB1917;">
              4- COMITÉ DE ÉTICA EN EL USO DE ANIMALES (CEUA)*
            </td>
        </tr>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Indique su integración</td>
        </tr>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Docente / Investigador</td>
        </tr>
        <?php
          for($i=0; $i<count($ComiteDocente); $i++):
        ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Nombre y Apellido <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteDocente[$i]['nombre'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Profesión <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteDocente[$i]['profesion'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Ocupación <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteDocente[$i]['ocupacion'];?></span></td>
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
              Nombre y Apellido <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteVeterinario[$i]['nombre'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Profesión <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteVeterinario[$i]['profesion'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Ocupación <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteVeterinario[$i]['ocupacion'];?></span></td>
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
              Nombre y Apellido <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteSociedad[$i]['nombre'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Profesión <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteSociedad[$i]['profesion'];?></span></td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Ocupación <?php echo ($i+1); ?>:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ComiteSociedad[$i]['ocupacion'];?></span></td>
        </tr>
        <?php endfor; ?>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Observaciones:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ObservacionesComite;?></span></td>
        </tr>
        <tr>
                <td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Persona de contacto de la Institución</td>
        </tr>
        <tr>
                <td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Observaciones:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $ObservacionesComite;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Nombre completo:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $NombreContacto;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              E-mail:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $MailContacto;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Teléfono de contacto:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $TelContacto;?></span></td>
       </tr>
    </table>
</body>
</html>
