<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$bdd = new PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'simplonco');
	$reponse = $bdd->query('SELECT * FROM uti_utilisateur');

	$sql = 'SELECT uti_oid, uti_nom, uti_prenom, uti_age FROM uti_utilisateur where uti_prenom like '. $_GET["prenom"];
	$donnees = $reponse->fetchAll();
$tab = "";
foreach($donnees as $value)
	{ $tab .= 
		"<tr><td>".$value['0']."</td><td>".$value['1']."</td><td>".$value['2']."</td><td>".$value['3']."</td></tr>";
		echo $sql;
	}
	?>
</body>
</html>