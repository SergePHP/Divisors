<?php

class Devisors{

    public $temp_dev;
    private $n, $s_multi;

	function __construct($n) {
	    $this->n = $n;
	}
	public function getDevisors(){
	    $this->getSimpleMultiplicators($this->n);
	}
        private function getSimpleMultiplicators($num){

	$topBorder = ceil(sqrt($num));

	while(!($num % 2)) {
		$this->s_multi[]  = 2;
		$num = $num / 2;
	}
	$flag = true;
	for($i = 3; $i <= $topBorder and ($flag); $i += 2){
	    if($num % $i) {
                continue;
            }
	    else {
		$this->s_multi[]  = $i;
		$flag = false;
		self::getSimpleMultiplicators($num / $i);
	    }
	}
	if ($flag) {
            $this->s_multi[] = $num;
        }
    }
}

?>