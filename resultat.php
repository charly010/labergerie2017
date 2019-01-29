<!doctype html>
<html>

<!-- Calcul Php -->	
<?php
include('include/resultat_calcul.php')
?>

	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="<?php echo $content; ?>"/>
		<meta name="robots" content="index, follow"/>

	<title>La Bergerie</title>
<!--lien vers fichier style CSS, utile pour les grosses mises en pages-->	
	<link rel="stylesheet" type="text/css" href="style.css"/>
<!-- lien pour le favicon-->		
	<link rel="SHORTCUT ICON" href="img/favicon.ico"/>		
<!--Pour faire du CSS dans l'HTML-->		
	<style  type="text/css"></style>	
	</head>

<body>

<!-- HEADER -->	
<?php
include('include/header.php')
?>

<!-- SECTION -->

	<section class="center">

		<br>
		<span class="impact3 red"><?php echo $resultat; ?></span>
		<br>
		<br>
		<?php echo $img; ?>
		<br>
		<br>
		<?php echo $score; ?>
		<br>
		<p class="margleft arial1"><?php echo $commentaire; ?></p> 
		<br>
		<aside class="quart center" style="background-color:hsl(240,90%,98%)"><span class="arial2"><a href="index.php">Rejouer</a></span></aside>
		
		<!-- Share -->	
		<div class="share">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://labergerie2017.com" data-via="chb78">Tweet</a>
			<div class="fb-share-button" data-href="http://labergerie2017.com" data-type="button_count"></div>
			<div id="fb-root"></div>
		</div>	

	<!-- clearfix --><div class="clear"></div>

	</section>			
	<!-- clearfix --><div class="clear"></div>
			
<!-- FOOTER -->	
<?php
include('include/footer.php')
?>

	<script src="share.js" type="text/javascript"></script>

	</body>
</html>