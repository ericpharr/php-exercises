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

function modulus($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    }
    return error();
}
// Add code to test your functions here

for ($i = 0; $i < 4; $i++){
    $a = [0, "5", 4, 6];
    $b = [6, 4, "Bob", null];

    echo "Test " . ($i + 1) . ": " . PHP_EOL . "-------" . PHP_EOL .
        $a[$i] . " + " . $b[$i]. " = " . add($a[$i], $b[$i]) . PHP_EOL .
        $a[$i] . " - " . $b[$i] . " = " . subtract($a[$i], $b[$i]) . PHP_EOL .
        $a[$i] . " * " . $b[$i] . " = " . multiply($a[$i], $b[$i]) . PHP_EOL .
        $a[$i] . " / " . $b[$i] . " = " . divide($a[$i], $b[$i]) . PHP_EOL .
        $a[$i] . " % " . $b[$i] . " = " . modulus($a[$i], $b[$i]) . PHP_EOL;
} 

// Download and save arithmetic.php to your exercises repository.
// Add and commit the file now. As you complete each step, commit your changes to the file. When you are done with this exercise, push your commits to GitHub.
// Fill in the // Add code here blocks to make each function echo the proper result.
// Add code after functions that calls each function with real numbers.
// Verify the output of each test.
// Add a function modulus that finds the modulus of 2 numbers.
// Add test code and verify the output of modulus.
// Create variables $a and $b at the top of your script and give them different values. 
// Watch what happens (or, does not happen) to your function output as you set and modify $a & $b outside of your functions. 
// Think carefully about how this behavior differs from the way JavaScript handles variables.      