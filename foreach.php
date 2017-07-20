<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $thing) {
    $type = gettype($thing);
    if ($type === "NULL") {
        $thing = "null";
    }
    if ($type == "boolean") {
        $thing = intval($thing);
        if ($thing == 1) {
            $thing = "true";
        } else { 
            $thing = "false";
        }
    }
    echo $thing . " is $type" . PHP_EOL;
}