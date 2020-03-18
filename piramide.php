<?php

$piramide = readline("hoeveel lagen wil je hebben?");
$a = " ";
$b = " * ";
$c = $a.$b;


for ($i = 1; $i <= $piramide; $i++) {
    for ($j = $i; $j <= 5; $j++) {
        
    }
    for ($j = 1; $j <= $i; $j++) {
        echo " $c ";
    }
  echo "\n";
}