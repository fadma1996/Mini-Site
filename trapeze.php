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
<h1>Calculant l'aire d'un trapèze</h1>
<div class="div1">
<form method="POST">
            ( Base a
			<td><input type="text" name="basea" /></td>+
			Base b<td><input type="text" name="baseb" /></td>)xHauteur
			<td><input type="text" name="haut" /></td>/2
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['basea']) && !empty($_POST['haut']) && !empty($_POST['baseb']))
			{
				echo "<input type=\"text\" value=\"".round(($_POST['basea']+$_POST['baseb'])*(($_POST['haut'])/2))."\"/>";
			}
			?>
			

<p>Indiquez les mesures des deux bases et la hauteur puis cliquez sur égal (=) pour avoir l'aire du trapèze.</p>
<h2>Comment calculer l'aire d'un trapèze</h2>
<p>Pour calculer l'aire d'un trapèze, on multiplie la somme de ses deux bases par la hauteur puis on divise par 2.<p>
<h3>Aire du trapèze = (a+b).h/2<br>

Aire du trapèze = (Petite base + Grande base) x Hauteur / 2<br>
</h3>
<h4>Exemple :</h4>
<p>Soit un trapèze ABCD avec AB = a = 4 cm, CD = b = 6 cm et la hauteur h = 5 cm<img src="images/trapeze.png"><br>
Aire du trapèze ABCD = (4 cm + 6 cm) x 5 cm / 2<br>
Aire du trapèze ABCD = 25 cm²<br></p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>

<h2>Propriétés du trapèze</h2>
<p>Le trapèze est un quadrilatère (polygone qui a quatre côtés).<br>
Le trapèze a deux côtés opposés parallèles. Ces côtés constituent les deux bases du trapèze.</p>
</form>

</div>
</body>
</html>