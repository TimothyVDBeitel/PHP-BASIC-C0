<?php
$getallen= [676,5345,78657,3,46,21,47];
asort ($getallen);
print_r($getallen);

$laag_hoog = [3,21,46,47,676,5345,78657];
asort ($laag_hoog);
print_r($laag_hoog);
echo"</br>";
$getallen= [676,5345,78657,3,46,21,47];
arsort ($getallen);
print_r($getallen); 

$hoog_laag = [78657,5345,676,47,46,21,3];
arsort ($hoog_laag);
print_r($hoog_laag);

?>