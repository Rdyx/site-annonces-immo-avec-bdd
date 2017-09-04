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
	$header = "créations de compte";
	$headTab = "";

	//On set les variables pour récupérer le formulaire
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$age = $_POST['age'];
	$pseudo = $_POST['pseudo'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];
	$tab = "";
	$bdd = new PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'simplonco');
	//On crér un compteur d'erreurs
	$valid = 0;

	//On vérifie que l'âge est cohérent et possible et on incrémente le compteur d'erreur si ce n'est pas le cas
	if($age <= 0 OR $age >= 110){
		$tab .= "<p>Vous avez ".$age." ans ?!</p>";
		$valid++;
	}

	//On vérifie que le pseudo ne soit pas déjà pris
	$checkNick = $bdd->query('SELECT uti_pseudo FROM uti_utilisateur WHERE uti_pseudo="'.$pseudo.'"');
	$donnees = $checkNick->fetch();
	if($donnees['uti_pseudo'] == $pseudo)
	{
		$tab .= '<p>Ce pseudo est déjà utilisée !</p>';
		$valid++;
	}

	//On vérifie que le mot de passe fait bien + de 8 chars
	if(strlen($password1) < 8){
		$tab .= "<p>Votre mot de passe ne contient pas assez de caractères ! (8 minimum)</p>";
		$valid++;
	}

	//On vérifie que les 2 champs de mots de passe soient identiques
	if($password1 != $password2){
		$tab .= "<p>Vos mots de passe ne sont pas identiques !</p>";
		$valid++;
	}

	//On vérifie que le mail ne soit pas déjà pris
	$checkMail = $bdd->query('SELECT uti_email FROM uti_utilisateur WHERE uti_email="'.$email.'"');
	$donnees = $checkMail->fetch();
	if($donnees['uti_email'] == $email)
	{
		$tab .= '<p>Cette adresse est déjà utilisée !</p>';
		$valid++;
	}

	if($valid == 0){
		$password = password_hash($password1, PASSWORD_DEFAULT);
		$sql = "INSERT INTO uti_utilisateur (uti_prenom, uti_nom, uti_age, uti_pseudo, uti_password, uti_email)
		VALUES ('$prenom', '$nom', '$age', '$pseudo', '$password', '$email')";
		$bdd->exec($sql);
		$tab .= "Compte créé avec succés !";
	} else {
		$tab .= "<p>Retourner au <a href='../Site/ajout_utilisateur.php'>formulaire</a>.<br>
		Il y a ".$valid." erreur(s).";
	}



	var_dump($valid, $prenom, $nom, $age, $pseudo, password_hash($password1, PASSWORD_DEFAULT), $email);
	include '../Site/layout.php';

	?>
</body>
</html>
