<?php
$array[20] = rand(1, 100);
$c = rand(1, 100);
$p = 0;
echo "<h1>ESERCIZIO 3:</h1>";
for ($i = 0; $i < 20; $i++) {
    $array[$i] = rand(1, 100);

    echo "$array[$i]</br>";
    if ($array[$i] > $c) {
        $p++;
    } else {
        $P++;
        $somma = $somma + $array[$i];
        $media = $somma / $P;
    }

    if ($array[$i] == $c) {
        $d++;
    }
}
echo "la x è : $c </br>";
echo "i numeri maggiori di $c sono $p</br>";
echo "la media dei numeri minori di $c è $media</br>";
echo "i numeri uguali a $c sono $d</br>";
?>