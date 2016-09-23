<?php


    $sml = [2,3,7];
    $divisors = [];
    $i = count($sml)-1;

    
    
    for($j = 0; $j <= $i; $j++){
        
        for($m = $j + 1; $m <= $i; $m++){
            $divisors[] = $sml[$j]*$sml[$m];
        }
        for($m = $j + 1; $m <= $i; $m++){
            for($k = $m + 1; $k <= $i; $k++){
                $temp = 1;
                for($n = $j; $n <= $m; $n++){
                        $temp *= $sml[$n];
                }
                $divisors[] = $temp * $sml[$k];
            }
         }
    }
    
    
//    sort($divisors);
    print_r($divisors);


?>