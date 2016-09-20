<?php

class Devisors{

    private $divisors;
    private $n, $s_multi;

	public function setNumber($n){
	    $this->n = $n;
	}
	public function getDevisors(){
	    $this->getSimpleMultiplicators($this->n);
	    return $this->defineDivisors();
	}
	private function defineDivisors(){
	    $this->divisors[] = 1;
            $this->divisors[] = array_product($this->s_multi);
	    $i = count($this->s_multi)-1;
            for($j = 0; $j < $i; $j++){
                $item = array_shift($this->s_multi);
                if(!array_search($item, $this->divisors)){
                    $this->divisors[] = $item;
                    foreach ($this->s_multi as $var){
                        $multi = $item * $var;
                        if(!array_search($multi, $this->divisors)){
                        $this->divisors[] = $multi;
                        }
                    }
                }
	    }
            sort($this->divisors);
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