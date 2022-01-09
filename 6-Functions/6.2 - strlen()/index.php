<?php

function mijnNaamIsGroot(){
    $voorNaam = "Timothy";
    $tussenvoegsel = "van den";
    $achterNaam = "Beitel";
    $geheleNaam = $voorNaam . " " . $tussenvoegsel . " " . $achterNaam;
    $geheleNaam = strtoupper("Mijn naam is $geheleNaam");
    echo $geheleNaam;
    
}
mijnNaamIsGroot();