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
<h1>Calculant l'aire d'un parallélogramme</h1>
<div class="div1">
<form method="POST">
             Base 
			<td><input type="text" name="base" /></td>x
			Hauteur<td><input type="text" name="haut" /></td>
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['base']) && !empty($_POST['haut']))
			{
				echo "<input type=\"text\" value=\"".round(($_POST['base']*$_POST['haut']))."\"/>";
			}
			?>
			

<p>Indiquez la mesure de la base et celle de la hauteur corespondante puis cliquez sur égal (=) pour avoir l'aire du parallélogramme.</p>
<h2>Comment calculer l'aire d'un parallélogramme</h2>
<p>Pour calculer l'aire d'un parallélogramme, on multiplie la mesure de la base par celle la hauteur correspondante.<p>
<h3>Aire du parallélogramme = Base x Hauteur<br>

Aire du parallélogramme = a.h</h3>
<h4>Exemple :</h4>
<p>Soit un parallélogramme ABCD avec AB = 7 cm et la hauteur h = 4 cm<img src="images/parallelogramme.png"><br>
L'aire du parallélogramme ABCD = 7 cm x 4 cm<br>
L'aire du parallélogramme ABCD = 28 cm²<br></p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>

<h2>Propriétés du parallélogramme</h2>
<p>Le parallélogramme est un quadrilatère (polygone qui a quatre côtés).<br>
Les côtés opposés du parallélogramme ont la même longueur.<br>
Les côtés opposés du parallélogramme sont parallèles.<br>
Les angles opposés du parallélogramme ont la même mesure.<br>
Les angles consécutifs du parallélogramme (les angles qui se suivent) sont supplémentaires, c'est à dire que la somme des mesures des deux angles est égale à 180 degrés.<br>
Les diagonales du parallélogramme sont de longueurs égales et se coupent en leur milieu.</p>

</form>
</div>
</body>
</html>