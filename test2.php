<?php

$mat    = [];
$n      = 7;
$fect   = 19;
$flag   = false;

for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $n - $i; $j++) { 
        if($i%2==0){
            // echo "($i, $j) $fect &nbsp | &nbsp";
            // echo "$fect &nbsp | &nbsp";
            
            $mat[$i][$j] = $fect;
            $fect--;
        }else{
            if(($flag && $j==0) || (!$flag && $j==$n-$i-1)){
                // echo "$fect &nbsp | &nbsp";
                $mat[$i][$j] = $fect;
                $fect--;
            }else{
                // echo "* &nbsp | &nbsp";
                $mat[$i][$j] = "&nbsp&nbsp";
            }
        }
    }
    if($i%2!=0){
        // var_dump($flag);
        $flag = !$flag;
    }
    // echo "<br>";
}

echo '<pre>';
print_r($mat);
// die;

for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j <= $i; $j++) { 
        // echo "[$j,".$i-$j."]";
        echo $mat[$j][$i-$j]."&nbsp|&nbsp";
    }
    echo "<br>";
}

/* 

[0,0]
[0,1]   [1,1]   
[0,2]   [1,2]
[0,3]   [1,3]
[0,4]   [1,4]
[0,5]   [1,5]

*/

// -   +   -   +   -   +
// 15
// 14  *
// 13  *   5
// 12  *   6   4
// 11  *   7   *   3
// 10  9   8   *   2   1

//         0   1   2   3   4   5   6       
// --  0   19  18  17  16  15  14  13      (19-7)
// --  1   12                              (12-1)
// --  2   11  10  9   8   7               (11-5)
// --  3   *   *   *   6                   (6-4)
// --  4   3   4   5