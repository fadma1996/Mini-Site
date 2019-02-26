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
<h1>Calculant le périmètre d'un losange</h1>
<div class="div1">
<form method="POST">
             4xCôté
			<td><input type="text" name="cote" /></td>x
			
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['cote']))
			{
				echo "<input type=\"text\" value=\"".round($_POST['cote']*4)."\"/>";
			}
			?>
			

<p>Indiquez la longueur d'un côté pour avoir le périmètre du losange.</p>
<h2>Comment calculer le périmètre d'un losange</h2>
<p>Pour calculer le périmètre d'un losange, on multiplie la mesure de l'un de ses côtés par quatre.<p>
<h3>Périmètre du losange = 4 x Côté = 4a</h3><img src="images/losange.png" align="right">
<h4>Exemple :</h4>
<p>Soit un losange ABCD avec AB = 6 cm<br>
Le périmètre du losange ABCD = 4 x 6 cm<br>
Le périmètre du losange ABCD = 24 cm</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>

<h2>Propriétés du losange</h2>
<p>Le losange est un polygone à quatre côtés : un quadrilatère.<br>
Les côtés du losange ont la même longueur.<br>
Le losange a des côtés opposés parallèles.<br>
Les diagonales du losange sont perpendiculaires et se coupent en leurs milieux.<br>
Le losange a des angles opposés égaux.<br>
Le losange a des angles consécutifs supplémentaires (la somme de leurs mesures est égale à 180 degrés).</p>
</form>

</div>
</body>
</html>