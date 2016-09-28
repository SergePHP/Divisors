<?php

    $sml = [2,3,4,5,6];
    echo combination(count($sml)).'<br>';
//    exit;
    $divisors = [];
    $lenghtOfarray = count($sml)-1;
    $c = 1;
    for($mainIndex = 0; $mainIndex <= $lenghtOfarray; $mainIndex++){
        for($secondIndex = $mainIndex + 1; $secondIndex <= $lenghtOfarray; $secondIndex++, $c++){
            echo $c.': '.$sml[$mainIndex].$sml[$secondIndex]."<br>";
        }
        for($secondIndex = $mainIndex + 1; $secondIndex <= $lenghtOfarray; $secondIndex++){
            for($thirdIndex = $secondIndex + 1; $thirdIndex <= $lenghtOfarray; $thirdIndex++, $c++){
                echo $c.': ';
                for($i = $mainIndex; $i <= $secondIndex; $i++){
                    echo $sml[$i];
                }
                echo $sml[$thirdIndex]."<br>";
            }
        }
        for($secondIndex = $mainIndex + 2; $secondIndex <= $lenghtOfarray; $secondIndex++){
            for($thirdIndex = $secondIndex + 1; $thirdIndex <= $lenghtOfarray; $thirdIndex++, $c++){
                echo $c.': ';
                for($i = $mainIndex; $i <= $secondIndex; $i++){
                    if($i == ($secondIndex-1)) {continue;}
                    echo $sml[$i];
                }
                echo $sml[$thirdIndex]."<br>";
            }
        }
        
    }
    
    
    
//    $i = count($sml)-1;

//    for($j = 0; $j <= $i; $j++){
//        
//        for($m = $j + 1; $m <= $i; $m++){
//            echo $sml[$j].$sml[$m]."<br>";
//        }
//        for($m = $j + 1; $m <= $i; $m++){
//            for($k = $m + 1; $k <= $i; $k++){
//                for($n = $j; $n <= $m; $n++){
//                        echo $sml[$n];
//                }
//                echo $sml[$k]."<br>";
//            }
//         }
//    }
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