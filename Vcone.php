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
<h1>Calculant le volume d'un cône</h1>
<div class="div1">
<form method="POST">
             π/3xRayon( <td><input type="text" name="rayon" /></td>)
²xHauteur<td><input type="text" name="haut" /></td>
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['rayon']) && !empty($_POST['haut']))
			{
				echo "<input type=\"text\" value=\"".round(($_POST['rayon']*$_POST['rayon']*$_POST['haut'])*(3.14/3))."\"/>";
			}
			?>
			


<p>Indiquer la longueur du rayon de la base et celle de la hauteur pour avoir le volume du cône.</p>
<h2>Comment calculer le volume du cône</h2>
<p>Le volume d'un cône est égal à un tiers multiplié, par π, par le rayon de la base au carré et par la hauteur.<p>
<h3>Volume du cône = π/3 x (Rayon)² x h = π/3.r².h</h3><img src="images/cone.png" align="right">

<h4>Exemple :</h4>
<p>Soit un cône C de rayon r = 2 cm et de hauteur h = 10 cm,<br>
on utilise π = 3,14<br>
Le volume du cône C = 3,14/3 x (2 cm)² x 10 cm<br>
Le volume du cône C = 41,87 cm³</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>
<h4>Remarque : </h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.</p>
<h2>Propriétés du cône</h2>
<p>Un cône est un solide délimité par un une surface circulaire de centre 0, appelée base du cône cylindre, et par les segments d'extremités un sommet S et les points du cercle de la base.<br>
Un cône de révolution est engendré par la rotation d'un triangle rectangle autour d'un de ses côtés de l'angle droit. <br>L'hypoténuse de ce triangle est appelée la génératrice du cône.<br>
La hauteur du cône est la distance entre le sommet S et la base circulaire de centre 0.<br>
Dans le cas d'un cône droit (un cône de révolution), SO correspond à la hauteur.<br>
Dans le cas d'un cône droit (un cône de révolution), la droite passant par le sommet S et par O, le centre de la base, est perpendiculaire à la base et est appelée axe du cône.</p>

</form>
</div>
</body>
</html>