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
<h1>Calculant le volume d'un pyramide</h1>
<div class="div1">
<form method="POST">
             1/3xCôté( <td><input type="text" name="cote" /></td>)
²xHauteur<td><input type="text" name="haut" /></td>/2
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['cote']) && !empty($_POST['haut']))
			{
				echo "<input type=\"text\" value=\"".round(($_POST['cote']*$_POST['cote']*$_POST['haut'])*(1/2))."\"/>";
			}
			?>
			

<p><strong>*Le programme calcule le volume d'une pyramide de base carrée.</strong></p><br>
<p>Indiquer le longueur du côté de la base et celle de la hauteur pour avoir le volume.</p>
<h2>Comment calculer le volume d'une pyramide</h2>
<p>Dans le cas général, le volume d'une pyramide est égal à un tiers multiplié par l'aire de la base et par la hauteur.<p>
<h3>Volume de la pyramide = 1/3.A.h</h3><img src="images/pyramide.png" align="right">
<p><span style="color: green">A :</span> l'aire de la base</p><br>
<p><span style="color: green">h :</span> la hauteur de la pyramide</p><br>
<h4>Exemple :</h4>
<p>Soit une pyramide régulière de base carrée SABCD avec AB = 4 cm et h = 6 cm<br>
Le volume de la pyramide SABCD = 1/3 x 4 cm x 4 cm x 6 cm<br>
Le volume de la pyramide SABCD = 32 cm³</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>
<h4>Remarque : </h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.</p>
<h2>Propriétés d'une pyramide</h2>
<p>La pyramide est un solide formé en reliant une base polygonale à un point.<br>
La pyramide est dite régulière si sa base est un polygone régulier.<br>
Le sommet d'une pyramide est appelé Apex.<br>
La hauteur d'une pyramide est la distance entre l'apex et le plan de la base.</p>

</form>
</div>
</body>
</html>