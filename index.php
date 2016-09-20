<?php
// Devisors test from here: https://www.codewars.com/kata/55aa075506463dac6600010d

require('divisors.php');

$a = new Devisors();
$a->setNumber(81);
$a->getDevisors();
var_dump($a);
exit;

require_once __DIR__.'/form.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'
        and !empty($_POST['from'])
            and !empty($_POST['to'])){
                require_once __DIR__.'/divisors.php';
}


?>