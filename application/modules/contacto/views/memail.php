<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="mail.css" media="screen"/>
</head>

<body class="mail">
	<div id="wrapper_mail">
    	<div id="cabezal">
        </div>
        <div id="centro">
        	<h1>Titulo</h1>
            <ul>
                <?php foreach ($form_data as $name => $value): ?>
                  <li><strong><?php echo $name ?>:</strong> <?php echo $value; ?></li>
                <?php endforeach;?>
            </ul>
        </div>
	</div><!--FIN WRAPEPR-->
</body>
</html>
