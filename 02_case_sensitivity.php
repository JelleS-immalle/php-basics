<?php

$waarde = 3;
$Waarde = 8;

if($waarde == 3) {
    echo "Variable-names are case-sensitive";
} else if($waarde == 8) {
    echo "Variable-names are case-insensitive";
}

echo "<br>";
echo '$waarde';
echo "<br>";
echo "$waarde";
echo "<br>";

if($val == null) {
    echo "$val is not defined.";
}

echo "<br>";
//Onderstaande code print de variabele in de string ook af, ipv "$waarde" af te printen.
echo "De waarde van $waarde is ".$waarde;
//Terwijl met single quotes de waarde van de variabele niet wordt afgeprint.
echo "<br>";
echo 'De waarde van $waarde is '.$waarde;

// Print de string "De waarde van $waarde is 8." door maar 1 keer gebruik te maken v.d. concatentie-operator en de juiste soort quotes: single (') of double (").





?>
