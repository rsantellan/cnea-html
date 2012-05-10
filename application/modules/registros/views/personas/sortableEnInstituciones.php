<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Sortable</title>
        <script type="text/javascript" src="<?php echo base_url() . "assets/js/jquery-1.7.1.min.js";?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . "assets/js/jquery-ui-1.8.16.custom.min.js";?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . "assets/registros/js/sortableInstituciones.js";?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/eggplant/jquery-ui-1.8.18.custom.css";?>" />
        <style>
          #sortable { 
            list-style-type: none; 
            margin-left: auto;
            margin-right: auto;
            padding: 0; 
            width: 80%; 
          }
          #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 0.6em; height: 18px; }
          #sortable li span { position: absolute; margin-left: -1.3em; }
          h1{
            margin-left: auto;
            margin-right: auto;
            width: 35%;
          }
        </style>
	</head>
  <body>
    
    <h1>Ordenar Personas</h1>
    
    <span>Seleccionar una institucion</span>
    <select id="instituciones" onchange="traerPersonasInstitucion()">
      <option value=""></option>
      <?php foreach($instituciones as $institucion):?>
        <option value="<?php echo $institucion->name;?>"><?php echo $institucion->name;?></option>
      <?php endforeach; ?>
    </select>
    
    <div id="sortable_holder">
      
    </div>
    
    
    
    <input type="hidden" id="sort_ajax" value="<?php echo site_url("registros/applySortPersona");?>" />
    <input type="hidden" id="bring_ajax" value="<?php echo site_url("registros/bringPersonaInstitucion");?>" />
  </body>
</html>
