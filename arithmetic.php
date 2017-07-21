<?php

function add($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    }
   return error();
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;    
    }
    return error();
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    }
    return error();
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    }
    return error();
}

function error() {
    return "Error: input(s) not numeric!";
}

// Add code to test your functions here

for ($i = 0; $i < 4; $i++){
    $a = [0, "5", 4, 6];
    $b = [6, 4, "Bob", null];

    echo "Test " . ($i + 1) . ": " . PHP_EOL . "-------" . PHP_EOL .
        $a[$i] . " + " . $b[$i]. " = " . add($a[$i], $b[$i]) . PHP_EOL .
        $a[$i] . " - " . $b[$i] . " = " . subtract($a[$i], $b[$i]) . PHP_EOL .
        $a[$i] . " * " . $b[$i] . " = " . multiply($a[$i], $b[$i]) . PHP_EOL .
        $a[$i] . " / " . $b[$i] . " = " . divide($a[$i], $b[$i]) . PHP_EOL;
}       