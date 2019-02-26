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
<body>
<br></br><h1>Calcule TVA 5.5%</h1>
<div class="div1">
<form method="POST">
			<h2>Calcul TVA 5.5% a partir de montant H.T. ou à partir du montant TTC</h2>
             Montant HT 
			<td><input type="text" name="ht" /></td><br>  TVA(5.5%) <td><input type="text" name="tva" /></td><br> 
			 Montant TTC <td><input type="text" name="ttc"  /></td><br><td><input type="submit" name="calcul" value="Calculer" /></td> <br>
			<?php
			if( isset($_POST['ht']) && !empty($_POST['ht']))
			{
				$a=5.5/100;
				$b=$_POST['ht'];
				$c=$_POST['ht']*(1+$a);
				$d=$c-$b;
				echo " Montant HT <input type=\"text\" value=\"$b\"/> + TVA(5.5%) <input type=\"text\" value=\"$d\"/> = Montant TTC <input type=\"text\" value=\"$c\"/>";
			}
			else if (isset($_POST['ttc']) && !empty($_POST['ttc'])) {
				$a=5.5/100;
				$c=$_POST['ttc'];
				$b=$c/(1+$a);
				
				$d=$c-$b;
				echo " Montant HT <input type=\"text\" value=\"$b\"/> + TVA(5.5%) <input type=\"text\" value=\"$d\"/> = Montant TTC<input type=\"text\" value=\"$c\"/>";
			}
			else {
				
			}
			?>
			
</form>
<h4>Notre outil calcul TVA peut être utilisé de 3 manières :</h4>
<p>1 - Indiquez le montant TTC pour calculer le montant HT et la TVA 5.5% <br>
2 - Indiquez la TVA 5.5% pour calculer le montant HT et le montant TTC <br>
3 - Indiquez le montant HT pour calculer le montant TTC et la TVA 5.5%</p>
<h5>Comment calculer la tva au taux de 5.5% à partir du montant TTC</h5>
<p>Le montant H.T. est égal au montant TTC divisé par 1,055.<br>
La tva est la différence entre le montant TTC et le montant H.T.</p>
<h3>Montant H.T. = Montant TTC / 1,055<br>

Tva = Montant TTC - Montant H.T.</h3>
<h5>Exemple :</h5>
<p>Calculons le montant H.T. et la tva de 200 euros TTC :<br>
Le montant H.T. = 200 / 1,055 euros = 189,57 euros<br>
La tva = 200 - 189,57 euros = 10,43 euros</p>
</div>
</body>
</html>