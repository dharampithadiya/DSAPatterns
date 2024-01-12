<?php

$n = 5;

for ($i=0; $i <= $n; $i++) { 
    for ($s=0; $s < $n-$i; $s++) { 
        echo "&nbsp;&nbsp";
    }

    for ($j=0; $j <= $i; $j++) { 
        echo "*&nbsp;&nbsp;";
    }

    echo "</br>";
}