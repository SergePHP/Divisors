<?php
    
    $lenght = 50;
    
    $orig = [];
    $forDelete = [];
    
    for ($a = 1; $a < $lenght; $a++){
	$orig[] = $a;
    }
    for ($i = 1, $j = 1, $t = $i + $j + (2 * $i * $j); $t <= $lenght; 
	$i++, $j = $i, $t = $i + $j + (2 * $i * $j)){
	for (; $t <= $lenght; $j++, $t = $i + $j + (2 * $i * $j)){
		$forDelete[] = $t;
	}
    }
    
    
    
    
//    for ($x = 0, $t = $i[$x] + $i[$x] + 2 * $i[$x] * $i[$x]; $t <= $lenght; 
//	$x++, $t = $i[$x] + $i[$x] + 2 * $i[$x] * $i[$x]){
//	for ($y = $i[$x], $q = $i[$x] + $y + 2 * $i[$x] * $y; $q <= $lenght; 
//	    $y++, $q = $i[$x] + $y + 2 * $i[$x] * $y){
//		$j[] = $q;
//	}
//    }
    $r = array_diff($orig, $forDelete);
    foreach ($r as $v){
	$result[] = $v * 2 + 1;
    }
    var_dump($result);
    
?>