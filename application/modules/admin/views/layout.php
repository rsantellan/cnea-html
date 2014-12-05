<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Administrador</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/admin/css/960.css";?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/admin/css/template.css";?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/admin/css/colour.css";?>" />

      <?php if($jquery_on || true): ?>
        <script type="text/javascript" src="<?php echo base_url() . "assets/js/jquery-1.7.1.min.js";?>"></script>
      <?php endif; ?>
	  <?php if($jquery_ui_on): ?>
        <script type="text/javascript" src="<?php echo base_url() . "assets/js/jquery-ui-1.8.16.custom.min.js";?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/le-frog/jquery-ui-1.8.16.custom.css";?>" />
      <?php endif; ?>
      <?php if($fancybox_on): ?>
        <script type="text/javascript" src="<?php echo base_url() . "assets/js/fancybox/jquery.fancybox-1.3.4.pack.js";?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . "assets/js/fancybox/jquery.mousewheel-3.0.4.pack.js";?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/js/fancybox/jquery.fancybox-1.3.4.css";?>" />
      <?php endif; ?>
        
      <?php foreach($javascript as $js): ?>
        <script type="text/javascript" src="<?php echo base_url() ."assets/js/".$js; ?>"></script>
      <?php endforeach; ?>
		
      <?php foreach($stylesheet as $sheet): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ."assets/css/".$sheet;?>" />
      <?php endforeach; ?>
      <script type="text/javascript" src="<?php echo base_url() ."assets/admin/superfish/js/hoverIntent.js"; ?>"></script>
      <script type="text/javascript" src="<?php echo base_url() ."assets/admin/superfish/js/superfish.js"; ?>"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ."assets/admin/superfish/css/superfish.css";?>" />  
      <!-- Menu drop down-->  
<!--      <script type="text/javascript" src="<?php echo base_url() . "assets/admin/js/dropdown_menu.js";?>"></script>-->
	</head>
	<body>
      <div class="header_div">
        <label>Administrador</label>
