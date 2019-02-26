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
<h1>Calculant l'aire d'un losange</h1>
<div class="div1">
<form method="POST">
             Diagonale
			<td><input type="text" name="dia" /></td>x
			Diagonale<td><input type="text" name="dia" /></td>/2
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['dia']) && !empty($_POST['dia']))
			{
				echo "<input type=\"text\" value=\"".round(($_POST['dia']*$_POST['dia'])/2)."\"/>";
			}
			?>
			

<p>Indiquez les mesures des diagonales puis cliquez sur égal (=) pour avoir l'aire du losange.</p>
<h2>Comment calculer l'aire d'un losange</h2>
<p>L'aire d'un losange est égale au produit de ses diagonales divisé par 2.<p>
<h3>Aire du losange = Produit des diagonales / 2

Aire du losange = d1.d2 / 2</h3>
<h4>Exemple :</h4>
<p>Soit un losange ABCD avec AC = 6 cm et BD = 3cm<img src="images/losange.png"><br>
L'aire du losange ABCD = 6 cm x 3 cm / 2<br>
L'aire du losange ABCD = 9 cm²</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>
<h2>Autre formule pour calculer l'aire d'un losange</h2>
<p>On peut calculer l'aire d'un losange en multipliant la longueur de l'un de ses côtés par la hauteur du losange.<br></p>
<h3>Aire du losange = Côté x Hauteur = a x h</h3>
<h4>Exemple :</h4>
<p>Soit un losange ABCD avec AB = 4 cm et la hauteur h = 4,5 cm<br>
L'aire du losange ABCD = 4 cm x 4,5 cm<br>
L'aire du losange ABCD = 18 cm²</p>
<h2>Propriétés du losange</h2>
<p>Le losange est un quadrilatère (polygone qui a 4 côtés).<br>
Les longueurs des quatre côtés du losange sont égales.<br>
Les côtés opposés du losange sont parallèles.<br>
Les diagonales du losange sont perpendiculaires et se coupent en leur milieu.<br>
Les mesures des angles opposés du losange sont égales.<br>
Les angles consécutifs (angles qui se suivent) du losange sont supplémentaires, 
c'est-à-dire que la somme des mesures des deux angles est égale à 180 degrés.</p>
</form>

</div>
</body>
</html>