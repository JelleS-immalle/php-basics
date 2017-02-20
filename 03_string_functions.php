<?php

$zin = "Binnenkort is het weeral lente";

echo str_word_count("$zin");
// Print af hoeveel woorden $zin bevat.

$position = strpos ($zin, "lente");
echo "<br>";
$nieuweZin = substr_replace ( $zin, "zomer", $position);
echo $nieuweZin;
// Vervang in $zin "lente" door "zomer" en druk af.

?>
