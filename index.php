<?php
require 'vendor/autoload.php';
use ProjetoPalin\Palin;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Palin</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<form action="" method="post" name="form_palin">
				<div class="form-group">
					<label for="numero">Informe o número</label><br/>
					<input type="number" name="numero" id="numero"/>
					<input type="submit" value="Enviar" class="btn btn-primary">
				</div>
			</form>
		</div>
		<div class="col-sm-12">
			<?php if(isset($_POST['numero'])): ?>
			<div class="resultado">
				<?php $palin = new Palin(); ?>
				<h4>O próximo Palíndromo é:
				<span class="label label-default"><?php echo $palin->getProximoPalin($_POST['numero']); ?></h4></span>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
</body>
</html>
