<?php

class Divisors{

	private $divisors, $m;
	private $simpleMultiplicatorsList, $simpleNumberList;

	function __construct($m){
	    $this->m = $m;
	    $this->getSimple((ceil(sqrt($this->m)) - 1)/2);
	}

	public function getDevisors(){
	    $this->getSimpleMultiplicators($this->m);
	    $this->defineDivisors();
            return $this->divisors;
	}
	private function defineDivisors(){
	    $this->divisors[] = 1;
 	    $i = count($this->simpleMultiplicatorsList);
 
            for($j = 0; $j < $i; $j++){
                
	    }
            sort($this->divisors);
	}
        private function getSimpleMultiplicators($num){
	    $topBorder = count($this->simpleNumberList);

	    $flag = true;
	    for($i = 0; $i < $topBorder && $flag; $i++){
		if($num % $this->simpleNumberList[$i]) { continue; }
		else {
		    $this->simpleMultiplicatorsList[]  = $this->simpleNumberList[$i];
		    $flag = false;
		    self::getSimpleMultiplicators($num / $this->simpleNumberList[$i]);
		}
	    }
	    if ($flag) {
		if ($num !== 1) {
		$this->simpleMultiplicatorsList[] = $num;
		}
	    }
	}
	private function getSimple($lenght){

	    // Sundarama method
	    
	    $orig = [];
	    $forDelete = [];

	    for ($a = 1; $a <= $lenght; $a++){
		$orig[] = $a;
	    }
	    for ($i = 1, $j = 1, $t = $i + $j + (2 * $i * $j); $t <= $lenght; 
		$i++, $j = $i, $t = $i + $j + (2 * $i * $j)){
		for (; $t <= $lenght; $j++, $t = $i + $j + (2 * $i * $j)){
			$forDelete[] = $t;
		}
	    }
	    $almostRes = array_diff($orig, $forDelete);
	    foreach ($almostRes as $v){
		$result[] = $v * 2 + 1;
	    }
	    $result[] = 2;
	    sort($result);
	    $this->simpleNumberList = $result;
	}
}

?>