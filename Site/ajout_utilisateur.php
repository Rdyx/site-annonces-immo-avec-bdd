<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php $rubric = "";
	$announce = "";
	$user = "";
	$searchUser = "";
	$createUser = 'class="gras"';
	$header = "annonces";
	$headTab = "";
	$tab = "<form action='validation_user.php' method='post'>
	<ul class='list-unstyled text-center col-xs-6'>
	<li><label for='prenom'>Prenom : </label></li>
	<li><label for='nom'>Nom : </label></li>
	<li><label for='age'>Age : </label></li>
	<li><label for='pseudo'>Pseudo : </label></li>
	<li><label for='password1'>Mot de passe : </label></li>
	<li><label for='password2'>Confirmez votre mot de passe : </label></li>
	<li><label for='email'>Email : </label></li>
</ul>
<ul class='list-unstyled text-center col-xs-6'>
	<li><input type='text' id='prenom' name='prenom' required></li>
	<li><input type='text' id='nom' name='nom' required></li>
	<li><input type='number' id='age' name='age' required></li>
	<li><input type='text' id='pseudo' name='pseudo' required></li>
	<li><input type='password' name='password1' id='password1' required></li>
	<li><input type='password' name='password2' id='password2' required></li>
	<li><input type='text' name='email' id='email' required></li>
</ul><input type='submit' value='Créer votre compte'>
</form>
";

include '../Site/layout.php';

?>
</body>
</html>