<?php
function density($text)
{
	$text=strtolower($text);
	$punc= ". , : ; ' ? ! ( ) \" \\";
	$punc=explode(" ", $punc);
	foreach ($punc as $value) {
		$text= str_replace($value, " ", $text);
	}

	$xords_count =0;

	$words= explode(" ", $text);
	for ($i=0; $i<count($words) ; $i++) { 
		if (eregi("[0-9A-Za-zA]",$words[$i] )) {
			$words_count++;
		}
		$words_sum=$words_count;

		$commonWords="ich,du,er,sie,es,und,oder,aber,doch";
		$commonWords=strtolower($commonWords);
		$commonWords=explode(",", $commonWords);

		foreach ($words as $value) {
			$common=false;
			if (strlen($value)>3) {
				foreach ($commonWords as $key => $commonWord) {
					if ($commonWord==$value) {
						$common=true;
					}
					else{

					}
				}
				if ($common != true) {
					$keywords[]=$value;
				}
				else{

				}
			}
			echo "".$text."<br /><br />";
			echo "Text has ".$words_sum." words.<br />";

			$keywords = array_count_values($keywords);
			arsort($keywords);
			foreach ($keywords as $key => $value) {
				if ($value>3) {
					$percent=100/$words_sum*$value;
					echo "<p><strong>".ucfirst($key)."</strong> is used <strong>".$value."</strong> times, what is <strong>".$percent."</strong> %";

				}else
				{}
			}
		}
	}
}

$string="Rendre visibles les données dans la barre d’adresse du navigateur";
density($string);

?>