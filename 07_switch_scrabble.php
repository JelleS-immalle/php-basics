<?php

$woord = "quotering";
$punten = 0;

for($i = 0; $i <strlen($woord); $i++){
	switch(strtoupper($woord[$i])){
		case "Q":
			$punten += 10;
			echo "Goedzo, je krijgt 10 punten!";
			echo "<br>";
			break;
		case "U":
			$punten += 4;
			echo "Goedzo, je krijgt 4 punten!";
			echo "<br>";
			break;
		case "O":
			$punten += 1;
			echo "Goedzo, je krijgt 1 punt!";
			echo "<br>";
			break;
		case "T":
			$punten += 2;
			echo "Goedzo, je krijgt 2 punten!";
			echo "<br>";
			break;
		case "E":
			$punten += 1;
			echo "Goedzo, je krijgt 1 punt!";
			echo "<br>";
			break;
		case "R":
			$punten += 2;
			echo "Goedzo, je krijgt 2 punten!";
			echo "<br>";
			break;
		case "I":
			$punten += 1;
			echo "Goedzo, je krijgt 1 punt!";
			echo "<br>";
			break;
		case "N":
			$punten += 1;
			echo "Goedzo, je krijgt 1 punt!";
			echo "<br>";
			break;
	}
}

echo "<br>";
echo "Je hebt in totaal: $punten punten.";
echo "<br>";
// gebruik een switch-case-statement binnen een for-loop om
// te itereren over een woord en de Scrabble-punten ervan te berekenen

// Q 10 punten
// U 4 punten
// O 1 punt
// T 2 punten
// E 1 punt
// R 2 punten
// I 1 punt
// N 1 punt


?>
