<?php
$var =10;
$var1 = 6;
if($var < 10 && $var1 > 5){
    echo "het getal zit tussen de 10 en de 5 in" . "<br>";
}
else{
    echo "het getal is groter of kleiner dan tussen de 10 en 5" . "<br>";
}


if($var <10 || $var1 > 5){
    echo "beide waardes zijn goed" . "<br>";
}
else{
    echo"1 waarde of minder is goed" . "<br>'";
}


if($var <10 xor $var1 > 5){
    echo "1 van de twee waardes zijn goed" . "<br>";
}
else{
    echo "het is fout" . "<br>";
}


if($var <10 != $var1 > 5){
    echo "hoort hier '!=' te staan want het werkt anders niet. ik weet deze niet ";
}
else{
    echo "Weet deze niet" . "<br>";
}