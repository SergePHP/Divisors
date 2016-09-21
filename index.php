<?php
// Devisors test from here: https://www.codewars.com/kata/55aa075506463dac6600010d

require('divisors.php');
require_once __DIR__.'/form.php';

function square($var){
    return ($var * $var);
}

if($_SERVER['REQUEST_METHOD'] === 'POST'
    and !empty($_POST['m'])
	and !empty($_POST['n'])){
	    $m = $_POST['m'] * 1;
	    $n = $_POST['n'] * 1;
	    if(($n - $m) < 0) exit;

	    $obj = new Divisors();
	    while($m <= $n){
		$obj->setNumber($m);
		$listOfSquaredDivisors = array_map('square', $obj->getDevisors());
		$sumOfSquaredDivisors = array_sum($listOfSquaredDivisors);
		$sqrtOfSum = sqrt($sumOfSquaredDivisors);
		if(!($sqrtOfSum - floor($sqrtOfSum))){
		    echo "<p>Number: ".$m."</p>";
		    echo "==> ".$sumOfSquaredDivisors." : Square root : "
			    .$sqrtOfSum."</br>";
		    echo "<pre>";
		    print_r($listOfSquaredDivisors);		    
		    echo "</pre>";
			 
		}
		$m++;
	    }
}
exit;
$a = new Devisors(42);
var_dump($a->getDevisors());
exit;

require_once __DIR__.'/form.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'
        and !empty($_POST['from'])
            and !empty($_POST['to'])){
                require_once __DIR__.'/divisors.php';
}


?>