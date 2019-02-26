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
<h1>Calculant le périmètre d'un triangle</h1>
<div class="div1">
<form method="POST">
             Côté a 
			<td><input type="text" name="cotea" /></td>+
			Côté b<td><input type="text" name="coteb" /></td>+Côté c<td><input type="text" name="cotec" /></td>
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['cotec']) && !empty($_POST['coteb']) && !empty($_POST['cotea']))
			{
				echo "<input type=\"text\" value=\"".round($_POST['coteb']+$_POST['cotea']+$_POST['coteb'])."\"/>";
			}
			?>
			

<p>Indiquez les longueurs des côtés du triangle puis cliquez sur égal (=) pour avoir le périmètre.</p>
<h2>Comment calculer le périmètre d'un triangle</h2>
<p>Pour calculer le périmètre d'un triangle, on fait la somme des longueurs de ses trois côtés.<p>
<h3>Périmètre du triangle = Somme des côtés<br>

Périmètre du triangle = a + b + c</h3>
<h4>Exemple :</h4>
<p>Soit un triangle ABC avec AB = 6 cm, BC = 3 cm et AC = 4 cm<br>
Le périmètre du triangle ABC = 6 cm + 3 cm + 4 cm<br><img src="images/triangle.png" align="right">
Le périmètre du triangle ABC = 13 cm</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>

<h2>Propriétés du triangle</h2>
<p>Le triangle est un polygone à trois côtés.<br>
Le point de rencontre de deux côtés du triangle est appelé sommet.<br>
A chaque sommet est associée une base opposée.<br>
A chaque base est associée une hauteur perpendiculaire à cette base et passant par le sommet opposé.<br>
La sommes des mesures des angles d'un triangle vaut 180 degrés.</p>

</form>
</div>
</body>
</html>