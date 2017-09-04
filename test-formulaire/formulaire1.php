<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php $rubric = "";
	$announce = "";
	$user = "";
	$searchUser = 'class="gras"';
	$createUser = "";
	$header = "recherche d'annonceurs";
	$tab = "";
	$headTab = '<form action="" method="post">
	<label for="prenom">Prenom : </label>
	<input type="text" id="prenom" name="prenom" required>
	<input type="submit" value="Recherche">
</form>';

if(!isset($_POST['prenom'])){
} else{
	if ($_POST['prenom'] == ""){
	} else {
		$bdd = new PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'simplonco');
		$reponse = $bdd->query('SELECT * FROM uti_utilisateur WHERE uti_prenom LIKE "%'.$_POST['prenom'].'%"');
		$donnees = $reponse->fetchAll();
		$tab = '<table>
		<tr><th>uti_oid</th><th>uti_prenom</th><th>uti_nom</th><th>uti_age</th><th>uti_pseudo</th><th>uti_password</th><th>uti_email</th></tr>';
		foreach($donnees as $value){
			$tab .= '<tr><td>'.$value[0].'</td><td>'.$value['uti_prenom'].'</td><td>'.$value['uti_nom'].'</td><td>'.$value['uti_age'].'</td><td>'.$value['uti_pseudo'].'</td><td>'.$value['uti_password'].'</td><td>'.$value['uti_email'].'</td></tr>';
		}
		$tab .= '</table>';
	}
}
include '../Site annonces-immo/layout.php';
?>
</body>
</html>