<?php
require 'vendor/autoload.php';
use ProjetoPalin\Palin;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Palin</title>
</head>
<body>
<form action="" method="post" name="form_palin">
	<label for="numero">Informe o número</label><br/>
	<input type="text" name="numero" id="numero"/>
	<input type="submit" value="Enviar">
</form>

<?php if(isset($_POST['numero'])): ?>
<div class="resultado">
	<?php $palin = new Palin(); ?>
	<h3>O próximo Palíndromo é:</h3>
	<h4><?php echo $palin->getProximoPalin($_POST['numero']); ?></h4>
</div>
<?php endif; ?>

</body>
</html>
