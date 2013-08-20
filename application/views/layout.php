<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>CNEA | Comisi&oacute;n Nacional de Experimentaci&oacute;n Animal</title>
      <!--<meta name="Title" content="Diseño Web y Gráfico Uruguay para empresas y particulares. Loopita Design" />
      <meta name="AUTHOR" content="Loopita design" />
      <meta name="SUBJECT" content="Diseño Web, Diseño Gráfico, Diseño Corporativo, Diseños Perzonalizados, Estudio de diseño Loopita Design" />
      <meta name="RATIN" content="GENERAL" />
      <meta name="description" content="Loopitadesign es un emprendimiento dedicado a analizar e interpretar las necesidades de los clientes, desarrollando ideas y  convirti&eacute;ndolas en soluciones. Nuestra gama de servicios abarca el diseño de Imagen Corporativa, Desarrollo Web, Diseñeo de Flyers e Impresos, Producciones Fotográficas, Animaciones y más..." />
      <meta name="ABSTRACT" content="Loopitadesign es un emprendimiento dedicado a analizar e interpretar las necesidades de los clientes, desarrollando ideas y  convirti&eacute;ndolas en soluciones. Nuestra gama de servicios abarca el diseño de Imagen Corporativa, Desarrollo Web, Diseñeo de Flyers e Impresos, Producciones Fotográficas, Animaciones y más" />
      <meta name="keywords" content="Loopita Design, diseño, diseño grafico, diseño web, animaciones, animaciones flash, creacion de html, css, grafica, web, ilustraciones, fotografias, producciones fotográficas, imagen corporativa, logotipos, papelaria institucional, estudio de diseño, publicidad" />
      <meta name="REVISIT-AFTER" content="15 DAYS" />
      <meta name="GENERATOR" content="www.loopitadesign.com" />
      <meta name="Copyright" content="Copyright (c) 2009 LOOPITADESIGN.COM" />
      <meta name="ROBOTS" content="ALL"/>
      <meta name="robot" content="index, follow" />
      <meta name="language" content="sp" />
      <meta name="distribution" content="Global" />
      <meta name="expires" content="Never" />
      <meta name="google-site-verification" content="vkQeLfGfXjDTSawf3osUdbtByslfbr3FIFnK16B0Xlw" />-->
      <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css" media="screen"/>
      <script type="text/javascript" src="<?php echo base_url();?>assets/js/dropdown.js"></script>
      <!--[if IE 6]><script type="text/javascript" src="<?php echo base_url();?>assets/js/unitpngfix.js"></script><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_ie6.css" media="screen"/><![endif]-->
      <!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_ie7.css" media="screen"/><![endif]-->
      <!--[if IE 8]><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_ie8.css" media="screen"/><![endif]-->      
      <?php if($jquery_on): ?>
        <script type="text/javascript" src="<?php echo base_url() . "assets/js/jquery-1.7.1.min.js";?>"></script>
      <?php endif; ?>
      <?php foreach($javascript as $js): ?>
        <script type="text/javascript" src="<?php echo base_url() ."assets/js/".$js; ?>"></script>
      <?php endforeach; ?>
		
      <?php foreach($stylesheet as $sheet): ?>
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/".$sheet;?>" />
      <?php endforeach; ?>
    </head>
    
  <body>
      <div id="wrapper">
          <div id="header">
              <div class="logo">
                  <a href="index.html"><img src="<?php echo base_url();?>assets/images/logo.jpg" /></a>
              </div>
              <div class="clear"></div>
              <div class="menu">
                  <dl class="dropdown">
                      <dt style="margin-left:18px; border-left:2px solid #FFFFFF;"><a href="<?php echo site_url('sitio/index'); ?>" class="<?php if($menu_id == 'index') echo 'current';?>"><?php echo lang('menu_inicio');?></a></dt>
                  </dl>
                  <dl class="dropdown">
                       <dt id="one-ddheader" onmouseover="ddMenu('one',1)" onmouseout="ddMenu('one',-1)" class="cnea <?php if($menu_id == 'cnea') echo 'current';?>"><?php echo lang('menu_cnea');?></dt>
                       <dd id="one-ddcontent" onmouseover="cancelHide('one')" onmouseout="ddMenu('one',-1)">
                           <ul class="ul_cnea">
                              <li class="sub_menu"><a href="<?php echo site_url('cnea/mision'); ?>"><?php echo lang('menu_mision');?></a></li>
                              <li class="sub_menu"><a href="<?php echo site_url('cnea/objetivos'); ?>"><?php echo lang('menu_objetivos');?></a></li>
                              <li class="sub_menu"><a href="<?php echo site_url('cnea/integrantes'); ?>"><?php echo lang('menu_integrantes');?></a></li>
                           </ul>
                       </dd>
                  </dl>
                  <dl class="dropdown">
                       <dt id="two-ddheader" onmouseover="ddMenu('two',1)" onmouseout="ddMenu('two',-1)" class="instituciones <?php if($menu_id == 'instituciones') echo 'current';?>"><?php echo lang('menu_instituciones');?></dt>
                       <dd id="two-ddcontent" onmouseover="cancelHide('two')" onmouseout="ddMenu('two',-1)">
                           <ul class="ul_instituciones">
                              <li class="sub_menu"><a href="<?php echo site_url('instituciones/bases'); ?>"><?php echo lang('menu_instituciones_bases');?></a></li>
                              <li class="sub_menu"><a href="<?php echo site_url("instituciones/formulario");?>"><?php echo lang('menu_instituciones_formulario');?></a></li>
                              <li class="sub_menu"><a href="<?php echo site_url('instituciones/registro'); ?>"><?php echo lang('menu_instituciones_registro');?></a></li>
                              <li class="sub_menu"><a href="<?php echo site_url('instituciones/reglamentacion'); ?>"><?php echo lang('menu_instituciones_reglamento');?></a></li>
                           </ul>
                       </dd>
                  </dl>
                  <dl class="dropdown">
                       <dt id="three-ddheader" onmouseover="ddMenu('three',1)" onmouseout="ddMenu('three',-1)" class="personas <?php if($menu_id == 'acreditaciones') echo 'current';?>"><?php echo lang('menu_personas');?></dt>
                       <dd id="three-ddcontent" onmouseover="cancelHide('three')" onmouseout="ddMenu('three',-1)">
                           <ul class="ul_personas">
                              <li class="sub_menu"><a href="<?php echo site_url("acreditaciones/bases");?>"><?php echo lang('menu_personas_bases');?></a></li>
                              <li class="sub_menu"><a href="<?php echo site_url("acreditaciones/formulario");?>"><?php echo lang('menu_personas_formulario');?></a></li>
                              <li class="sub_menu"><a href="<?php echo site_url("acreditaciones/registro");?>"><?php echo lang('menu_personas_registro');?></a></li>
                              <li class="sub_menu"><a href="<?php echo site_url("acreditaciones/reglamentacion");?>"><?php echo lang('menu_personas_reglamento');?></a></li>
                           </ul>
                       </dd>
                  </dl>
                  <dl class="dropdown">
                      <dt><a href="<?php echo site_url('acta/index'); ?>" class="<?php if($menu_id == 'actas') echo 'current';?>"><?php echo lang('menu_actas');?></a></dt>
                  </dl>
                  <dl class="dropdown">
                      <dt><a href="<?php echo site_url('novedades/index'); ?>" class="<?php if($menu_id == 'novedades') echo 'current';?>"><?php echo lang('menu_novedades');?></a></dt>
                  </dl>
                  <dl class="dropdown">
                      <dt><a href="<?php echo site_url('sitio/faq'); ?>" class="<?php if($menu_id == 'faq') echo 'current';?>"><?php echo lang('menu_faq');?></a></dt>
                  </dl>
                  <dl class="dropdown">
                      <dt style="border-right:2px solid #FFFFFF;"><a href="<?php echo site_url('contacto/index');?>"><?php echo lang('menu_contacto');?></a></dt>
                  </dl>
              </div>
          </div><!--HEADER-->
          <div id="content">
              <?php echo modules::run('sitio/leftBar')?>
              
              <?php if(isset($content)): ?>
                <?php echo $this->load->view($content) ?>
              <?php endif; ?>
          </div><!--CONTENT-->
          
          
          <div class="bottom">
              <p><a href="<?php echo site_url('intereses/enlaces');?>"><?php echo lang('footer_enlaces_interes');?></a> | <a href="<?php echo site_url('intereses/documentos');?>"><?php echo lang('footer_documentos_interes');?></a></p>
          </div>
          <div id="footer">
              <div class="firm">
                  Dise&ntilde;o: <a href="http://www.loopitadesign/com" target="_blank">LoopitaDesign</a>
              </div>
              <?php echo lang('footer_cnea'); ?>
              
          </div>
      </div><!--WRAPPER-->
	  
	  <script type="text/javascript">

    var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33170829-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	  
	  
  </body>    
</html>