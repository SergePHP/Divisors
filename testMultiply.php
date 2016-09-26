<?php

    $sml = [2,3,4];
    echo combination(count($sml));
    exit;
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
    function factorial($var){
        if (!$var) {$var = 1;}
        return array_product(range(1, $var));
    }
    function combination($n){
        $c = 0;
        $nf = factorial($n);
        for($m = $n; $m >= 2 ; $m--){
            $c += $nf/(factorial($n - $m)*factorial($m));
        }
        return $c;
    }




//    sort($divisors);
//    print_r($divisors);


?>