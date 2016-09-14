<?php
// Devisors test from here: https://www.codewars.com/kata/55aa075506463dac6600010d
require_once __DIR__.'/form.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'
        and !empty($_POST['from'])
            and !empty($_POST['to'])){
                require_once __DIR__.'/divisors.php';
}


?>