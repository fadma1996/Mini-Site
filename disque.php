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
			<li><a href="dosque.php">Aire d'un disque</a></li>
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
<h1>Calculant l'aire d'un disque</h1>
<div class="div1">
<form method="POST">
             π X rayon(
			<td><input type="text" name="rayon" />)2</td>
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['rayon']))
			{
				echo "<input type=\"text\" value=\"".round($_POST['rayon']*$_POST['rayon']*3.14)."\"/>";
			}
			?>
			

<p>Tapez la longueur du rayon pour avoir l'aire du disque.</p>
<h2>Comment calculer l'aire d'un disque</h2>
<p>L'aire d'un disque est égale à son rayon au carré multiplié par π (environ 3,14).<p>
<h3>Aire du disque = (Rayon)² x π = r².π</h3>
<h4>Exemple 1 :</h4>
<p>Soit un disque C de rayon r = 2 cm, on utilise π = 3,14<img src="images/cercle.png"><br>
L'aire du disque C = (2 cm)² x 3,14<br>
L'aire du disque C = 12,56 cm²</p>
<h4>Exemple 2 :</h4>
<p>Soit un disque C de diamètre d = 6 cm, on utilise π = 3,14<br>
L'aire du disque C = (6 cm / 2)² x 3,14 (la longueur du rayon étant la moitié du diamètre)<br>
L'aire du disque C = 28,26 cm²</p>
<h4>Remarque :</h4>
<p>Le rayon est un segment délimité par le centre et un point du disque.</p><br>
<h2>Propriétés du disque:</h2>
<p>La longueur du rayon est la distance entre le centre du disque n'importe quel point du cercle.<br>
Le diamètre est un segment de droite passant par le centre et limité par les points du cercle.<br>
La longueur du diamètre est égale à la longueur du rayon multipliée par 2.<br>
π est le rapport entre le périmètre du disque qu'on appelle circonférence et son diamètre, sa valeur approximative est égale à 3,14159265358979323846.<br></p>
</form>
</div>
</body>
</html>