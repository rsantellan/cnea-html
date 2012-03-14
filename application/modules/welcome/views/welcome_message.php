<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenido</title>
</head>
<body>

<div id="container">
	<h1>Bienvenido.... bla bla bla</h1>

	<div class="login">
      <?php echo modules::run("mauth/login_form");?>
	</div>
    <div class="registrarse">
        <a href="<?php echo site_url("mauth/signup"); ?>">
          link para registrarse
        </a>
    </div>
</div>

</body>
</html>