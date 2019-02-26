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
<h1>Calculant l'aire d'un triangle</h1>
<div class="div1">
<form method="POST">
             Base 
			<td><input type="text" name="base" /></td>x
			Hauteur<td><input type="text" name="haut" /></td>/2
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['base']) && !empty($_POST['haut']))
			{
				echo "<input type=\"text\" value=\"".round(($_POST['base']*$_POST['haut'])/2)."\"/>";
			}
			?>
			

<p>Indiquez la base et la hauteur puis cliquez sur égal (=) pour avoir l'aire du triangle.</p>
<h2>Comment calculer l'aire d'un triangle</h2>
<p>Pour calculer l'aire d'un triangle, on multiplie la mesure d'une base par celle de la hauteur correspondante et on divise par 2.<p>
<h3>Aire du triangle = Base x Hauteur / 2 = a.h / 2</h3><img src="images/triangle.png" align="right"><br>
<h4>Exemple :</h4>
<p>Soit un triangle quelconque ABC avec BC = 3cm et la hauteur AH = 4 cm<br>
L'aire du triangle ABC = (3 cm x 4 cm) / 2<br>
L'aire du triangle ABC = 6 cm²</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>
<h2>Autre formule pour calculer l'aire d'un triangle</h2>
<p>On peut calculer l'aire d'un triangle en connaissant les mesures de ses trois côtés.
Cette formule est très pratique dans la réalité si l'on veut calculer l'aire d'un triangle sans avoir comme donnée la hauteur ou si le triangle n'est pas particulier.<br></p>
<h3>Aire du triangle = </h3>
<img src="images/s-triangle.jpg"><br>
<p>Formule appelé aussi "FORMULE DE HERON" .</p>
<h2>Propriétés du triangle</h2>
<p>Le triangle est un polygone à trois côtés.<br>
Le sommet est le point de rencontre de deux côtés du triangle.<br>
Un seul sommet est associé à une seule base, il lui est opposé.<br>
Une seule hauteur est également associée à une seule base, elle est perpendiculaire à la base et passe par le sommet.<br>
La somme des mesures des angles d'un triangle est égale à 180 degrés.</p>

</form>
</div>
</body>
</html>