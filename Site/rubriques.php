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
	<?php $rubric = 'class="gras"';
	$announce = "";
	$user = "";
	$searchUser = "";
	$createUser = "";
	$header = "rubriques";
	$bdd = new PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'simplonco');
	$reponse = $bdd->query('SELECT * FROM rub_rubrique');
	$donnees = $reponse->fetchAll();
	$headTab="<tr>
	<th>id Rubrique</th>
	<th>Titre</th>
</tr>";

$tab = "";
foreach($donnees as $value)
	{ $tab .= 
		"<tr><td>".$value['0']."</td><td>".$value['1']."</td></tr>";
	}

include '../Site/layout.php';	?>
</div>
</body>	
</html>