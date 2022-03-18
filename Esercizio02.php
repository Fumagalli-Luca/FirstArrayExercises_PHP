<?php
$array[20]= rand(1,15);

echo "<h1>ESERCIZIO 2:</h1>";
for($i=0;$i<20;$i++){
    $array[$i]= rand(1,15);
    if($array[$i]>$i)
    echo "$array[$i]</br>";
 
}
?>