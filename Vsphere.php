<html>
<link href='css/style.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a>Calcule d'Aire</a>
		<ul>
			<li><a href="carre.php">Aire d'un carré</a></li>
			<li><a href="cercle.php">Aire d'un cercle</a></li>
			<li><a href="rectangle.php">Aire d'un rectangle</a></li>
			<li><a href="triangle.php">Aire d'un triangle</a></li>
			<li><a href="trirect.php">Aire d'un triangle rectangle</a></li>
			<li><a href="triequila.php">Aire d'un trgle equilateral</a></li>
			<li><a href="losange.php">Aire d'un losange</a></li>
			<li><a href="parall.php">Aire d'un parallélogramme</a></li>
			<li><a href="trapeze.php">Aire d'un trapèze</a></li>
			<li><a href="disque.php">Aire d'un disque</a></li>
			<li><a href="cube.php">Aire d'un cube</a></li>
			<li><a href="sphene.php">Aire d'une sphène</a></li>
			<li><a href="cylindre.php">Aire d'un cylindre</a></li>
		</ul>
	</li>
	<li><a href="calcula.php">Calculatrice</a></li>
	<li><a href="#">Calcule de Volume</a>
		<ul>
			<li><a href="Vcube.php">Volume du cube</a></li>
			<li><a href="Vpave.php">Volume du pavé droit</a></li>
			<li><a href="Vpyramide.php">Volume du pyramide</a></li>
			<li><a href="Vcone.php">Volume du cône</a></li>
			<li><a href="Vsphere.php">Volume du sphène</a></li>
			<li><a href="Vcylindre.php">Volume du cylindre</a></li>
		</ul>
	</li>
	<li><a href="#">Calcule de Perimetre</a>
		<ul>
			<li><a href="Pcarre.php">Périmètre du carré</a></li>
			<li><a href="Pcercle.php">Périmètre du cercle</a></li>
			<li><a href="Prectangle.php">Périmètre du rectangle</a></li>
			<li><a href="Ptriangle.php">Périmètre du triangle</a></li>
			<li><a href="Ptrirect.php">Périmètre du triangle rectangle</a></li>
			<li><a href="Plosange.php">Périmètre du losange</a></li>
		</ul>
	</li>
	<li><a href="#">Calcule TVA</a>
		<ul>
			<li><a href="tva5.php">TVA 5.5</a></li>
			<li><a href="tva10.php">TVA 10</a></li>
		</ul>
	</li>
	<li><a>Calcule divers</a>
		<ul>
			<li><a href="nbrMot.php">Calcul nombre de mots</a></li>
			<li><a href="">Calcul Densité mots</a></li>
			<li><a href="carburant.php">Calcul Consomation Carburant</a></li>
		</ul>
	</li>
</ul>
<body><br></br>
<h1>Calculant le volume d'un sphère</h1>
<div class="div1">
<form method="POST">
             4/3 x π xRayon( 
			<td><input type="text" name="rayon" /></td>)
³
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['rayon']))
			{
				echo "<input type=\"text\" value=\"".round(($_POST['rayon']*$_POST['rayon']*$_POST['rayon'])*(4/3)*3.14)."\"/>";
			}
			?>
			

<p>Indiquez la longueur du rayon pour avoir le volume de la sphère.</p>
<h2>Comment calculer le volume d'une sphère</h2>
<p>Le volume d'une sphère est égal au cube du rayon (multiplié deux fois par lui-même) multiplié par π et par 4/3. (π vaut environ 3,14).<p><img src="images/sphere.png" align="right"><br>
<h3>Volume d'une sphère = 4/3 x π x (Rayon)³<br>

Volume d'une sphère = 4/3.π.r³</h3>
<h4>Exemple :</h4>
<p>Soit une sphère S de rayon r = 2 cm, on utilise π = 3,14<br>
Le volume de la sphère S = 4/3 x 3,14 x (2 cm)³<br>
Le volume de la sphère S = 33,49 cm³</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>

<h2>Propriétés de la sphère</h2>
<p>La sphère de centre O et de rayon r est l'ensemble des points de l'espace dont la distance à O est égale à r.<br>
Le rayon est un segment délimité par le centre et un point de la sphère.<br>
La longueur du rayon est la distance entre le centre de la sphère n'importe quel point de la sphère.<br>
Le diamètre est un segment de droite passant par le centre et limité par les points de la sphère.<br>
La longueur du diamètre est égale à la longueur du rayon multipliée par 2.<br>
Toute droite passant par le centre d'une sphère coupe celle-ci en deux points diamétralement opposés.<br>
La sphère est une surface de révolution; elle peut être engendrée par un demi-cercle tournant autour d'un axe.</p>

</form>
</div>
</body>
</html>