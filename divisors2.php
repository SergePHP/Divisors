<?php

    $temp_dev = getSimpleMultiplicators(8);
    
    print_r($temp_dev);
    
        function getSimpleMultiplicators($num){
        static $multi = array();
        
	$topBorder = ceil(sqrt($num));
	
	while(!($num % 2)) {
		$multi[]  = 2;
		$num = $num / 2;
	}
	$flag = true;
	for($i = 3; $i <= $topBorder and ($flag); $i += 2){
	    if($num % $i) {
                continue;
            }
	    else {
		$multi[]  = $i;
		$flag = false;
		getSimpleMultiplicators($num / $i);
	    }
	}
	if ($flag) {
            $multi[] = $num;
        }
            return $multi;
}

