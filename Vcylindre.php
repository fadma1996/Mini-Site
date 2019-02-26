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
<h1>Calculant le Volume d'un cylindre</h1>
<div class="div1">
<form method="POST">
             πx Rayon
			<td><input type="text" name="rayon" /></td>)
²xHauteur
			<td><input type="text" name="haut" /></td>
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['rayon']) && !empty($_POST['haut']))
			{
				echo "<input type=\"text\" value=\"".round(($_POST['rayon']*$_POST['rayon']*$_POST['haut']))."\"/>";
			}
			?>
			

<p>Indiquer la longueur du rayon et celle de la hauteur pour avoir le volume du cylindre.</p>
<h2>Comment calculer le volume du cylindre</h2><img src="images/cylindre.png" align="right">
<p>Le volume d'un cylindre est égal à π (environ 3,14) multiplié, par le rayon de la base au carré et par la hauteur.<p>
<h3>Volume du cylindre = π x (Rayon)² x h = π.r².h</h3>

<h4>Exemple :</h4>
<p>Soit un cylindre C de rayon r = 2 cm et de hauteur h = 10 cm, on utilise π = 3,14<br>
Le volume du cylindre C = 3,14 x (2 cm)² x 10 cm<br>
Le volume du cylindre C = 125,6 cm³</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>

<h2>Propriétés du cylindre</h2>
<p>Le cylindre est un solide qui a 2 bases superposables et parallèles en forme de disque.<br>
Le cylindre droit est un solide de révolution engendré par un rectangle.<br>
La hauteur du cylindre est la distance entre ses deux bases.<br>
Tous les segments de la surface latérale d'un cylindre droit sont perpendiculaires aux deux bases.<br>
La droite passant par les centres des bases d'un cylindre droit est perpendiculaire aux bases et est appelée axe du cylindre.<br>
Tous les segments de la surface latérale d'un cylindre droit sont perpendiculaires aux deux bases.</p>

</form>
</div>
</body>
</html>