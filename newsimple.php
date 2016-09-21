<?php
    
    $lenght = 50;
    
    $i = [];
    $j = [];
    
    for ($a = 1; $a <= $lenght; $a++){
	$i[] = $a;
    }

    for ($x = 0, $t = $i[$x] + $i[$x] + 2 * $i[$x] * $i[$x]; $t <= $lenght; 
	$x++, $t = $i[$x] + $i[$x] + 2 * $i[$x] * $i[$x]){
	for ($y = $i[$x], $q = $i[$x] + $y + 2 * $i[$x] * $y; $q <= $lenght; 
	    $y++, $q = $i[$x] + $y + 2 * $i[$x] * $y){
		$j[] = $q;
	}
    }
    $r = array_diff($i, $j);
    foreach ($r as $v){
	$result[] = $v * 2 + 1;
    }
    var_dump($result);
    
?>