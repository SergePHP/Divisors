<?php
    $s = [2,3,4,5,6];
    echo cComb(count($s)).'<br>';
    $divisors = [];
    $lenghtOfarray = count($s)-1;
    $c = 1;

    for($mainIndex = 0; $mainIndex <= $lenghtOfarray; $mainIndex++){
//        for($secondIndex = $mainIndex + 1; $secondIndex <= $lenghtOfarray; $secondIndex++, $c++){
//            echo $c.': '.$s[$mainIndex].$s[$secondIndex]."<br>";
//        }
//        for($secondIndex = $mainIndex + 1; $secondIndex <= $lenghtOfarray; $secondIndex++){
//            for($thirdIndex = $secondIndex + 1; $thirdIndex <= $lenghtOfarray; $thirdIndex++, $c++){
//                echo $c.': ';
//                for($i = $mainIndex; $i <= $secondIndex; $i++){
//                    echo $s[$i];
//                }
//                echo $s[$thirdIndex]."<br>";
//            }
//        } 
        if ($lenghtOfarray <= 2) {continue;}
        
        for($secondIndex = $mainIndex + 2; $secondIndex <= $lenghtOfarray; $secondIndex++){
            for($thirdIndex = $secondIndex + 1, $leadIndex = $secondIndex + 1; $leadIndex <= $lenghtOfarray; $leadIndex++){
		echo $s[$mainIndex];

		echo $s[$secondIndex];
		echo $s[$leadIndex];

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