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
	<h3 class="arial1 red margleft">3 millions de mal logés en France...</h3>
	<p class="margleft times">Alors que l'on construit de moins en moins de logements.</p>
</article>	
	
<!-- SECTION -->

<section>

	<center>	
	</br>

	<table>	
		<tr>
			<td>		
				<span class="impact2 blue">J. J. Bourdin</span>
			</br><br>
				<img src="img/int/bourdin.jpg" alt"Jean-Jacques Bourdin"/>	
			</td>

<span class="versus">Vs</span>

			<td>
				<span class="impact2 blue">Jean-Luc</span>
			</br>
			<br>
				<img src="img/cand_melenchon/ask_melenchon.jpg" alt="Jean-Luc"/>
			</td>
		</tr>
		<tr>
			<td>
				<div class="question">
					<p class="arial1etdemi">Question</p><br>	
					<p class="margleft arial1">Comment tu vas résoudre 
						les problèmes de logement Jean-Luc? Les français veulent savoir!</p>
				</div>
			</td>
			<td>
				<aside style="background-color:hsl(240,90%,98%)">
				<p><span class="red arial1etdemi">Ta réponse :</span></p><br>
				<ul>
					<li class="margleft arial1"><a href="resultat.php?1=<?php echo $_GET['1']; ?>&amp;2=<?php echo $_GET['2']; ?>&amp;3=false&amp;candidat=jean-luc">
						<!-- reponse libérale :  -->Je supprimerai les contraintes législatives 
						qui parasitent le marché de l'immobilier!</a></li><br>

					<li class="margleft arial1"><a href="resultat.php?1=<?php echo $_GET['1']; ?>&amp;2=<?php echo $_GET['2']; ?>&amp;3=true&amp;candidat=jean-luc">
						<!-- reponse etatiste :  -->Je réquisitionnerai 
						les logements vacants et j'abolirai la proriété privé!</a></li><br>
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