<!--        <h1 id="head">Administrador</h1>-->
        <img src="<?php echo base_url();?>assets/images/logo.jpg" />
      </div>
      <div class="menu_container">
        <ul id="superfish-menu" class="sf-menu">
          <li class="<?php echo ($menu_id == 'dashboard')? "current": "";?>"><a href="<?php echo site_url('admin/index');?>">Dashboard</a></li>
          <li class="<?php echo ($menu_id == 'fsadfx')? "current": "";?>"><a href="<?php echo site_url('language/index');?>">Textos</a></li>

          <li class="<?php echo ($menu_id == 'actas' || $menu_id == 'novedades' || $menu_id == 'intereses' )? "current": "";?>">
            <a href="javascript:void(0)">Contenidos publicos</a>
            <ul>
              <li class="<?php echo ($menu_id == 'actas')? "current": "";?>"><a href="<?php echo site_url('actaadmin/index');?>">Actas</a></li>
              <li class="<?php echo ($menu_id == 'novedades')? "current": "";?>"><a href="<?php echo site_url('novedadesadmin/index');?>">Novedades</a></li>
              <li class="<?php echo ($menu_id == 'intereses' )? "current": "";?>"><a href="<?php echo site_url('interesesadmin/index');?>">Intereses</a></li>
            </ul>
          </li>
          <li class="<?php echo ($menu_id == 'registros_personas' || $menu_id == 'registros_instituciones')? "current": "";?>">
            <a href="javascript:void(0)">Registros</a>
            <ul>
              <li class="<?php echo ($menu_id == 'registros_personas' )? "current": "";?>">
                <a href="<?php echo site_url('registros/index');?>">Registro Personas</a>
              </li>
              <li class="<?php echo ($menu_id == 'registros_personas' )? "current": "";?>">
                <a href="<?php echo site_url('registros/acreditacionNextToExpire');?>">Registro Personas cerca de expirar o expirados hace menos de 3 meses</a>
              </li>
              <li class="<?php echo ($menu_id == 'registros_personas' )? "current": "";?>">
                <a href="<?php echo site_url('registros/acreditacionInactive');?>">Registro Personas Vencidos </a>
              </li>
              <li class="<?php echo ($menu_id == 'registros_personas' )? "current": "";?>">
                <a href="<?php echo site_url('registros/acreditacionNew');?>">Registro Personas Nuevas</a>
              </li>
              <li class="<?php echo ($menu_id == 'registros_instituciones')? "current": "";?>">
                <a href="<?php echo site_url('registros/instituciones');?>">Registro Instituciones</a>
              </li>
              <li class="<?php echo ($menu_id == 'registros_renovaciones')? "current": "";?>">
                <a href="<?php echo site_url('renovaciones/index');?>">Registro renovaciones</a>
              </li>
            </ul>
          </li>
          <li class="<?php echo ($menu_id == 'contacto')? "current": "";?>">
            <a href="javascript:void(0)">Configuraciones</a>
            <ul>
              <li class="<?php echo ($menu_id == 'contacto')? "current": "";?>"><a href="<?php echo site_url('contacto/contactoadmin');?>">Contacto</a></li>
              <li><a href="<?php echo site_url('admin/backup');?>" onclick="return confirm('Esta seguro de querer generar el respaldo?')">Generar Respaldo</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo site_url('auth/logout');?>">Salir</a>
          </li>
        </ul>
      </div>
      <div class="clear"></div>
      <?php if(false): ?>
      <ul id="navigation">
      
      <?php if($menu_id == 'dashboard'): ?>
        <li><span class="active">Dashboard</span></li>
      <?php else: ?>
        <li><a href="<?php echo site_url('admin/index');?>">Dashboard</a></li>
      <?php endif; ?>
      
        <li><a href="<?php echo site_url('language/index');?>">Textos</a></li>
      <!--      
      <?php if($menu_id == 'users'): ?>
        <li><span class="active">Usuarios</span></li>
      <?php else: ?>
        <li><a href="<?php echo site_url('authadmin/index');?>">Usuarios</a></li>
      <?php endif; ?>
      -->  
      <?php if($menu_id == 'actas'): ?>
        <li><span class="active">Actas</span></li>
      <?php else: ?>
        <li><a href="<?php echo site_url('actaadmin/index');?>">Actas</a></li>
      <?php endif; ?>
      <?php if($menu_id == 'novedades'): ?>
        <li><span class="active">Novedades</span></li>
      <?php else: ?>
        <li><a href="<?php echo site_url('novedadesadmin/index');?>">Novedades</a></li>
      <?php endif; ?> 
      <?php if($menu_id == 'intereses'): ?>
        <li><span class="active">Intereses</span></li>
      <?php else: ?>
        <li><a href="<?php echo site_url('interesesadmin/index');?>">Intereses</a></li>
      <?php endif; ?>
      <?php if($menu_id == 'registros_personas'): ?>
        <li><span class="active">Registro Personas</span></li>
      <?php else: ?>
        <li><a href="<?php echo site_url('registros/index');?>">Registro Personas</a></li>
      <?php endif; ?>
      <?php if($menu_id == 'registros_instituciones'): ?>
		<li><span class="active">Registro Instituciones</span></li>
	  <?php else: ?>
		<li><a href="<?php echo site_url('registros/instituciones');?>">Registro Instituciones</a></li>
	  <?php endif; ?>
	  <?php if($menu_id == 'contacto'): ?>
        <li><span class="active">Contacto</span></li>
      <?php else: ?>
        <li><a href="<?php echo site_url('contacto/contactoadmin');?>">Contacto</a></li>
      <?php endif; ?>        
        <li><a href="<?php echo site_url('admin/backup');?>" onclick="return confirm('Esta seguro de querer generar el respaldo?')">Generar Respaldo</a></li>
        <li style="float: right;"><a href="<?php echo site_url('auth/logout');?>">Salir</a></li>	
		</ul>
		<?php endif; ?>
			<div id="content" class="container_16 clearfix">

<!-- Filtro -->     
<!-- 
				<div class="grid_4">
					<p>
						<label>Username<small>Alpha-numeric values</small></label>
						<input type="text" />
					</p>
				</div>
        <div class="grid_5">
					<p>
						<label>Email Address</label>
						<input type="text" />
					</p>
				</div>
				<div class="grid_5">
					<p>
						<label>Department</label>
						<select>
							<option>Development</option>
							<option>Marketing</option>
							<option>Design</option>
							<option>IT</option>
						</select>
					</p>
				</div>
				<div class="grid_2">
					<p>
						<label>&nbsp;</label>
						<input type="submit" value="Search" />
					</p>
				</div>
-->
<!-- Filtro -->
<!-- Contenido -->
        <!-- pongo un if para el grid 16 por los form -->
        <?php 
        $aux_use_grid_16 = true;
        if(isset($use_grid_16) && $use_grid_16 == false)
        {
          $aux_use_grid_16 = false;
        }
        ?>
        <?php if($aux_use_grid_16): ?>
          <div class="grid_16">
        <?php endif;?>
            <?php echo $this->load->view($content); ?>
        <?php if($aux_use_grid_16): ?>
          </div>
        <?php endif;?>
				
<!-- Contenido -->
			</div>
		
		<div id="foot">
<!--					<a href="#">Contact Me</a>-->
				<div class="espacio"></div>
		</div>
      
      <script type="text/javascript">
        $(document).ready(function() {
          $('#superfish-menu').superfish();
        });
    </script>
	</body>
</html>
