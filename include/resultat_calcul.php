<?php

$un = $_GET['1'];
$deux = $_GET['2'];
$trois = $_GET['3'];
$candidat = $_GET['candidat'];

	// verifications
// echo $un; 
// echo '</br>';
// echo $deux;
// echo '</br>';
// echo $trois;
// echo '</br>';
// echo $candidat;

// tester la présence des variables

if (isset($_GET['1']) && isset($_GET['2']) && isset($_GET['3']) && isset($_GET['candidat'])) 
{

	// échapper les caracteres HTML par sécurité
	$_GET['1'] = htmlspecialchars($_GET['1']);
	$_GET['2'] = htmlspecialchars($_GET['2']);
	$_GET['3'] = htmlspecialchars($_GET['3']);
	$_GET['candidat'] = htmlspecialchars($_GET['candidat']);

	if ($candidat == "jean-luc")
	{
		// 3 mauvaises réponses
		if ($_GET['1'] == 'false' && $_GET['2'] == 'false' && $_GET['3'] == 'false') 
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 2%!</p>';  
			$commentaire = 'Tes idées libérales ont coulé ton parti pour les dix prochaines années et ta carrière politique est finie. Désormais tu animes des talk-shows sur le câble que personne ne regarde.';
			$resultat = "Perdu !";
			$img = '<img src="img/cand_melenchon/loose_melenchon.jpg" alt="Jean-Luc a perdu"/>';
			$content = "Ton score au premier tour est de 2%!";
		}

		// 2 mauvaises réponses
		elseif (($_GET['1'] == 'true' && $_GET['2'] == 'false' && $_GET['3'] == 'false') 
			|| ($_GET['1'] == 'false' && $_GET['2'] == 'true' && $_GET['3'] == 'false') 
			|| ($_GET['1'] == 'false' && $_GET['2'] == 'false' && $_GET['3'] == 'true')) 
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 18%!</p>';
			$commentaire = "Un score honorable, tu aurais pu te qualifier pour le second tour. Malheureusement Manuel Valls a été élu dès le premier tour avec sa promesse de baisser l'âge de la retraite à 45 ans.";
			$resultat = "Perdu !";
			$img = '<img src="img/cand_melenchon/loose_melenchon.jpg" alt="Jean-Luc a perdu"/>';
			$content = "Ton score au premier tour est de 18%!";
		}

		// 1 mauvaise réponse
		elseif (($_GET['1'] == 'true' && $_GET['2'] == 'true' && $_GET['3'] == 'false') 
			|| ($_GET['1'] == 'true' && $_GET['2'] == 'false' && $_GET['3'] == 'true') 
			|| ($_GET['1'] == 'false' && $_GET['2'] == 'true' && $_GET['3'] == 'true')) 
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 68%!</p>';
			$commentaire = "Tu es le nouveau président de la République !";
			$resultat = "Gagné !";
			$img = '<img src="img/cand_melenchon/win_melenchon.jpg" alt="Jean-Luc a gagné"/>';
			$content = "Ton score au premier tour est de 68%!";
		}

		// 3 bonnes réponses
		elseif ($_GET['1'] == 'true' && $_GET['2'] == 'true' && $_GET['3'] == 'true')
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 97%!</p>';
			$commentaire = "Tu es élu président de la République avec un score apocalyptique ! Tu peux organiser un référundum la semaine prochaine pour te proclamer président à vie.";
			$resultat = "Gagné !";
			$img = '<img src="img/cand_melenchon/win_melenchon.jpg" alt="Jean-Luc a gagné"/>';
			$content = "Ton score au premier tour est de 97%!";
		}

		// si il y a un problème avec les réponses
		else
		{
			$img = '<img src="img/error_mouton.jpg" alt="erreur"/>';
			$resultat = "Sabotage !";
			$commentaire = 'Il y a eu un problème dans le dépouillement des votes, clique sur "Rejouer" pour recommencer.';
		}
	}

	// pour Marine
	elseif ($candidat == "marine")
	{
		// 3 mauvaises réponses
		if ($_GET['1'] == 'false' && $_GET['2'] == 'false' && $_GET['3'] == 'false') 
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 2%!</p>';  
			$commentaire = 'Tes idées libérales ont coulé ton parti pour les dix prochaines années et ta carrière politique est finie. Désormais tu animes des talk-shows sur le câble que personne ne regarde.';
			$resultat = "Perdu !";
			$img = '<img src="img/cand_lepen/loose_lepen.jpg" alt="Marine a perdu"/>';
			$content = "Ton score au premier tour est de 2%!";
		}

		// 2 mauvaises réponses
		elseif (($_GET['1'] == 'true' && $_GET['2'] == 'false' && $_GET['3'] == 'false') 
			|| ($_GET['1'] == 'false' && $_GET['2'] == 'true' && $_GET['3'] == 'false') 
			|| ($_GET['1'] == 'false' && $_GET['2'] == 'false' && $_GET['3'] == 'true')) 
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 18%!</p>';
			$commentaire = "Un score honorable, tu aurais pu te qualifier pour le second tour. Malheureusement Manuel Valls a été élu dès le premier tour avec sa promesse de baisser l'âge de la retraite à 45 ans.";
			$resultat = "Perdu !";
			$img = '<img src="img/cand_lepen/loose_lepen.jpg" alt="Marine a perdu"/>';
			$content = "Ton score au premier tour est de 18%!";
		}

		// 1 mauvaise réponse
		elseif (($_GET['1'] == 'true' && $_GET['2'] == 'true' && $_GET['3'] == 'false') 
			|| ($_GET['1'] == 'true' && $_GET['2'] == 'false' && $_GET['3'] == 'true') 
			|| ($_GET['1'] == 'false' && $_GET['2'] == 'true' && $_GET['3'] == 'true')) 
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 68%!</p>';
			$commentaire = "Tu es le nouveau président de la République !";
			$resultat = "Gagné !";
			$img = '<img src="img/cand_lepen/win_lepen.jpg" alt="Marine a gagné"/>';
			$content = "Ton score au premier tour est de 68%!";
		}

		// 3 bonnes réponses
		elseif ($_GET['1'] == 'true' && $_GET['2'] == 'true' && $_GET['3'] == 'true')
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 97%!</p>';
			$commentaire = "Tu es élu président de la République avec un score apocalyptique ! Tu peux organiser un référundum la semaine prochaine pour te proclamer président à vie.";
			$resultat = "Gagné !";
			$img = '<img src="img/cand_lepen/win_lepen.jpg" alt="Marine a gagné"/>';
			$content = "Ton score au premier tour est de 97%!";
		}

		// si il y a un problème avec les réponses
		else
		{
			$img = '<img src="img/error_mouton.jpg" alt="erreur"/>';
			$resultat = "Sabotage !";
			$commentaire = 'Il y a eu un problème dans le dépouillement des votes, clique sur "Rejouer" pour recommencer.';
		}
	}

	// pour Nicolas
	elseif ($candidat == "nicolas")
	{
		// 3 mauvaises réponses
		if ($_GET['1'] == 'false' && $_GET['2'] == 'false' && $_GET['3'] == 'false') 
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 2%!</p>'; 
			$commentaire = 'Tes idées libérales ont coulé ton parti pour les dix prochaines années et ta carrière politique est finie. Désormais tu animes des talk-shows sur le câble que personne ne regarde.';
			$resultat = "Perdu !";
			$img = '<img src="img/cand_sarkozy/loose_sarkozy.jpg" alt="Nicolas a perdu"/>';
			$content = "Ton score au premier tour est de 2%!";
		}

		// 2 mauvaises réponses
		elseif (($_GET['1'] == 'true' && $_GET['2'] == 'false' && $_GET['3'] == 'false') 
			|| ($_GET['1'] == 'false' && $_GET['2'] == 'true' && $_GET['3'] == 'false') 
			|| ($_GET['1'] == 'false' && $_GET['2'] == 'false' && $_GET['3'] == 'true')) 
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 18%!</p>';
			$commentaire = "Un score honorable, tu aurais pu te qualifier pour le second tour. Malheureusement Manuel Valls a été élu dès le premier tour avec sa promesse de baisser l'âge de la retraite à 45 ans.";
			$resultat = "Perdu !";
			$img = '<img src="img/cand_sarkozy/loose_sarkozy.jpg" alt="Nicolas a perdu"/>';
			$content = "Ton score au premier tour est de 18%!";
		}

		// 1 mauvaise réponse
		elseif (($_GET['1'] == 'true' && $_GET['2'] == 'true' && $_GET['3'] == 'false') 
			|| ($_GET['1'] == 'true' && $_GET['2'] == 'false' && $_GET['3'] == 'true') 
			|| ($_GET['1'] == 'false' && $_GET['2'] == 'true' && $_GET['3'] == 'true')) 
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 68%!</p>';
			$commentaire = "Tu es le nouveau président de la République !";
			$resultat = "Gagné !";
			$img = '<img src="img/cand_sarkozy/win_sarkozy.jpg" alt="Nicolas a gagné"/>';
			$content = "Ton score au premier tour est de 68%!";
		}

		// 3 bonnes réponses
		elseif ($_GET['1'] == 'true' && $_GET['2'] == 'true' && $_GET['3'] == 'true')
		{
			$score = '<p class="arial1etdemi red">Ton score au premier tour est de 97%!</p>';
			$commentaire = "Tu es élu président de la République avec un score apocalyptique ! Tu peux organiser un référundum la semaine prochaine pour te proclamer président à vie.";
			$resultat = "Gagné !";
			$img = '<img src="img/cand_sarkozy/win_sarkozy.jpg" alt="Nicolas a gagné"/>';
			$content = "Ton score au premier tour est de 97%!";
		}

		// si il y a un problème avec les réponses
		else
		{
			$img = '<img src="img/error_mouton.jpg" alt="erreur"/>';
			$resultat = "Sabotage !";
			$commentaire = 'Il y a eu un problème dans le dépouillement des votes, clique sur "Rejouer" pour recommencer.';
		}
	}
	// si il y a un problème avec le prenom du candidat
	else
	{
		$img = '<img src="img/error_mouton.jpg" alt="erreur"/>';
		$resultat = "Sabotage !";
		$commentaire = 'Il y a eu un problème dans le dépouillement des votes, clique sur "Rejouer" pour recommencer.';
	}
}
// si il n'y a pas les 4 valeurs en GET
else
{
	$img = '<img src="img/error_mouton.jpg" alt="erreur"/>';
	$resultat = "Sabotage !";
	$commentaire = 'Il y a eu un problème dans le dépouillement des votes, clique sur "Rejouer" pour recommencer.';
}


	// verifications
// echo $un; 
// echo '</br>';
// echo $deux;
// echo '</br>';
// echo $trois;
// echo '</br>';
// echo $candidat;

?>
