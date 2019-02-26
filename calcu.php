<html>
<?php
if(isset($_POST['envoi']))
{
function compute()
{
	$num1 = $_POST['pn'];
	$num2 = $_POST['dn'];
	
	switch($_POST['dropdown'])
	{
		case "Addition":
		$sum=$num1+$num2;
		return $sum;
		break;
		case "Soustraction":
		$sous=$num1-$num2;
		return $sous;
		break;
		case "Multiplication":
		$pro=$num1*$num2;
		return $pro;
		break;
		case "Division":
		$div=$num1/$num2;
		return $div;
		break;
		default:
		echo "<script language=javascript> alert('Invalid operation');</script>";
		echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="calcula.php" </SCRIPT>';
	}
}
echo "<h1>Le Resultat est : ".compute()."</h1";
}
if (isset($_POST['send'])) {
	

function calculer()
{
	$num1 = $_POST['nbr'];
	
	
	switch($_POST['drop'])
	{
		case "sin":
		$sum=sin($num1);
		return $sum;
		break;
		case "cos":
		$sous=cos($num1);
		return $sous;
		break;
		case "tan":
		$pro=tan($num1);
		return $pro;
		break;
		case "log":
		$div=log($num1);
		return $div;
		break;
		case "sqrt":
		$div=sqrt($num1);
		return $div;
		break;
		case "2":
		$div=$num1*$num1;
		return $div;
		break;
		case "3":
		$div=$num1*$num1*$num1;
		return $div;
		break;
		
		default:
		echo "<script language=javascript> alert('Invalid operation');</script>";
		echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="calcula.php" </SCRIPT>';
	}
}
echo "<h1>Le Resultat est : ".calculer()."</h1";
}
?>
<br></br><h2><a href="calcula.php">Retour</a></h2>
</html>