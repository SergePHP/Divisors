<?php
    $sml = [2,3,4,5,6];
    $m = 3;
    echo cComb(count($sml)).'<br>';
    echo nmComb(sizeof($sml), $m);
////    exit;
//    $divisors = [];
//    $lenghtOfarray = count($sml)-1;
//    $c = 1;
//    $m = 2;
//    $cc = nmComb(sizeof($slm), $m);

    for ($mIndex = 0; ; $mIndex++){
        
    }
    
    
    
    
    
    
    
//    for($mainIndex = 0; $mainIndex <= $lenghtOfarray; $mainIndex++){
//        for($secondIndex = $mainIndex + 1; $secondIndex <= $lenghtOfarray; $secondIndex++, $c++){
//            echo $c.': '.$sml[$mainIndex].$sml[$secondIndex]."<br>";
//        }
//        for($secondIndex = $mainIndex + 1; $secondIndex <= $lenghtOfarray; $secondIndex++){
//            for($thirdIndex = $secondIndex + 1; $thirdIndex <= $lenghtOfarray; $thirdIndex++, $c++){
//                echo $c.': ';
//                for($i = $mainIndex; $i <= $secondIndex; $i++){
//                    echo $sml[$i];
//                }
//                echo $sml[$thirdIndex]."<br>";
//            }
//        }
//        for($secondIndex = $mainIndex + 1; $secondIndex <= $lenghtOfarray; $secondIndex++){
//            for($thirdIndex = $secondIndex + 1; $thirdIndex <= $lenghtOfarray; $thirdIndex++, $c++){
//                echo $c.': ';
//                for($i = $mainIndex; $i <= $secondIndex; $i++){
//                    if($i == $mainIndex || $i >= $secondIndex ) {
//                        echo $sml[$i];
//                    }
//                }
//                echo $sml[$thirdIndex]."<br>";
//            }
//        }
//
//    }
//    sort($divisors);
//    print_r($divisors);
    
    
    function factorial($var){
        if (!$var || $var === 1) {return 1;}
        return array_product(range(1, $var));
    }
    function nmComb($n, $m){
        return factorial($n)/(factorial($m)*factorial($n - $m));
    }
    function cComb($n){
        $c = 0;
        $nf = factorial($n);
        for($m = $n; $m >= 2 ; $m--){
            $c += $nf/(factorial($m)*factorial($n - $m));
        }
        return $c;
    }

?>