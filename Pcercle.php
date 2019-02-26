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
<h1>Calculant le volume d'un cercle</h1>
<div class="div1">
<form method="POST">
             π x Diamètre(
			<td><input type="text" name="diametre" />)</td>
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['diametre']))
			{
				echo "<input type=\"text\" value=\"".round($_POST['diametre']*3.14)."\"/>";
			}
			?>
			

<p>Indiquez le diamètre pour avoir le périmètre du cercle.</p>
<h2>Comment calculer le périmètre d'un cercle</h2>
<p>Le périmètre d'un cercle est égal à son diamètre multiplié par π (environ 3,14).<p>
<h3>Périmètre du cercle = Diamètre x π = d.π</h3><img src="images/cercle.png" align="right">
<h4>Exemple :</h4>
<p>Soit un cercle C de diamètre d = 4 cm, on utilise π = 3,14<br>
Le périmètre du cercle C = 4 cm x 3,14<br>
Le périmètre du cercle C = 12,56 cm</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>
<h2>Propriétés du cercle:</h2>
<p>Le rayon est un segment d'extrémités le centre du cercle et un point quelconque de ce cercle.<br>
La longueur du rayon est la distance entre le centre du cercle et un point du cercle.<br>
Le diamètre est un segment de droite passant par le centre cercle et limité par les deux points d'intersection de cette droite avec le cercle.<br>
La longueur du diamètre est égale à 2 fois la longueur du rayon du cercle.<br>
π est le périmètre d'un cercle de diamètre égal à 1<br>
π vaut approximativement 3,14159265358979323846.<br></p>
</form>
</div>
</body>
</html>