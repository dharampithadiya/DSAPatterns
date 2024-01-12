<?php

$mat = [];
$n = 5;
$fect = 0;
for ($i=0; $i <= $n; $i++) { $fect += $i;}

for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $n-$i; $j++) { 
        echo $fect."&nbsp;&nbsp;";

        $mat[$i][$j] = $fect;

        if($i%2!=0){
            if($j==$n-$i-1){
                $fect = $fect-($j+1);
            }else{
                $fect++;
            }
        }else{
            if($j==$n-$i-1){
                $fect = $fect-$j;
            }else{
                $fect--;
            }
        }

    }
    echo '<br>';
}

echo "---------------------<br>";

for ($i=0; $i < $n; $i++) { 
    $temp = $i;
    $temp2 = 0;
    for ($j=0; $j <= $i; $j++) { 
        echo $mat[$temp][$temp2]."&nbsp;&nbsp;";
        $temp--;
        $temp2++;
    }
    echo "<br>";
}


/*

--  10  9   8   7       (7-3)
++  4   5   6           (6-(2+1))
--  3   2               (2-1)
++  1                   

--  15  14  13  12  11  (11-4)
++  7   8   9   10      (10-(3+1))
--  6   5   4           (4-2)
++  2   3               (3-(1+1))
--  1


[0,0]
[1,0]   [0,1]
[2,0]   [1,1]   [0,2]
[3,0]   [2,1]   [1,2]   [0,3]

*/