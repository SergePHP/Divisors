<?php
    $sml = [2,3,4,5,6];
    echo cComb(count($sml)).'<br>';
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
        } if ($lenghtOfarray <= 2) {continue;}
        
        for($newIndex = $mainIndex + 2; $newIndex <= $lenghtOfarray; $newIndex++){
            for($secondIndex = $newIndex; $secondIndex <= $lenghtOfarray; $secondIndex++, $c++){
//                echo $c.': '.$sml[$mainIndex];
//                    $i = $newIndex;                
//                    do {
//                    echo $sml[$i];
//                    $i++;
//                } while ($i <= $secondIndex);
//                echo "<br>";
                $i = $newIndex; 
                echo $c.': '.$sml[$mainIndex]; 
                while ($i <= $secondIndex){
                    echo $sml[$i];
                    $i++;
                }
                echo "<br>";
            }
        }
    }
    
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