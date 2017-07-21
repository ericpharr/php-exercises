<?php

$result = 0;

$testArray = [2, 1, -5, "bob"];

foreach($testArray as $element){
    if (is_numeric($element)){
        if ($element < 0){
            if ($element % 2 == 0){
                $result *= -$element;
            } else {
                $result += -$element;
            }
        } else {
            if ($element % 2 == 0){
                $result *= $element;
            } else {
                $result += $element;
            }
        }
    }
}
echo $result . PHP_EOL;