<?php


    $sml = [2,3,4,5];
    $divisors = [];
    $i = count($sml)-1;

    
    
    for($j = 0; $j <= $i; $j++){
        
        for($m = $j + 1; $m <= $i; $m++){
            echo $sml[$j].$sml[$m]."<br>";
        }
        for($m = $j + 1; $m <= $i; $m++){
            for($k = $m + 1; $k <= $i; $k++){
                for($n = $j; $n <= $m; $n++){
                        echo $sml[$n];
                }
                echo $sml[$k]."<br>";
            }
         }
    }
    
    
//    sort($divisors);
//    print_r($divisors);


?>