<!doctype html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="description" content="Choisis ton candidat préféré et tente de gagner l'élection présidentielle de 2017"/>
	<meta name="robots" content="index, follow"/>

<title>La Bergerie - Jean-Luc</title>
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
	<h3 class="arial1 red margleft">Trop de fonctionnaires au Parlement ?</h3>
	<p class="margleft times">Plus de 50% de la richesse produite en France sert à financer l'Etat.</p>
</article>	
	

<!-- SECTION -->

<section>

	<center>	
	</br>

	<table>	
		<tr>

			<td>
			<span class="impact2 blue">N. Doze</span>		
			</br><br>
			<img src="img/int/doze.jpg" alt="Nicolas Doze"/>	
			

			</td>

<span class="versus">Vs</span>

			<td>
				<span class="impact2 blue">Jean-Luc</span>
			</br>
			<br>
				<img src="img/cand_melenchon/ask_melenchon2.jpg" alt="Jean-Luc"/>
			</td>
		</tr>
		<tr>
			<td>
				<div class="question">
					<p class="arial1etdemi">Question</p><br>	
					<p class="margleft arial1">50% de fonctionnaires parmis les élus, alors qu’ils ne 
						représentent que 20% de population active. Est-ce un problème?</p>
				</div>		
			</td>
			<td>
				<aside style="background-color:hsl(240,90%,98%)">
				<p><span class="red arial1etdemi">Ta réponse :</span></p><br>
				<ul>
					<li class="margleft arial1"><a href="melenchon3.php?1=<?php echo $_GET['1']; ?>&amp;2=false">
						<!-- reponse libérale :  -->Oui, le Parlement n'est pas représentatif, il faut obliger les fonctionnaires à demissionner 
						avant de se présenter à une élection.</a></li><br>

					<li class="margleft arial1"><a href="melenchon3.php?1=<?php echo $_GET['1']; ?>&amp;2=true">
						<!-- reponse etatiste :  -->Oui, il faut élire 
						 d’avantage de fonctionnaires afin de combler 
						les 30% restants.</a></li><br>
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