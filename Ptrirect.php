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
<h1>Calculant le périmètre d'un triangle rectangle</h1>
<div class="div1">
<form method="POST">
             Côté a 
			<td><input type="text" name="cotea" /></td>+
			Côté b<td><input type="text" name="coteb" /></td>+Côté c<td><input type="text" name="cotec" /></td>
			<td><input type="submit" name="egual" value="="/></td>
			<?php
			if(!empty($_POST['cotec']) && !empty($_POST['coteb']) && !empty($_POST['cotea']))
			{
				echo "<input type=\"text\" value=\"".round($_POST['cotec']+$_POST['cotea']+$_POST['coteb'])."\"/>";
			}
			?>
			

<p>Indiquez les mesures des trois côtés du triangle rectangle puis cliquez sur égal (=) pour avoir le périmètre.</p>
<h2>Comment calculer le périmètre d'un triangle rectangle</h2>
<p>Le périmètre d'un triangle rectangle est égal à la somme de mesures de ses côtés.<p>
<h3>Périmètre du triangle rectangle = Somme des côtés<br><img src="images/triangle-rectangle.png" align="right">

Périmètre du triangle rectangle = a + b + c</h3>
<p><strong>On peut calculer le périmètre d'un triangle rectangle en connaissant seulement les mesures de deux côtés :</strong>On calcule le troisième côté en utilisant le Théorème de Pythagore a² = b² + c² puis on fait la somme des trois côtés pour calculer le périmètre.</p>
<h4>Exemple :</h4>
<p>Soit un triangle ABC, rectangle en A, avec AB = 3 cm et AC = 4 cm<br>
D'après le Théorème de Pythagore : BC² = AB² + AC² = 9 + 16 = 25. Soit : BC = 5 cm<br>
Le périmètre du triangle ABC = 3 cm + 5 cm + 4 cm<br>
Le périmètre du triangle ABC = 12 cm</p>

<h4>Remarque :</h4>
<p>Toutes les mesures doivent être exprimées dans la même unité de longueur.<br>

<h2>Propriétés du triangle rectangle</h2>
<p>Un triangle rectangle est un triangle qui possède un angle droit.<br>
Le côté opposé à l'angle droit, nommé hypoténuse,est le côté le plus grand du triangle rectangle.<br>
Le Théorème de Pythagore dit que le carré de l'hypoténuse est égal à la somme des carrés des deux autres côtés. Soit a² = b² + c².</p>
</form>

</div>
</body>
</html>