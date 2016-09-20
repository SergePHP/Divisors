<?php

class Devisors{

    public $divisors;
    private $n, $s_multi;

	public function setNumber($n){
	    $this->n = $n;
	}
	public function getDevisors(){
	    $this->getSimpleMultiplicators($this->n);
	    $this->defineDivisors();
	}
	private function defineDivisors(){
	    $this->divisors[] = 1;
	    $i = count($this->s_multi);	    
	    foreach ($this->s_multi as $item){
		$this->divisors[] = $item;
		for($j = 1; $j <= $i; $j++){
		    
		}
	    }


	}
        private function getSimpleMultiplicators($num){
	$topBorder = ceil(sqrt($num));
	while(!($num % 2)) {
		$this->s_multi[]  = 2;
		$num = $num / 2;
	}
	$flag = true;
	for($i = 3; $i <= $topBorder && $flag; $i += 2){
	    if($num % $i) { continue; }
	    else {
		$this->s_multi[]  = $i;
		$flag = false;
		self::getSimpleMultiplicators($num / $i);
	    }
	}
	if ($flag) {
	    if ($num !== 1) {
            $this->s_multi[] = $num;
	    }
        }
    }
}

?>