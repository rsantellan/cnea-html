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
              formulario para la acreditaciones de personas
            </td>
        </tr>
        <tr>
        	<td style="padding-bottom:10px; font-size:13px; font-weight:bold;text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#AB1917;">
              <?php echo lang("personal.formulario.subtitulo_identificacion"); ?>
            </td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Fecha:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $fecha;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Número registro CNEA:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left"><span style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Nombre y apellidos completos:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $nombre;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Dirección postal:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $postal;?></span></td>
       </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Dirección electrónica:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $email;?></span></td>
       </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Teléfonos de contacto:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $telefono;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Institución en la que se desempeña:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $institucion;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              Cargo / función en dicha institución:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $cargo;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              ¿Ha realizado cursos de capacitación relacionados a la experimentacióncon animales?:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $realizacion;?></span></td>
        </tr>
        <tr>
        	<td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">cursos realizados</td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              1:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $curso_1;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              2:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $curso_2;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              3:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $curso_3;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">Observaciones:</td>
        </tr>
        <tr>
        	<td><span style="font-size:12px; padding:0 0 10px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $observaciones_curso;?></span></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              ¿Posee acreditación personal para el trabajo con animales de experimentación?:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $acreditacion;?></span></td>
        </tr>
        <tr>
        	<td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">En caso de que posea acreditación</td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              institución que la expidió:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $acreditacion_institucion;?></span></td>
       </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              categoría que le fue adjudicada:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $acreditacion_categoria;?></span></td>
       </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">
              fecha de vencimiento de dicha acreditación:<span style="font-size:12px; padding:5px 0 5px 10px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $acreditacion_fecha;?></span></td>
       </tr>
        <tr>
        	<td style="padding:10px 0 10px 0; font-size:12px; font-weight:bold; text-transform:uppercase; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold;">Tipo de categoría de acreditación a la que aspira</td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left"><span style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"><?php echo $categoria_a;?><?php echo $categoria_b;?> <?php echo $categoria_c1;?> <?php echo $categoria_c2;?></span></td>
       </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">Resolución de la CNEA: <span style="font-size:10px; color:#999999;">(Espacio para uso exclusivo de la CNEA)</span></td>
        </tr>
        <tr>
        	<td style="font-size:12px; padding:0 0 5px 0; height:150px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"></td>
        </tr>
       <tr>
        	<td style="font-size:12px; padding:5px 0 5px 0; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; font-weight:bold; text-align:left">CATEGORIA ADJUDICADA: <span style="font-size:10px; color:#999999;">(Espacio para uso exclusivo de la CNEA)</span></td>
        </tr>
        <tr>
        	<td style="font-size:12px; padding:0 0 5px 0; height:150px; font-family:Lucida Grande, Lucida Sans Unicode, sans-serif; color:#353535; text-align:left; font-weight:normal;"></td>
        </tr>
    </table>
</body>
</html>
