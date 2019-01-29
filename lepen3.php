<!doctype html>
<html>

<head>
	<meta charset="UTF-8"/>
	<meta name="description" content="Choisis ton candidat préféré et tente de gagner l'élection présidentielle de 2017"/>
	<meta name="robots" content="index, follow"/>

	<title>La Bergerie - Marine</title>

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
	<h3 class="arial1 red margleft">Face à la concurence internationale...</h3>
	<p class="margleft times">Les entreprises françaises sont-elles à la hauteur ?</p>
</article>	
	
<!-- SECTION -->

<section>

	<center>	
	</br>

	<table>	
		<tr>
			<td>		
				<span class="impact2 blue">E. Zemmour</span>
			</br><br>
				<img src="img/int/zemmour.jpg" alt="Eric Zemmour"/>
			</td>

<span class="versus">Vs</span>

			<td>
				<span class="impact2 blue">Marine</span>
			</br>
			<br>
				<img src="img/cand_lepen/ask_lepen.jpg" alt="Marine"/>
			</td>
		</tr>
		<tr>
			<td>
				<div class="question">
					<p class="arial1etdemi">Question</p><br>	
					<p class="margleft arial1">Faut-il 
						nationaliser GDF et d'autres grands groupes français?</p>
				</div>
			</td>
			<td>
				<aside style="background-color:hsl(240,90%,98%)">
				<p><span class="red arial1etdemi">Ta réponse :</span></p><br>
				<ul>
					<li class="margleft arial1"><a href="resultat.php?1=<?php echo $_GET['1']; ?>&amp;2=<?php echo $_GET['2']; ?>&amp;3=true&amp;candidat=marine">
						<!-- reponse etatiste :  -->Oui, GDF doit appartenir 
						aux français et pas à la finance internationale!</a></li><br>

					<li class="margleft arial1"><a href="resultat.php?1=<?php echo $_GET['1']; ?>&amp;2=<?php echo $_GET['2']; ?>&amp;3=false&amp;candidat=marine">
						<!-- reponse libérale :  -->Non, il vaut mieux créer un environnement 
						fiscal favorable pour toutes les entreprises françaises.</a></li><br>


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