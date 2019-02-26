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
<h1>Calculant le Volume d'un cube</h1>
<div class="div1">
<form method="POST">
             Arête( 
			<td><input type="text" name="arete" /></td>)
³
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['arete']))
			{
				echo "<input type=\"text\" value=\"".round($_POST['arete']*$_POST['arete']*$_POST['arete'])."\"/>";
			}
			?>
			

<p>Tapez la longueur d'une arête pour avoir le volume d'un cube.</p>
<h2>Comment calculer le volume d'un cube</h2>
<p>Le volume d'un cube est égal à la longueur de l'une de ses arête au cube (multipliée deux fois par elle-même).<p>
<h3>Volume du cube = Arête x Arête x Arête = a³</h3>
<h4>Exemple :</h4>
<p>Soit un cube ABCDEFGH avec AB = 4 cm<br><img src="images/cube.png" align="right">
Le volume du cube ABCDEFGH = 4 cm x 4 cm x 4 cm<br>
Le volume du cube ABCDEFGH = 64 cm³</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>

<h2>Quelques propriétés du cube</h2>
<p>Le cube est un solide à six faces.<br>
Toutes les faces du cube sont carrées.<br>
Le cube est un prisme qui a 6 faces, 8 sommets et 12 arêtes.<br>
Les longueurs de toutes les arêtes du cube sont égales.<br>
Les faces opposées du cube sont parallèles.<br>
Les arêtes opposées du cube sont parallèles.<br>
Les angles du cube mesurent 90 degrés.<br>
Les faces du cube ont toutes une même surface.<br>
Le cube est un cas particulier du Parallélépipède rectangle ou pavé droit dont toutes les faces sont carrées.</p>
</form>

</div>
</body>
</html>