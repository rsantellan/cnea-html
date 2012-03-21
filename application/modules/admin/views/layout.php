<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/admin/css/960.css";?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/admin/css/template.css";?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/admin/css/colour.css";?>" />
		<!--<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />-->
		<!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
		<!--<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" /> -->
		<!--<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" /> -->
	</head>
	<body>
		
    <h1 id="head">Administrador</h1>
		
		<ul id="navigation">
    <?php 
      $modules_enables = $this->config->item('modules_enables'); 
      foreach($modules_enables as $mEnables): ?>
      
      <?php echo modules::run($module.'/menu')?>
      
    <?php 
      endforeach; 
      
      var_dump($modules_enables);
    ?>
			<li><span class="active">Overview</span></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Users</a></li>
		</ul>
		
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
				<div class="grid_16">
          <?php echo $this->load->view($content); ?>
				</div>
<!-- Contenido -->
			</div>
		
		<div id="foot">
					<a href="#">Contact Me</a>
				
		</div>
	</body>
</html>
