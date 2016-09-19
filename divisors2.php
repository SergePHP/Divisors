<?php

    $temp_dev = getSimpleMultiplicators(10543546542221);
    
    print_r($temp_dev);
    
        function getSimpleMultiplicators($num){
        static $multi = array();
        
	$topBorder = ceil(sqrt($num));
	
	if(empty($multi[0])) {
	    if(!($num % 2)) {
		$multi[]  = 2;
		$num = $num / 2;
	    }
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

