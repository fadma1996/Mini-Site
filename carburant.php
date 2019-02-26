<?php
if (isset($_POST['calculer'])) {
	if (isset($_POST['letre']) && isset($_POST['km'])) {
		$l=$_POST['letre'];
		$km=$_POST['km'];
		$carb=($l*100)/$km;
	}
}
?>
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
<body>
	<br></br><h1>Calculant La consomation Carburant</h1>
	<div class="div1">
		<form method="POST" action="#">
			<h2>Calculateur de consommation moyenne de carburant voiture ( litre par 100km)</h2>
			Taille de réservoir (en L) :<span style="padding-left:225px"><input type="text" name="letre"><br>
			Nombre de km parcourus depuis le dernier plein (en km) :<input type="text" name="km"><br>
			<span style="padding-left:450px"><input type="submit" name="calculer" value="Calculer"><br>
			Consommation de carburant aux 100km (en L/100 km) : <span style="padding-left:15px"><input type="text" name="carburant" value="<?php if (isset($carb)) {
				echo $carb;
			} ?>"><br>
			<strong>Comment utiliser cet outil ?</strong><br>
			<p>Saisissez la taille en litres de votre réservoir ainsi que la distance parcourue en kilométre aprés avoir mis le plein puis cliquer sur Calculer et vous aurez le pourcentage de consommation de votre véhicule au 1L par 100KM.</p>
			<h4>Exemple d'utilisation :</h4>
			<p>Si votre réservoir supporte 50 litres . et vous avez parcouru 800 km avec ce plein .<br>

La consommation moyenne de votre véhicule est donc : 6,25 litre par 100 km .</p>
			
		</form>
	</div>
</body>
</html>