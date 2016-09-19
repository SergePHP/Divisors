<?php

//$f = $_POST['from'] * 1;
//$t = $_POST['to']   * 1;
//if(($t - $f) < 0) exit;
//
//$sq = array(); // array of resulting numbers
//
//for ($j = 0; $f <= $t ; $f++){
//
    $temp_dev = array();
//    $temp_pow = array();
//    $temp_sum = 0;

    getDevisors(371);
    
//    for ($i = 1; $i <= $f; $i++){
//        if($f % $i) continue;
//        $temp_dev[] = $i;
//    }
//    foreach($temp_dev as $item){
//        $pow = $item**2;
//        $temp_pow[] = $pow;
//        $temp_sum += $pow;
//    }
//    $sqrt_num = sqrt($temp_sum);
//
//    if(!($sqrt_num - floor($sqrt_num))){
//        $sq[$j][0] = $f;
//        $sq[$j][1] = $temp_sum;
//        $sq[$j][2] = $temp_pow;
//        $j++;
//    }
//}
print_r($temp_dev);

    function getDevisors($num){
	$topBorder = ceil(sqrt($num));
	
	if(empty($GLOBALS['temp_dev'][0])) {
	    if(!($num % 2)) {
		$GLOBALS['temp_dev'][]  = 2;
		$num = $num / 2;
	    }
	}
	$flag = true;
	for($i = 3; $i <= $topBorder and ($flag); $i++, $i++){
	    if($num % $i) {continue;}
	    else {
		$GLOBALS['temp_dev'][]  = $i;
		$flag = false;
		getDevisors($num / $i);
	    }
	}
	if ($flag) {$GLOBALS['temp_dev'][] = $num;}
}