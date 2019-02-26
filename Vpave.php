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
<h1>Calculant le volume du pavé droit</h1>
<div class="div1">
<form method="POST">
             Longueur
			<td><input type="text" name="long" /></td>xLargeur
			<td><input type="text" name="larg" /></td>xHauteur
			<td><input type="text" name="haut" /></td>
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['larg']) && !empty($_POST['haut']) && !empty($_POST['long']))
			{
				echo "<input type=\"text\" value=\"".round($_POST['long']*$_POST['haut']*$_POST['larg'])."\"/>";
			}
			?>
			

<p>Indiquez la longueur, la largeur et la hauteur puis cliquez sur égal (=) pour avoir le volume du pavé droit.</p>
<h2>Comment calculer le volume d'un pavé droit</h2><img src="images/pave.png" align="right">
<p>Pour calculer le volume d'un pavé droit, on multiplie la longueur par la largeur et par la hauteur qui correspond dans le cas du pavé droit à l'arête latérale.<p>
<h3>Volume du pavé droit = a.b.h<br>

Volume du pavé droit = Longueur x Largeur x Hauteur</h3>
<p>Il s'agit de l'aire latérale (sans les bases).
Pour calculer l'aire totale on ajoute l'aire des 2 bases soit 2π.r²</p>
<h4>Exemple :</h4>
<p>Soit un pavé droit ABCDEFGH avec AB = b = 8 cm, BC = a = 4 cm<br>
et la hauteur AE = h = 6 cm<br>
Volume du pavé droit ABCDEFGH = 8 cm x 4 cm x 6 cm<br>
Volume du pavé droit ABCDEFGH = 192 cm³</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>

<h2>Propriétés du pavé droit</h2>
<p>Le pavé droit est un solide à six faces.<br>
Toutes les faces du pavé droit sont des rectangles.<br>
Le pavé droit est un polyèdre qui a 6 faces, 8 sommets et 12 arêtes.<br>
Les faces adjacentes du pavé droit sont perpendiculaires les unes aux autres.<br>
Les longueurs des arêtes opposées du pavé droit sont égales.<br>
Les longueurs des arêtes opposées du pavé droit sont parallèles.<br>
Les faces opposées du pavé droit sont parallèles.<br>
Les angles du pavé droit mesurent 90 degrés.<br>
Les faces opposées du pavé droit ont une même surface.</p>

</form>
</div>
</body>
</html>