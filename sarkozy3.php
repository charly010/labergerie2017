<!doctype html>
<html>

<head>
	<meta charset="UTF-8"/>
	<meta name="description" content="Choisis ton candidat préféré et tente de gagner l'élection présidentielle de 2017"/>
	<meta name="robots" content="index, follow"/>

	<title>La Bergerie - Nicolas</title>

<!--lien vers fichier style CSS, utile pour les grosses mises en pages-->	
	<link rel="stylesheet" type="text/css" href="style.css"/>
<!-- lien pour le favicon-->		
	<link rel="SHORTCUT ICON" href="img/favicon.ico"/>		
<!--Pour faire du CSS dans l'HTML-->		
	<style  type="text/css"></style>	

</head>
<body>

<div class="page">
<div class="pagenofooter">
<br/>	

<!-- ARTICLE -->

<article>
	<h3 class="arial1 red margleft">"Le pays de la liberté"</h3>
	<p class="margleft times">Une pétition demandant l'asile politique d'Edward Snowden en France réunit 150 000 signatures.</p>
</article>	
	
<!-- SECTION -->

<section>

	<center>	
	</br>

	<table>	
		<tr>
			<td>		
				<span class="impact2 blue">E. Snowden</span>
			</br><br>
				<img src="img/int/snowden.jpg" alt"Edward Snowden"/>	
			</td>

<span class="versus">Vs</span>

			<td>
				<span class="impact2 blue">Nicolas</span>
			</br>
			<br>
				<img src="img/cand_sarkozy/ask_sarkozy.jpg" alt="Nicolas"/>
			</td>
		</tr>
		<tr>
			<td>
				<div class="question">
					<p class="arial1etdemi">Question</p><br>	
					<p class="margleft arial1">Salut, j’ai quelques ennuis avec les 
						Etats-Unis en ce moment, je peux venir m’installer en France?</p>
				<div>
			</td>
			<td>
				<aside style="background-color:hsl(240,90%,98%)">
				<p><span class="red arial1etdemi">Ta réponse :</span></p><br>
				<ul>
					<li class="margleft arial1"><a href="resultat.php?1=<?php echo $_GET['1']; ?>&amp;2=<?php echo $_GET['2']; ?>&amp;3=false&amp;candidat=nicolas">
						<!-- reponse libérale :  -->La France est un pays  
						souverain, sois le bienvenu.</a></li><br>

					<li class="margleft arial1"><a href="resultat.php?1=<?php echo $_GET['1']; ?>&amp;2=<?php echo $_GET['2']; ?>&amp;3=true&amp;candidat=nicolas">
						<!-- reponse etatiste :  -->Pas moyen. Les Etats-unis sont nos alliés dans 
						la lutte contre le terrorisme. La paix exige des sacrifices alors 
						laisse moi tranquille! </a></li><br>
				</ul>
				</aside>	
			</td>	
		</tr>
	</table>
	</center>

</section>
			
<!-- clearfix --><div class="clear"></div>
		
<div class="clear"></div>
</div class="pagenofooter">
</div class="page"> 		

</body>
</html>