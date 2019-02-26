<html>
<link href='css/style.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a>Calcule d'Aire</a>
		<ul>
			<li><a href="carre.php">Aire d'un carre</a></li>
			<li><a href="cercle.php">Aire d'un cercle</a></li>
			<li><a href="rectangle.php">Aire d'un rectangle</a></li>
			<li><a href="triangle.php">Aire d'un triangle</a></li>
			<li><a href="trirect.php">Aire d'un triangle rectangle</a></li>
			<li><a href="triequila.php">Aire d'un triangle equilateral</a></li>
			<li><a href="losange.php">Aire d'un losange</a></li>
			<li><a href="parall.php">Aire d'un parallélogramme</a></li>
			<li><a href="trapeze.php">Aire d'un trapeze</a></li>
			<li><a href="disque.php">Aire d'un disque</a></li>
			<li><a href="cube.php">Aire d'un cube</a></li>
			<li><a href="sphene.php">Aire d'une sphene</a></li>
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
<h1>Calculant l'aire d'un triangle rectangle</h1>
<div class="div1">
<form method="POST">
             Côté b 
			<td><input type="coteb" name="cotec" /></td>x
			Côté c<td><input type="text" name="haut" /></td>/2
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['coteb']) && !empty($_POST['cotec']))
			{
				echo "<input type=\"text\" value=\"".round(($_POST['coteb']*$_POST['cotec'])/2)."\"/>";
			}
			?>
			

<p>Indiquez les mesures des côtés adjacents à l'angle droit puis cliquez sur égal (=) pour avoir l'aire du triangle.</p>
<h2>Comment calculer l'aire d'un triangle rectangle</h2>
<p>Dans le cas d'un triangle rectangle, les côtés adjacents à l'angle droits constituent une base et sa hauteur.
Par conséquent, pour calculer l'aire d'un triangle rectangle, il faut multiplier les longueurs des deux côtés adjacents à l'angle droit et diviser le résultat par 2.<p>
<h3>Aire du triangle = Base x Hauteur / 2 = b.c / 2</h3><img src="images/triangle-rectangle.png" align="right">
<h4>Exemple :</h4>
<p>Soit un triangle rectangle ABC avec AB = 3 cm, AC = 4 cm et BÂC = 90°<br>
L'aire du triangle rectangle ABC = (3 cm x 4 cm) / 2<br>
L'aire du triangle rectangle ABC = 6 cm²</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité.<br>

<h2>Propriétés du triangle rectangle</h2>
<p>Un triangle rectangle est un triangle qui a un angle droit.<br>
Les deux autres angles du triangle rectangle hormis l'angle droit sont aigus puisqu'ils mesurent moins de 90 degrés chacun, et sont complémentaires, c'est-à-dire que leur somme est égale à 90 degrés vu que la somme des mesures des trois angles d'un triangle est égale à 180 degrés et que l'angle droit mesure 90 degrés.<br>
Les côtés adjacents à l'angle droits constituent une base et sa hauteur.<br>
Le côté opposé à l'angle droit est nommé hypoténuse. Il est le côté du triangle rectangle qui a la plus grande longueur.<br>
Le carré de l'hypoténuse est égal à la somme des carrés des deux autres côtés.<br>
Soit a² = b² + c², "Théorème de Pythagore"</p>
</form>

</div>
</body>
</html>